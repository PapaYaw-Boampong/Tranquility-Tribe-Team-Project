<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personalized Wellness Plan</title>
  <link rel="stylesheet" href="../css/personalizedPlanCSS.css">
  <link rel="stylesheet" href="../css/nav-bar.css">

  <!-- Include Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <header>
          <div class="nav-bar">
                  <div class="nav-bar-title">
                      My Wellness 
                  </div>

                  <nav>
                      <ul >
                          <li class="<?php echo ($message === 'myWellness' || $message === '') ? 'active' : '';?>"><a href="personalizedPlanView.php">My Wellness</a></li>
                          <li class="<?php echo ($message === 'relaxationExercise' || $message === '') ? 'active' : '';?>"><a href="exercisesPageView.php?msg=relaxationExercise">Relaxation and Meditation Hub</a></li>
                          <li class="<?php echo ($message === 'wellnessTips' || $message === '') ? 'active' : '';?>"><a href="wellness.php?msg=wellnessTips"> Wellness Tips</a></li>
                          <li class="<?php echo ($message === 'profile' || $message === '') ? 'active' : '';?>">
                              <a href="profile.php?msg=profile">Profile </a>
                          </li>
                      </ul>
                  </nav>
          </div>
    </header>
  <main>
    <section class="wellness-plans">
      <h2>My Wellness Plan</h2>
      <form action="../actions/add_goal.php" method="post" id="goal-form">
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
            <td><input type="text" value="Goal 1"></td>
            <td><input type="checkbox" id="goal1" name="goal1"></td>
            <td>
              <button class="save-btn">Save</button>
              <button class="delete-btn">Delete</button>
            </td>
          </tr>
          <tr>
            <td><input type="text" value="Goal 2"></td>
            <td><input type="checkbox" id="goal2" name="goal2"></td>
            <td>
              <button class="save-btn">Save</button>
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
      </script><!-- Placeholder for charts/graphs -->
        
        </div>
    <!-- FILEPATH: /C:/xampp/htdocs/sample_group/Tranquility-Tribe-Team-Project/view/personalizedPlan.htm -->
    <!-- This section represents the end of a personalized plan in the Tranquility Tribe Team Project. -->
    </section>
    </section>

  </main>
  
  <footer>
    <p>&copy; 2024 Personalized Wellness. All rights reserved.</p>
  </footer>
  
  <!-- JavaScript to show footer when user reaches end of page -->
  <script>
    window.addEventListener('scroll', function() {
        var scrollPosition = window.scrollY;
        var totalHeight = document.body.scrollHeight - window.innerHeight;

        // Show footer if scrolled to the bottom
        if (scrollPosition === totalHeight) {
            document.querySelector('footer').style.display = 'block';
        } else {
            document.querySelector('footer').style.display = 'none';
        }
    });
  </script>
</body>
</html>
