<select class="form-control select2"  name="{{$id}}">
    @foreach($options as $option)
        <option value="{{$option->id}}">{{$option->option_choice_name}}</option>
    @endforeach
</select>
