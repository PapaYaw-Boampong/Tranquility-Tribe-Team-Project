document.getElementById("loginForm").addEventListener("submit", function(event) {

    event.preventDefault(); // Prevent form submission
    var name = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var emailExpression = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var passwordExpression = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W\_])[A-Za-z\d\W\_]{8,}$/;

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

    fetch('../actions/login_user_action.php', {
        method: 'POST',
        body: new FormData(this)
    })
    .then(response => {
        if (response.ok) {
            return response.json(); // Parse JSON response for successful requests
        } else {
            swal({
                title: 'Error!',
                text: 'An unexpected error occurred. Please try again later.',
                icon: 'error',
                button: 'OK'
            });
            return;
        }
    })
    .then(data => {
        console.log(data);
        // Handle success response
        if (data.message === "Login successful") {
            swal({
                title: 'Success!',
                text: 'Welcome ' + name,
                icon: 'success',
                button: 'OK'
            })
            .then((value) => {
                // After SweetAlert is dismissed, redirect to another page
                if (value) {
                    window.location.href = '../view/personalizedPlanView.php?msg=myWellness';
                }
            });
        } else {
            // Handle failure response
            swal({
                title: 'Error!',
                text: 'Invalid email or password.',
                icon: 'error',
                button: 'OK'
            });
        }
    })
    .catch(error => {
        // Handle fetch errors
        console.error('Fetch error:', error);
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
