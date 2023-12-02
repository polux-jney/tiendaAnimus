// typewriter 
const app =document.getElementById('typewriter');

const typewriter = new Typewriter(app,{
    loop: true,
    delay: 75
});

typewriter
.typeString('Eleva tu Estilo, Inspira tu Espíritu')
.pauseFor(200)
.start();

//////////////////LOGIN////////////////////////////

const users = [
    { email: "user1@ejemplo.com", password: "pwd0" },
    { email: "user2@ejemplo.com", password: "pwd1" },
    // ... otros usuarios
  ];
  
  function toggleForm(formId) {
    document.getElementById('signInForm').style.display = 'none';
    document.getElementById('signUpForm').style.display = 'none';
    document.getElementById(formId).style.display = 'block';
    clearErrorMessages();
  }
  
  function signIn() {
    const email = document.getElementById('signInEmail').value;
    const password = document.getElementById('signInPassword').value;
  
  if (email === "" && password === "") { 

   
  }else{
    const user = users.find(u => u.email === email && u.password === password);
  
    if (user) {
      document.getElementById('signInErrorMessage').innerText = "";
      //alert("Sign In Successful!");
      Swal.fire("Iniciar sesión con éxito!");

    } else {
      //document.getElementById('signInErrorMessage').innerText = "Invalid email or password.";
      Swal.fire("Invalido email or password!");
    }
  }
  }
  
  function signUp() {
    const email = document.getElementById('signUpEmail').value;
    const password = document.getElementById('signUpPassword').value;
    const verifyPassword = document.getElementById('verifyPassword').value;
    const acceptTerms = document.getElementById('acceptTerms').checked;
  
    if (password !== verifyPassword) {
      document.getElementById('signUpErrorMessage').innerText = "Las contraseñas no coinciden.";
      return;
    }
  
    if (!acceptTerms) {
      document.getElementById('signUpErrorMessage').innerText = "Por favor, acepte los términos y condiciones.";
      return;
    }

   if (email === "" && password === "" && verifyPassword === ""  ) { 
       
      }else{
      const newUser = { email, password };
      users.push(newUser);

      document.getElementById('signUpErrorMessage').innerText = "";
      //alert("Sign Up Successful!");
      Swal.fire("Regístrese con éxito!");
  }
      
     
  
    
  }
  
  function clearErrorMessages() {
    document.getElementById('signInErrorMessage').innerText = "";
    document.getElementById('signUpErrorMessage').innerText = "";
  }