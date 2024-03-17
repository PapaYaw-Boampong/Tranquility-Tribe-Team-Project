document.addEventListener("DOMContentLoaded", function() {
    // Get the select element
    var interestsSelect = document.getElementById('interests');

    // Make an AJAX request to fetch interests data
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '../functions/get_interests.php', true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Parse the JSON response
            var interests = JSON.parse(xhr.responseText);

            // Clear existing options
            interestsSelect.innerHTML = '';

            // Populate select options with interests
            interests.forEach(function(interest) {
                var option = document.createElement('option');
                option.value = interest.id;
                option.textContent = interest.name;
                interestsSelect.appendChild(option);
            });
        } else {
            // Handle errors
            console.error('Failed to fetch interests: ' + xhr.status);
        }
    };
    xhr.onerror = function() {
        // Handle network errors
        console.error('Network error occurred');
    };
    xhr.send();
});


document.getElementById("registerForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
    
    // Get form field values
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var country = document.getElementById("country").value;
    var gender = document.getElementById("gender").value;
    var dob = document.getElementById("dob").value;
    var occupation = document.getElementById("occupation").value;
    var interests = document.getElementById("interests").value;
    console.log(fname);

    // Define regular expressions for validation
    var emailRegex = /^\S+@\S+\.\S+$/;
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W\_])[A-Za-z\d\W\_]{8,}$/;


    // Basic form validation
    if (!fname || !lname || !username || !email || !password || !confirmPassword || !country || !gender || !dob || !occupation || !interests) {
        // If any field is empty, show an error message
        swal({
            title: 'Error!',
            text: 'Please fill out all the fields.',
            icon: 'error',
            button: 'OK'
        });
        return; // Stop form submission
    }

    // Check if email is valid
    if (!emailRegex.test(email)) {
        // If email is invalid, show an error message
        swal({
            title: 'Error!',
            text: 'Please enter a valid email address.',
            icon: 'error',
            button: 'OK'
        });
        return; // Stop form submission
    }

    // Check if password meets requirements
    if (!passwordRegex.test(password)) {
        // If password doesn't meet requirements, show an error message
        swal({
            title: 'Error!',
            text: 'Password must be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, and one number.',
            icon: 'error',
            button: 'OK'
        });
        return; // Stop form submission
    }

    // Check if passwords match
    if (password !== confirmPassword) {
        // If passwords don't match, show an error message
        swal({
            title: 'Error!',
            text: 'Passwords do not match.',
            icon: 'error',
            button: 'OK'
        });
        return; // Stop form submission
    }

    var form = new FormData(this);

    // for (const value of form.values()) {
    //     console.log(value);
    // }

    // Submit the form data using fetch or AJAX
    fetch('../actions/register_user_action.php', {
        method: 'POST',
        body: form
    })

    .then(response => {
        // Check status code of the response
        switch (response.status) {
            case 200: // Success
                // Registration successful, trigger SweetAlert
                swal({
                    title: 'Success!',
                    text: 'You have been successfully registered.',
                    icon: 'success',
                    button: 'OK'
                }).then((value) => {
                    if (value) {
                        // Redirect to another page after success if needed
                        window.location.href = '../login/loginView.php';
                    }
                });
                break;
            case 500: // Internal Server Error
                // Registration failed, handle errors
                swal({
                    title: 'Error!',
                    text: 'Registration failed. Please try again later.',
                    icon: 'error',
                    button: 'OK'
                });
                break;
            default: // Other status codes
                // Handle other status codes if needed
                swal({
                    title: 'Error!',
                    text: 'An unexpected error occurred. Please try again later.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                break;
        }
    })
    .catch(error => {
        console.error('Error:', error);
        // Handle any unexpected errors if needed
        swal({
            title: 'Error!',
            text: 'An unexpected error occurred. Please try again later.',
            icon: 'error',
            confirmButtonText: 'OK'
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
