<select required66="{{$answer_required_yn}}" class="form-control select2"  name="answers[{{$question->id}}]">
{{--    <option value="" disabled selected>Choose</option>--}}
    @foreach($options as $option)
        <option value="{{$option->id}}">{{$option->option_choice_name}}</option>
    @endforeach
</select>
