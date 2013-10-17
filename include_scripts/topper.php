<script>
    $(document).ready(function(){
        $('#switch').click(function(){
            $('#panel').slideToggle('slow');
        });
    });
</script>

<?php
    echo "

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
    ";
?>