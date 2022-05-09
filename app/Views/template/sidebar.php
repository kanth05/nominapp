<div class="sidebar-wrapper sidebar-theme">
            
            <nav id="compactSidebar">
                <ul class="menu-categories">

                    <li class="menu" >
                        <a href="#menu1" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <i class="far fa-user sm-icon text-light d-block"></i>
                                <span>Empleados</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </li>

                    <li class="menu">
                        <a href="#menu2" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <i class="far fa-address-book sm-icon text-light d-block"></i>
                                <span>Nómina</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </li>

                    <li class="menu">
                        <a href="#menu3" data-active="true" class="menu-toggle">
                            <div class="base-menu">
                                <i class="far fa-chart-bar sm-icon text-light d-block"></i>
                                <span>Tabuladores</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </li>

                    <li class="menu">
                        <a href="#menu4" data-active="true" class="menu-toggle">
                            <div class="base-menu">
                                <i class="far fa-address-card sm-icon text-light d-block"></i>
                                <span>Usuario</span>
                            </div>
                        </a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </li>
                </ul>
            </nav>

            <div id="compact_submenuSidebar" class="submenu-sidebar">

                <div class="submenu" id="menu1">
                    <ul class="submenu-list text-light" data-parent-element="#menu1"> 
                        <li>
                            <a href="<?=base_url().route_to('empleados'); ?>"><i class="far fa-address-card xs-icon"></i> Perfíl Empleado </a>
                        </li>
                        <li>
                            <a href="<?=base_url().route_to('cargos'); ?>"><i class="far fa-address-card xs-icon"></i> Edición de cargos </a>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="menu2">
                    <ul class="submenu-list" data-parent-element="#menu2"> 
                        <li>
                            <a href="<?=base_url().route_to('nominas'); ?>"><i class="fas fa-caret-down"></i> Historial de nóminas </a>
                        </li>
                    </ul>
                </div>

                <div class="submenu" id="menu3">
                    <ul class="submenu-list" data-parent-element="#menu2"> 
                        <li>
                            <a href="<?= base_url().route_to('altoNivel'); ?>"><i class="fas fa-chart-line "></i></i> Alto Nivel </a>
                        </li>
                        <li>
                            <a href="<?= base_url().route_to('personalAdmin'); ?>"><i class="fas fa-chart-line "></i> Personal Admin </a>
                        </li>
                        <li>
                            <a href="<?= base_url().route_to('personalObrero'); ?>"><i class="fas fa-chart-line "></i> Personal Obrero </a>
                        </li>
                        <li>
                            <a href="<?= base_url().route_to('primaAntiguedad'); ?>"><i class="fas fa-chart-line "></i> Prima por antiguedad </a>
                        </li>
                        <li>
                            <a href="<?= base_url().route_to('primaProfesion'); ?>"><i class="fas fa-chart-line "></i> Prima por profesión </a>
                        </li>
                        <li>
                            <a href="<?= base_url().route_to('complementos'); ?>"><i class="fas fa-chart-line "></i> Complementos salariales </a>
                        </li>
                        <li>
                            <a href="<?= base_url().route_to('complementosOpcionales'); ?>"><i class="fas fa-chart-line "></i> Complementos opcionales </a>
                        </li>
                    </ul>
                </div>

                <div class="submenu show" id="menu4">
                    <?php  $session = \Config\Services::session(); ?>
                    <ul class="submenu-list" data-parent-element="#starterKit">
                        <li>
                            <?php if($session->codRol == 'JEF'): ?>
                                <a href="<?=base_url().route_to('usuarios'); ?>">Usuarios</a>
                            <?php endif; ?>
                        </li>
                        <li>
                            <a href="<?=base_url().route_to('usuario', $session->idUsuario ); ?>"> Configuración </a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>