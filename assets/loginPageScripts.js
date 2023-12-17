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


  //  Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyBLMazrNKsGqn9clPXllttB8KLE7bvzc5Q",
    authDomain: "urbaniceapi.firebaseapp.com",
    projectId: "urbaniceapi",
    storageBucket: "urbaniceapi.appspot.com",
    messagingSenderId: "765846073050",
    appId: "1:765846073050:web:6fb33e8f7b73e6b416ffe3",
    measurementId: "G-2C55P9N4NF"
  };

  // Initialize Firebase
        firebase.initializeApp(firebaseConfig);

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
};
</script>