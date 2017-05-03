<?php

$mcrypt = mcrypt_module_open('rijndael-256', '', 'cbc', '');//Opens the module
$iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($mcrypt), MCRYPT_DEV_RANDOM);//Define initialization vector
$key = md5("code-epicenter.com is cool");//Generate key using md5 function. Output is 32 characters long string
mcrypt_generic_init($mcrypt, $key, $iv);//Open buffers
$encryptedData = mcrypt_generic($mcrypt, "123456789");//Encrypt my bank number
print_r($encryptedData);//Print encrypted value
mcrypt_generic_deinit($mcrypt);//Close buffers
mcrypt_module_close($mcrypt);//Close MCrypt module

?>