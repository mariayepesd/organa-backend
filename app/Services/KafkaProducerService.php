<?php

namespace App\Services;

use Junges\Kafka\Facades\Kafka;
use App\Models\KafkaLog;

class KafkaProducerService
{
    public function send(string $topic, array $data): void
    {

        Kafka::publishOn($topic)
            ->withConfigOption('compression.codec', 'none') // <── aquí
            ->withBodyKey('pedido', $data)
            ->send();

        KafkaLog::create([
            'topic' => $topic,
            'message' => json_encode($data),
            'status' => 'sent',
        ]);

    }
}
