
<?php

$username = $_POST["username"];
$password = $_POST["password"];

if ($username != "root" || $password != "") {
    echo "Access denied";
} else {
    echo "Access allowed<br>";

    $host = 'localhost';
    $db = 'garaa';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password, ); //crea la connessione
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //serve per trovare errori di connessione
        echo "Connection OK<br>";
    } catch (PDOException $e) {
        echo "Connection error<br>";
    }

    
    
    $fields = array(
       
        



    );

    for ($j = 0; $j < count($queries); $j = $j + 1) {
        $result = $conn->prepare($queries[$j]); //prepara la query
        $result->execute(); //esegue la query
        echo "<br>$queries[$j]<br>";
        echo "<table>";
        while ($row = $result->fetch(PDO::FETCH_NUM /*scorre le occorrenze con valore numerico*/)) {
            echo "<tr>";
            for ($i = 0; $i < count($row); $i = $i + 1) {
                echo "<td>" . $row[$i] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    $conn = null; //chiude la connessione
}

?>