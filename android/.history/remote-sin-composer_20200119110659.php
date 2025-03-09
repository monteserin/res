<?php

    $token = "fEC_mu5UsYk:APA91bFl1xyOWhPcqqEeZg8wj0Pm3_zHwTv8dxh5n7dHG_jXK1Liuxe4lFT8vLSCGnWR3JSKmfvv_HWVMRkj1AhlMlwUhgSkWDE2KONWZLxTmdDpi1cT9UoySQpIPZzjAAezgEkq3e4C";

    $jsonMessage = buildMessage($token, "Move your body", "Holaaaaaaa");
    sendToFCM($jsonMessage, "ejercicios-android");


    function sendToFCM($jsonMessage, $projectID){
        $url = 'https://fcm.googleapis.com/v1/projects/'.$projectID.'/messages:send';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonMessage);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            'Authorization: Bearer AAAA6J8DNn0:APA91bGAiuroc6NfsDMQPyDnmKEFapPLWBUZ-sZi4Q6ua-rU49oyItLE2azNWh1ujZYy9tGCuBeKz-wb-0alQiOVqm1ovTbtxJYhO0vSTYAWcYzT1X9Oc-Ytz1xUZBiGsYxW-Btb34vU'
        ));
        $output = curl_exec($ch);
        echo $output;    
    }
    function buildMessage($token, $body, $title){
        $message = array(
            "token"=>$token, 
            "notification"=>array(  "body"=>$body, 
                                    "title"=>$title)
        );
        return $message;
    }

?>