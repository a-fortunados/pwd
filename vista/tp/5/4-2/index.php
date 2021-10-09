<?php
include_once '../../../../configuracion.php';
$sesion = new Session();
if ($sesion->activa()) {
    header('Location: paginaSegura.php');
} else {
    $titulo = "TP5 - EJ4.2";
    include_once '../../../estructura/cabecera.php';
}
?>
<div class="container">
    <div class="card bg-dark text-white rounded-3 mt-3 mb-3">
        <div class="card-body p-4">
            <figure class="mb-0">
                <blockquote class="blockquote">
                    <p class="bp-2 fs-6">
                        Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario y la password para loguearse. Los datos del formulario son enviados a un script verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo y en caso contrario un mensaje de error.
                    </p>
                    <p class="bp-2 fs-6">
                        Realizar la validación de este formulario. Chequear no solo que se hayan cargado el usuario y la contraseña antes de ser enviados al servidor sino que también debe realizar un control de contraseña segura (La contraseña debe tener como mínimo 8 caracteres, no puede ser igual que el nombre de usuario ingresado y debe contener letras y números).
                    </p>
                </blockquote>
            </figure>
        </div>
    </div>

    <h3 class="text-center">Member Login</h3>
    <form class="needs-validation" novalidate name="form-ej3" action="verificarLogin.php" method="post">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-floating col-md-4 mb-3">
                <input type="text" name="username" id="username" maxlength="15" placeholder="Username" class="form-control" required>
                <label for="username">Username</label>
                <div class="valid-feedback">Look good!</div>
                <div class="invalid-feedback">Please, enter your username!</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-floating col-md-4 mb-3">
                <input type="password" name="password" id="password" maxlength="15" placeholder="Password" minlength="8" class="form-control" required>
                <label for="password">Password</label>
                <div class="valid-feedback">Look good!</div>
                <div class="invalid-feedback">Please, enter your password!</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <button class="btn btn-block btn-success w-100 btn-lg" type="submit">Login</button>
            </div>
        </div>
    </form>
</div>

<?php
include_once '../../../estructura/pie.php';
