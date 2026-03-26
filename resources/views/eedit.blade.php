<h1>edit</h1>
<form action="{{url('/api/eupdate')}}" method="post">
    {{-- @csrf --}}
    @method('PUT')
     <input type="hidden" name="employee_id" value="{{ $edit->employee_id }}">
    employee name: <input type="text" name="ename" value="{{$edit->emp_name}}" placeholder="enter name"/><br>
    employee mobile no : <input type="number" name="emobile" value="{{$edit->emp_mobile}}" placeholder="enter mobile"/><br>
    <input type="submit">
</form>