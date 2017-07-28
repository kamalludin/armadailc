<h1><?php echo $judul; ?></h1>
<hr>
Pilih menu :
<ol>
  <li><?php echo anchor('armada/list_armada','Lihat Data Armada'); ?></li>
  <li><?php echo anchor('armada/input_armada','Input Data Armada'); ?></li>
  <li><?php echo anchor('armada/edit_armada','Edit Data Armada'); ?></li>
  <li><?php echo anchor('armada/hapus_armada','Hapus Data Armada'); ?></li>
</ol> 