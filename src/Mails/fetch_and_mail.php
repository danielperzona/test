<?php
require __DIR__ . '/../../vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

try {
    // Hacer petición HTTP
    $response = $client->get('https://armm.mx/marcas/json', [
        'query' => [
            'token' => 'A@bpGUiHAMxvT5@'
        ]
    ]);

    $data = json_decode($response->getBody()->getContents(), true)['data'];


    echo "Correo enviado correctamente\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
