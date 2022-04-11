<?= $this->extend('template/template'); ?>

<?= $this->section('pluginsTop') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <!-- BEGIN CONTENT AREA -->
            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                    <div class="widget-content-area br-4">
                        <div class="widget-one">

                            <h6>!Bienvenido a la aplicación NominApp para la Fundación Misión Árbol¡</h6>

                            <p class="">Para realizar cualquier acción recuerda pasar el cursor por el menú lateral izquierdo y seleccionar la sección que te interese.</p>

                            <p class="">Si sientes que es necesario, puedes presionar la rueda que está en el laterla derecho y seleccionar otro esquema de colores con el que te sientas más cómodo.</p>

                        </div>
                    </div>
                </div>

            </div>
            <!-- END CONTENT AREA -->


        </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2022 <a target="_blank" href="https://designreset.com">Fundación Misión Árbol</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Hecho con <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>

<?= $this->section('pluginsBottom') ?>
<?= $this->endSection() ?>