<?php echo $judul; ?> 
<?php echo anchor('armada/input_armada','Input data Armada'); ?>
<hr>

<table border='1'>
    <tr>
        <th>Cabang</th>
        <th>Atas Nama</th>
        <th>Merk Kendaraan</th>
        <th>Type Kendaraan</th>
        <th>No Polisi</th>
        <th>Tgl Pajak</th>
        <th>Tgl Perpanjang</th>
        <th>Tgl Kir</th>
        <th>No Mesin</th>
        <th>No Rangka</th>
        <th>Warna</th>
        <th>Thn Produksi</th>
        <th>Leasing</th>
        <th>Angsuran</th>
    </tr>
    <?php
    foreach ($armada as $b) {
        echo "<tr>"
        . "<td>$b->NAMA_CABANG</td>"
        . "<td>$b->NAMA_PEMILIK</td>"
        . "<td>$b->MERK_KENDARAAN</td>"
        . "<td>$b->TYPE_KENDARAAN</td>"
        . "<td>$b->NO_POLISI</td>"
        . "<td>$b->TGL_PAJAK</td>"
        . "<td>$b->TGL_PERPANJANG_STNK</td>"
        . "<td>$b->TGL_KIR</td>"
        . "<td>$b->NO_MESIN</td>"
        . "<td>$b->NO_RANGKA</td>"
        . "<td>$b->WARNA</td>"
        . "<td>$b->THN_PRODUKSI</td>"
        . "<td>$b->NAMA_LEASING</td>"
        . "<td>$b->ANG_SELESAI</td>"
        . "</tr>";
    }
    ?>
</table>