<?php
$msg = file_get_contents('gen.txt');

$keyPath = dirname(__FILE__).'/private-key.pem';
$key = file_get_contents($keyPath);

$decodeBody = base64_decode($msg);

openssl_private_decrypt($decodeBody, $decrypted, $key);

print $decrypted;
?>