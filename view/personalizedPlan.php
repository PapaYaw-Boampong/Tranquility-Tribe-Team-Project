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
    <?php
        // Retrieve the message parameter from the URL
        $message = isset($_GET['msg']) ? $_GET['msg'] : 'myWellness';
    ?>

  <header>
          <div class="nav-bar">
                  <div class="nav-bar-title">
                      My Wellness 
                  </div>

                  <nav>
                      <ul >
                          <li class="<?php echo ($message === 'myWellness' || $message === '') ? 'active' : '';?>"><a href="personalizedPlan.php">My Wellness</a></li>
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
      <form action="#" method="post" id="goal-form">
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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../js/personlizedPlan.js"></script>
</body>
</html>
