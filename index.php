
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Qual seu signo?</title>
  </head>
  <body style="text-align:center;background-color:greenyellow; font-family: cursive">
    <header>
      <h1>Qual é o seu signo?</h1>
      <p>Informe sua data de nascimento para descobrir seu signo!!!</p>
    </header>
    <form action="signo.php"  method="post">
        Data de Nascimento:
        <input type="date" name="dataNascimento" required checked />
        <input style="margin:20px;" type="submit">                
    </form>
  </body>
</html>
