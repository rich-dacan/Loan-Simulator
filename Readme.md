# SIMULADOR DE EMPRÉSTIMO

## Requisitos
- Caso o usuário não seja cliente do banco, deverá ser informado então o seu Serasa Score para selecionar qual será a taxa de juros do empréstimo.
- Consulta de taxa de juros baseado no score do Serasa;
- Clientes do banco terão 3% de taxa de juros pré fixadas;
- O usuário deverá informar o valor em reais do empréstimo, em quantas parcelas ele deseja dividir, e se deseja incluir um seguro desemprego;

### Tabela Serasa Score e a taxa de juros
O Serasa Score é um modelo estatístico calculado com base em informações relevantes para a análise de risco de crédito, como dados cadastrais, histórico de consultas, dados negativos e positivos (caso possua o Cadastro Positivo ativo). É uma pontuação que vai de 0 a 1000 e indica as chances de o consumidor pagar suas contas em dia nos próximos 6 meses.
- Faixa de score: de 0 a 299 –taxa de juros: 20%
- Faixa de score: de 300 a 499 –taxa de juros: 15%
- Faixa de score: de 500 a 699 –taxa de juros: 10%
- Faixa de score: de 700 a 1000 –taxa de juros: 5%


### Para cálculo do valor total a ser pago pelo empréstimo deve ser considerado:
- 1 - Tarifa de cadastro de R$ 35,00 para não clientes;
- 2 - Taxa de juros de acordo com o perfil do solicitante;
- 3 - Imposto IOF de 0,38%sobre o valor do empréstimo;


Após calcular os juros e demais encargos do empréstimo, o sistema deve apresentar para o usuário a quantidade de parcelas, o valor de cada parcela, a taxa de juros utilizada e o CET (Custo Efetivo Total).

O CET reúne todos os gastos envolvidos na operação de empréstimo. São eles: juros, IOF, seguro, tributos, registros e demais despesas, que devem ser especificadas no contrato.

Após apresentar o resultado da simulação o sistema deve perguntar ao usuário se ele deseja realizar outra simulação ou encerrar o programa.


---

## PHP runtime to host this project on Vercel
https://github.com/vercel-community/php
