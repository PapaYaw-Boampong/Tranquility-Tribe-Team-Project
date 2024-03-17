<?php
include "../settings/core.php";
$result = checkLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalized Wellness Plans</title>
    <link rel="stylesheet" href="../css/personalizedPlanCSS.css">
    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <header>
        <h1>Your Journey to Wellness Begins Here</h1>
        <img src="../assets/team_photos/Team Logo 2.png" alt="Wellness Logo">
    </header>
    <main>
        <section class="goals">
            <h2>Set Your Goals</h2>
            <p>Define your aspirations, mark your milestones, and embark on a path to a healthier, happier you.</p>

            <form id="goal-form">
                <label for="goal">Enter Your Goal:</label>
                <input type="text" id="goal" name="goal" required>
                <button type="submit">Add Goal</button>
            </form>

            <ul id="goal-list">
                <!-- Goals will be added here -->
            </ul>
        </section>
        <section class="adjustments">
            <h2>Adjust Your Plans</h2>
            <p>Flexibility is key to success. Modify your plans as you progress, adapting to the rhythm of your life.</p>
            <button id="update-goal-btn">Update Goal</button>
            <button id="delete-goal-btn">Delete Goal</button>
        </section>
        <section class="analytics">
            <h2>Goal Completion Analytics</h2>
            <p>Track your progress and see how far you've come!</p>
            <!-- Display the smaller-sized pie chart here -->
            <canvas id="goal-pie-chart" width="200" height="200"></canvas>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Tranquility Tribe</p>
    </footer>

    <script>
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
    </script>
</body>
</html>
