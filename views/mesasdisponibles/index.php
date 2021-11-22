<?php
    session_start();
    if (isset($_SESSION['sesion'])) {
        
    }else {
        header('Location: '. constant('URL'));
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- sweertAlert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Mesas disponible</title>
</head>

<body>
    <?php require 'views/header.php'?>
    <div class="container"  id="container">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="coloresMesa">
                <div class="mesaDisponible">
                    <h6>Disponible</h6>
                </div>
            </div>
            <div class="coloresMesa">
                <div class="mesaOcupada">
                    <h6>Ocupada</h6>
                </div>
            </div>
            <div class="coloresMesa">
                <div class="mesaCobro">
                    <h6>Proceso de Cobro</h6>
                </div>
            </div>
            <div class="coloresMesa">
                <div class="mesaSobre">
                    <h6>Sobremesa</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <table class="table table-striped table-hover table-mesas ">
            <thead>
                <tr class="table-primary cabecera">
                    <th scope="col">Numero de mesa</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Numero total de sillas</th>
                    <th scope="col">Estado actual</th>
                    <th scope="col">Asignar</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include_once 'models/dashboard.php';
                    foreach ($this->mesas as $row) {
                        $mesas = new Mesas();
                        $mesas = $row;
                ?>
                <tr>
                    <td><span id="numeroMesa"><?php echo $mesas->tbl_id;?></span></td>
                    <td><span ><?php echo $mesas->tbl_type;?></span></td>
                    <td><span id="numeroSillas"><?php echo $mesas->tbl_chair;?></span></td>
                    <td><span id="estado">
                    <?php
                        switch ($mesas->est_id) {
                            case '1':
                                echo "<p class='table-estadoAC' style='background: rgb(0,215,20);'>Disponible</p>";
                                break;
                            case '2':
                                echo "<p class='table-estadoAC' style='background: rgb(187,107,4);'>Ocupado</p>";
                                break;
                            case '3':
                                echo "<p class='table-estadoAC' style='background: rgb(211,25,196);'>Cobrando</p>";
                                break;
                            case '4':
                                echo "<p class='table-estadoAC' style='background: rgb(191,196,17);'>Sobremesa</p>";
                                break;
                        }
                    ?>
                    </span>
                    </td>
                    <td><button  class="btnEditarMesa" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fas fa-user-edit"></i></button></td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  id="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Asignar Mesa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formModalMesas" method="POST" class="formModalMesas">
                        <input type="hidden" value="<?php echo $_SESSION['sesion'];?>" name="employee_id">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Numero de Mesa</label>
                            <input type="text" class="form-control" name="tbl_id" id="tbl_id" readonly>
                            <span class="form-line"></span>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Numero de Sillas</label>
                            <input type="text" class="form-control tbl_chair" name="tbl_chair" id="tbl_chair" readonly>
                            <span class="form-line"></span>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Estado actual</label>
                            <input type="text" class="form-control est_ac" name="est_ac"  id="est_ac" readonly>
                            <span class="form-line"></span>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Asignar a:</label>
                            <select class="form-select" name="est_id" id="est_id">
                                <option disabled selected>Selecciona estado de mesa</option>
                                <option value="1">Disponible</option>
                                <option value="2">Ocupada</option>
                                <option value="3">Proceso de cobro</option>
                                <option value="4">Sobremesa</option>
                            </select>
                            <span class="form-line"></span>
                        </div>
                        <button type="submit" class="btn btn-primary" id="btnAsignar">Asignar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <?php require 'views/footer.php'?>
    <!-- jquery-->
    <script src="<?php echo constant('URL'); ?>public/js/jquery-3.6.0.min.js"></script>
        <!-- jqueryValidate -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>

    <script src="<?php echo constant('URL'); ?>public/ajax/mesasdisponiblesajax.js"></script>

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/33cbed8d12.js" crossorigin="anonymous"></script>
</body>

</html>