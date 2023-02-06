<?php require_once VIEW_LAYOUT_PATH . 'login_header.php' ?>
<?php
include "models/conexion.php";
include "controllers/controlador_login.php";



?>

<!-- INSERTAR CONTENIDO -->
<!-- PERSONAL CSS -->
<link rel="stylesheet" href="<?= URL . "public/css/login.css" ?>">
    <main role="main" class="container container-content">
                <div class="row">
                    <div id="login" class="col-lg-4 offset-lg-4 col-md-6 offset-md-3
                        col-12">
                        <div class="welcome-text">
                            <h2>Bienvenido</h2>
                        </div>
                        <?php 
                             mostrarTextoError(); 
                        ?>
                        <img class="img-fluid mx-auto d-block rounded"
                            src="/MyFood/public/img/loginPIC.png" style="height:200px;" />
                    <div class="content">   
              
                        <form method="post" class="form" action="">
                 
                            <div class="form-group">
                                <label for="correo">Correo</label>
                                <input id="correo" name="correo"
                                    class="form-control" type="email"
                                    placeholder="Correo electrónico">
                            </div>
                            <div class="form-group">
                                <label for="palabraSecreta">Contraseña</label>
                                <input id="palabraSecreta" name="palabraSecreta"
                                    class="form-control" type="password"
                                    placeholder="Contraseña">
                            </div>
                        
                            
                                <div class="row mt-3 cont-button">
                                        <input id="bton" name="btningresar"
                                        class="btn btn-primary" type="submit"
                                        placeholder="Ingresar" value="INICIAR SESION">
                                    
                                        <input id="resgistbtn" name="resgistbtn"
                                        class="btn btn-info" data-bs-toggle="modal" data-bs-target="#btnregis"
                                        type="buton" placeholder="Ingresar" value="REGISTRO">
                                    
                                        <input id="resgistbtn" name="resgistbtn"
                                        class="btn btn-info" data-bs-toggle="modal" data-bs-target="#btrRecupe"
                                        type="buton"
                                        placeholder="Olvide mi contraseña" value="OLVIDE MI CONTRASEÑA">
                                </div>

                        </form>
                    </div>
                </div>
                    <!--Modal 1 -->
        <div class="modal fade" id="btnregis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">
                <img src="/MyFood/public/img/logo.png" alt="logosaomia logo" style="max-width:20px;" class="img-fluid">
                    Formulario de registro
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                    <h3>Ingrese sus datos de registro</h3>
                    <form action="" method="post">

                        <div class="row pt-1">
                            <div class="col-6">
                                    <label for="Nnombre">Nombres</label>
                                    <input id="Nnombre" name="Nnombre"
                                        class="form-control" type="text"
                                        placeholder="Nombres" data-toggle="tooltip" data-placement="top" 
                                                title="Puedes colocar tus dos nombres aqui">
                            </div>

                            <div class="col-6">
                            <label for="Napellido">Apellidos</label>
                                    <input id="Napellido" name="Napellido"
                                        class="form-control" type="text"
                                        placeholder="Apellidos"  data-toggle="tooltip" data-placement="top" 
                                                title="Puedes colocar tus dos apellidos aqui">
                            </div>

                        </div>
                        <div class="row pt-2">
                            <div class="form-group">
                                        <label for="Ncorreo">Correo</label>
                                        <input id="Ncorreo" name="Ncorreo"
                                            class="form-control" type="email"
                                            placeholder="Correo electrónico">
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-6">
                                <label for="NContra">Contraseña</label>
                                        <input id="NContra" name="NContra"
                                            class="form-control" type="password"
                                            placeholder="Contraseña">
                                
                            </div>
                            <div class="col-6">
                                <label for="NContra1">Repita su contraseña</label>
                                            <input id="NContra1" name="NContra1"
                                                class="form-control" type="password"
                                                placeholder="Contraseña" 
                                                data-toggle="tooltip" data-placement="top" 
                                                title="Recuerda llenar este campo con la misma contraseña" 
                                                >
                                
                            </div>

                        </div>
                        <div class="row pt-5">
                            <label>Fecha de nacimiento</label>
                        </div>
                        <div class="row pb-5">

                            <div class="col-6">
                            
                            <div class="input-group date" id="datepicker">
                                <input name="fecha" type="text" class="form-control">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                    
                    
                            </div>
            
                            <div class="col-2">
                            <div>
                                <SELECT id="SexoF" name="SexoF" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="row pt-5">
                                     <label>Sexo</label>
                                    </div>
                                    <OPTION class="dropdown-item" value="M">M</OPTION>

                                    <OPTION class="dropdown-item" value="F">F</OPTION>

                                </SELECT>
                            </div>
            
                            </div>

                            <div class="col-2 ms-2">
                                <div>
                                    <SELECT id="cargoF" name="cargoF" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="row pt-5">
                                        <label>Cargo</label>
                                        </div>
                                        <OPTION class="dropdown-item" value="Admin">Admin</OPTION>

                                        <OPTION class="dropdown-item" value="Fellow">Comun</OPTION>

                                    </SELECT>
                                </div>
                            </div>

                        </div>

                        <div class="row pt-3 ms-5 pb-3">
                            <div class="col-6">
                                <input id="btResgisnew" name="btResgisnew"
                                            class="btn btn-primary" type="submit"
                                            placeholder="Registrase">
                            </div>
                            <div class="col-6">
                                <input id="btcancel" name="btcancel"
                                            class="btn btn-danger" type="submit"
                                            placeholder="Cancelar" value="Cancelar"
                                            >
                            </div>
                        </div>

                    
                    </form>



              
            </div>
          </div>
        </div>
    </div>

    <!--modal 2-->
    <div class="modal fade" id="btrRecupe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">
                <img src="/MyFood/public/img/logo.png" alt="logosaomia logo" style="max-width:20px;" class="img-fluid">
                    Formulario de recuperacion
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                    <h3>Solictud de cambio de contraseña</h3>
                    
                    <div class="row pt-1">
                        <div class="col-6">
                                <label for="Nnombre">Nombres</label>
                                <input id="Nnombre" name="Nnombre"
                                    class="form-control" type="text"
                                    placeholder="Nombres" data-toggle="tooltip" data-placement="top" 
                                            title="Puedes colocar tus dos nombres aqui">
                        </div>

                        <div class="col-6">
                        <label for="Napellido">Apellidos</label>
                                <input id="Napellido" name="Napellido"
                                    class="form-control" type="text"
                                    placeholder="Apellidos"  data-toggle="tooltip" data-placement="top" 
                                            title="Puedes colocar tus dos apellidos aqui">
                        </div>

                    </div>
                    <div class="row pt-2">
                        <div class="form-group">
                                    <label for="Ncorreo">Correo</label>
                                    <input id="Ncorreo" name="Ncorreo"
                                        class="form-control" type="email"
                                        placeholder="Correo electrónico">
                        </div>
                    </div>

                    <div class="row pt-3 ms-5 pb-3">
                        <div class="col-6">
                            <input id="btnSol" name="btnSol"
                                        class="btn btn-success" type="submit"
                                        placeholder="btnSol" value="btnSol">
                        </div>
                        <div class="col-6">
                            <input id="btcancel" name="btcancel"
                                        class="btn btn-danger" type="submit"
                                        placeholder="Cancelar" value="Cancelar"
                                        >
                        </div>
                    </div>
              
            </div>
          </div>
        </div>
    </div>
    </main>
   

<!-- FIN CONTENIDO -->

<?php require_once VIEW_LAYOUT_PATH . "footer.php" ?>
    
