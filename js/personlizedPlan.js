document.addEventListener("DOMContentLoaded", function() {
    // Add event listener for form submission
    document.getElementById('goal-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        
       // Validate the goal field
       const goalInput = document.getElementById('goal');
       const goalValue = goalInput.value.trim(); // Trim whitespace

       if (goalValue === '') {
           // If goal field is empty, display an error message and return
           alert('Goal field cannot be empty');
           return;
       }
        // Send form data to update_profile.php using fetch
        fetch('../actions/add_goal.php', {
            method: 'POST',
            body: new FormData(this)
        })
        .then(response => {
            if (response.ok) {
                console.log("reached");
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
    
    fetch('../functions/get_goals.php') 
    .then(response => response.json())
    .then(data => {
        console.log(data);
        // Get the table body element
        const tableBody = document.querySelector('#goals-table tbody');

        // Clear existing table rows
        tableBody.innerHTML = '';

        // Assuming 'data' is the JSON array received from the server containing goal information
        data.forEach(goal => {
            // Create a new table row
            const row = document.createElement('tr');

            // Create input field for goal text
            const goalInput = document.createElement('input');
            goalInput.type = 'text';
            goalInput.value = goal.goal_text;

            // Create input field for goal status
            const statusCheckbox = document.createElement('input');
            statusCheckbox.type = 'checkbox';
            statusCheckbox.id = 'goal' + goal.goal_id;
            statusCheckbox.name = 'goal' + goal.goal_id;
            // Set checkbox checked status based on goal status
            statusCheckbox.checked = goal.goal_status === 'complete';

            // Create save button
            const saveButton = document.createElement('button');
            saveButton.textContent = 'Edit';
            saveButton.className = 'edit-btn';

            // Create delete button
            const deleteButton = document.createElement('button');
            deleteButton.textContent = 'Delete';
            deleteButton.className = 'delete-btn';

            // Append input fields and buttons to the table row
            const goalCell = document.createElement('td');
            goalCell.appendChild(goalInput);
            row.appendChild(goalCell);

            const statusCell = document.createElement('td');
            statusCell.appendChild(statusCheckbox);
            row.appendChild(statusCell);

            const actionCell = document.createElement('td');
            actionCell.appendChild(saveButton);
            actionCell.appendChild(deleteButton);
            row.appendChild(actionCell);

            // Append the row to the table body
            tableBody.appendChild(row);
        });

        // Add event listeners for edit buttons
        const editButtons = document.querySelectorAll('.edit-btn');
        editButtons.forEach(editButton => {
            editButton.addEventListener('click', function() {
                // Get the parent row of the edit button
                const row = this.closest('tr');

                // Extract data from the row
                const goalId = row.querySelector('input[type="checkbox"]').id.slice(4); // Extract goal ID from checkbox ID
                const goalText = row.querySelector('input[type="text"]').value;
                const goalStatus = row.querySelector('input[type="checkbox"]').checked ? 'complete' : 'incomplete';

                // Example AJAX request to update the database
                fetch('../actions/edit_goal.php', {
                    method: 'POST',
                    body: JSON.stringify({ goal_id:goalId, text:goalText,status: goalStatus }),
                    headers: {
                        'Content-Type': 'application/json'
                    }
                }).then(response => {
                    // Handle response
                    if (response.ok) {
                        console.log("reached");
                        swal({
                            title: 'Success!',
                            text: 'Successfully Changed, Keep soaring.',
                            icon: 'success',
                            button: 'OK'
                        }).then((value) => {
                            if (value) {
                                // Redirect to another page after success if needed
                                window.location.href = '../view/personalizedPlan.php';
                            }
                        });
                    }
                }).catch(error => {
                    console.error('Error updating goal:', error);
                });
            });
        });

        // Add event listeners for delete buttons
        const deleteButtons = document.querySelectorAll('.delete-btn');
        deleteButtons.forEach(deleteButton => {
            deleteButton.addEventListener('click', function() {
                // Get the parent row of the delete button
                const row = this.closest('tr');

                // Extract data from the row
                const goalId = row.querySelector('input[type="checkbox"]').id.slice(4); // Extract goal ID from checkbox ID

                fetch('../actions/delete_goal.php', {
                    method: 'POST',
                    body: JSON.stringify({ goal_Id : goalId }),
                    headers: {
                        'Content-Type': 'application/json'
                    }
                }).then(response => {
                    // Handle response
                    if (response.ok) {
                        console.log("reached");
                        swal({
                            title: 'Success!',
                            text: 'Successfully Deleted, Keep soaring.',
                            icon: 'success',
                            button: 'OK'
                        }).then((value) => {
                            if (value) {
                                // Redirect to another page after success if needed
                                window.location.href = '../view/personalizedPlan.php';
                            }
                        });
                    }
                }).catch(error => {
                    console.error('Error deleting goal:', error);
                    swal({
                        title: 'Error',
                        text: 'Unsuccessfully Deleted, Try again.',
                        icon: 'error',
                        button: 'OK'
                    })
                });
            });
        });
    })
    .catch(error => console.error('Error:', error));
});




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

// Fetch data from PHP file when the page loads
window.addEventListener('DOMContentLoaded', () => {
    const userId = getUserId(); // Implement your own function to get the user id
    fetchData();
});

// Function to fetch data from PHP file
function fetchData() {
    fetch('your_php_file.php', {
        method: 'POST'
    })
    .then(response => response.json())
    .then(data => {
        // Update chart data based on fetched data
        goalPieChart.data.datasets[0].data[0] = data.completedGoals;
        goalPieChart.data.datasets[0].data[1] = 10 - data.completedGoals;
        goalPieChart.update();
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
