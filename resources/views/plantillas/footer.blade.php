<footer style="margin-top:30px;"class="final">
@guest
@else
  <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit" class="btn btn-info" name="button">Cerrar sesion</button>
  </form>
@endguest
<div style="font-size:5rem;position:absolute;right:50px;bottom:-380px;"class="icons">
  <i class="fab fa-twitter"></i>
  <i class="fab fa-facebook-f"></i>
<i class="fab fa-instagram"></i>
</div>



</footer>
