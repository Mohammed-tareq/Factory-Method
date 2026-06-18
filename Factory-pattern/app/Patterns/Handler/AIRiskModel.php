<?php

namespace App\Patterns\Handler;

use App\Patterns\Interfaces\UnderwritingEngineInterface;

class AIRiskModel implements UnderwritingEngineInterface
{
 public function DecisionResult()
 {
     \Log::info('AI Risk Model Engine');
 }
}