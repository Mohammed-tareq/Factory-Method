<?php

namespace App\Patterns\Creations;

use App\Patterns\Contracts\LoanApplication;
use App\Patterns\Handler\BankStatement;
use App\Patterns\Interfaces\UnderwritingEngineInterface;

class BankStatementCreator extends  LoanApplication
{ public function getLoanApplication(): UnderwritingEngineInterface
    {
        return new BankStatement();
    }

}