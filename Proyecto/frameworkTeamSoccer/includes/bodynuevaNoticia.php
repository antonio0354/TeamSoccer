<?php
require_once 'Conexion.php';
?>
<div class="container">
    <div class="row text-center">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="login-form mt-4">
                        <form name="formulario" id="formulario" action="" method="POST" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col-md-12 form-group">
                                    <input type="text" name="titulo" placeholder="Titulo">
                                </div>

                                <div class="standalone-container col-md-12 form-group mb-4">
                                    <div id="snow-container"></div>
                                </div>



                                <script>
                                    var quill = new Quill('#snow-container', {
                                        placeholder: 'Escribe el texto de la noticia...',
                                        theme: 'snow'
                                    });


                                    $(document).ready(function () {
                                        $("#formulario").on("submit", function (){
                                        var myEditor = document.querySelector('#snow-container');
                                        var html = myEditor.children[0].innerHTML;
                                            $(this).append("<textarea name='contenidoQuill' style='display:none'>" + html + "</textarea>");
                                        });
                                    });
                                </script>

                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 mt-4">
                                    <input type="file" name="subirimagen">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="submit" name="enviar" value="Subir Noticia">
                                </div>
                                <div class="form-group col-md-12">
                                    <?php
                                    if (isset($_POST['enviar'])) {

                                        $texto = $_POST['contenidoQuill'];
                                        
                                        

                                        $target_path = "imagenes/";
                                        $PATHIMAGEN = basename($_FILES['subirimagen']['name']);
                                        $target_path = $target_path . basename($_FILES['subirimagen']['name']);


                                        if ($PATHIMAGEN != NULL) {


                                            $date = date_create();
                                            $fechaFormat = date_format($date, 'Y-m-d');

                                            if (($_POST['titulo'] != NULL) && ($texto != NULL) && ($texto != '<p><br></p>')) {


                                                if (move_uploaded_file($_FILES['subirimagen']['tmp_name'], $target_path)) {
                                                    $conex = new Conexion();
                                                    $consulta = $conex->query("INSERT INTO contenido VALUES ('', '$_POST[titulo]', '$fechaFormat', '$texto', '$target_path')");

                                                    if ($consulta) {
                                                        ?>
                                                        <p style="color:green; font-family: monospace">NOTICIA SUBIDA CORRECTAMENTE</p>
                                                        <?php

                                                    } else {
                                                        ?>
                                                        <p style="color:red; font-family: monospace"><?php echo "HA OCURRIDO UN ERROR Y NO SE HA PODIDO SUBIR LA NOTICIA CORRECTAMENTE" ?></p>
                                                        <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <p style="color:red; font-family: monospace"><?php echo "NO SE HA PODIDO SUBIR EL ARCHIVO: " . $PATHIMAGEN ?></p>
                                                    <?php
                                                }
                                            } else {
                                                ?>
                                                <p style="color:red; font-family: monospace"><?php echo "NO HAS RELLENADO TODOS LOS CAMPOS" ?></p>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <p style="color:red; font-family: monospace"><?php echo "NO HAS SELECCIONADO NINGUNA IMAGEN" ?></p>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


