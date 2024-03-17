
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="../css/homePageCSS.css">
</head>
<body>

    <?php
        // Retrieve the message parameter from the URL
        $message = isset($_GET['msg']) ? $_GET['msg'] : 'myWellness';
    
    ?>
    <div class="nav-bar">
        <div class="user-name">
            Hello Ama 
        </div>

        <nav>
            <ul >
                <li class="<?php echo ($message === 'myWellness' || $message === '') ? 'active' : '';?>"><a href="../view/msg=">My Wellness</a></li>
                <li class="<?php echo ($message === 'relaxationExercise' || $message === '') ? 'active' : '';?>"><a href="../view/exercisePageView.php?msg=relaxationExercise">Relaxation Exercises</a></li>
                <li class="<?php echo ($message === 'meditationHub' || $message === '') ? 'active' : '';?>"><a href="../view/meditationPageView.phpmsg=meditationHub">Meditation Hub</a></li>
                <li class="<?php echo ($message === 'profile' || $message === '') ? 'active' : '';?>"><a href="../view/.php?msg=profile">Logout</a></li>
            </ul>
        </nav>
    </div>
    
    

    <footer>
        <p>Contact us: <a href="mailto:tranquilitytribe@gmail.com">tranquilitytribe@gmail.com</a></p>
        <p>&copy; 2024 Tranquility Tribe. All rights reserved.</p>
    </footer>
</body>
</html>
