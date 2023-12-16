<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Loginpage.twig */
class __TwigTemplate_2a23c5e6117711448b81a894ed8ccf1d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta name=\"description\" content=\"Urban Ice's authentication page.\">
  <meta name=\"author\" content=\"Urban Ice\">
  <meta name=\"keywords\" content=\"login, signup, user authentication, web security\">
  <meta name=\"robots\" content=\"index, follow\"> 
  <title>Login / Signup Form</title>
  <link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"/assets/loginstyles.css\">
  <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" rel=\"stylesheet\">
  <script src=\"https://kit.fontawesome.com/0c3ed67f04.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js\"></script>
        <script src=\"https://www.gstatic.com/firebasejs/8.0.0/firebase-auth.js\"></script>



</head>

<body>
    ";
        // line 23
        $this->loadTemplate("header.twig", "Loginpage.twig", 23)->display($context);
        // line 24
        echo "
<main class=\"vh-100 gradient-custom\">
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">
        <div class=\"card-container\">
          <div class=\"card bg-dark text-white\">

            <div class=\"form-check form-switch\">
              <label class=\"form-check-label lead\" for=\"loginSignUpToggle\">Login - Sign Up</label>
              <input class=\"form-check-input\" type=\"checkbox\" id=\"loginSignUpToggle\">
            </div>

            <div class=\"card-body p-2 text-center mt-3\">
              <div class=\"flip-card\">
                <!-- Login Form -->
                <div class=\"card-front\">
                  <form id=\"loginForm\">
                    <h2 class=\"fw-bold mb-2 text-uppercase\">Login</h2>
                    <p class=\"text-white-50 mb-3\">Please enter your email and password</p>

                    <div class=\"form-outline form-white mb-4\">
                      <input type=\"email\" id=\"typeEmailX\" name=\"email\" class=\"form-control form-control-lg\" />
                      <label class=\"form-label lead\" for=\"typeEmailX\">Email</label>
                    </div>

                    <div class=\"form-outline form-white mb-4\">
                      <input type=\"password\" id=\"typePasswordX\" name=\"password\" class=\"form-control form-control-lg\" />
                      <label class=\"form-label lead\" for=\"typePasswordX\">Password</label>
                    </div>

                    <p class=\"small mb-5 pb-lg-2\"><a class=\"text-white-50\" href=\"#!\">Forgot password?</a></p>

                    <button class=\"btn btn-outline-light btn-lg px-5\" type=\"submit\">Login</button>
                  </form>
                </div>

                <!-- Signup Form -->
                <div class=\"card-back\">
                  <form id=\"signupForm\">
                    <h2 class=\"fw-bold mb-2 text-uppercase\">Sign Up</h2>
                    <p class=\"text-white-50 mb-5\">Create your account!</p>

                    <div class=\"form-outline form-white mb-4\">
                      <input type=\"text\" id=\"signUpUsername\" name=\"username\" class=\"form-control form-control-lg\" />
                      <label class=\"form-label\" for=\"signUpUsername\">Username</label>
                    </div>

                    <div class=\"form-outline form-white mb-4\">
                      <input type=\"email\" id=\"signUpEmail\" name=\"email\" class=\"form-control form-control-lg\" />
                      <label class=\"form-label\" for=\"signUpEmail\">Email</label>
                    </div>

                    <div class=\"form-outline form-white mb-4\">
                      <input type=\"password\" id=\"signUpPassword\" name=\"password\" class=\"form-control form-control-lg\" />
                      <label class=\"form-label\" for=\"signUpPassword\">Password</label>
                    </div>

                    <button class=\"btn btn-outline-light btn-lg px-5\" type=\"submit\">Sign Up</button>
                  </form>
                </div>
              </div>
            </div>

             <div class=\"d-flex flex-column justify-content-center align-items-center mt-1 mb-3 pt-1\">
      <p class=\"text-white-50 text-center mb-3\">Log in using</p>
      <div>
        <a href=\"#!\" aria-label=\"Google\" class=\"text-light\" id=\"googleSignInButton\"><i class=\"fab fa-google fa-lg\"></i></a>
      </div>
    </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Function to handle form submission
    function handleFormSubmit(form, url) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            fetch(url, {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                if (data.includes('successful, redirecting...')) {
                    window.location.href = '/public/index.php'; // Redirect to homepage
                } else {
                    alert(data); // Show other messages
                }
            })
            .catch(error => console.error('Error:', error));
        });
    }

    // Login form submission with AJAX
    var loginForm = document.getElementById('loginForm');
    if (loginForm) {
        handleFormSubmit(loginForm, '/public/login.php');
    }

    // Signup form submission with AJAX
    var signupForm = document.getElementById('signupForm');
    if (signupForm) {
        handleFormSubmit(signupForm, '/public/signup.php');
    }

    // Toggle the flip card for login and signup
    var toggleSwitch = document.getElementById('loginSignUpToggle');
    var flipCard = document.querySelector('.flip-card');
    var label = document.querySelector('.form-check-label');

    if (toggleSwitch && flipCard && label) {
        toggleSwitch.addEventListener('change', function() {
            flipCard.classList.toggle('flipped');
            label.classList.toggle('active');
        });
    }
});
</script>
<script>

  //  Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: \"AIzaSyBLMazrNKsGqn9clPXllttB8KLE7bvzc5Q\",
    authDomain: \"urbaniceapi.firebaseapp.com\",
    projectId: \"urbaniceapi\",
    storageBucket: \"urbaniceapi.appspot.com\",
    messagingSenderId: \"765846073050\",
    appId: \"1:765846073050:web:6fb33e8f7b73e6b416ffe3\",
    measurementId: \"G-2C55P9N4NF\"
  };

  // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
</script>
 <script>
  document.addEventListener('DOMContentLoaded', function() {
            var signInButton = document.getElementById('googleSignInButton');
            if (signInButton) {
                signInButton.addEventListener('click', signInWithGoogle);
            }
        });

        function signInWithGoogle() {
            var provider = new firebase.auth.GoogleAuthProvider();
            firebase.auth().signInWithPopup(provider).then(function(result) {
            // Send token to backend via AJAX for verification and user session creation
            var idToken = result.credential.idToken;
            fetch('/public/login.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'idToken=' + encodeURIComponent(idToken)
            })
            .then(response => response.text())
            .then(data => {
                // Handle response from backend
                console.log(data);
                window.location.href = '/public/index.php'; // Redirect on success
            })
            .catch(error => console.error('Error:', error));
        }).catch(function(error) {
            // Handle Errors here.
            console.error('Error during Google Sign-In:', error);
        });
    }
    </script>
    <script>
    FileInputStream serviceAccount =
new FileInputStream(\"C:/Users/valen/Downloads/urbaniceapi-firebase-adminsdk-57s8l-ba66aa892e.json\");

FirebaseOptions options = new FirebaseOptions.Builder()
  .setCredentials(GoogleCredentials.fromStream(serviceAccount))
  .build();

FirebaseApp.initializeApp(options);
</script>
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Loginpage.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  63 => 24,  61 => 23,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Loginpage.twig", "C:\\xampp\\htdocs\\Jewel_Shop\\templates\\Loginpage.twig");
    }
}
