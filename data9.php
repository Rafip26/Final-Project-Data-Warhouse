<?php
//shipmethodID

require('koneksi.php');

$sql = "select p.Name  as nama,  count(f.VendorID) total from faktapembelian2 f join vendor p on p.VendorID =f.VendorID  group by f.VendorID order by total desc limit 10 ";
$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "nama" => $row['nama'],
        "total" => $row['total']
    ));
}

$data9 = json_encode($hasil);
