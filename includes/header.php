<?php ob_start();?>
<!DOCTYPE HTML>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

    <title><?php echo $page_name ?></title>

    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta name='viewport' content='width=device-width, initial-scale = 1.0, user-scalable = no'>

    <link rel='stylesheet' href='css/normalize.css' type='text/css' media='screen' />
    <link rel='stylesheet' href='css/grid.css' type='text/css' media='screen' />
    <link href='http://fonts.googleapis.com/css?family=Armata' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <link rel='stylesheet' href='css/style.css' type='text/css' media='screen' />

    <!-- GA -->
    <script type='text/javascript'>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-38880588-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>

    <!-- JQuery 2.0.3-->
    <script type='text/javascript' src='js/jquery-2.0.3.min.js'></script>

    <!-- Flexslider settings-->
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#panel").slideToggle("slow");
            });
        });
    </script>

</head>

<body oncontextmenu="return false">

    <div id='topper'>
        <div id='title'>
            <h1><a href='index.php'>Success Motivation</a></h1>
        </div>

        <div id='navigation'>
            <ul>
                <li id=$home_active_page class='home'><a href='index.php'>Home</a></li>
                <li id=$solutions_active_page class='solutions'><a href='solutions.php'>Solutions</a></li>
                <li id=$contact_active_page class='contact'><a href='contact.php'>Contact Us</a></li>
            </ul>
        </div>
    </div>

    <div id='switch'>menu</div>
        <div id='panel'>
        <ul>
            <li class='home'><a href='index.php'>Home</a></li>
            <li class='solutions'><a href='solutions.php'>Solutions</a></li>
            <li class='contact'><a href='contact.php'>Contact Us</a></li>
        </ul>
    </div>

    <div class="container_12 clearfix">