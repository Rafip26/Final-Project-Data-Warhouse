<?php
require('koneksi.php');

$sql = "SELECT distinct c.Name Nama , f.TotalDue JumlahBeli FROM faktapenjualan2 f JOIN customer c on c.CustomerID=f.CustomerID LIMIT 10;";
$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "nama" => $row['Nama'],
        "total" => $row['JumlahBeli']
    ));
}

$data1 = json_encode($hasil);
