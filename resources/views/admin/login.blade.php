<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{asset('user/images/icons/favicon.png')}}"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('admin/css/login.css')}}">
    <title>Admin login </title>
</head>
<body>


<div class="login-form">
    <h2>Admin Login</h2>
    <form action="{{route('admin.login')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-field">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Admin Name" name="username">
        </div>

        <div class="input-field">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="password" >
        </div>

        <button type="submit" name="Signin">Sign In</button>

{{--         <div class="forgetpass">--}}
{{--            <a href="">forget Password ?</a>--}}
{{--            <div>--}}
    </form>
</div>
</body>
</html>
