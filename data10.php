<?php
//shipmethodID

require('koneksi.php');

$sql = "select s.Name as nama,  count(f.ShipMethodID) as total from faktapembelian2 f join shipmethod s on s.ShipMethodID = f.ShipMethodID group by f.ShipMethodID ";
$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "nama" => $row['nama'],
        "total" => $row['total']
    ));
}

$data10 = json_encode($hasil);
