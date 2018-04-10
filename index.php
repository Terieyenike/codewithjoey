<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Stage One Task</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/laptop.jpg" width="50" height="50">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/style.css" />
</head>
<body>
   <div class="grid">
       <div class="header">
           <h1>HNG INTERNSHIP 4</h1>
       </div>
       <div class="header-sidebar">
           <h1 class="about">ABOUT</h1>
       </div>
       <div class="profile">
        <img src="img/IMG_20170708_001102_710.jpg" width="200">
       </div>
       <div class="content">
        <p>Front-End Developer and UX/UI designer, with practical experience in project management, branding strategy, and creative
            direction; devoted to functional programming and information architecture. Web Developer - Digital Marketing Specialist
            - Photogtapher</p>
       </div>
       <div class="footer">
           <?php
            $lastweek = time() - (3 * 24 * 60 * 60); 
            echo "<p class='white'>" .date('l jS \of F, Y', $lastweek). "</p>";
            echo "<br>";
            echo "<br>";

            echo "<p class='time'>".date('h:i:s')."</p>";
           ?>
           <p class="lastAlign">Made with <span style="color: red">&hearts;</span> by Joshua Eyenike</p>
       </div>
       
   </div>
</body>
</html>