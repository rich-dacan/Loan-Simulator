<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $loan_amount = floatval($_POST["loan_amount"]);
  $installments = intval($_POST["installments"]);
  $score = intval($_POST["score"]);
  $bank_customer = ($_POST["bank_customer"] == "yes") ? true : false;
  $unemployment_insurance = ($_POST["unemployment_insurance"] == "yes") ? true : false;

  // Include the loan simulation scripts
  // include_once "loan_simulation.php";
  // simulateLoan($loan_amount, $installments, $score, $bank_customer, $unemployment_insurance);

  // Using session variables to pass the form data to the loan_result.php page
  $_SESSION["loan_amount"] = $loan_amount;
  $_SESSION["installments"] = $installments;
  $_SESSION["score"] = $score;
  $_SESSION["bank_customer"] = $bank_customer;
  $_SESSION["unemployment_insurance"] = $unemployment_insurance;

  header("Location: loan_result.php");

} else {
  // Redirect back to the form if accessed directly without form submission
  header("Location: /index.html");
  exit;
}
