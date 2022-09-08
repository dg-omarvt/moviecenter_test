<div class="container-fluid header_contacto p-0">
  <div class="container">
  
    <?php include('header.php'); ?>

    <div class="row">
      <div class="d-flex justify-content-center mt-5 col-12">
        <h1 class="h_txt_c">Contacto</h1>
      </div>
    </div>

    <div class="row">
      <div class="map_container col-12">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.2465405605762!2d-101.85207908468622!3d21.02281909335619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842be851fba187ff%3A0x5c255b11183b6c5a!2sMovie%20Center!5e0!3m2!1ses-419!2smx!4v1659901164200!5m2!1ses-419!2smx" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>

    <div class="row contacto">
      <div class="col-md-12 col-lg-6 text-center d-flex align-items-center justify-content-center">
        <div>
          <div class="logo_contacto mb-5">
            <img src="img/logo_moviecenter_contacto.svg" alt="logo_moviecenter">
          </div>
          <div class="mb-5">
            <h3 class="h3_header_c"><i class="fa-solid fa-location-dot"></i> Dirección</h3>
            <p>Aquiles Serdan 200 Int. 55 Infonavit San Fransisco,</p>
            <p>San Francisco del Rincón, C.P. 36330</p>
          </div>
          <div>
            <h3 class="h3_header_c"><i class="fa-solid fa-phone"></i> Teléfono</h3>
            <p>Tel: (476) 743 15 37 y (476) 743 43 44</p>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-6 d-flex align-items-center">
        <form class="formulario">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">*Nombre</label>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">*Correo Electrónico</label>
          <input type="email" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">*Teléfono</label>
          <input type="number" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-5">
          <label for="exampleFormControlTextarea1" class="form-label">*Comentarios</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-lg boton_amarillo_c">Enviar <i class="fa-solid fa-angle-right"></i></button>
          </duv>
        </form>
      </div>
    </div>
  
  </div>
</div>

<?php include('footer.php'); ?>