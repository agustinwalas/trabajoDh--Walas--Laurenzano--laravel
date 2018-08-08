<footer style="margin-top:30px;"class="final">
  <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit" name="button">Cerrar sesion</button>
  </form>
<a href="FAQ.php">Preguntas Frecuentes</a>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
</footer>
