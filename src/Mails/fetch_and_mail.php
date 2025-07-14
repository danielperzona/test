<?php
require __DIR__ . '../../vendor/autoload.php';

use GuzzleHttp\Client;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$client = new Client();

try {
    // Hacer petición HTTP
    $response = $client->get('https://armm.mx/marcas/json', [
        'query' => [
            'token' => 'bpGUiHAMxvT5'
        ]
    ]);

    $data = json_decode($jsonString, true)['data'];



    echo "Correo enviado correctamente\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
