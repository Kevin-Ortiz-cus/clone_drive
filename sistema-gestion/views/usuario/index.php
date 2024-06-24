<?php include_once("./views/header.php"); ?>
<div class='card-body d-flex flex-column p-0'>
    <div class="d-flex flex-row-reverse my-3">
        <button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Nuevo
            Usuario</button>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">CORREO ELECTRONICO</th>
                <th scope="col-2">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
             <?php
                foreach($this->datos as $usuarios){
                    echo "<tr id='fila-." . $usuarios['id'] . "'>";
                        echo"<th scope='row'>" . $usuarios['id'] . "</th>";
                        echo"<td>" . $usuarios['nombre_usuario']  . "</td>";
                        echo"<td>" . $usuarios['correo_electronico']  . "</td>";
                        echo"<td>" . "<button class='btn btn-primary'
                                        data-toggle='modal' id='" . $usuarios['id'] . "' data-target='#exampleModal'>Editar</button>
                                        <a class='btn btn-danger'>Eliminar</a>"  . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                <input type="hidden" value="" class="form-control" id="nombre">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" value="" class="form-control" id="nombre">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electronico</label>
                        <input type="email" value="" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pass">Contraseña</label>
                        <input type="password" value='' class="form-control" id="pass">
                    </div>
                    <div class="form-group">
                        <label for="inputState">Tipo de Usuario</label>
                        <select id="inputState" class="form-control">
                            <option>Usuario</option>
                            <option>Administrador</option>
                        </select>
                    </div>
                    <div class="d-flex d-flex flex-row-reverse mt-5">
                        <button type="button" class="btn btn-danger "
                            data-dismiss="modal">Cancelar</button>
                        <input type="submit" value="Guardar Cambios" class="btn btn-primary mr-2" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once("./views/footer.php"); ?>

<script type="text/javascript">
const editar = document.querySelector(".table__id");

const idNombre = document.querySelector("#nombre");
const idEmail = document.querySelector("#email");
const idPass = document.querySelector("#pass");

const usuario = <?php echo json_encode($this->datos); ?>;

editar.addEventListener("click", (e) => {
    const idUsuario = e.target.id;
    if(e.target.id != ''){
        const editUsuario = usuario.filter((usuario) => usuario['id'] == idUsuario);

        idNombre.value = editUsuario[0]["nombre"];
        idEmail.value = editUsuario[0]["correo"];
        idPass.value = editUsuario[0]["pass"];
    }
});
</script>