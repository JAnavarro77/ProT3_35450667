
<form>
  <!-- mensaje de error -->
   <?php if(session()->getFlashdata('msg')):?>
    <div class="alert alert-warning">
      <?=session()->getFlashdata('msg')?>
   </div>
   <?php endif;?>
   <!-- inicia el formulario del login -->
    <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">iniciar sesion</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="pass">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">recordarme</label>
  </div>
  <button type="submit" class="btn btn-primary">iniciar sesión</button>
  <br><span>¿todavia no te registraste? <a href="<?php echo base_url('/registro'); ?>">
    Registrarse aqui </a></span>
   
</form>