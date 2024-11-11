<?php

$connPDO = require_once('connection.php');

$statement = $connPDO->query($sql);

$sql = "SELECT * FROM dati";


echo "<table>
<tr>
<th>ID</th>
<th>Nome</th>
<th>Tipo</th>
<th>Stato</th>
<th>CostoAcquisto</th>
<th>CostoManutenzione</th>
<th>DataAcquisto</th>
<th>DataRevisione</th>
<th>Deposito</th>
<th>LuogoDeposito</th>
<th>Custode</th>
</tr>";
while($row = $statement->fetch(mode: PDO::FETCH_ASSOC)) {
  echo "<tr>";
  echo "<td>" . $row['ID'] . "</td>";
  echo "<td>" . $row['Nome'] . "</td>";
  echo "<td>" . $row['Tipo'] . "</td>";
  echo "<td>" . $row['Stato'] . "</td>";
  echo "<td>" . $row['CostoAcquisto'] . "</td>";
  echo "<td>" . $row['CostoManutenzione'] . "</td>";
  echo "<td>" . $row['DataAcquisto'] . "</td>";
  echo "<td>" . $row['DataRevisione'] . "</td>";
  echo "<td>" . $row['Deposito'] . "</td>";
  echo "<td>" . $row['LuogoDeposito'] . "</td>";
  echo "<td>" . $row['Custode'] . "</td>";

  echo "</tr>";
}
echo "</table>";


?>