<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Asiamed</title>
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=0" />
    <!-- Das favicon.ico und das apple-touch-icon.png in das root Verzeichnis -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/global.css?vers=1231">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC|Poiret+One' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/global.js?vers=1"></script>
    <script src="js/bootstrap.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '<?php echo getenv('GOOGLE_GA'); ?>', 'asiamed.at');
        ga('send', 'pageview');
    </script>

    <section class="contentSection separator" id="title">
        <div class="fixedBg" id="fixedBg4"></div>

        <div id="titleContent" class="contentWrapper">
            <img id="logo" src="img/asiamed.png" title="Asia-Med Logo" />
            <h1>Asiamed</h1>
        </div>
    </section>

    <section class="contentSection" id="about">
        <div class="contentWrapper">
            <h2>Chandima Alagoda, MSc</h2>
            <p>... wurde in Kandy, Sri Lanka geboren. Als Absolvent der Universität für Alternativmedizin in Colombo, Sri Lanka, legt er seine Schwerpunkte auf die Anwendung und Lehre asiatischer komplementärmedizinischer Verfahren (Ayurveda und TCM). Seit 1990 lebt er in Österreich (Wien), wo er sich mittels der Ausbildung zum gewerblichen Masseur und freiberuflichen Heilmasseur, sowie dem Studium (Vorklinikum) an der medizinischen Universität Wien, weiterbildete.</p>
            <p>Buchautor: <a href="http://www.amazon.de/CHAKRA-Anwendungen-AYURVEDA-Konzept-Wissen/dp/3950291601/ref=sr_1_3?ie=UTF8&qid=1396379688&sr=8-3&keywords=alagoda" target="_blank">CHAKRA. Anwendungen in AYURVEDA</a>, Verlag – Der Verlag Dr. Snizek</p>
        </div>
    </section>

    <div class="separator">
        <div class="fixedBg" id="fixedBg1"></div>
    </div>

    <section class="contentSection" id="praxis">
        <div class="contentWrapper">
            <h2>Praxisgemeinschaft</h2>
            <p>Termine nur nach Vereinbarung<p>
            <p>Berggasse 8<br/>1090 Wien<br/>Tel/Fax: 01/31 71 0 61<br/>E-Mail: alagoda@aon.at</p>
        </div>
    </section>

    <div class="separator">
        <div class="fixedBg" id="fixedBg2"></div>
    </div>

    <section class="contentSection" id="seminare">
        <div class="contentWrapper">
            <h2>Kurse: Srilankische, ayurvedische Ernährung</h2>

            <p>So faszinierend wie das Land selbst ist auch die traditionelle Küche Sri Lankas. Sie enthält
            Komponenten der Ayurvedischen Ernährungslehre und bietet aufgrund der buddhistischen und
            hinduistischen Kultur eine vorwiegend vegetarische Vielfalt an Gerichten.</p>
            <p>Das tropische Klima in Sri Lanka lässt Gewürze optimal gedeihen. In langer Tradition sind
            Gewürzmischungen und Gewürzkombinationen kulinarisch verankert. Diese Kombinationen sind
            nicht nur geschmacklich, sondern auch gesundheitlich sehr wertvoll. Die Menschen in Sri Lanka
            lieben es würzig bis scharf und bereiten Speisen mit wahren Geschmacksexplosionen zu. Sri
            Lankisches Essen weckt den Geschmackssinn, Körper und Geist.</p>
            <p>In unseren praxisorientierten Kursen erfahren Sie auch viel theoretisches Wissen rund um die
            authentische Küche Sri Lankas.</p>

            <table class="table table-striped">
                <?php
                $courses = array_diff(scandir('./kurse'), array('.', '..'));
                
                foreach ($courses as $course) {
                    $preview = file_get_contents('./kurse/' . $course . '/preview.html');

                    echo '<tr>';
                    echo '<td><p>' . $course . '</p></td>';
                    echo '<td>' . $preview . ' <a href="/course.php?course=' . $course . '">mehr...</a></td>';
                    echo '</tr>';
                }
                ?>
            </table>

            <?php echo $descriptions; ?>

            <script>
                $('.readFullEventDescription').click(function(e){
                    e.preventDefault()
                    showEvent($(this).attr('data-eventName'))
                })

                var showEvent = function(name){
                    name = name.replace(' ', '-')
                    $('.description').hide()
                    $('.description.event-' + name).show()
                }
            </script>
        </div>
    </section>

    <div class="separator">
        <div class="fixedBg" id="fixedBg3"></div>
    </div>

    <section class="contentSection" id="seminare">
        <div class="contentWrapper">
            <h2>Aktuelle Lehrt&auml;tigkeiten</h2>
            <table class="table table-striped">
                <tr><td>Ayurveda Seminare</td><td>Wifi - Salzburg</td></tr>
                <tr><td>Ayurveda Medizin</td><td>AKH (Akademie für Fortbildungen und Sonderausbildungen)</td></tr>
                <tr><td>Tuina</td><td>Wifi – Salzburg</td></tr>
                <tr><td>buddhistische Meditation</td><td>Yoga Place – Salzburg</td></tr>
                <tr><td>Information zu sonstigen Seminaren, Tel:</td><td>0680 123 9849</td></tr>
            </table>
        </div>
    </section>

    <div class="separator">
        <div class="fixedBg" id="fixedBg3"></div>
    </div>

    <section class="contentSection" id="contact">
        <div class="contentWrapper">
            <h2>Kontakt</h2>
            <p>Chandima Alagoda</p>
            <p>+43680 123 9849</p>
            <p>Berggasse 8/15<br/>1090 Wien<br/>&Ouml;sterreich</p>

            <div class="divider"></div>

            <div id="emailWarning" class="alert alert-danger invisible"></div>
            <div id="emailSuccess" class="alert alert-success invisible">E-Mail wurde versendet.</div>

            <form class="form-horizontal" role="form">
                <input type="email" class="form-control" id="emailreceiver" placeholder="chandima@alagoda.at" disabled>
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                <textarea id="emailText" class="form-control" class="form-control" placeholder="Ihre Nachricht" rows="3"></textarea>
                <div class="g-recaptcha" data-sitekey="<?php echo getenv('GOOGLE_RECAPTCHA_SITE_KEY'); ?>" data-callback="captchaSet" data-expired-callback="captchaExpired"></div>
                <button id="sendContact" type="submit" class="btn btn-default" disabled="">Absenden</button>
            </form>

            <a id="impressumLink" href="/impressum.php">Impreesum</a>
        </div>
    </section>
</body>
</html>