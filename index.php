<html lang="es">
    <head>
        <title>CRUD: Editar, Guardar & Eliminar Datos Usando jQuery Tabledit con Ajax y PHP</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    </head>
    <body>
        <div class="container">
            <h1 align="center">CRUD: Editar, Guardar & Eliminar Datos Usando jQuery Tabledit con Ajax y PHP</h1>
            <br />
            <h3>Employee Database</h3>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="emp_list" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Emp ID</th>
                                    <th>Employee Nombre</th>
                                    <th>Employee Designacion</th>
                                    <th>Gender</th>
                                    <th>Numero de Contacto</th>
                                </tr>
                            </thead>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
        <script type="text/javascript" language="javascript">
            $(document).ready(function () {
                var dataTable = $("#emp_list").DataTable({
                    processing: true,
                    serverSide: true,
                    order: [],
                    ajax: {
                        url: "fetch.php",
                        type: "POST",
                    },
                });
 
                $("#emp_list").on("draw.dt", function () {
                    $("#emp_list").Tabledit({
                        url: "edit.php",
                        dataType: "json",
                        columns: {
                            identifier: [0, "id"],
                            editable: [
                                [1, "emp_name"],
                                [2, "emp_designation"],
                                [3, "gender", '{"1":"Male","2":"Female"}'],
                                [4, "emp_contact"],
                            ],
                        },
                        restoreButton: false,
                        onSuccess: function (data, textStatus, jqXHR) {
                            if (data.action == "delete") {
                                $("#" + data.id).remove();
                                $("#emp_list").DataTable().ajax.reload();
                            }
                        },
                    });
                });
            });
        </script>
    </body>
</html>