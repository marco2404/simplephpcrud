<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studenti</title>
    <link rel="stylesheet" type="text/css" href="stile.css"/>
</head>
<body>
    
    <h2 class="titolo">Registrazione studenti</h2>

    <form method = "POST" action = "pagina2.php">

      <pre id="ciao"> Nome: <input type = "text" name = "nome" onmouseover="this.style.backgroundColor='ORANGE'" onmouseleave="this.style.backgroundColor='WHITE'" > </pre>
      <pre> Cognome: <input type = "text" name = "cognome" onmouseover="this.style.backgroundColor='ORANGE'" onmouseleave="this.style.backgroundColor='WHITE'" > </pre>
      <pre> Data di Nascita: <input type = "text" name = "datadinascita" onmouseover="this.style.backgroundColor='ORANGE'" onmouseleave="this.style.backgroundColor='WHITE'" > </pre>
      <pre> Codice fiscale: <input type = "text" name = "codicefiscale" onmouseover="this.style.backgroundColor='ORANGE'" onmouseleave="this.style.backgroundColor='WHITE'" > </pre>
      <pre> Residenza: <input type = "text" name = "residenza" onmouseover="this.style.backgroundColor='ORANGE'" onmouseleave="this.style.backgroundColor='WHITE'" > </pre>
      <input type = "submit" value = "registrati" onmouseover="this.style.backgroundColor='RED'" onmouseleave="this.style.backgroundColor='WHITE'" />

</form>

</body>
</html>