<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="{{url('/api/new')}}"><button>New</button></a>

    <table>
 <tr>
    <th>name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>password</th>
    <th>gender</th>
 </tr>
 @foreach($userDeatils as $user)
</tr>
<td>{{$user->name}}</td>
<td>{{$user->email}}</td>
<td>{{$user->phone}}</td>
<td>{{$user->address}}</td>
<td>{{$user->password}}</td>
<td>{{$user->gender}}</td>
<td>
    <a href="{{url('/api/user')}}/{{$user->id}}"><button>Delete</button></a>
</td>
<td>
    <a href="{{url('/api/user')}}/{{$user->id}}"><button>Update</button></a>
</td>

</tr>
@endforeach
</table>
</body>
</html>