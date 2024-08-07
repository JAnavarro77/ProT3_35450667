<
<body>
    <div class="container">
        <h2>INICIAR SESION</h2>

        <!-- mensaje de error -->
        <?php if(session()->getFlashdata('msg')): ?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

        <form method="post" action="<?php echo base_url('/enviarlogin'); ?>">
            <div class="mb-2">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input name="email" type="text" class="form-control" id="email" placeholder="Escriba aquí su correo" required>
                <div id="emailHelp" class="form-text">Iniciar sesión</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input name="pass" type="password" class="form-control" id="password" placeholder="Escriba aquí su contraseña" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Recordarme</label>
            </div>
            <input type="submit" value="Ingresar" class="btn btn-success">
            <a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>

            
            <br><span>¿No te registraste todavía? <a href="<?php echo base_url('/registro'); ?>">Registrarse aquí</a></span>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
