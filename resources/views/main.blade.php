<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    @include('partials._head')
  </head>
  <body>
    @include('partials._message')
    @guest
    <div class="logo">
      <a href="{{ route('home') }}">{{ config('app.name', 'actionaid') }}</a>
    </div>
    @else
 <div class="dropdown">
  <button class="logo dropdown-toggle" type="button" data-toggle="dropdown">{{ config('app.name', 'actionaid') }}</button>
  <ul class="dropdown-menu">
    <li><a href="{{ route('donations.show', auth()->user()->id) }}">Dashboard</a></li>
    <li><a href="{{ route('donations.create') }}">Donate</a></li>
    <li><form action="{{ url('logout') }}" method="POST">
            {{ csrf_field() }}
            <input type="submit" value="Logout" style="{font-size: 50px; padding 10px 20px; display: block;}">
        </form></li>
  </ul>
</div>

    @endguest
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>

