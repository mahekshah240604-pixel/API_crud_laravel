<form action="{{url('/api/update')}}" method="post">
    {{-- @csrf --}}
    @method('PUT')
     <input type="hidden" name="student_id" value="{{ $edit->student_id }}">
    name: <input type="text" name="sname" value="{{$edit->student_name}}" placeholder="enter the number"/><br>
    mobile: <input type="number" name="smobile" value="{{$edit->student_mobile}}" placeholder="enter mobile"><br>
    <input type="submit">
</form>