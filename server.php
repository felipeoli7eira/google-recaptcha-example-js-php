<?php

require __DIR__ . '/env.php';

if ( array_key_exists('g-recaptcha-response', $_POST) && mb_strlen($_POST['g-recaptcha-response']) ) {

    $captchaResolvidoNoFront = $_POST['g-recaptcha-response'];
    $verificacaoNoGoogle = json_decode(
        file_get_contents( 'https://www.google.com/recaptcha/api/siteverify?secret=' . env()->testSecretKey . "&response={$captchaResolvidoNoFront}" )
    );

    if ($verificacaoNoGoogle->success === true) {
        echo '<h1>Tudo certo</h1>';
        return true;
    }

    echo '<h1>Tudo errado</h1>';
    exit;
}
else {
    header('Location: /');
}