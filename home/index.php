<?php
    $page_name = 'Home';
    $home_active_page = 'active_page';
    require_once('../includes/header.php');
?>


<div id='content' class='grid_12'>
    <h2>Welcome</h2>
    <p>Herein beloved is our love made perfect. Live life on the edge of greatness
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
        Nam cursus. Morbi ut mi.
    </p>
</div>

<div id='picshow' class="grid_8 margin_prefix_2 flexslider omega">
    <?php require_once('../includes/slider.php'); ?>
</div>

<div id="content" class="grid_4 center omega">
	<h3>Part 0</h3>
	<p>Herein beloved is our love made perfect. Live life on the edge of greatness</p>
	<p>
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
		Nam cursus. Morbi ut mi.
    </p>
</div>

<div id="content" class="grid_4 center omega">
	<h3>Part 1</h3>
	<p>
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
		Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at,
		laoreet mattis, massa.
	</p>
</div>
			
<div id="content" class="grid_4 center">
	<h3>Part 2</h3>
	<p>
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
		Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at,
		laoreet mattis, massa. Sed eleifend nonummy diam.
	</p>
</div>

<?php require_once('../includes/footer.php') ?>
