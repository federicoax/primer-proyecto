<div class="container_registro">
    <!-- Título del formulario -->
    <h1>Registro</h1>

    <!-- Inicializa la validación de formularios -->
    <?php $validation = \Config\Services::validation(); ?>

    <!-- Formulario de registro con método POST y acción de envío -->
    <form method="post" action="<?= base_url('enviar-form') ?>">

        <!-- Genera un token CSRF para proteger el formulario contra ataques CSRF -->
        <?= csrf_field(); ?>
        
        <!-- Muestra un mensaje de error general si existe (por ejemplo, si el registro falla) -->
        <?php if (!empty(session()->getFlashdata('fail'))) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
        <?php endif ?>

        <!-- Muestra un mensaje de éxito si existe (por ejemplo, después de un registro exitoso) -->
        <?php if (!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
        <?php endif ?>

        <!-- Campo Nombre -->
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre</label>
            <!-- Input para el nombre -->
            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre" value="<?= old('nombre') ?>">
            <!-- Muestra el mensaje de error si existe para este campo -->
            <?php if ($validation->getError('nombre')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('nombre'); ?>
                </div>
            <?php } ?>
        </div>

        <!-- Campo Apellido -->
        <div class="form-group">
            <label for="apellido" class="form-label">Apellido</label>
            <!-- Input para el apellido -->
            <input name="apellido" type="text" class="form-control" id="apellido" placeholder="Apellido" value="<?= old('apellido') ?>">
            <!-- Muestra el mensaje de error si existe para este campo -->
            <?php if ($validation->getError('apellido')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('apellido'); ?>
                </div>
            <?php } ?>
        </div>

        <!-- Campo Email -->
        <div class="form-group">
            <label for="correo" class="form-label">Email</label>
            <!-- Input para el email -->
            <input name="email" type="email" class="form-control" id="correo" placeholder="Correo Electrónico" value="<?= old('email') ?>">
            <!-- Muestra el mensaje de error si existe para este campo -->
            <?php if ($validation->getError('email')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('email'); ?>
                </div>
            <?php } ?>
        </div>

        <!-- Campo Nombre de Usuario -->
        <div class="form-group">
            <label for="usuario" class="form-label">Nombre de Usuario</label>
            <!-- Input para el nombre de usuario -->
            <input name="nombre_usuario" type="text" class="form-control" id="usuario" placeholder="Nombre de Usuario" value="<?= old('nombre_usuario') ?>">
            <!-- Muestra el mensaje de error si existe para este campo -->
            <?php if ($validation->getError('nombre_usuario')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('nombre_usuario'); ?>
                </div>
            <?php } ?>
        </div>

        <!-- Campo Contraseña -->
        <div class="form-group">
            <label for="contraseña" class="form-label">Contraseña</label>
            <!-- Input para la contraseña -->
            <input name="pass" type="password" class="form-control" id="contraseña" placeholder="Contraseña">
            <!-- Muestra el mensaje de error si existe para este campo -->
            <?php if ($validation->getError('pass')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('pass'); ?>
                </div>
            <?php } ?>
        </div>

        <!-- Campo Confirmar Contraseña -->
        <div class="form-group">
            <label for="confirmar-contraseña" class="form-label">Confirmar Contraseña</label>
            <!-- Input para confirmar la contraseña -->
            <input name="confirmar_pass" type="password" class="form-control" id="confirmar-contraseña" placeholder="Confirmar Contraseña">
            <!-- Muestra el mensaje de error si existe para este campo -->
            <?php if ($validation->getError('confirmar_pass')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('confirmar_pass'); ?>
                </div>
            <?php } ?>
        </div>

        <!-- Botones de Enviar y Cancelar -->
        <div>
            <input type="submit" value="Registrarse" class="btn btn-primary">
            <a href="<?php echo base_url('registro'); ?>" class="btn btn-secondary cancel">Cancelar</a>
        </div>
    </form>
</div>
