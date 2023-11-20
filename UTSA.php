<?php
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Produk</th>";
echo "<th>Stok</th>";
echo "<th>Harga</th>";
echo "<th>Jumlah</th>";
echo "</tr>";

$data = array(
    array(1, "Minyak Telon", 20, 30000),
    array(2, "Diapers", 25, 51000),
    array(3, "Baby Oil", 15, 16000),
    array(4, "Shampo Baby", 20, 20000),
    array(5, "Bedak", 15, 15000),
    array(6, "Baju Bayi", 20, 35500),
    array(7, "Jumper", 25, 50000),
);

$totalJumlah = 0; 

foreach($data as $row) {
    echo "<tr>";
    $jumlah = $row[2] * $row[3]; 
    $totalJumlah += $jumlah; 
    $row[] = $jumlah; 
    foreach($row as $column) {
        echo "<td>$column</td>";
    }
    echo "</tr>";
}

echo "</table>";

echo "Total Jumlah: " . $totalJumlah; 

?>