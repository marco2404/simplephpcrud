<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studenti2</title>
    <link rel="stylesheet" type="text/css" href="stile.css"/>
</head>
<body>    
<form method = "POST" action = "pagina1.php">

    <input type ="submit" value = "HOME"/>

</form>
</body>
</html>

<?php 

    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbscuola";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $stmt = $conn->prepare("INSERT INTO studenti (nome, cognome, datadinascita, codicefiscale, residenza ) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nome, $cognome, $datadinascita, $codicefiscale, $residenza);

    $nome = $_POST['nome']; 
    $cognome =  $_POST['cognome'];
    $datadinascita = $_POST['datadinascita'];  
    $codicefiscale = $_POST['codicefiscale'];
    $residenza = $_POST['residenza'];
    $stmt->execute();

    echo "Studente registrato correttamente". "<br>"."<br>";

    $stmt->close();

    $sql = "SELECT id, nome, cognome, datadinascita, codicefiscale, residenza FROM studenti";
    $risultato = $conn->query($sql);

    if ($risultato->num_rows > 0) {
      
      while($row = $risultato->fetch_assoc()) {
        echo "Studente: " . $row["id"]. " ". $row["nome"]. " " .$row["cognome"]." " .$row["datadinascita"]." " .$row["codicefiscale"]." " .$row["residenza"]. "<br>";
      }
    } else {
      echo "0 studenti nella tabella";
    }
    $conn->close();
?>  

