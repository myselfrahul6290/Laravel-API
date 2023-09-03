<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post">
    @csrf
    <input type="text" placeholder="Enter Name" name="name" value="{{ old('name',$user->name ?? '') }}">

    <input type="email" placeholder="Enter email" name="email" value="{{old('email',$user->email ?? '')}}">
    <input type="text" placeholder="Enter phone Number" name="phone" value="{{old('phone',$user->phone ?? '')}}">
    <input type="text" placeholder="Enter address" name="address" value="{{old('address',$user->address ?? '')}}">
    <input type="password" placeholder="Enter password" name="password">
    <select name="gender" >
        <option value="Male"
        >Male</option>
         
        <option value="Female"
        >Female</option>
        <option value="Other"
        >Other</option>

    </select>

    <input type="submit">

</form>



</body>
</html>

       
