<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personalized Wellness Plan</title>
  <link rel="stylesheet" href="../css/personalizedPlanCSS.css">

  <!-- Include Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <header>
    <h1>Your Journey to Wellness Begins Here</h1>
  </header>
  
  <main>
    <section class="wellness-plans">
      <h2>My Wellness Plan</h2>
      <form action="backend.php" method="post" id="goal-form">
        <label for="goal">Set Your Goal:</label>
        <input type="text" id="goal" name="goal" placeholder="Enter your goal...">
        <button type="submit">Set Goal</button>
      </form>
      <table id="goals-table">
        <thead>
          <tr>
            <th>Goal</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Goal 1</td>
            <td><input type="checkbox" id="goal1" name="goal1"></td>
            <td>
              <button class="edit-btn">Edit</button>
              <button class="delete-btn">Delete</button>
            </td>
          </tr>
          <tr>
            <td>Goal 2</td>
            <td><input type="checkbox" id="goal2" name="goal2"></td>
            <td>
              <button class="edit-btn">Edit</button>
              <button class="delete-btn">Delete</button>
            </td>
          </tr>
          <!-- Add more rows for additional goals -->
        </tbody>
      </table>
    </section>

    <!-- Progress Tracking and Analytics Section -->
    <section class="analytics">
      <div class="analytics-content">
        <h2>Progress Tracking and Analytics</h2>
        <p>View your progress so far!</p>

         <!-- Display the smaller-sized pie chart here -->
         <canvas id="goal-pie-chart" width="200" height="200"></canvas>

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
        
        </div>
    </section>

  </main>
  
  <footer>
    <p>&copy; 2024 Tranquility Tribe. All rights reserved.</p>
  </footer>
  
</body>
</html>
