<?php require_once('header.php');  ?>    


<!--========================================
       ============ FORMULARIO C BG ==============
       =========================================-->
       <section id="seccion-contacto" class="border-bottom border-secondary border-2">
        <!--<div id="bg-contactos">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#1b2a4e" fill-opacity="1" d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
        </div>-->

      <!--========================================
       ============ FORMULARIO    ================
       =========================================-->

    <div class="container" id="contenedor-formulario">
      <div id="titulo-formulario" class="text-center mb-4">
        <div><img src="../img/023.png" alt="contacto" class="img-fluid"></div>
        <h2>Contactos</h2>
        <h4 class="text-primary mb-4" id="typewriter"></h4>
      </div>
      <form action="https://formsubmit.co/55f1fdd772e8790b5e83e7922707fd62" method="POST">
        <div class="mb-3">          
          <input type="email" class="form-control" name="Correo" id="email" placeholder="nombre@ejemplo.com" required>
        </div>
        
        <div class="mb-3">          
          <input type="text" class="form-control" name="Nombre" id="nombre" placeholder="Nombre apellido" required>
        </div>
        
        <div class="mb-3">          
          <input type="tel" class="form-control" name="Telefono" id="tel" placeholder="00-000-000-00" required>
        </div>

        <div class="mb-3">          
          <textarea class="form-control" name="Mensaje" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe tu mensaje"></textarea>
        </div>

        <input type="hidden" name="_template" value="table">
        <input type="hidden" name="_next" value="https://localhost/">
        <div class="mb-3">
          <button type="submit" class="btn btn-primary w-100 fs-5">Enviar mensaje</button>
        </div>
      </form>
    </div>  
    </section>
  
    <?php require_once('footer.php');  ?>    
