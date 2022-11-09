<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sitio web upc</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/Styles.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.jpg" alt="">
        <span class="d-none d-lg-block">Web Upc</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Buscar" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
        
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Salir</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
      </ul>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Menú</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Opciónes</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse mod" data-bs-parent="#sidebar-nav">
             <li class="all"><button type="button" class="btn btn-primary all2" data-bs-toggle="modal" data-bs-target="#exampleMo">Registrar</button></li>
             <li class="all">  <button type="button" class="btn btn-primary all2" data-bs-toggle="modal" data-bs-target="#exampleModal">Consultar</button></li>
             <li class="all"><button type="button" class="btn btn-primary all2" data-bs-toggle="modal" data-bs-target="#exampleMod">Modifcar</button></li>
             <li class="all"><button type="button" class="btn btn-danger all2" data-bs-toggle="modal" data-bs-target="#exampleModa">Eliminar</button></li>
        </ul>
      </li><!-- End Components Nav -->
      
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
          </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Tablero</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Mes</a></li>
                    <li><a class="dropdown-item" href="#">Año</a></li>
                  
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Usuarios <span>| Este año</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
    </section>
  </main><!-- End #main -->

  <!-- Modal Consultar -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Consultar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" >
          <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input id="show" type="number" class="form-control"  value="" placeholder="Documento"  required>            
            <div class="invalid-feedback">Este campo es obligatorio.</div>                                   
          </form>
          <div class="con"><button type="submit " class="btn btn-primary" id="Submit" >Consultar</button></div>

          <div class="polv" id="polv">
            <div>
              <label for="validationCustom01" class="form-label">Documento</label>
              <input type="text" placeholder="Numero Documento" class="form-control" id="validationCustom01"
                  disabled />
             </div>
             <div>
              <label for="validationCustom01" class="form-label">Nombre</label>
              <input type="text" placeholder="Nombre Usuario" class="form-control" id="validationCustom01"
                  disabled />
             </div>
             <div>
              <label for="validationCustom01" class="form-label">Ciudad</label>
              <input type="text" placeholder="Ciudad Residencia" class="form-control" id="validationCustom01"
                  disabled />
             </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cerrar</button>          
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Eliminar -->
  <div class="modal fade" id="exampleModa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input id="mostrar" type="number" class="form-control"  value="" placeholder="Documento"  required>            
            <div class="invalid-feedback">Este campo es obligatorio.</div>                                   
          </form>
          <div class="con"><button type="submit " class="btn btn-primary" id="enviar" >Buscar</button></div>

          <div class="polv" id="polvv">
            <div>
              <label for="validationCustom01" class="form-label">Documento</label>
              <input type="text" placeholder="Numero Documento" class="form-control" id="validationCustom01"
                  disabled />
             </div>
             <div>
              <label for="validationCustom01" class="form-label">Nombre</label>
              <input type="text" placeholder="Nombre Usuario" class="form-control" id="validationCustom01"
                  disabled />
             </div>
             <div>
              <label for="validationCustom01" class="form-label">Ciudad</label>
              <input type="text" placeholder="Ciudad Residencia" class="form-control" id="validationCustom01"
                  disabled />
             </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Eliminar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Modificar -->
  <div class="modal fade" id="exampleMod" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input id="mostrar2" type="number" class="form-control"  value="" placeholder="Documento"  required>            
            <div class="invalid-feedback">Este campo es obligatorio.</div>                                   
          </form>
          <div class="con"><button type="submit " class="btn btn-primary" id="enviar2" >Buscar</button></div>
          

          <form  id="mostrando" class="row g-2 needs-validation polv" novalidate>
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Documento</label>
                <input type="number" placeholder="Numero Documento" class="form-control" id="validationCustom01"
                    disabled/>                   
            </div>
  
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Nombre</label>
                <input type="text" placeholder="Nombre" class="form-control" id="validationCustom01" disabled />                   
            </div>
  
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label" >Sexo</label>
                <select id="indefinido" class="form-select"  required>   
                    <option disabled selected></option>              
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                    <option value="Indefinido" >Indefinido</option>                   
                </select>
  
               <div class="contenedor" id="contenedor">
                <label for="validationCustom01" class="form-label" >como quieres que te llamen?</label>
                <input type="text" placeholder="Nombre" class="form-control" id="validationCustom01" required />
               </div>
                <div class="invalid-feedback">Este campo es obligatorio.</div>
            </div>
  
            <div class="col-md-6">
                <label for="validationCustomUsername" class="form-label">Fecha Nacimiento</label>
                <input type="date" class="form-control" id="validationCustom01" required />
                <div class="invalid-feedback">Este campo es obligatorio.</div>
            </div>
  
            <div class="col-md-4">
                <label for="validationCustom03" class="form-label">Estado Civil</label>
                <select id="Estado" class="form-select" required>
                    <option disabled selected></option>
                    <option value="Soltero">Soltero</option>
                    <option value="Casado">Casado</option>
                    <option value="UnionLibre">Union Libre</option>
                </select>
                <div class="contenedorEstado" id="contenedorEstado">
                    <label for="validationCustom01" class="form-label" >Nombre de su conyuge</label>
                    <input type="text" placeholder="Nombre" class="form-control" id="validationCustom01" required />
                   </div>
                <div class="invalid-feedback">Este campo es obligatorio.</div>
            </div>
  
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Tiene hijos?</label>
                <select id="bool" class="form-select" required>
                    <option selected></option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
                <div class="contenedorBool" id="contenedorBool">
                    <label for="validationCustom01" class="form-label" >Cuantos?</label>
                    <input type="number" placeholder="Cantidad" class="form-control" id="validationCustom01" required />
                   </div>
                <div class="invalid-feedback">Este campo es obligatorio.</div>
            </div>
  
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Esta trabajando actualmente?</label>
                <select id="Trabajando" class="form-select" required>
                    <option selected></option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
                <div class="contenedorWork" id="contenedorWork">
                    <label for="validationCustom01" class="form-label" >Nombre de la empresa</label>
                    <input type="text" placeholder="Nombre empresa" class="form-control" id="validationCustom01" required />
                    <br>
                    <label for="validationCustom01" class="form-label" >Cuanto gana?</label>
                        <input type="text" placeholder="Salario" class="form-control" id="validationCustom01" required />
                    
                   </div>
                <div class="invalid-feedback">Este campo es obligatorio.</div>   
            </div>    
            
            <div class="col-md-4">
                <label for="form-label">Departamento de recidencia</label>
                <select id="departamento" class="form-select" required>
                                     
                </select>
                <div class="invalid-feedback">Este campo es obligatorio.</div>  
            </div>
  
            <div class="col-md-4">
                <label for="form-label">Ciudad de recidencia</label>
                <select  id="ciudad" class="form-select" required>
                  
                </select>
                <div class="invalid-feedback">Este campo es obligatorio.</div>  
            </div>
  
            <div class="col-md-4">
                <label for="form-label">Estrato</label>
                <br>
                <input id="estrato" type="number" class="form-control" required>
                <div class="invalid-feedback">Este campo es obligatorio.</div>
                <label for="form-label" id="beneficio"></label>
                  
            </div>
  
            <div class="col-12">
                <button id="Submit" class="btn btn-primary" type="submit">Guardar Cambios</button>
            </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>          
        </div>
      </div>
    </div>
  </div>
