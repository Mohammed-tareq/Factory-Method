<?php

namespace App\Patterns\Creations;

use App\Patterns\Contracts\LoanApplication;
use App\Patterns\Handler\CreditScore;
use App\Patterns\Interfaces\UnderwritingEngineInterface;

class CreditScoreCreator extends LoanApplication
{
    public function getLoanApplication(): UnderwritingEngineInterface
    {
        return new CreditScore();
    }

}