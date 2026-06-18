<?php

namespace App\Patterns\Creations;

use App\Patterns\Contracts\LoanApplication;
use App\Patterns\Handler\AIRiskModel;
use App\Patterns\Interfaces\UnderwritingEngineInterface;

class AIRiskModelCreator extends LoanApplication
{
    public function getLoanApplication(): UnderwritingEngineInterface
    {
        return new AIRiskModel();
    }

}