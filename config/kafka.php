<?php

return [
    'brokers' => env('KAFKA_BROKER', '127.0.0.1:9092'),

    'producer' => [
        'compression.codec' => 'none', // o 'gzip' si quieres compresión
    ],

    'consumer' => [
        'auto.offset.reset' => 'earliest',
    ],
];
