<h1>Display</h1>
<table border="1">
    <tr>
        <td>id</td>
        <td>employee name</td>
        <td>employee mobile</td>
    </tr>
    @foreach ($mydata as $userdata)
        <tr>
            <td>{{$userdata->employee_id}}</td>
            <td>{{$userdata->emp_name}}</td>
            <td>{{$userdata->emp_mobile}}</td>
            <td>
                <form action="{{url('api/delete',$userdata->employee_id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="delete">
                </form>
            </td>
            <td><a href="{{url('api/eedit',$userdata->employee_id)}}">edit</a></td>
        </tr>
    @endforeach
</table>