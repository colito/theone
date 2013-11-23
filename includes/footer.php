            <div id='footer' class='grid_12'>
                <div id='copyright'>
                    <p>&copy; 2013 Success Motivation. All Rights Reserved</p>
                </div>
            </div>
        </div>

            <?php
                if($page_name == 'Home')
                {
                    require_once(main_include.'slider_setting.php');
                }
            ?>

    </body>
    <!-- Menu toggle for smart phones -->
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
            $("#switch").click(function(){
                $("#panel").slideToggle(250);
                });
            });
    </script>
</html>
<?php ob_flush();?>