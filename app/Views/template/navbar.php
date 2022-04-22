<?php 

    $session = \Config\Services::session();

    if( isset( $session ) ){
        $nombre = $session->nombre.' '.$session->apellido;
        $rol    = $session->rol;
        $cedula = $session->cedula;
    }

?>
<div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm mr-auto">

            <a href="javascript:void(0);" class="sidebarCollapse ml-5" data-placement="bottom"><i class="fas fa-bars sm-icon"></i></a>

            <ul class="navbar-item flex-row ml-5">
                <li class="nav-item">
                    <a class="navbar-brand user" href="<?= base_url().route_to('bienvenido');?>">Inicio</a>
                </li>
            </ul>

            <ul class="navbar-item flex-row navbar-dropdown">

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-user-circle sm-icon"></i>
                    </a>
                    <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <div class="media-body">
                                    <h5> <?= ( !empty($nombre) ) ? $nombre : 'Usuario'?> </h5>
                                    <p> <?= ( !empty($rol) ) ? $rol : 'Analista' ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-item">
                            <a href="<?=base_url().route_to('empleadoEditar',$cedula); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>Perfil</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="<?=base_url().route_to('destruirSesion'); ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>