<?php include('../../../view/admin/template/header.php');
// La sentencia include() incluye y evalúa el archivo especificado.
?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mt-3">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                
                
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                              Ciudadanos
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>R.U.T</th>
                                            <th>Nombre</th>
                                            <th>Estado Penal</th>
											<th scope="col" colspan="2">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
                            foreach ($choferes as $chofer) {


                            ?>
                                <tr>
                                    <td scope="row"><?php echo $chofer->rut; ?></td>
                                    <td><?php echo $chofer->nombre; ?></td>
                                    <td><?php echo $chofer->estado_penal; ?></td>

                                    <td class="text-center"><a class="text-success" href="editar.php?id=<?php echo $chofer->id_ciudadano; ?>"><i class="bi bi-pencil-square"></a></i></td>
                                    <td class="text-center"><a onclick="return confirm('Estas seguro de eliminar?');"  class="text-danger" href="eliminar.php?id=<?php echo $chofer->id_ciudadano; ?>"><i class="bi bi-trash3-fill"></a></i></td>
                                </tr>

                            <?php
                            }
                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
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