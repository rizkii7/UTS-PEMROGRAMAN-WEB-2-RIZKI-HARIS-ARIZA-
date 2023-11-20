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

$totalJumlah = 0; // UNTUK MENYIMPAN JUMLAH TOTAL PRODUK

foreach($data as $row) {
    echo "<tr>";
    $jumlah = $row[2] * $row[3]; // HITUNG JUMLAH PRODUK
    $totalJumlah += $jumlah; // MENAMBAHKAN JUMLAH PRODUK KE TOTAL
    $row[] = $jumlah; // TAMBAHKAN JUMLAH PRODUK KE ARRAY PRODUK
    foreach($row as $column) {
        echo "<td>$column</td>";
    }
    echo "</tr>";
}

echo "</table>";

echo "Total Jumlah: " . $totalJumlah; // MENAMPILKAN TOTAL JUMLAH PRODUK

$diskon = 0; // UNTUK MENYIMPAN JUMLAH DISKON

// CEK TOTAL PEMBELIAN
if ($totalJumlah >= 200000) {
    $diskon = 0.1; // DISKON 10%
} elseif ($totalJumlah >= 300000) {
    $diskon = 0.2; // DISKON 20%
}

if ($diskon > 0) {
    $totalDiskon = $totalJumlah * $diskon; // HITUNG JUMLAH DISKON
    $totalBayar = $totalJumlah - $totalDiskon; // HITUNG TOTAL YANG HARUS DIBAYAR SETELAH DISKON
    echo "<br>Discount: " . ($diskon * 100) . "%"; // PERSENTASE DISKON
    echo "<br>Total yang harus dibayar setelah diskon: " . $totalBayar; // TAMPILKAN TOTAL YANG  HARUS DIBAYAR SETELAH DISKON
}
?>