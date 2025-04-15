<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new \ClientAPI\Semaphore\Semaphore(
    // Obtain the Semaphore API key: https://docs.semaphoreui.com/administration-guide/api/
    host: 'http://localhost:3000/api',
    apiKey: 'ptl1q...........................-p6_ekm=',
);

// Extra configuration
$client->config()->setDebugFile('output.txt');

// Projects
$projects = $client->projects();

try {
    $result = $projects->projectsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsGet: ', $e->getMessage(), PHP_EOL;
}