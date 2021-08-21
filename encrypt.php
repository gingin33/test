<?php
$msg = 'ソルルああああああああああああ';
$fileName = 'gen.txt';

try{
    $keyPath = dirname(__FILE__).'/public-key.pem';
    $key = file_get_contents($keyPath);
    
    openssl_public_encrypt($msg, $crypted, $key);
    
    file_put_contents($fileName, base64_encode($crypted));
}catch(Exception $e){
    print 'error';
    exit();
}
    print 'encryption succeeded<br>';
    print base64_encode($crypted);
?>