<ul class="radio">
    @foreach($options as $option)
        <li>
            <input type="radio" id="{{$id}}_{{$loop->index + 1}}" name="{{$id}}" value="{{$option->id}}">
            <label for="{{$id}}_{{$loop->index + 1}}">{{$option->option_choice_name}}</label>
            <div class="check"></div>
        </li>
    @endforeach
</ul>