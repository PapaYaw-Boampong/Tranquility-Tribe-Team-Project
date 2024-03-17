
<?php
include "../settings/core.php";
$result = checkLogin();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relaxation Exercises</title>
    <link rel="stylesheet" href="../css/exercises.css">
    <link rel="stylesheet" href="icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="../css/nav-bar.css">
</head>
<body>
    <?php
        // Retrieve the message parameter from the URL
        $message = isset($_GET['msg']) ? $_GET['msg'] : 'myWellness';
    ?>
    
    <header>
        <div class="nav-bar">
            <div class="nav-bar-title">
                Relaxation Exercises 
            </div>

            <nav>
                <ul >
                    <li class="<?php echo ($message === 'myWellness' || $message === '') ? 'active' : '';?>"><a href="homePageView.php">My Wellness</a></li>
                    <li class="<?php echo ($message === 'relaxationExercise' || $message === '') ? 'active' : '';?>"><a href="exercisesPageView.php?msg=relaxationExercise">Relaxation and Meditation Hub</a></li>
                    <li class="<?php echo ($message === 'wellnessTips' || $message === '') ? 'active' : '';?>"><a href="exercisesPageView.php?msg=relaxationExercise"> Wellness Tips</a></li>
                    <li class="<?php echo ($message === 'aboutUs' || $message === '') ? 'active' : '';?>"><a href="aboutUsView.php?msg=relaxationExercise">About us</a></li>
                    <li class="<?php echo ($message === 'profile' || $message === '') ? 'active' : '';?>"><a href=".php?msg=profile">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="videos">
            <a href="https://www.youtube.com/watch?v=_A0udZPwHxs">
                <button class="exercise" style="background-image: url('../assets/team_photos/deep_breathing.jpg');">
                    <h2>Deep Breathing Technique for Stress</h2>
                    <p class="description">Practice deep breathing to relax your body and mind.</p>
                </button>
            </a>
            <a href="https://www.youtube.com/watch?v=sTANio_2E0Q">
                <button class="exercise" style="background-image: url('../assets/team_photos/yoga1.avif');">
                    <h2>Yoga Poses for Stress Relief</h2>
                    <p class="description">Learn yoga poses to alleviate stress and tension.</p>
                </button>
            </a>
            <a href="https://www.youtube.com/watch?v=LiUnFJ8P4gM">
                <button class="exercise" style="background-image: url('../assets/team_photos/breathing.jpg');">
                    <h2>Deep Breathing Technique for Anxiety</h2>
                    <p class="description">Practice deep breathing to reduce anxiety and calm the mind.</p>
                </button>
            </a>
            <a href="https://www.youtube.com/watch?v=REL4y5a_xF8">
                <button class="exercise" style="background-image: url('../assets/team_photos/flexibility.png');">
                    <h2>Yoga Poses for Flexibility</h2>
                    <p class="description">Improve flexibility and relieve muscle tension with yoga.</p>
                </button>
            </a>
            <a href="https://www.youtube.com/watch?v=KfYkzXTut1Y">
                <button class="exercise" style="background-image: url('../assets/team_photos/rain.jpg');">
                    <h2>Rain Sounds to Aid Sleep</h2>
                    <p class="description">Listen to soothing rain sounds to help you relax and fall asleep faster.</p>
                </button>
            </a>
            <a href="https://www.youtube.com/watch?v=ak_glVKt6-0">
                <button class="exercise" style="background-image: url('../assets/team_photos/relaxing_music.webp');">
                    <h2>Relaxing Music</h2>
                    <p class="description">Enjoy calming music to reduce stress and promote relaxation.</p>
                </button>
            </a>

            <a href="https://www.youtube.com/watch?v=UgHKb_7884o">
                <button class="exercise" style="background-image: url('../assets/team_photos/fireplace.jpg');">
                    <h2>Fireplace Sound</h2>
                    <p class="description">Create a cozy atmosphere with the crackling sounds of a fireplace.</p>
                </button>
            </a>
            
            <a href="https://www.youtube.com/watch?v=nMfPqeZjc2c">
                <button class="exercise" style="background-image: url('../assets/team_photos/whiteNoise.jpg');">
                    <h2>White Noise</h2>
                    <p class="description">Mask unwanted noises and improve focus with white noise.</p>
                </button>
            </a>
            <a href="https://www.youtube.com/watch?v=UJZxtO9XNno">
                <button class="exercise" style="background-image: url('../assets/team_photos/stream.jpg');">
                    <h2>Stream Sounds</h2>
                    <p class="description">Experience the calming sounds of a flowing stream to relax your mind.</p>
                </button>
            </a>
            
            <a href="https://www.youtube.com/watch?v=Ki6xgXmxK7Y">
                <button class="exercise" style="background-image: url('../assets/team_photos/flatTummy.webp');">
                    <h2>Flat Tummy Exercise</h2>
                    <p class="description">Engage your core and work towards a flatter stomach with these exercises.</p>
                </button>
            </a>
            <a href="https://www.youtube.com/watch?v=CGmr02bfHUo">
                <button class="exercise" style="background-image: url('../assets/team_photos/bodyExercise.webp');">
                    <h2>Effective Body Exercise</h2>
                    <p class="description">Get a full-body workout and improve overall fitness with these exercises.</p>
                </button>
            </a>
            <a href="https://www.youtube.com/watch?v=lKx0sOz31C4">
                <button class="exercise" style="background-image: url('../assets/team_photos/pregnant.webp');">
                    <h2>Exercise for Pregnant Women</h2>
                    <p class="description">Stay active and healthy during pregnancy with these safe exercises.</p>
                </button>
            </a>
        </div>
      

    </main>

    <footer>
        <p>&copy; 2024 Relaxation Exercises. All rights reserved.</p>
    </footer>
</body>
</html>