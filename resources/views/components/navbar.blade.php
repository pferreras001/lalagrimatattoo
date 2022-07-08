
<div class="navabar__normal" data-aos="fade-up">
  <div class="navabar__normal__left">
    <a href="/"><img src="img/navbar/logotype.png"/></a>
  </div>
  <div class="navabar__normal__right">
    <nav>
      <ul>
        <li><a href="">LA LÁGRIMA</a></li>
        <li><a href="#trabajos">TRABAJOS</a></li>
        <li><a href="#artistas">ARTISTAS</a></li>
        <li><a href="#contacto">CONTACTO</a></li>
      </ul>
    </nav>
  </div>
</div>

<div class="navbar__mobile" data-aos="fade-up">
  <div class="navbar__mobile__header">
    <button id="navbar__mobile__menu"><?php require('img/navbar/menu.svg')?></button>
    <div class="navbar__mobile__icon">
      <a href="/"><img src="img/navbar/logotype.png"/></a>
    </div>
  </div>
  <div class="navbar__mobile__menu">
    <div class="navbar__mobile__header">
      <button id="navbar__mobile__close"><?php require('img/navbar/close.svg')?></button>
    </div>
    <nav>
      <ul>
        <li><a href="">LA LÁGRIMA</a></li>
        <li><a href="#trabajos">TRABAJOS</a></li>
        <li><a href="#artistas">ARTISTAS</a></li>
        <li><a href="#contacto">CONTACTO</a></li>
      </ul>
    </nav>
  </div>
</div>

<script>
  $("#navbar__mobile__menu").click(function () {
      $(".navbar__mobile__menu").toggleClass("show");
    });

    $("#navbar__mobile__close").click(function () {
      $(".navbar__mobile__menu").toggleClass("show");
    });
</script>