<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Empresa</title>
    
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/quill.snow.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/EstilosRegistro.css">
</head>

<body>

    <!-- Segundo form-->
    <div class=" row col-lg-12 mb-10 justify-content-center">
       
        <form action="#" class="p-4 border rounded formContainer">

        <h2 class="mb-4 title-form">Registro para Empresas</h2>
            <!-- Datos de la cuenta-->
            <fieldset class="form-group mb-4">
                <legend>Datos de la cuenta</legend>
                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black" for="empresaForm">Nombre del responsable</label>
                        <input type="text" id="empresaForm" class="form-control"
                            placeholder="Inrese el nombre del titular">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black" for="empresaForm">Puesto</label>
                        <input type="text" id="empresaForm" class="form-control" placeholder="Puesto" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12 mb-4">
                        <label for="" class="text-black" for="empresaForm">Correo de acceso</label>
                        <input type="text" class="form-control" id="empresaForm" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6 mb-4">
                        <label for="" class="text-black" for="empresaForm">Contraseña</label>
                        <input type="password" class="form-control" id="empresaForm" required>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="" class="text-black" for="empresaForm">Repita Contraseña</label>
                        <input type="password" class="form-control" id="empresaForm" required>
                    </div>
                </div>

            </fieldset>

            <hr>
            <!-- Datos personales-->
            <fieldset class="form-group ">
                <legend>Datos de la Empresa</legend>
                <div class="row form-group mb-4">
                    <div class="col-md-12 mb-3 mb-md-0">
                        <label class="text-black" for="empresaForm">Nombre de la empresa</label>
                        <input type="nombres" id="empresaForm" class="form-control" placeholder="Nombre de la empresa"
                            required>
                    </div>
                </div>

                <div class="row form-group mb-4">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label class="text-black" for="empresaForm">RFC</label>
                        <input type="text" class="form-control required">
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="empresaForm" class="text-black">Giro de la empresa</label>
                        <select name="" id="" class="form-control">
                            <option value="Administracion">Administración</option>
                            <option value="Biologia">Biología </option>
                            <option value="Comunicaciones">Comunicaciones </option>
                            <option value="Construccion">Construcción </option>
                            <option value="Contabilidad-Finanzas">Contabilidad / Finanzas</option>
                            <option value="C-P-DC">Creatividad, Producción, Diseño Comercial</option>
                            <option value="Derecho">Derecho y Leyes </option>
                            <option value="Educacion">Educación </option>
                            <option value="Ingenieria">Ingeniería </option>
                            <option value="Logistica">Logistica, Transportación y Operación</option>
                            <option value="Mercadotecnia">Mercadotecnia, Publicidad y Operación</option>
                            <option value="Recursos-Humanos">Recursos Humanos</option>
                            <option value="Salud y Belleza">Salud y Belleza</option>
                            <option value="Sector Salud">Sector Salud </option>
                            <option value="Seguro">Seguro y Reaseguro</option>
                            <option value="Tecnologias">Tecnologias de la información y Sistemas</option>
                            <option value="Turismo">Turismo, Hospitalidad y Gastronomia</option>
                            <option value="Ventas">Ventas </option>
                            <option value="Veterinaria y Zoologia">Veterinaria y Zoologia </option>



                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="empresaForm" class="text-black">Estado</label>
                        <select name="" id="" class="form-control">
                            <option value="Morelos">Morelos</option>
                            <option value="Guerrero">Guerrero</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group mb-4 ">
                    <div class="col-md-4">
                        <label for="empresaForm" class="text-black">Municipio</label>
                        <select name="" id="" class="form-control">
                            <option value="Municipio 1">Municipio 1</option>
                            <option value="Municipio 1">Municipio 1</option>
                            <option value="Municipio 1">Municipio 1</option>
                            <option value="Municipio 1">Municipio 1</option>
                            <option value="Municipio 1">Municipio 1</option>
                            <option value="Municipio 1">Municipio 1</option>

                        </select>
                    </div>
                </div>

            </fieldset>

            <!-- Datos laborales-->
            <hr>
            <fieldset class="form-group">
                <legend>Datos Complementarios</legend>
                <div class="row form-group mb-4">
                    <div class="col-md-6">
                        <label class="text-black" for="empresaForm"> Dirección de la empresa</label>
                        <input type="text" name="empresaForm" id="a" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="text-black" for="empresaForm"> Teléfono de la empresa</label>
                        <input type="tel" name="empresaForm" id="" class="form-control" required pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="777-24-234">
                    </div>

                </div>
                <div class="row form-group mb-4">
                    <div class="col-md-6">
                        <label for="empresaForm">Página web</label>
                        <input class="form-control" type="text" name="empresaForm" placeholder="URL de la página web" />
                    </div>
                </div>

                <!-- Logo de la empresa-->
                <div class="row form-group mb-12 container_uploader" id="divInputLoad">
                    <span class="mr-2 icon-drawe-upload"></span>
                    <br/>
                    <div id="divFileUpload">
                        <label class="btn btn-primary btn-md btn-file" for="">Cargar Logotipo
                   
                        <input name="files[]" type="file" id="files" class="form-control" />
                        <br />
                        <output id="list"></output>
                    </label>
                    </div>
                   
                    <div id="file-preview-zone" class="imgPreview"> </div>
                
                </div>
                <!-- Fin Logo de la empresa-->

                <div class="row form-group mb-4">
                    <div class="col-xl-8 col-md-8">
                        <label for="empresaForm"> Resumen y descripción de la empresa</label>
                        <textarea name="" id="" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <label for="empresaForm"> Número de empleados</label>
                        <input class="form-control" type="number" name="empresaForm" id="">
                    </div>
                </div>
              
            </fieldset>







            <div class="row form-group">
                <div class="col-md-12">
                    <a href="empresaIndex.html"><input type="button"value="Registrarse" class="btn px-4 btn-primary text-white"> </a>
                </div>

            </div>

        </form>
    </div>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/quill.min.js"></script>
    <script src="js/previsualizar.js"></script>

    <script src="js/bootstrap-select.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/previsualizar.js"></script>
</body>

</html>