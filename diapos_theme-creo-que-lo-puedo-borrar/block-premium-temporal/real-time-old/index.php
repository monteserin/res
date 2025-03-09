<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

use Kreait\Firebase\Factory;


// creo que la private_key_id que he generado en este enlace:
// https://console.cloud.google.com/iam-admin/serviceaccounts/details/107614614779810373117/keys?authuser=0&hl=es&project=termine-a3b29
// No esta bien. podríamos revisarlo?
//  que url de la base de datos pongo?
$factory = (new Factory)
    ->withServiceAccount(__DIR__ . '/credentials.json')
    ->withDatabaseUri('https://termine-a3b29-default-rtdb.europe-west1.firebasedatabase.app
');

$database = $factory->createDatabase();


// Ahora puedes interactuar con la base de datos de Firebase.
// Por ejemplo, para obtener una referencia a un nodos:
$reference = $database->getReference('users');

//

// Para leer datos:
$data = $reference->getValue();
echo '44444444';
print_r($data);

// // Para escribir datos:
// $reference->set(['nuevo_valor' => 'Hola desde PHP']);

// // Para actualizar datos:
// $reference->update(['nuevo_valor' => 'Actualizado desde PHP']);

// // Para eliminar datos:
// $reference->remove();
