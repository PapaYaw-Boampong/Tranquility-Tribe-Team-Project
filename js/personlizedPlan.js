// Add event listener for form submission
document.getElementById('goalForm').addEventListener('submit', function(event) {
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
                text: 'Successfully Added, Good luck .',
                icon: 'success',
                button: 'OK'
            }).then((value) => {
                if (value) {
                    // Redirect to another page after success if needed
                    window.location.href = '../view/personalizedPlan.php';
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

// Sample data for the pie chart
const completedGoals = 5;
const remainingGoals = 10 - completedGoals;

// Create smaller-sized pie chart
const ctx = document.getElementById('goal-pie-chart').getContext('2d');
const goalPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Completed Goals', 'Remaining Goals'],
        datasets: [{
            data: [completedGoals, remainingGoals],
            backgroundColor: [
                'rgba(54, 162, 235, 0.5)', // Blue for completed goals
                'rgba(255, 99, 132, 0.5)', // Red for remaining goals
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(255, 99, 132, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Goal Completion Percentage'
        },
        responsive: false, // Disable responsiveness
        maintainAspectRatio: false, // Disable aspect ratio
    }
});