<!-- Modal Registro -->
  <div class="modal fade" id="exampleMo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrate</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h1>Registrarse</h1>
          <div class="container">
            <form action="resgistro.php" method="POST" id="formulario"  name="formulario" class="formulario" novalidate>
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label" >Documento</label>
                    <input type="input" name="documento" placeholder="Numero Documento" class="form-control" required />
                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                </div> 
      
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label">Nombre</label>
                    <input type="text" name="nombre" placeholder="Nombre" class="form-control" required />
                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                </div>
      
                <div class="col-md-6">
                    <label for="validationCustom01" class="form-label" >Sexo</label>
                    <select id="indefinidoo" class="form-select"  required>   
                        <option disabled selected></option>              
                        <option name="genero" id="hombre" value="Hombre">Hombre</option>
                        <option name="genero" id="mujer" value="Mujer">Mujer</option>
                        <option value="Indefinido" >Indefinido</option>                   
                    </select>
                   <div class="contenedor" id="contenedorr">
                    <label for="validationCustom01" class="form-label" >como quieres que te llamen?</label>
                    <input type="text" name="genero" id="indefini" placeholder="Nombre" class="form-control" id="validationCustom01" required />
                   </div>
                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                </div>
      
                <div class="col-md-6">
                    <label for="validationCustomUsername" class="form-label">Fecha Nacimiento</label>
                    <input type="date" name="fecha" class="form-control" required />
                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                </div>
      
                <div class="col-md-4">
                    <label for="validationCustom03" class="form-label">Estado Civil</label>
                    <select class="form-select" required>
                        <option disabled selected></option>
                        <option name="estado" id="soltero" value="Soltero">Soltero</option>
                        <option name="estado" id="casado" value="Casado">Casado</option>
                        <option name="estado" id="uni" value="UnionLibre">Union Libre</option>
                    </select>
                    <div class="contenedor" id="contenedorEstadoo">
                        <label for="validationCustom01" class="form-label" >Nombre de su conyuge</label>
                        <input type="text" name="estado" placeholder="Nombre" class="form-control" id="validationCustom01" required />
                       </div>
                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                </div>
      
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Tiene hijos?</label>
                    <select class="form-select" required>
                        <option selected></option>
                        <option name="hijo" id="si" value="Si">Si</option>
                        <option name="hijo" id="no" value="No">No</option>
                    </select>
                    <div class="contenedor" id="contenedorBool2">
                        <label for="validationCustom01" class="form-label" >Cuantos?</label>
                        <input type="input" name="hijo" placeholder="Cantidad" class="form-control" id="validationCustom01" required />
                       </div>
                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                </div>
      
                <div class="col-md-4">
                    <label for="validationCustom04" class="form-label">Esta trabajando actualmente?</label>
                    <select class="form-select" required>
                        <option selected></option>
                        <option name="trabajo" id="si" value="Si">Si</option>
                        <option name="trabajo" id="no" value="No">No</option>
                    </select>
                    <div class="contenedor" id="contenedorWork2">
                        <label for="validationCustom01" class="form-label" >Nombre de la empresa</label>
                        <input type="text" name="trabajo" placeholder="Nombre empresa" class="form-control" id="validationCustom01" required />                        
                       </div>
                    <div class="invalid-feedback">Este campo es obligatorio.</div>   
                </div>    
                
                <div class="col-md-4">
                    <label for="form-label">Departamento de recidencia</label>
                    <select class="form-select" required>                         
                    </select>
                    <div class="invalid-feedback">Este campo es obligatorio.</div>  
                </div>
      
                <div class="col-md-4">
                    <label for="form-label">Ciudad de recidencia</label>
                    <select  class="form-select" required>
                    </select>
                    <div class="invalid-feedback">Este campo es obligatorio.</div>  
                </div>
      
                <div class="col-md-4">
                    <label for="form-label">Estrato</label>
                    <br>
                    <input type="input" name="estrato" class="form-control" required>
                    <div class="invalid-feedback">Este campo es obligatorio.</div>
                    <label for="form-label" id="beneficio2"></label>
                      
                </div>
      
                <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="Registrase">
                </div>

            </form>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>        
        </div>
      </div>
    </div>
  </div>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Web Upc</span></strong>.Todos los derechos 
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/registroApp.js"></script>
</body>
</html>