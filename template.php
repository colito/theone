<html lang="en">
<head>

    <title>[**PLACE PAGE TITLE HERE**]</title>
    <?php require_once('include_scripts/uniform.php'); $pagename_active_page = 'active_page'; ?>

</head>

<?php require_once('include_scripts/topper.php'); ?>

<body>

    <div class='container clearfix'>

        <?php require_once('include_scripts/header.php'); ?>

        <button class="show-page-loading-msg" data-theme="a" data-textonly="false" data-textvisible="true" data-msgtext="Loading theme a" data-inline="true">A</button>

        <?php require_once('include_scripts/footer.php') ?>
    </div>

    <script type="text/javascript">
        $( document ).on( "click", ".show-page-loading-msg", function() {
            var $this = $( this ),
                theme = $this.jqmData( "theme" ) || $.mobile.loader.prototype.options.theme,
                msgText = $this.jqmData( "msgtext" ) || $.mobile.loader.prototype.options.text,
                textVisible = $this.jqmData( "textvisible" ) || $.mobile.loader.prototype.options.textVisible,
                textonly = !!$this.jqmData( "textonly" );
            html = $this.jqmData( "html" ) || "";
            $.mobile.loading( "show", {
                text: msgText,
                textVisible: textVisible,
                theme: theme,
                textonly: textonly,
                html: html
            });
        })
            .on( "click", ".hide-page-loading-msg", function() {
                $.mobile.loading( "hide" );
            });
    </script>

</body>

</html>