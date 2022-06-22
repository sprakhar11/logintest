<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1><center>Register User</center></h1>

    <form action="{{url('register')}}" method="post" enctype="multipart/form">
        @csrf <!-- {{ csrf_field() }} -->

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="">

        <label for="password">Re enter password:</label>
        <input type="password" id="rePassword" name="rePassword" placeholder="">

        <button type="submit">Register</button>

    </form>

</body>
</html>