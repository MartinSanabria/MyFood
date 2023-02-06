<div class="offcanvas-header">

              <div class="dropdown pb-4">
                 <a href="#" class="pt-2 d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                        <?php
                                            echo $_SESSION["nombre"]." ".$_SESSION["apellido"] ;
                                        ?>            

                  </a>
                 <ul class="dropdown-menu dropdown-menu-ligth text-small shadow">
                       <li><a class="dropdown-item" href="#">Ajustes</a></li>
                       <li><a class="dropdown-item" href="#">Perfil</a></li>
                       <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Normal</a></li>
                       <li><a class="dropdown-item" href="#">Admin</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="controllers/controlador_logout.php">Cerrar sesion</a>
                        </li>
                  </ul>
                </div>
              
</div>

