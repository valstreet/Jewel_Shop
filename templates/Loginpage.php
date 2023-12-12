<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Urban Ice's authentication page.">
  <meta name="author" content="Urban Ice">
  <meta name="keywords" content="login, signup, user authentication, web security">
  <meta name="robots" content="index, follow"> 
  <title>Login / Signup Form</title>
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/loginstyles.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/0c3ed67f04.js" crossorigin="anonymous"></script>

</head>

<body>
  {% include 'header.php' %}

<main class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card-container">
          <div class="card bg-dark text-white">

            <!-- Bootstrap Toggle Switch -->
            <div class="form-check form-switch">
              <label class="form-check-label lead" for="loginSignUpToggle">Login - Sign Up</label>
              <input class="form-check-input" type="checkbox" id="loginSignUpToggle">
          </div>


            <div class="card-body p-2 text-center mt-3">
              <div class="flip-card">
                <!-- Login Form -->
                <div class="card-front">
                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  <p class="text-white-50 mb-3">Please enter your username and password</p>

                  <div class="form-outline form-white mb-4">
                    <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                    <label class="form-label lead" for="typeEmailX">Username</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                    <label class="form-label lead" for="typePasswordX">Password</label>
                  </div>

                  <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                  <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                </div>

                <!-- Signup Form -->
                <div class="card-back">
                  <h2 class="fw-bold mb-2 text-uppercase">Sign Up</h2>
                  <p class="text-white-50 mb-5">Create your account!</p>

                  <div class="form-outline form-white mb-4">
                    <input type="text" id="signUpUsername" class="form-control form-control-lg" />
                    <label class="form-label" for="signUpUsername">Username</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="email" id="signUpEmail" class="form-control form-control-lg" />
                    <label class="form-label" for="signUpEmail">Email</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" id="signUpPassword" class="form-control form-control-lg" />
                    <label class="form-label" for="signUpPassword">Password</label>
                  </div>

                  <button class="btn btn-outline-light btn-lg px-5" type="submit">Sign Up</button>
                </div>
              </div>
            </div>
           <div class="d-flex flex-column justify-content-center align-items-center mt-1 mb-3 pt-1">
            <p class="text-white-50 text-center mb-3">Log in using</p>
             <div>
            <a href="#!" aria-label="Facebook" class="text-light"><i class="fab fa-facebook-f fa-lg"></i></a>
            <a href="#!" aria-label="Twitter" class="text-light mx-4"><i class="fab fa-x-twitter fa-lg"></i></a>
           <a href="#!" aria-label="Google" class="text-light"><i class="fab fa-google fa-lg"></i></a>
             </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<script src="/assets/bootstrap/js/bootstrap.bundle.min.js" defer></script>
<script>
// JavaScript for toggling the flip card
document.addEventListener('DOMContentLoaded', function() {
  var toggleSwitch = document.getElementById('loginSignUpToggle');
  var flipCard = document.querySelector('.flip-card');
  var label = document.querySelector('.form-check-label');

  toggleSwitch.addEventListener('change', function() {
    flipCard.classList.toggle('flipped');
    label.classList.toggle('active'); // Toggle the class on the label
  });
});
</script>
</body>
</html>
