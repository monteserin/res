<?php

    require __DIR__.'/vendor/autoload.php';
    use Kreait\Firebase\Messaging\CloudMessage;
    use Kreait\Firebase\Factory;

    $factory = (new Factory())->withServiceAccount('firebase-adminsdk.json');
    $messaging = $factory->createMessaging();
    $deviceToken = "fEC_mu5UsYk:APA91bFl1xyOWhPcqqEeZg8wj0Pm3_zHwTv8dxh5n7dHG_jXK1Liuxe4lFT8vLSCGnWR3JSKmfvv_HWVMRkj1AhlMlwUhgSkWDE2KONWZLxTmdDpi1cT9UoySQpIPZzjAAezgEkq3e4C";

    $body = "this is body";
    $title = "this is title";
    $message = CloudMessage::fromArray([
        'token' => $deviceToken,
        'notification' => array("body"=>$body, "title"=>$title) // optional
      
    ]);
    var_dump($messaging->send($message));
?>