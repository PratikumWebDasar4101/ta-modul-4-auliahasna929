<?php
session_start();
$user = $_SESSION["user"];
$barang = $_POST["barang"];
$pengiriman = $_POST["pengiriman"];
$alamat = $_POST["alamat"];
$tgl_beli = $_POST["tanggal"];
$harga = 0;
$harga_peng = 0;

for ($i=0;$i<count($barang);$i++) { 
    if ($barang[$i] == "Tas")
        $harga += 500000;
    else if ($barang[$i] == "Sepatu") 
        $harga += 300000;
    else if ($barang[$i] == "Topi")
        $harga += 70000;
    else if ($barang[$i] == "Kacamata")
        $harga += 60000;
}

if($pengiriman == "JNE")
    $harga_pengiriman = 11000;
if($pengiriman == "Tiki")
    $harga_pengiriman = 12500;
if($pengiriman == "J&T")
    $harga_pengiriman = 14000;
if($pengiriman == "Grab")
    $harga_pengiriman = 16000;
if($pengiriman == "Gojek")
    $harga_pengiriman = 16000;

function total($i, $j) {
    return $i + $j;
}
?>
    <title>Aulia</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $tgl_beli; ?></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><?php echo $user["nama"]; ?></td>
        </tr>
        <tr>
            <td>No. Telp</td>
            <td>:</td>
            <td><?php echo $user["notelp"]; ?></td>
        </tr>
        <tr valign="top">
            <td>Barang yang dibelis</td>
            <td>:</td>
            <td>
                <?php
                foreach ($barang as $barang_b) {
                    echo $barang_b . "<br>";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Pengiriman</td>
            <td>:</td>
            <td><?php echo $pengiriman . " " . $harga_pengiriman; ?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td>:</td>
            <td><?php echo total($harga, $harga_pengiriman); ?></td>
        </tr>
    </table>
</body>
</html>