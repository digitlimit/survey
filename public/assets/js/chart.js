/**
 * Generate ID for element
 * @param length
 * @returns {string}
 */
let makeId  = (length) => {
    let result = '';
    let characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    let charactersLength = characters.length;
    for ( let i = 0; i < length; i++ ) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
};

/**
 * We are using this to initialize button events
 * @param data
 */
let initialSectionButtonEvents = (data) => {
    $('.btn-export').click(function(event) {
        alert($(this).closest('.panel').data('id'))
    });

    $('.btn-bar').click(function(event) {
        let chart = $(this).closest('.panel').data('c3-chart');
        chart.transform('bar');
    });

    $('.btn-pie').click(function(event) {
        let chart = $(this).closest('.panel').data('c3-chart');
        chart.transform('pie');
    });

    $('.btn-donut').click(function(event) {
        let chart = $(this).closest('.panel').data('c3-chart');
        chart.transform('donut');
    });
};

let buildPayloadDetailHTML = (payload) => {
    let  details = '';
    if(typeof payload == 'object')
    {
        payload.forEach((data, index) => {
            details += `
                <div class="detail">
                    <div class="title">${data.question}</div>
                    <div class="value">${data.answer}</div>
                    <div class="value">${data.answer_weight}</div>
                </div>
            `;
        });
    }
    return details;
};

let showDetailsModal = (payload_details, title, section_weight, total_weight) => {

    if(!payload_details){
        alert('no details');
        return false;
    }

    let  details = `
        <div class="detail" style="font-weight: bold;">
            <div class="title">Question</div>
            <div class="value">Answer</div>
            <div class="value">Weight</div>
        </div>
        
        ${payload_details}
        
        <div class="detail" style="font-weight: bold;">
            <div class="title">Extra Score</div>
            <div class="value"></div>
            <div class="value">${section_weight}</div>
        </div>
        
        <div class="detail" style="font-weight: bold;">
            <div class="title">Total Score</div>
            <div class="value"></div>
            <div class="value">${total_weight}</div>
        </div>
    `;

    $('#bar-detail-modal').find('#bar-detail-modal-title').text(title);

    $('#bar-detail-modal').find('#bar-detail-modal-body .bar-details').html(details);

    $('#bar-detail-modal').modal('show');
};

/**
 * Generate chart
 *
 * @param element_id
 * @param data
 * @param type
 * @param title
 * @param payload
 * @returns {n}
 */
let generateChart = (element_id, data, type, title, payload, onClick) => {

    let options = {
        bindto: element_id,
        legend: {
            position: 'bottom'
        },
        data: {
            columns: data,
            type : typeof type == 'undefined' ? 'bar' : type,
            onclick: (data, i) => {
                onClick(data, i, payload);
            }
        },
        size: {
            height: 400
        },
        tooltip: {
            grouped: false,
            position: function (data, width, height, element) {
                return {top: 0, right: 0};
            }
        }
    };

    //for donut chart
    if(type == 'donut' && typeof title != 'undefined'){
        options.donut = {title: title}
    }

    //for bar chart
    if(type == 'bar'){
        options.bar = {
            width: {
                ratio: 0.9 // this makes bar width 50% of length between ticks
            }
        };

        options.axis = {
            y: {
                label: 'Weight'
            },
            x: {
                show: true
            }
        }
    }

    return c3.generate(options);
};

/**
 * Fetch data from server
 * @param url
 * @param done
 * @param params
 * @param fail
 * @param always
 */
let fetchData = (url, params, done, fail,always) => {

    //set params
    params = typeof params != 'undefined' ? params : {};

    $.get(url, params).done((response) => {
        done(response.data);
    }).fail((response) => {
        if(typeof fail == 'method'){
            fail(response);
        }else{

        }
    }).always((response) => {
        if(typeof always == 'method'){
            always(response);
        }else{

        }
    });
};

/**
 * Format data in correct chart format
 * @param data
 * @returns {*}
 */
let formatData = (data) => {
    return data;
};

/**
 * Add section to result on page, basically appends HTML inside result div
 * @param title
 * @param section_id
 * @returns {string}
 */
