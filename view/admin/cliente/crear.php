<?php include('../../../view/admin/template/header.php');
// La sentencia include() incluye y evalúa el archivo especificado.
?>
<div id="layoutSidenav_content">

 <!-- Inicio Alerta Falta campo-->
            <?php
            if (isset($_GET['mensaje']) and ($_GET['mensaje']) == 'falta') {


            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error</strong> Debes llenar todos los campos
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php
            }
            ?>

           <!-- Inicio Alerta Ingresado-->
           <?php
            if (isset($_GET['mensaje']) and ($_GET['mensaje']) == 'registrado') {


            ?>
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Exito!</strong> Cliente Agregado con éxito!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php
            }
            ?>

                   <!-- Inicio Alerta Error Ingresado-->
                   <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> El Cliente ya existe.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>   
                <main>
   <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Crear Cliente</h3></div>
                                    <div class="card-body">
                                        <form action="../../../registrarcliente.php" method="POST">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="nombre" id="nombre" type="text" placeholder="Nombre" />
                                                        <label for="inputFirstName">Nombre :</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" name="apellidos"  id="apellidos" type="text" placeholder="Apellidos" />
                                                        <label for="inputLastName">Apellido</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" id="email" type="email" placeholder="name@ejemplo.com" />
                                                <label for="inputEmail">Email</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="password"  id="password" type="password" placeholder="Contraseña" />
                                                        <label for="inputPassword">Contraseña</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select name="plan" id="plan" class="form-control">
                                                            <option>Seleccionar Plan:</option>
                                                            <?php
                                                            foreach ($planes as $plan):
                                                                echo '<option value="'.$plan->id_plan.'">'.$plan->nombre.'</option>';
                                                                endforeach;
                                                            
                                                            ?>
                                                        </select>
                                                 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"> <input type="submit"  class="btn btn-primary btn-block" value="Crear Cliente"></div>
                                            </div>
                                        </form>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Hermann Heyer Molina</div>
                            <div>
                            
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
                </main>
</div>