<?php

namespace App\Patterns\Handler;

use App\Patterns\Interfaces\UnderwritingEngineInterface;

class CreditScore implements UnderwritingEngineInterface
{
    public function DecisionResult()
    {
        \Log::info('Credit Score Engine');
    }
}