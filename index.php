<?php require_once('view/header.php');  ?>     
    
<!--========================================
       ============SLIDER DE IMG===================
       =========================================-->
    
       <div id="carouselExampleControls" class="carousel slide my-3" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">
            <img src="img/bannserjs.jpg" class="d-block w-100" alt="Slider1">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="img/photo7.jpg" class="d-block w-100" alt="Slider3">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="img/Photo6.jpg" class="d-block w-100" alt="Slider3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


       <!--========================================
       ============ INTRO ===================
       =========================================-->
    
      
    

       <!--========================================
       ============ SERVICIOS ===================
       =========================================-->
    
    <section>
    <div class="col-md-6">
          <button  type="button" class="btn btn-link " ng-click="filter()" ><h5>Filtros</h5></button>
          <button  type="button" class="btn btn-link " ng-click="filterDes()" ><h5>Descuentos</h5></button>

        </div>
      <aside  ng-show="mostrarFil">
      <div class="row w-75 mx-auto servicio-fila" >
        <div class="col-lg-12 col-md-12 col-sm-12 d-flex my-3 icono-wrap">
               <h5 class="h5t"> Categorías: </h5>
                <br>
                <select ng-model="busqueda.categoria" id="miSelect0" class="form-select  form-select-sm">
                    <option value=""></option>
                    <option value="Mujer">Mujer</option>
                    <option value="Hombre">Hombre</option>

                </select>

        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 d-flex my-3 icono-wrap">
            <h5 class="h5t"> Coleccion: </h5>
            <br>
            <select ng-model="busqueda.Coleccion" name="" id="miSelect1" class="form-select form-select-sm" ng-options="coleccion.id as coleccion.nombre for coleccion in colecciones">
        
          </select>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 d-flex my-3 icono-wrap">
        <h5 class="h5t"> Descuento: </h5>
                <br>
                <select ng-model="busqueda.Rebajas" id="miSelect2" class="form-select  form-select-sm">
                    <option value=""></option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>

                </select>
        </div>
      </div>
      <div class="col-md-6">
          <button  type="button" class="btn btn-link " ng-click="cancelar()"><h5 class="h5t">Cancelar</h5></button>
          <button  type="button" class="btn btn-link " ng-click="limpiar()"><h5 class="h5t">Limpiar</h5></button>

        </div>
       
      </aside>
     
      <aside ng-show="mostrarDes">

      <div class="row w-75 mx-auto servicio-fila my-2">

        
     <!--  <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-2 icono-wrap" ng-repeat="ropaDes in ropas" ng-if="ropaDes.Rebajas === 'Si'">
          <img ng-src="{{ropaDes.img}}" class="" alt="" width="180" height="160px">
          <div>
            <h3 class="fs-5 mt-4 px-4">{{ropaDes.nombre}}</h3>
            <p class="px-4">{{ropaDes.Descripcion}}  </p>
            <h6 class="fs-5 mt-4 px-4">{{ropaDes.precio}}</h6> <span class="badge rounded-pill text-bg-danger">Descuento 50%</span>
          </div>
      </div> -->

      <!-- Placeholdder -->

      <div class="card col-lg-6 col-md-12 col-sm-12 d-flex my-2 icono-wrap" ng-repeat="ropaDes in ropas" ng-if="ropaDes.Rebajas === 'Si'">
        <img ng-src="{{ropaDes.img}}" class="card-img-top" alt="..." width="392px" height="372px">
        <div class="card-body">
          <h5 class="card-title">{{ropaDes.nombre}}</h5>
          <p class="card-text">{{ropaDes.Descripcion}} </p>
         <div class="col-lg-6 col-md-12 col-sm-12 d-flex ali">
          <h6 class="card-subtitle m-1">{{ropaDes.precio}}</h6>
          <a href="#" class="btn badge rounded-pill text-bg-danger m-1">Descuento del 30%</a>
          </div>
        </div>
      </div>

             
        
    </div>
      <div class="col-md-6">
          <button  type="button" class="btn btn-link " ng-click="cancelar()"><h5 class="h5t">Cancelar</h5></button>
        </div>
      </aside>
    
      <div class="row w-75 mx-auto servicio-fila my-2">
        
            <div class=" cart " ng-include="tablaRopas"><!--Agregar bloques de html-->

            
            </div>
                        
      </div>
     
    </section>

    <?php require_once('view/footer.php');  ?>