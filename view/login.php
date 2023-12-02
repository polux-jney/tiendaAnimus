<?php require_once('header.php');  ?>    


<div class="container-lg logi">
    <div class="row mt-1 mb-1 pt-1 justify-content-center">
      <div class="col-md-10 ">
        
        <form id="signInForm" >
        <h2>Sign In</h2>
          <div class="mb-3">
            <label for="signInEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="signInEmail" required>
          </div>
          <div class="mb-3">
            <label for="signInPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="signInPassword" required>
          </div>
          <button type="submit" class="btn btn-primary" onclick="signIn()">Sign In</button>
          <button type="button" class="btn btn-primary"><a href="/">Cancelar</a></button>
          <div class="col-md-6">
          <button  type="button" class="btn btn-link text-light" onclick="toggleForm('signUpForm')">¿No tienes una cuenta? Únete</button>
         </div>
        </form>

        <div id="signInErrorMessage" class="error-message mt-3"></div>
      </div>
      <div class="col-md-10 mt-1 mb-1 pt-1">
        
        <form id="signUpForm" style="display: none;"  >
        <h2>Sign Up</h2>
          <div class="mb-3">
            <label for="signUpEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="signUpEmail" required>
          </div>
          <div class="mb-3">
            <label for="signUpPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="signUpPassword" required>
          </div>
          <div class="mb-3">
            <label for="verifyPassword" class="form-label">Verify Password</label>
            <input type="password" class="form-control" id="verifyPassword" required>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="acceptTerms" required>
            <label class="form-check-label" for="acceptTerms">Acepto los términos y condiciones</label>
          </div>
          <button type="submit" class="btn btn-primary" onclick="signUp()">Sign Up</button>
          <button type="button" class="btn btn-primary"><a href="/">Cancelar</a></button>

          <div class="col-md-6">
        <button   type="button" class="btn btn-link text-light" onclick="toggleForm('signInForm')">¿Ya tienes una cuenta? Inicia sesión</button>
      </div>
        </form> 
        <div id="signUpErrorMessage" class="error-message mt-3"></div>
      </div>
    </div>
  </div>
  
  <script>
    
  </script>

<?php require_once('footer.php');  ?>    



