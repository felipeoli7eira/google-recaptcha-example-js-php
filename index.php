<?php /***/ require __DIR__ . '/env.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>google reCaptcha example</title>
        <link rel="stylesheet" href="app.css">
    </head>
    <body>

        <form method="post" name="form_recaptcha">
            <input type="text" name="u_name" placeholder="User">
            <input type="password" name="u_pass" placeholder="*****">
            <div class="g-recaptcha" data-sitekey="<?= env()->testSiteKey ?>" data-callback="cbCaptcha"></div>
            <button type="submit">submit</button>
        </form>

        <script>

            document.form_recaptcha.onsubmit = (event) => {

                event.preventDefault()

                if (grecaptcha.getResponse().length) {
                    document.form_recaptcha.setAttribute('action', '/server.php')
                    document.form_recaptcha.submit()
                    return true
                }

                window.alert('solucione o reCaptcha')
                return false
            }

            const cbCaptcha = (args = null) => {
                console.log(args)
            }

        </script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </body>
</html>
