<!DOCTYPE html>
<html style="background-color:white">
    <head>
        <meta charset="utf-8">
        <title>Asiamed</title>
        <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=0" /> 
        <!-- Das favicon.ico und das apple-touch-icon.png in das root Verzeichnis -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Poiret+One' rel='stylesheet' type='text/css'>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/global.js"></script>
        <script src="js/bootstrap.js"></script>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]--> 
    </head>
    <body style="background-color:white">
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', '<?php echo getenv('GOOGLE_GA'); ?>', 'asiamed.at');
          ga('send', 'pageview');

        </script>
        <section class="contentSection">
            <div class="contentWrapper">
                <a href="/"><i class="fa fa-backward"></i> Zur&uuml;ck</a>
                
                <?php
                parse_str(parse_url($_SERVER[REQUEST_URI])['query'], $query);
                $detail = file_get_contents('./kurse/' . $query['course'] . '/detail.html');
                echo $detail;
                ?>
            </div>
        </section>
    </body>
</html>