<?php

namespace App\Http\Controllers;

use App\Patterns\Contracts\LoanApplication;
use App\Patterns\Creations\AIRiskModelCreator;
use App\Patterns\Creations\BankStatementCreator;
use App\Patterns\Creations\CreditScoreCreator;
use Illuminate\Http\Request;

class CreateApplicationController extends Controller
{
    public function createApplication(LoanApplication $app)
    {
        // Use the injected loan application instance
      $data =  $app->processLoanApplication();
      return response()->json(['message' => 'Loan application processed successfully', 'data' => $data]);
    }


    // this function is use in laravel not the factory pattern by name factory class or factory method
    public function createApplicationFactory(Request $request)
    {
        $applicationType = $request->input('application_type');
       return match ($applicationType) {
            'ai_risk_model' => (new AIRiskModelCreator()),
            'bank_statement' => (new BankStatementCreator()),
            'credit_score' => (new CreditScoreCreator()),
            default => response()->json(['message' => 'Invalid application type'], 400),
        };
    }

//    public function createApplication(Request $request)
//    {
//        $app = $this->createApplicationFactory($request)->processLoanApplication();
//        return response()->json(['message' => 'Loan application processed successfully', 'data' => $app]);
//    }
}
