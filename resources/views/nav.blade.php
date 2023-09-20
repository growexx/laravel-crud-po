<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }} ">
    <title>Welcome</title>
</head>

<nav id="sidebar">
    <div class="p-4 pt-5">
        <a href="#" class="img logo rounded-circle mb-5" style="background-image: url({{ asset('logo.jpg') }});background-size: contain;"></a>
        <ul class="list-unstyled components mb-5">
        <li class="{{$activePage == 'welcome' ? 'active' : '' }}">
            <a href="/">Home</a>
        </li>
        <li class="{{$activePage == 'index' ? 'active' : '' }}">
            <a href="{{route('product.index')}}">List</a>
        </li>
        <li class="{{$activePage == 'create' ? 'active' : '' }}">
            <a href="{{route('product.create')}}">New Product</a>
        </li>
        <li>
            <a target="_blank" href="http://localhost/phpmyadmin/index.php?db=PSI&target=db_structure.php&token=bcc78947563ca3dae7634cfc432efd7a#PMAURL-1:db_structure.php?db=laravel-crud-po&table=&server=1&target=&token=bcc78947563ca3dae7634cfc432efd7a">Database</a>
        </li>
        </ul>
        <div class="footer">
        <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <br>
            This template is made with <i class="icon-heart" aria-hidden="true"></i> by KK
        </p>
        </div>
    </div>
</nav>