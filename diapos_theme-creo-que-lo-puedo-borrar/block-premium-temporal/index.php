https://pablomonteserin.com/res/diapos_theme/block-premium-temporal/
<?php

require 'vendor/autoload.php';

use Firebase\JWT\JWT;
use Google\Cloud\Storage\StorageClient;

// Configura las credenciales de Firebase
$firebaseConfig = [
    "type" => "service_account",
    "project_id" => "termine-a3b29",
    "private_key_id" => "c5e376cbb289fcbe6778078ce402c0ff14d04283",
    "private_key" => "-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCQYC/nRPjA45rH\nQhMd5X6A1P2q+AavRCEizusfIN8YoJZOkHgq0m2VFBI5/KQGDHjpETV4EMCIhpsb\n/iZsTAA0USbbdO1uMTico/lpKywyjVOWnxXEnlrWb9Nbi0WOpb1kEEdncIiYApaI\nxY47ZgdMpFUEdS4nOq+Xwwph4fy3MHdzPjOt2vnaFHgh6seQSBkvSwH+B+q2c7LS\nHE5iyuIQnMFcZSw0e2w01YaWi2obGP0CkzasBIpErAKhTYoUsdBHq36RDFeO+XHx\ndl3+WQzLBFNjnHUkZnSR35vlEuq6cpSNFMj3gVbNK7NKRwo+1zxbHaBex2bUzgFE\nl2NlfEfzAgMBAAECggEAPkqB4JKNkQuimB4WCWwe7I74828X0z7d3RrRrxiLqSCA\nOV1zu2YXCZ8jTgmG62UuNcDLBQaVS1JoUeeRxF/2Jpxs23rThhuOhWbqEUojQ5xe\nWDpDNhXss2CEHJc2Z5ly4V10sViIVq2nLVOvTklzFMpCNC4qv5o+cIgiTqEmXBLT\nFK+NPk9O41v9bOSH6/qe5+0aU8t885eGC2FzpZmBNUdJNk1bqOPy1NvIZEDw412O\njcro74zYnlNa7esJgAdKaaxkXDGTHXYfXuyLTcSkX7YL9PE56bihzwlC2BHIqd6S\nI7DLEbo6qD0YG2jrdUNmhR8Emb3iJflvLaJgc7brIQKBgQDK0dJQCkY+7jDJJL3v\nPRn5I/iqJdLfTy8rAq3H4r3SbF+xDHRM/tmlvlstkQZ0m0l3we6BVWpj5WLJhUGw\nwohrmY406UPN+Cfjw6mBk6xD3pLNmNrFJD/nACSpQIpJggSo5E7WhlC9JTGJgYW7\nOkn+ScxjbMAq8ur7E0cnzunqzQKBgQC2O1hjbEbJKnEhT11Bocdbz60mCqMzwS8T\npOunt6p/AxRolreG02v/0bb1nM+x/iQHFlTnODO733xGK+PyIuUI1N/sCSWBmC77\nLMl5Dzvij2w9Apas0sA3F5ZarL+rSoslQYkU7oQuASOytN00PEvODTYPx3QrAfoC\nixx2opB9vwKBgQCWaQiJJzV1EfvID6FzvGJ4qz6MIETEKtsWEISEChkv5gMJL+1H\n9G/ARO0lW7nn3Amd8IpKC+g8cS7TuClBRuMYuOYHQz5vjys19DLOz48fPf6szkDf\nlsR1MVv+0Mg9P1jpT3dQDIfv3ZdhHFbqxI1/MYeL7GiO8VtmG6PXV9GNuQKBgAeB\nPCukCuo/+DbB+Po5+mbaj6vwZjY8b37knNvkYX4nl1CTXG2OCXWYomtNEPSonb04\n+zgmhWLoWkrdhd6z9zC865fh7IyAwvaPKqD0sqeq9m8wyxnE+CuMqiGD2cTpJf/b\nyhR1mjX20AyNDEsZbJnIy4As26jlxPET35E3MrIrAoGANaZePodb+KeP0bZSp0eZ\ndzFGBhB/+xpr8XlRYhvGlvLURYpIXI554jeh8Fs1cx0j/buKlvEXdnxK65h7Wo4j\nwyDs5yX9BhT4jd2yoOgoqdhJRZL/TaAcKk7zaitFwDed2LBeN7f33kbOFINKoSie\nfq/MfndrOycfGd8NT1/0Vhw=\n-----END PRIVATE KEY-----\n",
    "client_email" => "termine-a3b29@appspot.gserviceaccount.com",
    "client_id" => "107614614779810373117",
    "auth_uri" => "https://accounts.google.com/o/oauth2/auth",
    "token_uri" => "https://oauth2.googleapis.com/token",
    "auth_provider_x509_cert_url" => "https://www.googleapis.com/oauth2/v1/certs",
    "client_x509_cert_url" => "https://www.googleapis.com/robot/v1/metadata/x509/termine-a3b29%40appspot.gserviceaccount.com",
    "universe_domain" => "googleapis.com"
];

// Crea un token de Firebase
$jwt = JWT::encode($firebaseConfig, null, 'RS256');

// Inicializa el cliente de almacenamiento
$storage = new StorageClient([
    'projectId' => 'termine-a3b29',
    'keyFile' => json_decode($jwt, true)
]);

// Nombre de tu bucket
$bucketName = 'termine-a3b29.appspot.com';

// Lista de archivos en el bucket
$bucket = $storage->bucket($bucketName);
$files = $bucket->objects();

foreach ($files as $file) {
    echo $file->name() . PHP_EOL;
}
