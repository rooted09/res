<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container m-auto">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Acceuil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('commande.index')}}">Commandes</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('client.index')}}">Clients</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('restaurant.index')}}">Restaurants</a>
            </li>
            <li class="nav-item dropdown d-flex">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{Auth::guard('admin')->user()->name}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{route('auth.show')}}">Admin</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li> <a class="dropdown-item" href="{{ route('admin.logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                </li>
                </ul>
            </li>
        </div>
    </div>
    </nav>
    <main class="mt-4 container">
    <nav style="--bs-breadcrumb-divider: '>';border:1px solid #eee;border-radius:5px;background: #eee;" class="pt-3 px-4"  aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Acceuil</li>
          <li class="breadcrumb-item active">@yield('table')</li>
          <li class="breadcrumb-item">@yield('subtable')</li>
        </ol>
    </nav>
    <div class="mt-3">
        @yield('content')
    </div>
    </main>
    <script>
        const previewImage = e => {
           const preview = document.getElementById('preview');
           preview.src = URL.createObjectURL(e.target.files[0]);
           preview.onload = () => URL.revokeObjectURL(preview.src);
        };
     </script>
     
</body>
</html>