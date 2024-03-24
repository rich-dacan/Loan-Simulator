<?php

function calculateCET($loan_amount, $interest_rate, $registration_fee, $iof) {
  $total = $loan_amount + $registration_fee;
  $interest = $loan_amount * $interest_rate;
  $total += $interest;
  $total += $iof;

  return $total;
}

function calculateInterestRate($score) {
  if ($score >= 0 && $score < 300) {
      return 0.20; // 20%
  } elseif ($score >= 300 && $score < 500) {
      return 0.15; // 15%
  } elseif ($score >= 500 && $score < 700) {
      return 0.10; // 10%
  } else {
      return 0.05; // 5%
  }
}

function simulateLoan($loan_amount, $installments, $score, $bank_customer, $unemployment_insurance) {
  if ($bank_customer) {
    $interest_rate = 0.03; // 3% for bank customers

  } else {
    $interest_rate = calculateInterestRate($score);
  }

  // Registration fee for non-customers
  $registration_fee = $bank_customer ? 0 : 35;

  // IOF tax
  $iof = $loan_amount * 0.0038;

  // Calculate CET
  $cet = calculateCET($loan_amount, $interest_rate, $registration_fee, $iof);

  // Calculate value of each installment
  $installment_value = $cet / $installments;

  echo "Installment value: $" . number_format($installment_value, 2) . "\n";
  echo "Used interest rate: " . ($interest_rate * 100) . "%\n";
  echo "CET (Total Effective Cost): $" . number_format($cet, 2) . "\n";
}

// Uncomment the following code to run the loan simulation in the terminal
// function startApplication() {
//   while (true) {
//     echo "Enter loan amount: ";
//     $loan_amount = floatval(fgets(STDIN));

//     echo "Enter number of installments: ";
//     $installments = intval(fgets(STDIN));

//     echo "Enter your Serasa Score: ";
//     $score = intval(fgets(STDIN));

//     echo "Are you a bank customer? (y/n): ";
//     $bank_customer = strtolower(trim(fgets(STDIN))) == 'y' ? true : false;

//     echo "Do you want to include unemployment insurance? (y/n): ";
//     $unemployment_insurance = strtolower(trim(fgets(STDIN))) == 'y' ? true : false;

//     simulateLoan($loan_amount, $installments, $score, $bank_customer, $unemployment_insurance);

//     echo "Do you want to make another simulation? (y/n): ";
//     $continue = strtolower(trim(fgets(STDIN)));

//     if ($continue != 'y') {
//         break;
//     }
//   }
// }

// startApplication();
