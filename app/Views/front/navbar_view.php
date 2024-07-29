<!-- navbar inicio -->
 <?php
 $session= session();
 $nombre= $session->get('nombre');
 $perfil= $session->get('perfil_id');
 ?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
        <!-- logo de la empresa -->
         <img src="<?php echo base_url('assets/img/icon.png')?>" alt="marca" width="75" height="30" class= "img-fluid">
</a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- boton nuevo -->
    <?php if(session()->perfil_id == 1): ?>
      <div class="btn btn-secundary active btnUser btn-sm">
        <a href="">ADMIN: <?php echo session('nombre'); ?> </a>
      </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="registro">registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="login">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1"
          aria-disabled="true">Cerrar Sesion</a>
        </li>
    
      </ul>
  
      </form>
    </div>
  </div>
  <!-- nav para clientes -->
  <?php elseif(session()->perfil_id == 2): ?>
      <div class="btn btn-secundary active btnUser btn-sm">
        <a href="">cliente: <?php echo session('nombre'); ?> </a>
      </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active"  href="quienes_somos">quienes_somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="acerca_de">acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1"
          aria-disabled="true">Cerrar Sesion</a>
        </li>
    
      </ul>
      <!-- nav para clientes no logeados -->
       <?php else:?>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active"  href="quienes_somos">quienes_somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="acerca_de">acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="registro">registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="login">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1"
          aria-disabled="true">Cerrar Sesion</a>
        </li>
      </ul>
      
    </div>
  </div>


      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="escribir" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">buscar</button>
      </form>
      <?php endif;?>
    </div>
  </div>

</nav>