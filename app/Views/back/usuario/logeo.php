<div class="container_inicio">
    <div>
        <h2>Iniciar Sesión</h2>
    </div>

    <?php if(isset($session) && $session->getFlashdata('msg')): ?> <!--La expresión isset($session) verifica si la variable $session está definida y no es nula. Si $session existe y no es nula, la expresión devuelve true, lo que significa que la variable $session está configurada.
    La expresión $session->getFlashdata('msg') se utiliza para obtener el valor asociado a la clave 'msg' en el objeto de sesión $session. Si existe un valor asociado a 'msg', significa que se ha establecido un mensaje flash en la sesión.
    -->
    <div class="alert alert-warning">
        <?= $session->getFlashdata('msg')?>
    </div>
    <?php endif; ?> <!--Si ambas condiciones del if son verdaderas, se muestra el elemento HTML <div> con una clase CSS "alert alert-warning" que contiene el mensaje flash. -->

    <!-- Aca se inicia el formulario del login -->   
    <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
        <div>
            <label for="exampleFormControlInput1" class="form-label">Usuario</label>
            <input name="nombre_usuario" type="text" class="form-control" placeholder="Usuario" required>
        </div>
        <div>
            <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
            <input name="pass" type="password" class="form-control" placeholder="Contraseña" required>
        </div>
        
        <input type="submit" value="Ingresar" class="btn btn-primary">
        <a href="<?php echo base_url('logeo'); ?>" class="btn btn-secondary cancel">Cancelar</a>

    </form>
        <div class="register-link">
        ¿Aún no se registró? <a href="<?php echo base_url('/registro'); ?>">Regístrese aquí</a>
        </div>
    </div>
    <?php $msg = session()->getFlashdata('msg'); ?>
 </div>
 