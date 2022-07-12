<section class="section contacto" id="contacto">
  <div class="container contacto__container">
    <h1 class="title">contacto.</h1>
    <div class="contacto__whatsapp"><a href="https://wa.me/34666635776" target="_blank"><span>Whatsaspp </span><span>+34 666 635 776</span></a></div>
    <div class="contacto__form">
      <div data-aos="fade-right" class="contacto__form__left">
        <form method="POST" action="{{route('contacto')}}">
        @csrf
          <input type="email" name="email" required="true" placeholder="Email"><br>
          <input type="text" name="asunto" required="true" placeholder="Asunto"><br>
          <textarea name="mensaje" required="true" placeholder="Mensaje"></textarea><br>
          <button type="submit" class="btn btn__contacto">Enviar</button><br>
        </form>
      </div>
      <div data-aos="fade-left" class="contacto__form__right">
        Pregúntanos lo que quieras<br>
        ¡Te responderemos lo antes posible!<br><br>

        <a href="mailto:info@lalagrimatattoo.com">info@lalagrimatattoo.com</a>
      </div>
    </div>
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.642415140494!2d-1.982348656443919!3d43.321744481817774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51a51def272477%3A0x130d132ece367fa1!2sLa%20L%C3%A1grima%20Tattoo!5e0!3m2!1ses!2ses!4v1642926566911!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>