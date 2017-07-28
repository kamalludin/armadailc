<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<form class="form-horizontal" id="bayar-cicilan">
				<!-- Panel atas -->
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Input Armada</h3>
					</div>
					<div class="panel-body">
						<div class="form-group col-sm-12">
							<div class="col-sm-6">
							<h4>Data Cabang</h4>
							</div>
							<div class="col-sm-6">
							<h4>Data Kendaraan</h4>
							</div>
						</div>
						<form id="form-input-armada">
							<div class="form-group col-sm-12">
								<label class="control-label col-sm-2">Kota :</label>
								<div class="col-sm-4">          
									<select class="form-control select-kota" id="kota">
									</select>
								</div>
								<label class="control-label col-sm-2">No Polisi :</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" id="nopol" placeholder="Masukkan No Polisi">
								</div>
							</div>
							<div class="form-group col-sm-12">
								<label class="control-label col-sm-2">Cabang :</label>
								<div class="col-sm-4">          
									<select class="form-control select-cabang" id="cabang">
									</select>
								</div>
								<label class="control-label col-sm-2">Merk dan Type :</label>
								<div class="col-sm-2">          
									<select class="form-control" id="merk">
									</select>
								</div>
								<div class="col-sm-2">          
									<select class="form-control" id="type">
									</select>
								</div>
							</div>
							<div class="form-group col-sm-12">
								<label class="control-label col-sm-2">Pemilik :</label>
								<div class="col-sm-4">          
									<select class="form-control" id="pemilik">
									</select>
								</div>
								<label class="control-label col-sm-2">Tanggal Pajak :</label>
								<div class="col-sm-4">          
									<input type="text" class="form-control" id="tgl_pajak" placeholder="Masukkan Tanggal Pajak">
								</div>
							</div>
							<div class="form-group col-sm-12">
								<div class="col-sm-6">
								</div>
								<label class="control-label col-sm-2">Tanggal Perpanjang :</label>
								<div class="col-sm-4">          
									<input type="text" class="form-control" id="tgl_perpanjang" placeholder="Masukkan Tanggal Perpanjang Pajak">
								</div>
							</div>
							<div class="form-group col-sm-12">
								<div class="col-sm-6">
								<h4>Data Leasing</h4>
								</div>
								<label class="control-label col-sm-2">Tanggal KIR :</label>
								<div class="col-sm-4">          
									<input type="text" class="form-control" id="tgl_kir" placeholder="Masukkan Tanggal KIR">
								</div>
							</div>
							<div class="form-group col-sm-12">
								<label class="control-label col-sm-2">Leasing :</label>
								<div class="col-sm-4">          
									<select class="form-control" id="leasing">
									</select>
								</div>
								<label class="control-label col-sm-2">No Mesin :</label>
								<div class="col-sm-4">          
									<input type="text" class="form-control" id="no_mesin" placeholder="Masukkan No Mesin">
								</div>
							</div>
							<div class="form-group col-sm-12">
								<label class="control-label col-sm-2">Angsuran Selesai :</label>
								<div class="col-sm-4">          
									<input type="text" class="form-control" id="ang_selesai" placeholder="Masukkan Angsuran yang telah dibayar">
								</div>
								<label class="control-label col-sm-2">No Rangka :</label>
								<div class="col-sm-4">          
									<input type="text" class="form-control" id="no_rangka" placeholder="Masukkan No Rangka">
								</div>
							</div>
							<div class="form-group col-sm-12">
								<label class="control-label col-sm-2">Total Angsuran :</label>
								<div class="col-sm-4">          
									<input type="text" class="form-control" id="total_ang" name="total_ang" placeholder="Masukkan Jumlah Angsuran">
								</div>
								<label class="control-label col-sm-2">Warna :</label>
								<div class="col-sm-4">          
									<select class="form-control" id="warna">
									</select>
								</div>
							</div>
							<div class="form-group col-sm-12">
								<div class="col-sm-6">
								</div> 
								<label class="control-label col-sm-2">Tahun Produksi :</label>
								<div class="col-sm-4">
									<select class="form-control" id="thn_produksi">
									<?php
										echo "<option selected='selected'>Pilih Tahun</option>";
										for($i=date('Y'); $i>=date('Y')-20; $i-=1){
										echo"<option value='$i'> $i </option>";
										}
									?>
									</select>
								</div>
							</div>
						</form>
						<div class="panel-footer col-sm-12" id="panel-button">
							<div class="col-sm-10">
							</div>
							<div class="col-sm-2">
								<button type="button" class="btn btn-default" id="btn-clear"><i class="fa fa-trash-o" ></i> Clear</button>
								<button type="button" class="btn btn-primary" id="btn-input"><i class="fa fa-save"></i> Input</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>