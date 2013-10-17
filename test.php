<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <?php require_once('include_scripts/uniform.php'); $home_active_page = 'active_page';?>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
</head>
<body>

<?php require_once('include_scripts/topper.php'); ?>

<div class="container clearfix">

    <?php require_once('include_scripts/header.php'); ?>

    <h2>Welcome</h2>
    <p>Herein beloved is our love made perfect. Live life on the edge of greatness
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
        Nam cursus. Morbi ut mi.
    </p>

    <?php require_once('include_scripts/slider.php'); ?>

    <div id="content" class="grid_3">
        <h2>Part 0</h2>
        <p>Herein beloved is our love made perfect. Live life on the edge of greatness</p>
        <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
            Nam cursus. Morbi ut mi.
        </p>
    </div>

    <div id="content" class="grid_3">
        <h2>Part 1</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
            Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at,
            laoreet mattis, massa.
        </p>
    </div>

    <div id="content" class="grid_3">
        <h2>Part 2</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
            Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at,
            laoreet mattis, massa. Sed eleifend nonummy diam.
        </p>
    </div>

    <div id="content" class="grid_3 omega">
        <h2>Part 3</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
            Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at,
            laoreet mattis, massa. Sed eleifend nonummy diam.
        </p>
    </div>

    <?php require_once('include_scripts/footer.php') ?>
</div>


<script type="text/javascript" src="js/flexslider.js"></script>
<script type="text/javascript" charset="utf-8">
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            easing: "string",
            slideshowSpeed: 7000,
            animationSpeed: 2500
        });
    });

</script>


</body>
</html>
