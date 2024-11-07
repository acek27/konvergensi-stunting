<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 04/10/17
 * Time: 9:37
 */

namespace App\Traits;

use GuzzleHttp\Client;

trait Notification
{
    public function notification($message, $telp)
    {
        // kirim whatapp
        $msg = "";
        $body['message'] = $message;
        $client = new Client();
        $body['number'] = $telp;
        $body['servername'] = "sdtik.situbondokab.go.id";
        $url = "http://192.168.99.121/whatsappapi/public/api/KirimPesan";
        try {
            $response = $client->request("POST", $url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer VYQQovI3Goc4UEftyuNLZ8BWT7Q3geb8opGmejod'
                ],
                'form_params' => $body
            ]);
            $apiRequest = json_decode($response->getBody()->getContents(), true);

            // return response()->json($apiRequest);
            $msg = 'Pesan WhatsApp terkirim & ';
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                $apiRequest = json_decode($e->getResponse()->getBody()->getContents(), true);
                // return response()->json($apiRequest);
                $msg = 'Pesan WhatsApp tidak Terkirim & ';
            }
        }
        // end whatapp
    }
}
