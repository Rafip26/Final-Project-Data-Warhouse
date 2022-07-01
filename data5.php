<?php
//shipmethodID

require('koneksi.php');

$sql = "select p.NameProduct  as nama,  count(f.ProductID) total from faktapenjualan2 f join product p on p.ProductID =f.ProductID  group by f.ProductID order by total asc limit 10 ";
$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "nama" => $row['nama'],
        "total" => $row['total']
    ));
}

$data5 = json_encode($hasil);
