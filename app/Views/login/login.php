<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>NOMINAPP - Gestión de nóminas</title>
    <link rel="icon" type="image/x-icon" href="<?=base_url();?>/public/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="<?=base_url();?>/public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>/public/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>/public/assets/css/structure.css" rel="stylesheet" type="text/css" class="structure" />
    <link href="<?=base_url();?>/public/assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>/public/assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/public/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/public/assets/css/forms/switches.css">
</head>
<body class="form">

    <!-- Variables no visibles -->
    <input type="text" id="error" name="error" value="<?= (isset($msg) ? $msg : '') ?>" hidden>

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h2 class=""><span class="brand-name text-success">Gestión de nómina</span></h2>
                        <form class="text-left" action="home/iniciarSesion" method="post">
                            <div class="form" action="index.html">

                                <div id="username" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input id="username" name="username" type="text" class="form-control" placeholder="Usuario">
                                </div>

                                <div id="password" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Contraseña">
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper toggle-pass">
                                        <p class="d-inline-block">Mostrar contraseña</p>
                                        <label class="switch s-success">
                                            <input type="checkbox" id="toggle-password" class="d-none">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="field-wrapper">
                                        <div class="blockui-growl-message">
                                            <i class="flaticon-double-check"></i><h5 class="text-light"><?= isset($msg) ? $msg : null ?>.</h5>
                                        </div>
                                        <button class="btn btn-success" type="submit">Conectarse</button>
                                    </div>
                                    
                                </div>

                            </div>
                        </form>                        
                        <p class="terms-conditions">© 2022 Todos los derechos reservados. Fundación Misión Árbol.</p>

                    </div>                    
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
            </div>
        </div>
    </div>

    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?=base_url();?>/public/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?=base_url();?>/public/bootstrap/js/popper.min.js"></script>
    <script src="<?=base_url();?>/public/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?=base_url();?>/public/plugins/blockui/jquery.blockUI.min.js"></script>
    <script src="<?=base_url();?>/public/assets/js/authentication/form-1.js"></script>

</body>
</html>