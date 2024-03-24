<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Loan Simulator Result</title>
  <style>
  body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  .result-container {
    width: 80%;
    max-width: 600px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  h2 {
    text-align: center;
  }

  .result-item {
    margin-bottom: 10px;
  }
  </style>
</head>

<body>
  <div class="result-container">
    <h2>Loan Simulation Result</h2>
    <?php
        include_once "./loan_simulation.php";

        // Session data from the form submission
        $loan_amount = $_SESSION["loan_amount"];
        $installments = $_SESSION["installments"];
        $score = $_SESSION["score"];
        $bank_customer = $_SESSION["bank_customer"];
        $unemployment_insurance = $_SESSION["unemployment_insurance"];

        simulateLoan($loan_amount, $installments, $score, $bank_customer, $unemployment_insurance);
      ?>
  </div>
</body>

</html>
