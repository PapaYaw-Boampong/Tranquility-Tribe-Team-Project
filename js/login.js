document.getElementById("loginForm").addEventListener("submit", function(event) {

    event.preventDefault(); // Prevent form submission

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var emailExpression = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var passwordExpression = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;

    if (!emailExpression.test(email)) {
        swal({
            title: 'Error!',
            text: 'Please Enter a Valid Email',
            icon: 'error',
            button: 'OK'
        });
        return;
    }

    if (!passwordExpression.test(password)) {
        swal({
            title: 'Error!',
            text: 'Please Enter a Valid Password.',
            icon: 'error',
            button: 'OK'
        });
        return;
    }

    // Validate form data
    if (email.trim() === '' || password.trim() === '') {
        // Show SweetAlert for empty fields
        swal({
            title: 'Error!',
            text: 'Please enter your email and password.',
            icon: 'error',
            button: 'OK'
        });
        return;
    }

    // Submit the form data using fetch
    fetch('../actions/login_user_action.php', {
        method: 'POST',
        body: new FormData(document.getElementById('login-form'))
    })
    .then(response => {
        if (response.ok) {
            return response.json();
           
        } else {
            // Show SweetAlert for login error
            swal({
                title: 'Error!',
                text: 'Invalid email or password.',
                icon: 'error',
                button: 'OK'
            });
        }
    })

    .then(data => {
        // Handle the success status returned by the PHP file
        if (data.success) {

            // Redirect to another page after successful login
            window.location.href = '../';
        } else {
      
            // Display a SweetAlert for login error
            swal({
                title: 'Error!',
                text: 'Invalid email or password.',
                icon: 'error',
                button: 'OK'
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
        // Show SweetAlert for unexpected error
        swal({
            title: 'Error!',
            text: 'An unexpected error occurred. Please try again later.',
            icon: 'error',
            button: 'OK'
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    // Get the image element
    var logoImage = document.querySelector('.image.homepage-view img');

    // Add event listener to the image
    logoImage.addEventListener("click", function() {
        // Redirect to the given page
        window.location.href = '../'; 
    });
});
