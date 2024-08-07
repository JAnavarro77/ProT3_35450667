<section>
<h2>Contacto</h2>Te invito a unirte a esta pagina completando el siguiente formulario</h3>

<?php $validation = \Config\Services::validation(); ?>
<form method="post" action="<?php echo base_url('/enviar-form'); ?>">
<?=csrf_field();?>
<?php if(!empty (session()->getFlashdata('fail'))):?> <!-- reemplace los : del video por ; porque me generaba error-->
    <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
    <?php endif?> <!-- borre el endif porque me generaba error-->
    <?php if(!empty (session()->getFlashdata('success'))):?> <!-- reemplace los : del video por ; porque me generaba error-->
        <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
        <?php endif?> <!-- borre el endif porque me generaba error-->
<form>
<div class="text" >Nombre</div>
<p><input name="nombre" class="text-uppercase" type="text" placeholder="nombre"> </p>
<!-- error  -->
 <?php if($validation->getError('nombre')) {
    ?>
    <div class='alert alet-danger mt-2'>
        <?= $error = $validation->getError('nombre'); ?>
    </div>
    <?php }?>
    <!-- fin  error -->
    <div class="text" >Apellido</div>
<p><input name="apellido" class="text-uppercase"type="text" placeholder="apellido"></p>
<!-- error  -->
<?php if($validation->getError('apellido')) {
    ?>
    <div class='alert alet-danger mt-2'>
        <?= $error = $validation->getError('apellido'); ?>
    </div>
    <?php }?>
    <!-- fin  error -->
    <div class="text" >email</div>
<p> <input name="email" class="form-label"type="email" placeholder="email"></p>
<!-- error  -->
<?php if($validation->getError('email')) {
    ?>
    <div class='alert alet-danger mt-2'>
        <?= $error = $validation->getError('email'); ?>
    </div>
    <?php }?>
    <!-- fin  error -->
    <div class="text" >Usuario</div>
<p> <input name="usuario" class="form-label"type="text" placeholder="usuario"></p>
<!-- error  -->
<?php if($validation->getError('usuario')) {
    ?>
    <div class='alert alet-danger mt-2'>
        <?= $error = $validation->getError('usuario'); ?>
    </div>
    <?php }?>
    <!-- fin  error -->
    <div class="text" >Password</div>
<p> <input name="pass" class="form-label"type="password" placeholder="contraseña"></p><!-- error  -->
 <?php if($validation->getError('pass')) {
    ?>
    <div class='alert alet-danger mt-2'>
        <?= $error = $validation->getError('pass'); ?>
    </div>
    <?php }?>
    <!-- fin  error -->

<!-- mensae para enviar descartado
<p><textarea placeholder="Mensaje"></textarea></p>
-->

<p><input type="submit" value="Enviar" class="btn btn-success">
<input type="reset" value="Cancelar" class="btn btn-danger"></p>


</form>
</section>