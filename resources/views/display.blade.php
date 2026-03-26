<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>mobile</td>
    </tr>
    @foreach ($mydata as $user)
        <tr>
            <td>{{$user->student_id}}</td>
            <td>{{$user->student_name}}</td>
            <td>{{$user->student_mobile}}</td>
            <td>
                <form action="{{url('/api/delete',$user->student_id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('DELETE')
                <input type="submit" value="delete">
                </form>
            </td>
            <td><a href="{{url('/api/edit',$user->student_id)}}">edit</a></td>
        </tr>
    @endforeach
</table>