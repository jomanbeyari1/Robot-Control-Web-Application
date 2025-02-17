<?php
// Load Firebase library
require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;

// Firebase setup
$firebaseConfigPath = __DIR__ . '/robotcontrol-a8c92-firebase-adminsdk-fbsvc-c3d83fa559.json';
$databaseUri = 'https://robotcontrol-a8c92-default-rtdb.firebaseio.com'; // Firebase database URL

// Initialize Firebase
$factory = (new Factory)
    ->withServiceAccount($firebaseConfigPath)
    ->withDatabaseUri($databaseUri);

$database = $factory->createDatabase();

// Retrieve the last value from the database
try {
    $directionsRef = $database->getReference('directions'); // Path to the data
    $directions = $directionsRef->getValue(); // Read all data

    if ($directions) {
        $lastDirection = end($directions); // Get the last entry
        echo "Last Direction: " . $lastDirection['direction'] . " at " . $lastDirection['timestamp'];
    } else {
        echo "No data found in the database.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
