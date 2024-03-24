<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../src/styles/style.css">
  <title>Loan Simulator Result</title>
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

        if ($loan_amount !== null && $installments !== null && $score !== null && $bank_customer !== null && $unemployment_insurance !== null) {
          echo "<ul>";
          simulateLoan($loan_amount, $installments, $score, $bank_customer, $unemployment_insurance);
          echo "</ul>";
          // echo "<p>Accept this loan simulation? <a href='#'>Yes</a> | <a href='#'>No</a></p>";
          echo "<p>Accept this loan simulation?</p>";
        } else {
          echo "<p>Error: Unable to retrieve loan simulation data. \nPlease contact the support.</p>";
        }
      ?>

    <div class="btn__wrapper">
      <a href="../index.html" class="btn">Back to Form</a>
      <a href="#" class="btn">Next step</a>
    </div>
  </div>
</body>

</html>
