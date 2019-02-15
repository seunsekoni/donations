<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    @include('partials._head')
  </head>
  <body>
    @guest
    <div class="logo">{{ config('app.name', 'actionaid') }}</div>
    @else
 <div class="dropdown">
  <button class="logo dropdown-toggle" type="button" data-toggle="dropdown">{{ config('app.name', 'actionaid') }}</button>
  <ul class="dropdown-menu">
    <li><a href="{{ route('donations.show', auth()->user()->id) }}">Dashboard</a></li>
    <li><a href="{{ route('donations.create') }}">Donate</a></li>
    <li><form action="{{ url('logout') }}" method="POST">
            {{ csrf_field() }}
            <input type="submit" value="Logout">
        </form></li>
  </ul>
</div>

    @endguest
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>

