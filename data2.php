<?php
require('koneksi.php');

$sql = "SELECT c.Name , f.TotalDue FROM faktapenjualan2 f JOIN customer c on c.CustomerID=f.CustomerID GROUP BY f.CustomerID  
ORDER BY f.TotalDue ASC LIMIT 10;";
$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "nama" => $row['Nama'],
        "total" => $row['JumlahBeli']
    ));
}

$data2 = json_encode($hasil);
