<?php

// chaves para teste local podem ser obtivas aqui (Já setadas nos atributos de teste):
// https://developers.google.com/recaptcha/docs/faq#id-like-to-run-automated-tests-with-recaptcha.-what-should-i-do

function env(): object {

    return new class {
        public string $siteKey = '';
        public string $secretKey = '';

        public string $testSiteKey = '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI';
        public string $testSecretKey = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';
    };
};