<section>
<h2>Contacto</h2>
<h3>Puedes ponerte en contacto conmigo a través del siguiente formulario:</h3>

<?php $validation = \Config\Services::validation(); ?>
<form method="post" action="<?php echo base_url('/enviar-form') ?>">
<?=csrf_field();?>
<?=csrf_field();?>
<?php if(!empty (session()->getFlashdata('fail'))):?>
    <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
    <?php endif?>
    <?php if(!empty (session()->getFlashdata('success'))):?>
        <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
        <?php endif?>
<form>
<p><input name="nombre" class="text-uppercase" type="text" placeholder="nombre"> </p>
<!-- error  -->
 <?php if($validation->getError('nombre')) {
    ?>
    <div class='alert alet-danger mt-2'>
        <?= $error = $validation->getError('nombre'); ?>
    </div>
    <?php }?>
    <!-- fin  error -->
<p><input name="apellido" class="text-uppercase"type="text" placeholder="apellido"></p>
<!-- error  -->
<?php if($validation->getError('apellido')) {
    ?>
    <div class='alert alet-danger mt-2'>
        <?= $error = $validation->getError('apellido'); ?>
    </div>
    <?php }?>
    <!-- fin  error -->
<p> <input name="email" class="form-label"type="email" placeholder="email"></p>
<!-- error  -->
<?php if($validation->getError('email')) {
    ?>
    <div class='alert alet-danger mt-2'>
        <?= $error = $validation->getError('email'); ?>
    </div>
    <?php }?>
    <!-- fin  error -->
<p> <input name="usuario" class="form-label"type="text" placeholder="usuario"></p>
<!-- error  -->
<?php if($validation->getError('usuario')) {
    ?>
    <div class='alert alet-danger mt-2'>
        <?= $error = $validation->getError('usuario'); ?>
    </div>
    <?php }?>
    <!-- fin  error -->
<p> <input name="pass" class="form-label"type="text" placeholder="password"></p><!-- error  -->
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

<p><input type="submit" value="Enviar">
<input type="reset" value="Cancelar"></p>


</form>
</section>