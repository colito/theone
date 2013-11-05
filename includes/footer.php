            <div id='footer' class='grid_12'>
                <div id='copyright'>
                    <p>&copy; 2013 Success Motivation. All Rights Reserved</p>
                </div>
            </div>
        </div>

            <?php
                if($page_name == 'Home')
                {
                    require_once('includes/slider_setting.php');
                }
            ?>

    </body>
</html>
<?php ob_flush();?>