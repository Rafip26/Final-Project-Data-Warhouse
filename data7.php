<?php
//shipmethodID

require('koneksi.php');

$sql = "select Name as nama, datediff(current_date(
), HiredDate) as Lama_Kerja from employee order by Lama_kerja ASC Limit 10; ";
$result = mysqli_query($conn, $sql);

$hasil = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($hasil, array(
        "nama" => $row['nama'],
        "total" => $row['Lama_Kerja']
    ));
}

$data7 = json_encode($hasil);