let addSectionToPage = (title, section_id) => {

    section_id = (typeof section_id != 'undefined') ? section_id : 'section_' + makeId(8);

    let section = `<div data-id="${section_id}" class="panel panel-default">
        <div class="panel-heading" style="padding: 15px;">
            ${title}
            <button class="btn btn-sm btn-success pull-right btn-export">
                <i class="fa fa-download"></i>
            </button>
            <button class="btn btn-sm btn-warning pull-right btn-bar">
                <i class="fa fa-bar-chart"></i>
            </button>
            <button class="btn btn-sm btn-info pull-right btn-pie">
                <i class="fa fa-pie-chart"></i>
            </button>
            <button class="btn btn-sm btn-danger pull-right btn-donut">
                <i class="fa fa-circle-o"></i>
            </button>
        </div>
        <div class="panel-body">
            <div id="${section_id}"></div>
        </div>
    </div>`;

    //append panel to page inside result div
    $('#result').append(section);

    //return id
    return `#${section_id}`;
};

//load from server
//generate bar chart
//generate pie chart
//generate table
let getResults = () => {

    let q = $('#q').val();
    let url = $('#url').val();

    //reset
    $('#result').html('');

    fetchData(url, {q: q}, (data) => {

        //This section is for all the stations an their scores
        if(typeof data.station_totals == 'object' && typeof data.station_totals.length) {

            let title = 'Stations scores';
            let section_elem = addSectionToPage(title);
            let chart_type = 'bar'; //TODO get this from form
            let chart_data = data.station_totals;
            let payload = data.station_total_payloads;

            let chart = generateChart(section_elem, chart_data, chart_type, title, payload, (data, i, payload) => {

                if(typeof payload != 'object'){
                    return;
                }

                payload = payload[data.id];

                let totalChart = data.value;
                let totalValue = 0;
                let sections = [];
                let payload_details = '';
                let station_name = data.id;

                payload.forEach((data, index) => {
                    totalValue += data.answer_weight;

                    if(typeof sections[data.section_name] == 'undefined'){
                        sections[data.section_name] = data.section_name;
                        payload_details += ` 
                            <div class="section">
                                <div class="title">${data.section_name}</div>
                            </div>
                        `;
                    }

                    payload_details += `
                        <div class="detail">
                            <div class="title">${data.question}</div>
                            <div class="value">${data.answer}</div>
                            <div class="value">${data.answer_weight}</div>
                        </div>
                    `;
                });

                let details = `
                    <div class="detail" style="font-weight: bold;">
                        <div class="title">Question</div>
                        <div class="value">Answer</div>
                        <div class="value">Weight</div>
                    </div>
                    
                    ${payload_details}
                    
                    <div class="section" style="font-weight: bold;">
                        <div class="title">Total Score</div>
                        <div class="value"></div>
                        <div class="value">${totalValue}</div>
                    </div>
                `;

                $('#bar-detail-modal').find('#bar-detail-modal-title').text(`Statistics for ${station_name}`);
                $('#bar-detail-modal').find('#bar-detail-modal-body .bar-details').html(details);
                $('#bar-detail-modal').modal('show');

            });

            //we are going to put chart instance in data attribute of an element, so we can use later
            $(section_elem).closest('.panel').data('c3-chart', chart);

            //initialize button events
            initialSectionButtonEvents();
        }


// console.log(data.section_payloads)
        //This will list all the stations in sections with different criterias
        if(typeof data.sections == 'object' && typeof data.sections.length) {

            for(let station_name in data.sections){

                let section_elem = addSectionToPage(station_name);
                let chart_type = 'bar'; //TODO get this from form
                let chart_data = data.sections[station_name];
                let payload = data.section_payloads[station_name];

                console.log(chart_data)

                let chart = generateChart(section_elem, chart_data, chart_type, station_name, payload, (data, i, payload) => {
                    console.log(data)
                    console.log(payload[data.id]);

                    //total score is the data value
                    let section_name = data.id;
                    let total_weight = data.value;

                    //some useful information are same in all payload
                    let section = payload[section_name][0];
                    let station_name = section.station_name; //same in all payload
                    let section_weight = section.section_weight; //same in all payload

                    //TODO move to a separate method
                    let payload_details = buildPayloadDetailHTML(payload[section_name]);
                    let modal_title = `${section_name} for ${station_name}`;
                    showDetailsModal(payload_details, modal_title, section_weight, total_weight);
                });

                //we are going to put chart instance in data attribute of an element, so we can use later
                $(section_elem).closest('.panel').data('c3-chart', chart);

                //initialize button events
                initialSectionButtonEvents();
            }
        }

    });
};

getResults();


//search text box
$('#q').keyup(function(){
    getResults();
});


