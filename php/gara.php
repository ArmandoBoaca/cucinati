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