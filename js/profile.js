document.addEventListener("DOMContentLoaded", function() {
     // Fetch user profile information from the server
     fetch('../functions/get_profile.php')
     .then(response => response.json())
     .then(data => {
        console.log(data);
        // Fill form fields with fetched profile information
        document.getElementById('fname').textContent = data.fname;
        document.getElementById('lname').textContent = data.lname;
        document.getElementById('username').textContent = data.username;
        document.getElementById('email').textContent = data.email;
        document.getElementById('country').textContent = data.country;
        document.getElementById('occupation').textContent = data.occupation;
        document.getElementById('interests').textContent = data.interests_name;
        document.getElementById('dob').textContent = data.dob;
        document.getElementById('gender').textContent = data.gender;
    })
     .catch(error => console.error('Error:', error));

    // Get the update profile button
    var updateBtn = document.querySelector('.update-btn');

    // Add event listener for the click event
    updateBtn.addEventListener("click", function() {
        // Redirect to the edit form page
        window.location.href = '../view/edit_profile_view.php'; 
    });

    var logOutBtn = document.querySelector('.logout-btn');

    // Add event listener for the click event
    logOutBtn.addEventListener("click", function() {
        // Redirect to the edit form page
        window.location.href = '../actions/logout.php'; 
    });
});



