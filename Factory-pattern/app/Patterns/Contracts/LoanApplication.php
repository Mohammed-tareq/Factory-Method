<?php

namespace App\Patterns\Contracts;

use App\Patterns\Interfaces\UnderwritingEngineInterface;

abstract class LoanApplication
{
    abstract public function getLoanApplication(): UnderwritingEngineInterface;

    public function processLoanApplication()
    {
        $engine = $this->getLoanApplication();
        $engine->DecisionResult();
    }
}