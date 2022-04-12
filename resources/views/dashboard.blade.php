<!DOCTYPE html>
<html lang="en">
<head>
    <title>Visitor Management System</title>
    <link rel="stylesheet" href="{{ asset('css/boostrap.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    @guest
        @yield('content')
    @else 
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">AKD</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button"
    data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
    aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="">welcome, {{ Auth::user()->email }}</a>
        </div>
    </div>
</header>
    
<div class="container-fluid">
    <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar
    collapse">
    <div class="position-sticky pt-3">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">Logout</a>
        </li>
    </ul>
    </div> 
    </nav>
</div>

    @endguest
    
    <script src="{{ asset('js/boostrap.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>