<?php

$result="";

if(isset($_POST['submit'])){
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='abdunnoor540@gmail.com';
    $mail->password='max123456000000';

    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('abdunnoor540@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);

    $mail->isHTML(true);
    $mail->Subject='Form Submission: '.$_POST['subject'];
    $mail->Body='<h1 align=center>Name :'.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_Post['msg'].'<h1>';

    if(!$mail->send()){
        $result="Something went wrong. Please try again.";
    }
    else{
        $result="Thanks ".$_POST['name']." for contacting us.";
    }
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Ahmed Sharif khan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Conjoint Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <!-- //online-fonts -->
</head>

<body>
    <div class="sidenav text-center">
        <div class="side_top">
            <img src="images/about.jpg" alt="news image" class="img-fluid navimg">
            <h1 class="top_hd mt-2"><a href="index.html">Ahmed Sharif Khan Noor</a></h1>
            <p class="top_hdp mt-2">This is a persona profiel of Ahemd Sharif Khan</p>
        </div>
        <!-- header -->
        <header>
            <div class="nav-top">
                <nav class="mnu mx-auto">
                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop">
                    <ul class="menu">
                        <li class="active"><a href="#home" class="scroll">Home</a></li>
                        <li class="mt-sm-3"><a href="#about" class="scroll">About</a></li>
                        <li class="mt-sm-3"><a href="#services" class="scroll">Services</a></li>
                        <li class="mt-sm-3"><a href="#news" class="scroll">News</a></li>
                        <li class="mt-sm-3"><a href="#contact" class="scroll">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- //header -->
    </div>
    <div class="main">
        <div class="banner-text-w3ls" id="home">
            <div class="container">
                <div class="mx-auto text-center">
                    <h3>WELCOME
                    </h3>
                    <p class="banp mx-auto mt-3">This is a offical website of Ahmed Sharif Khan </p>
                    <a class="btn btn-primary mt-lg-5 mt-3 agile-link-bnr" href="#about" role="button">Learn More</a>
                </div>
            </div>
        </div>
        <!-- about -->
        <section class="slide-wrapper" id="about">
            <h2 class="w3_head mb-4">About Me </h2>
            <h4 class="main_hd">
                <style>
                    p {
                        font-family: "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
                    }
                </style>
                <h4><b>Ahmed Sharif Khan</b></h4>
                Mailing Address: Holding: 09, Haripur, Natunpara, Chowhodditola, Chapainawabganj Sadar, Chapainawabganj.
                <p></p>Mobile: +8801744750096
                <p></p>E-mail: abdunnoor540@gmail.com
                <p></p>Date of Birth: 14/11/1998
                <p></p>Blood Group: A+
                <br></h4>
            <p class="iner mt-md-5">
                <style>
                    p {
                        font-family: "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
                    }
                </style>
                <h5><b>Career Objective:</b></h5>Building a rewarding career under an esteemed organization having excellent working environment, I can exercise my knowledge, skill and experience with utmost dedication and professionalism.</p>
        </section>
        <!-- //about -->
        <!-- services -->
        <section class="services" id="services">
            <div class="container">
                <h3 class="w3_head mb-4 text-left">
                    <style>
                        p {
                            font-family: "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
                        }
                        
                        font numbering alignment:left
                    </style>
                    <h5><b>Co-Curriculum Activities</b></h5>
                </h3>

                <p class="iner mt-md-5 text-left">
                    <style>
                        p {
                            font-family: "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
                        }
                        
                        font numbering alignment:left
                    </style>
                    <p>1. Active research with Md. Mominul Islam (course coordinator) on Halal Cosmetics</p>
                    <p>2. Arranged several programs at EBAUB:</p>
                    <p> •Active Volunteer food organization committee on EXIM bank agricultural university Bangladesh</p>
                    <p> •Activities like participation in-games, dance, drama, etc.</p><br>
                    <ul class="list-unstyled mt-5">
                        <li>
                            <div class="row">
                                <div class="col-2 ic-lft">
                                    <span class="fa fa-code"></span>
                                </div>
                                <div class="col-10">
                                    <h6>Microsoft Word </h6>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 ic-lft">
                                    <span class="fa fa-cubes"></span>
                                </div>
                                <div class="col-10">
                                    <h6>Microsoft Excel </h6>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 ic-lft">
                                    <span class="fa fa-book"></span>
                                </div>
                                <div class="col-10">
                                    <h6>PowerPoint </h6>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 ic-lft">
                                    <span class="fa fa-coffee"></span>
                                </div>
                                <div class="col-10">
                                    <h6>SPSS (Analytical Software)</h6>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 ic-lft">
                                    <span class="fa fa-bolt"></span>
                                </div>
                                <div class="col-10">
                                    <h6>Wordpress</h6>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-2 ic-lft">
                                    <span class="fa fa-cog"></span>
                                </div>
                                <div class="col-10">
                                    <h6>E-mail processing</h6>
                                </div>
                            </div>
                        </li>
                    </ul>
            </div>
        </section>
        <!-- //services -->
        <!-- news -->
        <div class="news" id="news">
            <h3 class="w3_head mb-4 text-left">
                <style>
                    p {
                        font-family: "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
                    }
                </style>
                <h5><b>Course & Training Program Summary:</b></h5>
            </h3>
            <p class="iner mt-md-5 text-left">
                <p></p>• Completed a course on Public Speaking (Start Strong & Engage Any Audience) offered by Udemy.com
                <p></p>•Completed a course on Digital Marketing from Google Digital Garage (Online learning platform).
                <p></p>• Ongoing Course Marketing Analytics (Offered by University of Virginia) through an Online learning platform (coursera.org).
            </p>
            <div class="row news-grids-left mt-5">
                <div class="col-lg-5 news_top">
                    <img src="images/g1.jpg" alt="news image" class="img-fluid">
                </div>
                <div class="col-lg-7 news_top1">
                    <h5>Group Work</h5>
                    <p class="mt-3"></p>
                </div>
            </div>
            <div class="row news-grids-middle">
                <div class="col-lg-5 news_top">
                    <img src="images/g2.jpg" alt="news image" class="img-fluid">
                </div>
                <div class="col-lg-7 news_top1">
                    <h5>Poster Presentation</h5>
                    <p class="mt-3"></p>
                </div>
            </div>
            <div class="row news-grids-right">
                <div class="col-lg-5 news_top">
                    <img src="images/g3.jpg" alt="news image" class="img-fluid">
                </div>
                <div class="col-lg-7 news_top1">
                    <h5>Group Presentation</h5>
                    <p class="mt-3"></p>
                </div>
            </div>

        </div>
        <!-- //news -->
        <!-- contact -->
        <section class="wedo" id="contact">
            <h3 class="w3_head mb-4 text-left"> Contact Me</h3>
            <p class="iner mt-md-5 text-left"> </p>
            <div class="contact_grid_right mt-5 mx-auto text-left">
                <form id="contact-form" method="post" action="contact-form-handler.php">
                    <div class="row contact_top">
                        <div class="col-sm-6">
                            <input type="text" name="Name" placeholder="Name" required="">
                        </div>
                        <div class="col-sm-6">
                            <input type="Email" name="Email" placeholder="Email" required="">
                        </div>
                    </div>
                    <input type="text" name="Number" placeholder="Number" required="">
                    <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                    <button type="submit" class="btn">Send Message</button>
                    <button type="reset" class="btn">Reset</button>
                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="cpy-right text-center">
                <p>Ahmed Sharif Khan | © All rights reserved 2020 |
                </p>
                <a href="https://www.facebook.com/abdunnoor540"> <img src="/images/facebook.png" width="30px" height="30px"> </a>
                <a href="https://twitter.com/maxnoor87"> <img src="/images/tw.png" width="30px" height="30px"></a>
                <a href="https://www.instagram.com/maxnoor87/"> <img src="/images/insta.png" width="30px" height="30px"></a>
                </p>
            </div>
        </section>
        <!-- //contact -->
    </div>

</body>

</html>