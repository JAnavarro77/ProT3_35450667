
<form>
  <h2> INICIAR SESION </h2>

  <!-- mensaje de error -->
   <?php if(session()->getFlashdata('msg')):?>
    <div class="alert alert-warning">
      <?=session()->getFlashdata('msg')?>
   </div>
   <?php endif;?>
   <!-- inicia el formulario del login -->
    <form method="post" action="<?php echo base_url('/enviarlogin'); ?>">
  <div class="mb-2">
    <label for="exampleFormControlInput1" class="form-label">correo electronico</label>
    <input name="email" type="text" class="form-control" placeholder="escriba aqui su correo">
    <div id="emailHelp" class="form-text">iniciar sesion
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
    <input name="pass" type="password" class="form-control" placeholder="escriba aqui su contraseña">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">recordarme</label>
  </div>
  <input type="submit" value="ingresar" class="btn btn-success">
  <a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
  <br><span>¿No te registraste todavia? <a href="<?php echo base_url('/registro'); ?>">
    Registrarse aqui</a></span>
   </div>

   
</form>