<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellness Page</title>
    <link rel="stylesheet" href="../css/wellness.css">
    <link rel="stylesheet" href="../css/nav-bar.css">
</head>
<body>

    <?php
        // Retrieve the message parameter from the URL
        $message = isset($_GET['msg']) ? $_GET['msg'] : 'wellness';
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
                        <li class="<?php echo ($message === 'wellnessTips' || $message === '') ? 'active' : '';?>"><a href="wellness.php?msg=wellnessTips"> Wellness Tips</a></li>
                        <li class="<?php echo ($message === 'profile' || $message === '') ? 'active' : '';?>"><a href=".php?msg=profile">Logout</a></li>
                    </ul>
                </nav>
        </div>
    </header>

<div class="container">
    <div class="tips">
        <h2>Let's Talk WELLNESS TIPS</h2>
        <div class="tip-item">
            <h3>Wellness Wonders: Fun Facts for Body and Mind</h3>
            <p>Eat healthy and stay hydrated" isn't just good advice—it's a mantra for a vibrant life! Nutrient-rich foods and ample hydration aren't just fuel for your body; they're also essential for mental clarity and emotional well-being. 🥦🍎💧
                Did you know? Hydration doesn't just keep your body cool and functioning—it's also crucial for maintaining focus and concentration throughout the day. 💦
                And when it comes to food, colorful fruits and veggies aren't just a feast for the eyes—they're packed with vitamins and antioxidants that support overall health and vitality. 🌈✨
                So, don't just eat to fill your stomach; eat to nourish your body and uplift your spirit. And don't forget to hydrate like your brain depends on it—because it does! Here's to a life filled with wellness wonders for body and mind! 🌱💧🧠
                </p>
        <ul>
                <img src="../assets/team photos/pexels-anna-tukhfatullina-food-photographerstylist-2664443.jpg" alt="health" class="vertical-space" >
                <img src="../assets/team photos/pexels-charlotte-may-5947071.jpg" alt="health" class="vertical-space" >
            </div>
        </ul>

        <div class="tip-item">
            <h3>Wellness Wonders: Secrets to a Thriving Life</h3>
            <p>Exercise regularly and prioritize sleep" isn't just a suggestion—it's the secret sauce for a flourishing existence! Engaging in physical activity not only strengthens your body but also boosts your mood and enhances mental clarity. 🏃‍♂️💤
                Did you know? Regular exercise doesn't just improve your physical fitness—it also promotes better sleep quality and duration, leading to more restful nights and energized days. 🌙😴
                And when it comes to sleep, quality matters just as much as quantity. Creating a calming bedtime routine and carving out a comfortable sleep environment can work wonders for your overall well-being. 🛌💫
                So, lace up those sneakers, hit the gym, and feel the endorphins flow. And when night falls, tuck yourself into bed with care, knowing that a good night's sleep is the foundation of a vibrant life! 💪💤🌟</p>
        <ul>
            <img src="../assets/team photos/pexels-mikhail-nilov-6707078.jpg" alt="hydration">
            <img src="../assets/team photos/pexels-vlada-karpovich-5357334.jpg" alt="health" >
            </div>
        </ul>

        <div class="tip-item"> 
            <h3>Wellness Wonders: Nature's Bounty for Body and Gut</h3>
            <p>"Eat seasonal foods and feed your gut bacteria" isn't just a trendy tip—it's a time-honored tradition that nourishes both body and microbiome! Seasonal fruits and veggies aren't just fresher and tastier; they're also packed with the nutrients your body craves. 🍓🥬
                Did you know? Eating seasonal foods can also support a diverse and thriving gut microbiome, which plays a crucial role in digestion, immunity, and even mood regulation. 🌿🦠
                And speaking of gut health, incorporating probiotic-rich foods like yogurt, sauerkraut, and kimchi into your diet can help cultivate a balanced and resilient microbiome. 🥗🥒
                So, embrace the bounty of each season, savoring the flavors and benefits of nature's harvest. And don't forget to nurture your gut with probiotic foods, creating a harmonious ecosystem within for optimal health and vitality! 🌱🌞🌻</p>
        <ul>
                <img src="../assets/team photos/healthy-fresh-rainbow-colored-fruits-and-vegetables-royalty-free-image-1651630109.jpg" alt="workingout">  
                <img src="../assets/team photos/pexels-askar-abayev-5638268.jpg" alt="health" >  
            </div>
            
        </ul>


        <div class="tip-item"> 
            <h3>Wellness Wonders: Finding Balance in Life's Libations</h3>
            <p>"Enjoy alcohol mindfully and nurture your social connections" is about finding harmony in life's indulgences. While alcohol can be a source of relaxation and social enjoyment, moderation and mindfulness are key. 🍷🥂
                Did you know? Moderate alcohol consumption, such as a glass of red wine with dinner, has been linked to potential health benefits, including heart health and stress reduction. 🍇❤️
                However, it's essential to be aware of your limits and to prioritize safety and responsibility. Drinking in excess can have adverse effects on both physical and mental health. 🚫🍹
                Moreover, fostering meaningful social connections and engaging in activities beyond alcohol can enrich your life and provide lasting fulfillment. Whether it's sharing a meal with loved ones or pursuing shared hobbies, nurturing relationships is essential for overall well-being. 🥗👫
                So, raise your glass to moments of joy and connection, but remember to do so with awareness and balance. Here's to a life lived in harmony, where every sip is savored and every bond cherished! 🌟🍻</p>
        <ul>
                <img src="../assets/team photos/pexels-julia-kuzenkov-1974594.jpg" alt="workingout"> 
                <img src="../assets/team photos/pexels-kindel-media-7149137.jpg" alt="health" >   
            </div>
            
        </ul>

        <div class="tip-item"> 
            <h3>Wellness Wonders: The Power of Connection, Nature, and Melodies</h3>
            <p>"Connect with others, get outside, and listen to music" is more than just a checklist—it's a recipe for nurturing your soul and enhancing your well-being. Building meaningful connections with others, immersing yourself in nature, and enjoying the magic of music can all contribute to a life filled with joy and vitality. 🌟🌳🎶
                Did you know? Research suggests that strong social connections can lead to improved mental health, reduced stress levels, and increased longevity. So, whether it's sharing laughter with friends or lending a listening ear, cultivating relationships is essential for overall happiness. 👭💬 
                And when it comes to nature, spending time outdoors offers a myriad of benefits for both body and mind. From soaking up vitamin D to reducing anxiety and boosting mood, nature has a way of rejuvenating our spirits and grounding us in the present moment. 🌞🌿
                But let's not forget the power of music—a universal language that speaks to the depths of our souls. Whether it's a soothing melody to calm the mind or an upbeat tune to lift the spirits, music has the ability to transport us to another realm and evoke emotions beyond words. 🎵🎧
                So, take a moment to reach out to a friend, step outside and feel the sun on your skin, or lose yourself in the rhythm of your favorite song. Embrace these simple yet profound pleasures, and watch as they enrich your life with beauty, connection, and harmony. 💖🌍🎶</p>
        <ul>
                <img src="../assets/team photos/pexels-andrea-piacquadio-3775593.jpg" alt="workingout">  
                <img src="../assets/team photos/pexels-anna-tukhfatullina-food-photographerstylist-2664443.jpg" alt="health" >  
            </div>
            
        </ul>
        
    </div>  

    <div class="articles-and-infographics">
        <h3>MORE READS ON WELLNESS</h3>
        <div class="articles">
            <article>
                <a href="https://www.everydayhealth.com/wellness/5-tips-for-kick-starting-a-mindful-tech-self-care-habit/">
                    <p class="more-reads">5 Tips for Kick-Starting a 'Mindful Tech' Self-Care Habit</p>
                </a>
            </article>
            <article>
                <a href="https://www.everydayhealth.com/wellness/deep-breathing/">
                    <p class="more-reads">Deep Breathing: A Complete Guide to the Relaxation Technique</p>
                </a>
                
            </article>
            <article>
                <a href="https://www.everydayhealth.com/wellness/hours-nature-each-week-boosts-wellness/">
                    <p class="more-reads">7 Reasons Spending Time Outdoors Is Good for Your Health</p>
                </a>
            </article>
            <article>
                <a href="https://www.everydayhealth.com/wellness/mood-boosting-essential-oils-to-support-everyday-life-challenges/">
                    <p class="more-reads">4 Mood-Boosting Essential Oils to Support Everyday Life Challenges</p>
                </a>
            </article>
            <article>
                <a href="https://www.everydayhealth.com/wellness/probiotic-bacteria-in-fermented-foods-might-help-bad-breath/">
                    <p class="more-reads">Probiotic Bacteria in Fermented Foods Might Help Fight Bad Breath</p>
                </a>
            </article>
            <article>
                <a href="https://www.everydayhealth.com/wellness/possible-health-benefits-to-cold-water-therapy/">
                    <p class="more-reads">5 Possible Health Benefits of Cold Water Therapy</p>
                </a>
            </article>
            <article>
                <a href="https://www.forbes.com/sites/forbesbusinesscouncil/2024/01/18/five-wellness-trends-for-brands-to-watch-in-2024/?sh=7485a25a6e7a">
                    <p class="more-reads">Five Wellness Trends For Brands To Watch In 2024</p>
                </a>
            </article>
           
            <article>
                <a href="https://www.forbes.com/sites/jonisweet/2024/01/03/10-wellness-trends-you-have-to-try-in-2024/?sh=4937410776b3">
                    <p class="more-reads">10 Wellness Trends You Have To Try In 2024</p>
                </a>
            </article>
            <article>
                <a href="https://www.everydayhealth.com/wellness/deep-breathing/">
                    <p class="more-reads">Deep Breathing: A Complete Guide to the Relaxarion Technique</p>
                </a>
            </article>
    
            <a href="https://www.everydayhealth.com/wellness/probiotic-bacteria-in-fermented-foods-might-help-bad-breath/">
                <p class="more-reads" style="font-weight: bold;">Read more of our well recommended articles and infographics....</p>
    
            <a href="https://www.centrum.com/learn/articles/18-wellness-tips-for-a-healthier-you/">
                <p class="more-reads" style="font-weight: bold;">Read more of our well recommended wellness tips for a healthy lifestyle....</p>
    
            <a href="https://forms.office.com/r/2QPn5w2zsX?origin=lprLink" class="feedback-link">
                <p class="more-reads" style="font-weight: bold;">Click here to send us some your recommendations and feedback</p>
            
            </div>
        </div>
</div>



<div class="platforms">
    <div class="videos">
        <h2>We All Have Mental Health</h2>
        <iframe width="500" height="300" src="https://www.youtube.com/embed/DxIDKZHW3-E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>

    <!-- <div class="social-media">
        <h3>Reach Out to Us</h3>
        <ul>
            <li><a href="#" id="facebook">Facebook</a></li>
            <li><a href="#" id="twitter">Twitter</a></li>
            <li><a href="#" id="instagram">Instagram</a></li>
        </ul>
    </div> -->
</div>



<!-- <div class="videos">
    <h2>We All Have Mental Health</h2>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/DxIDKZHW3-E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div> -->
    
<footer>
    <p>Contact us: <a href="mailto:tranquilitytribe@gmail.com">tranquilitytribe@gmail.com</a></p>
    <p>&copy; 2024 Tranquility Tribe. All rights reserved.</p>
</footer>

</body>
</html>
