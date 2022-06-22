<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1><center>Login Page</center></h1>

    <form action="{{url('login')}}" method="post" enctype="multipart/form">
        @csrf <!-- {{ csrf_field() }} -->

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="">

        <button type="submit">Login</button>

    </form>

</body>
</html>