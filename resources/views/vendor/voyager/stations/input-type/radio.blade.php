<ul class="radio">
    @if(count($options) <= 4)
       <div style="width: 100%; display: inline-block;">
           @foreach($options as $option)
               <li style="width: auto !important;">
                   <input required66="{{$answer_required_yn}}" type="radio" id="{{$id}}_{{$loop->index + 1}}" name="{{$id}}" value="{{$option->id}}">
                   <label for="{{$id}}_{{$loop->index + 1}}">{{$option->option_choice_name}}</label>
                   <div class="check"></div>
               </li>
           @endforeach
       </div>
    @else
        @foreach($options as $option)
            <li>
                <input required66="{{$answer_required_yn}}" type="radio" id="{{$id}}_{{$loop->index + 1}}" name="{{$id}}" value="{{$option->id}}">
                <label for="{{$id}}_{{$loop->index + 1}}">{{$option->option_choice_name}}</label>
                <div class="check"></div>
            </li>
        @endforeach
    @endif
</ul>