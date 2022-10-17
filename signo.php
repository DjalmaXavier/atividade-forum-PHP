<?php
$signosXML = simplexml_load_file('pagSignos.xml');
$dataUser = $_POST['dataNascimento'];
$data = explode('-', $dataUser);
$dataDiaMes = $data[1] . "/" . $data[2];

foreach ($signosXML->signo as $userSigno) {
  $dataInicial = explode('/', $userSigno->dataInicio);

  $dataInicialF = $dataInicial[1] . "/" . $dataInicial[0];

  $dataFinal = explode('/', $userSigno->dataFim);

  $dataFinalF = $dataFinal[1] . "/" . $dataFinal[0];
 
  if (strtotime($dataDiaMes) >= strtotime($dataInicialF) && strtotime($dataDiaMes) <= strtotime($dataFinalF)) {
    echo "<h1>Seu signo é: $userSigno->signoNome</h1>";
    echo "<p>Sobre ele: $userSigno->descricao</p>";
  }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Signo</title>
</head>

<body style="text-align:center;background-color:greenyellow; font-family: cursive">
</body>
<footer>  <input type="button" value="Voltar" onClick="history.go(-1)"></footer>

</html>
