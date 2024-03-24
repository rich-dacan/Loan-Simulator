<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/style.css">
  <title>Simulador de Empréstimo Bancário</title>
</head>

<body>
  <header>
    <h1>Welcome to TechBank Financial</h1>
    <h2>Bank Loan Simulator</h2>
  </header>

  <section>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="name">Name:
        <input type="text" name="name" placeholder="Type your name">
      </label>


      <label for="is_client">You are already our client?
        <input type="radio" name="is_client" id="yes" value="Yes" checked>Yes</input>
        <input type="radio" name="is_client" id="no" value="No">No</input>
      </label>

      <label for="score">Score:
        <input type="text" name="score" required placeholder="Type your score">
      </label>

      <label for="montante">Valor do Empréstimo (R$):
        <input type="text" name="montante" placeholder="Type loan total price" required>
      </label>

      <!-- <label for="taxa_juros">Taxa de Juros Anual (%):
        <input type="text" name="taxa_juros" required>
      </label> -->

      <label for="parcelas">Número de Parcelas:
        <input type="number" name="parcelas" min="1" max="48" placeholder="Type total parcels" required>
      </label>

      <input type="checkbox" name="check" id="check">Desejo incluir seguro desemprego no valor de R$ 49,90</input>

      <input type="submit" value="Calculate">
    </form>
  </section>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $clientName = $_POST['name'];
        $montante = $_POST['montante'];
        // $taxa_juros = $_POST['taxa_juros'] / 100; // Convertendo a taxa de porcentagem para decimal
        $parcelas = $_POST['parcelas'];
        $score = $_POST['score'];
        $isClient = $_POST['is_client'];


        // Calculando a parcela mensal
        // $parcela_mensal = ($montante * $taxa_juros) / (1 - pow(1 + $taxa_juros, -$parcelas));


        if ($isClient == "Yes") {
            if ($score >= 700) {
                $montante = $montante * 1.1;
            } else if ($score >= 600) {
                $montante = $montante * 1.2;
            } else if ($score >= 500) {
                $montante = $montante * 1.3;
            } else {
                $montante = $montante * 1.4;
            }
        } else {
            if ($score >= 700) {
                $montante = $montante * 1.2;
            } else if ($score >= 600) {
                $montante = $montante * 1.3;
            } else if ($score >= 500) {
                $montante = $montante * 1.4;
            } else {
                $montante = $montante * 1.5;
            }
        }


        // Exibindo o resultado
        echo "<h3>Resultado especial apenas para nosso cliente:</h3><br>" . "Nome do Cliente: " . $clientName . "<br> ";
        echo "Montante do Empréstimo: R$ " . number_format($montante, 2, ',', '.') . "<br>";
        // echo "Taxa de Juros Anual: " . ($_POST['taxa_juros'] * 100) . "%<br>";
        echo "Número de Parcelas: " . $parcelas . "<br>";
        // echo "Valor da Parcela Mensal: R$ " . number_format($parcela_mensal, 2, ',', '.') . "<br>";
        // echo "Valor Total Pago: R$ " . number_format($parcela_mensal * $parcelas, 2, ',', '.');
        echo"Total à pagar: ". number_format($montante, 2,",",);

        echo "<h3>** Resultado baseado em teu score atual: $score </h3>" . "<br>";


        $array = array("1" => "PHP code tester Sandbox Online",
            "emoji" => "😀 😃 😄 😁 😆", 5 , 5 => 89009,
            "Random number" => rand(100,999),
            "PHP Version" => phpversion()
        );

        foreach( $array as $key => $value ){
            echo $key."\t=>\t".$value."\n";
        }
    }
    ?>
</body>

</html>