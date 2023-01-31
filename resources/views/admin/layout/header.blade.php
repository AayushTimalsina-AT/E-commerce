<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') </title>
    <link rel="icon" type="image/png" href="{{asset('user/images/icons/favicon.png')}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('admin/css/admin.css')}}">
    <script src="{{asset('admin/js/admin.js')}}"></script>
    <script src="https://kit.fontawesome.com/8440c6416e.js" crossorigin="anonymous"></script>
</head>
<body>

<div class = "menu">
    <div class= "wrapper">
        <nav>
            <ul class="ul1">
                <li> <a href="{{route('adminHome')}}">Home</a> </li>
                <li> <a href="{{route('category')}}">Category</a> </li>
                <li> <a href="{{route('product')}}">Product</a> </li>
            </ul>
            <ul class="ul2">
                <li><div class="dropdown">
                        <button onclick="myFunction()" class="fa-solid fa-user dropbtn" >
{{--                            <i class="fa-solid fa-user"></i>--}}
                        </button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="#profile">Profile</a>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>

@yield('content-section')
@include('admin.layout.footer')
</body>
</html>
