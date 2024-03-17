document.addEventListener("DOMContentLoaded", function() {
    // Make an AJAX request to fetch interests data
    var xhr = new XMLHttpRequest();
    
    xhr.open('GET', '../functions/get_interests.php', true);
    xhr.onload = function() {
        console.log("reached");
        var interestsSelect = document.getElementById('interests');
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
    xhr.send();
    // Fetch user profile information from the server
    fetch('../functions/get_profile.php')
    .then(response => response.json())
    .then(data => {
        console.log(data);
        // Fill form fields with fetched profile information
        document.getElementById('fname').value = data.fname;
        document.getElementById('lname').value = data.lname;
        document.getElementById('username').value = data.username;
        document.getElementById('email').value = data.email;
        document.getElementById('country').value = data.country;
        document.getElementById('occupation').value = data.occupation;

        document.getElementById('dob').value = data.dob;
        document.getElementById('gender').value = data.gender;
    })
    .catch(error => console.error('Error:', error));

    // Add event listener for form submission
    document.getElementById('updateForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Collect form data
        const formData = new FormData(this);
      
        // Send form data to update_profile.php using fetch
        fetch('../actions/edit_profile.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (response.ok) {
                swal({
                    title: 'Success!',
                    text: 'Successfully Updated .',
                    icon: 'success',
                    button: 'OK'
                }).then((value) => {
                    if (value) {
                        // Redirect to another page after success if needed
                        window.location.href = 'profile.php';
                    }
                });
                
            } else {
                swal({
                    title: 'Error!',
                    text: 'Update failed. Please try again ',
                    icon: 'error',
                    button: 'OK'
                });
                // Display error message if update fails
                console.error('Update failed:', response.statusText);
                // You can display a message to the user using a modal or alert
            }
        })
        
        .catch(error => {
            console.error('Error:', error);
            // Handle any unexpected errors if needed
            swal({
                title: 'Error!',
                text: 'An unexpected error occurred. Calmly try again.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        });
    });
});



