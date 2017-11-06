<?php include 'header.php'; ?>

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
        <p>Berggasse 8<br/>1090 Wien<br/>Tel/Fax: 01/31 71 0 61<br/>E-Mail: chandima@alagoda.at</p>
    </div>
</section>

<div class="separator">
    <div class="fixedBg" id="fixedBg2"></div>
</div>

<section class="contentSection" id="kurse">
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

        <table class="table table-hover table-striped">
            <?php
            $courses = array_diff(scandir('./kurse'), array('.', '..'));
            
            foreach ($courses as $course) {
                $preview = file_get_contents('./kurse/' . $course . '/preview.html');
                $config = json_decode(file_get_contents('./kurse/' . $course . '/config.json'));

                echo '<tr>';
                echo '<td><p>' . $config->name . '</p></td>';
                echo '<td><p>' . $preview . ' <a href="/course.php?course=' . $course . '">mehr...</a></p></td>';
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
    <div class="fixedBg" id="fixedBg5"></div>
</div>

<section class="contentSection" id="seminare">
    <div class="contentWrapper">
        <h2>Aktuelle Lehrt&auml;tigkeiten</h2>
        <table class="table table-striped">
            <tr><td><p>Ayurveda Seminare</p></td><td><p>Wifi - Salzburg</p></td></tr>
            <tr><td><p>Ayurveda Medizin</p></td><td><p>AKH (Akademie für Fortbildungen und Sonderausbildungen)</p></td></tr>
            <tr><td><p>Tuina</p></td><td><p>Wifi – Salzburg</p></td></tr>
            <tr><td><p>buddhistische Meditation</p></td><td><p>Yoga Place – Salzburg</p></td></tr>
            <tr><td><p>Information zu sonstigen Seminaren, Tel:</p></td><td><p>0680 123 9849</p></td></tr>
        </table>
    </div>
</section>

<div class="separator">
    <div class="fixedBg" id="fixedBg3"></div>
</div>

<?php include 'footer.php'; ?>