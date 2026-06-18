<?php

namespace App\Patterns\Handler;

use App\Patterns\Interfaces\UnderwritingEngineInterface;

class BankStatement implements UnderwritingEngineInterface
{
 public function DecisionResult()
 {
     \Log::info('Bank Statement Result');
 }
}