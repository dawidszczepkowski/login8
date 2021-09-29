<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name','User Management System')}}</title>

         

        <!-- Styles -->
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <!-- JS -->
       <script src="{{ asset('js/app.js')}}" defer> </script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">{{config('app.name','User Management System')}}></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span class ="navbar-toggler-icon"></span>
                </button>
    <!-- A grey horizontal navbar that becomes vertical on small screens -->

<!-- Links -->



    <div class="form-inline my-2 my-lg-0">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ route('user.profile') }}">Twój Profil</a> 
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">wyloguj sie</a>

                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" >Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth

            @endif
    </div>
</div>
</nav>






@can('logged-in')
<nav class="navbar sub-nav navbar-expand-sm bg-light">
<div class="container">
<!-- Links -->
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="/">Dashboard</a>
  </li>
  @can('is-admin')
  <li class="nav-item">
    <a class="nav-link" href="{{ route ('admin.users.index') }}">Users</a>
  </li>
 @endcan
 @can('anyrole')
 <li class="nav-item">
    <a class="nav-link" href="{{route('wraper.products.index')}}">Products</a>
  </li>
</ul>
@endcan

</div>
</nav>
@endcan










            <main class="container">
                @include('partials.alerts')
                @yield('content')
            </main>

        


        
    </body>
</html>
