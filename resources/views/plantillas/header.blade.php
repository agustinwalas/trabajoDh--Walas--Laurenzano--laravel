<header>
  <div class="nav-bar">
     <div class="logo">
       <a href="/"><img src="/diseño/logo.png"></a>
     </div>
     <div class="logoM">
       <a href="/"><img src="/diseño/logo-mini.png"></a>
     </div>
     <div class="searchbar">
   <input class="barra"type="text" placeholder="     buscar..">
   <img src="diseño/zoom1.png" alt="">
 </div>
     <div class="nav-items">
        @guest
          <ul class="nav-ul">
           <li> <a href="{{ route('login') }}">Login</a> </li>
           <li> <a href="{{ route('register') }}">Registrate</a> </li>

         </ul>
        @else
          <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            Hola {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                <button type="submit" name="button">Cerrar sesion</button>
            </form>
        </div>
    </li>
    
    </ul>
@endguest

      <div class="listacorta">
          <i style="font-size:24px" class="fa">&#xf0c9;</i>
      </div>
     </div>
  </div>
<div class="noche">
  <label class="switch">
    <input type="checkbox">
    <span class="slider round"></span>
  </label>
  </div>
</header>
