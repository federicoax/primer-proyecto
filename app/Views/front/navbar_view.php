<?php
    $session = session();
    $nombre = $session->get('nombre');
    $perfil = $session->get('perfil_id');
    ?>
    
<!--NavBar para admin-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url('principal')?>">
            

            <!--Logo de la empresa-->
            <img src="<?php echo base_url('assets/img/logo1.png')?>" class="img-fluid" width="100px" height="100px" alt="logo"></a>            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

            <?php if(session()->perfil_id == 1): ?>
                <div class="btn btn-secondary active btnUser btn-sm custom-text-color">
                    <a href="">ADMIN:   <?php echo session('nombre'); ?> </a>
                </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="principal">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registro">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logeo">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <!-- Botón de cierre de sesión -->
                        <a class = "nav-link" href="<?php echo base_url('/logout'); ?>" class="btn btn-danger">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
            
            <?php elseif(session()->perfil_id == 2): ?>
                <div class="btn btn-secondary active btnUser btn-sm custom-text-color">
                    <a href="">CLIENTE:  <?php echo session('nombre'); ?> </a>
                </div>

    <!--NavBar para clientes logueados-->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="principal">Inicio</a>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link" href="productos">Productos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        La Empresa
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="quienes_somos">Quienes Somos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="nuestra_historia">Nuestra Historia</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="nuestra_filosofia">Nuestra Filosofía</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactenos">Contáctenos</a>
                    </li>
                    <li class="nav-item">
                        <!-- Botón de cierre de sesión -->
                        <a class = "nav-link" href="<?php echo base_url('/logout'); ?>" class="btn btn-danger">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
    <?php else :?>
    <!--NavBar para clientes no logueados randoms-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="principal">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos">Productos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        La Empresa
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="quienes_somos">Quienes Somos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="nuestra_historia">Nuestra Historia</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="nuestra_filosofia">Nuestra Filosofía</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactenos">Contáctenos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registro">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logeo">Iniciar Sesión</a>
                    </li>                    
                    <li class="nav-item">
                        <!-- Botón de cierre de sesión -->
                        <a class = "nav-link" href="<?php echo base_url('/logout'); ?>" class="btn btn-danger">Cerrar Sesión</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <?php endif ;?>
            </div>
        </div>
    </nav>