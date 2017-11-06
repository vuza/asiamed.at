<section class="contentSection" id="contact">
        <div class="contentWrapper">
            <h2>Kontakt</h2>
            <p>Chandima Alagoda</p>
            <p>+43680 123 9849</p>
            <p>Berggasse 8/15<br/>1090 Wien<br/>&Ouml;sterreich</p> 

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