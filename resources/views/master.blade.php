<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm Project</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</head>
<body>
    @include('header')
    @yield('content')
    @include('footer')
</body>
<style>
    .custom-login{
        height: 600px;
        padding-top:100px; 
    }
    .slider-img{
        height:400px !important;
        /* width: 100%; */
        background: #785858 !important;
    }
    .custom-product{
        height: 600px;
    }
    .tranding-img{
        height:80px;
    }
    .tranding-item{
        float: left;
        width:20%;
    }
    .tranding-wrapper{
    margin-left:50px;
    }
    .carousel-inner{
        background:rgb(211,211,211);
    }

</style>
</html>