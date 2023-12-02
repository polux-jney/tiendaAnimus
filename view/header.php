<?php
if ($_SERVER['HTTPS'] != "on") { 
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; 
    header("Location: $url"); 
    exit; 
}
?>

<!DOCTYPE html>
<html ng-app="app">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ANIMUS</title>

  <!-- Incluir Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  
  <!-- Incluir Bootstrap iconos -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  
  <!--css-->
  <link rel="stylesheet" href="../../css/main.css">
  
  <!--css blog-->
  <link rel="stylesheet" href="../../css/blog.css">

  <!--icono-->
  <link rel="shortcut icon" href="../../img/logo.png" type="image/x-icon">


  <style>
  .error-message {
    color: red;
  }
</style>

</head>    
    <body>

      <div class=" container-md  contai " ng-controller="mainCtrl" >

       <!--========================================
       ============ ENCABEZADO  ===================
       =========================================-->


    <header class="container-fluid  justify-content-center">
    <div class="row">
      
        <div class="col-md-4">
        <img src="../../img/logo.png" class="rounded-circle" alt="" width="130px" height="130px">    
        </div>

        <div class="col-md-4 oculto">
            <H1> ANIMUS </H1>        
            <h4>CLOTHING</h4>
        </div>
      
    </div> 
    </header>

    <!--Navbar-->
 
    <nav class="navbar navbar-expand-lg navbar-light  p-3 "  id="menu">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"><span class="text-primary fs-5 fw-bold">
            ANIMUS</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Inicio</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="/view/nosotros">¿Quienes somos?</a>
              </li>   
              
              <li class="nav-item">
                <a class="nav-link" href="/view/blog">blog</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="/view/contacto">Contacto</a>
              </li>

            </ul> 
            <ul class=" nav justify-content-end navbar-nav">
            <li class="nav-item">
                <a class="nav-link"  aria-current="page" href="/view/login">Sign in</a>
              </li>

            </ul>
            </div>
        
        </div>
      </nav>
     
