

<?php
include'koneksi.php';
$sql = "SELECT id, barang, akhir FROM harga";
$result = $koneksi->query($sql);
$json = [];
$i = 1;
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$json[$i] ['attributes']= [
'id' => $row["id"],
'barang' => $row["barang"],
'harga' => $row["akhir"],
];
$i = $i + 1;
}
} else {
echo "0 results";
}
$koneksi->close();
$data = $json;
header('Content-Type: application/json');
echo json_encode($data);
?>