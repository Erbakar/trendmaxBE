<?php

require_once('../IyzipayBootstrap.php');

IyzipayBootstrap::init();

class Config
{
    public static function options()
    {
        $options = new \Iyzipay\Options();
        $options->setApiKey("sandbox-ItR3ROHRP9GjEkIildV669F4rC2Ptrka");
        $options->setSecretKey("sandbox-8pCWycn1B1yQma2nuBnrzNndsx50x8cV");
        $options->setBaseUrl("https://sandbox-api.iyzipay.com");
        return $options;
    }
}