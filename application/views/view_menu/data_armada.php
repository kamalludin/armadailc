<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<form class="form-horizontal" id="data-armada">
			<!-- Panel atas -->
				<div class="panel panel-info" id="panel-inf-cabang">
					<div class="panel-heading">
						<h3 class="panel-title">View Armada</h3>
					</div>
					<ul class="nav nav-tabs" id=list-tab>
			            <li class="active"><a data-toggle="tab" href="#tab-global" id="id-tab-global">Global</a></li>
			            <li><a data-toggle="tab" href="#tab-cabang" id="id-tab-cabang">Cabang</a></li>
			            <li><a data-toggle="tab" href="#tab-detail" id="id-tab-detail">Detail</a></li>
		            </ul>
					<div class="panel-body">
						<div class="tab-content">
							<div id="tab-global" class="tab-pane fade in active">
	          					<div class="row">
					                <div class="col-sm-12" >
				                        <table id="table-armada-global" class="table table-striped" width="100%">
					                        <thead>
					                            <tr>
					                                <th>Kota</th>
					                                <th>Cabang</th>
											        <th>No Polisi</th>
											        <th>Merk</th>
											        <th>Type</th>
											        <th>Warna</th>
					                            </tr> 
					                        </thead>
					                    </table>
					                </div>
					            </div>
	            			</div>
	            			<div id="tab-cabang" class="tab-pane fade">
		            			<div class="row">
		          					<div class="form-group col-sm-12">
										<form id="form-armada-cabang">
											<div class="form-group col-sm-12">
												<label class="control-label col-sm-1">Kota :</label>
												<div class="col-sm-3">
													<select class="form-control select-kota" id="kota-armada">
													</select>
												</div>
												<div class="col-sm-4">
													<button type="button" class="btn btn-info" id="btn-lihat"><i class="fa fa-search-plus" ></i> Lihat</button>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-body">
						                <div class="col-sm-12" >
					                        <table id="table-armada-kota" class="table table-striped" width="100%">
						                        <thead>
						                            <tr>
						                                <th>Kota</th>
						                                <th>Cabang</th>
												        <th>No Polisi</th>
												        <th>Merk Kendaraan</th>
												        <th>Type Kendaraan</th>
												        <th>Warna</th>
						                            </tr> 
						                        </thead>
						                    </table>
						                </div>
					                </div>
					            </div>
	            			</div>
	            			<div id="tab-detail" class="tab-pane fade">
	            				<div class="row">
					            	<div class="form-group col-sm-12">
										<div class="col-sm-6">
											<h4>Pilih Armada :</h4>
										</div>
									</div>
					            </div>
	      						<div class="panel panel-default">
	      							<div class="panel-body">
		          						<div class="form-group col-sm-12">
											<form id="form-armada-detail">
												<div class="form-group col-sm-12">
													<label class="control-label col-sm-2">Kota :</label>
													<div class="col-sm-2">
														<select class="form-control select-kota" id="select-detail-kota">
														</select>
													</div>
													<label class="control-label col-sm-2">Cabang :</label>
													<div class="col-sm-2">
														<select class="form-control select-cabang" id="select-detail-cabang">
														</select>
													</div>
													<label class="control-label col-sm-2">No Polisi :</label>
													<div class="col-sm-2">
														<select class="form-control select-nopol" id="select-detail-nopol">
														</select>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
					            <div class="row">
					            	<div class="form-group col-sm-12">
										<div class="col-sm-6">
											<h4>Detail Armada :</h4>
										</div>
									</div>
					            </div>
					            <div class="panel panel-default">
	          						<div class="panel-body">
						                <div class="col-sm-12" >
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
														<input type="text" class="form-control" id="detail-kota" placeholder="Nama Kota" disabled>
													</div>
													<label class="control-label col-sm-2">No Polisi :</label>
													<div class="col-sm-4">
														<input type="text" class="form-control" id="detail-nopol" placeholder="No Polisi" disabled>
													</div>
												</div>
												<div class="form-group col-sm-12">
													<label class="control-label col-sm-2">Cabang :</label>
													<div class="col-sm-4">          
														<input type="text" class="form-control" id="detail-cabang" placeholder="Nama Cabang" disabled>
													</div>
													<label class="control-label col-sm-2">Merk dan Type :</label>
													<div class="col-sm-2">          
														<input type="text" class="form-control" id="detail-merk" placeholder="Merk" disabled>
													</div>
													<div class="col-sm-2">          
														<input type="text" class="form-control" id="detail-type" placeholder="Type" disabled>
													</div>
												</div>
												<div class="form-group col-sm-12">
													<label class="control-label col-sm-2">Pemilik :</label>
													<div class="col-sm-4">          
														<input type="text" class="form-control" id="detail-pemilik" placeholder="Nama Pemilik" disabled>
													</div>
													<label class="control-label col-sm-2">Tanggal Pajak :</label>
													<div class="col-sm-4">          
														<input type="text" class="form-control" id="detail-tgl-pajak" placeholder="Tanggal Pajak" disabled>
													</div>
												</div>
												<div class="form-group col-sm-12">
													<div class="col-sm-6">
													</div>
													<label class="control-label col-sm-2">Tanggal Perpanjang :</label>
													<div class="col-sm-4">          
														<input type="text" class="form-control" id="detail-tgl-perpanjang" placeholder="Tanggal Perpanjang Pajak" disabled>
													</div>
												</div>
												<div class="form-group col-sm-12">
													<div class="col-sm-6">
													<h4>Data Leasing</h4>
													</div>
													<label class="control-label col-sm-2">Tanggal KIR :</label>
													<div class="col-sm-4">          
														<input type="text" class="form-control" id="detail-tgl-kir" placeholder="Tanggal KIR" disabled>
													</div>
												</div>
												<div class="form-group col-sm-12">
													<label class="control-label col-sm-2">Leasing :</label>
													<div class="col-sm-4">          
														<input type="text" class="form-control" id="detail-leasing" placeholder="Nama Leasing" disabled>
													</div>
													<label class="control-label col-sm-2">No Mesin :</label>
													<div class="col-sm-4">          
														<input type="text" class="form-control" id="detail-no-mesin" placeholder="No Mesin" disabled>
													</div>
												</div>
												<div class="form-group col-sm-12">
													<label class="control-label col-sm-2">Angsuran Selesai :</label>
													<div class="col-sm-4">          
														<input type="text" class="form-control" id="detail-ang-selesai" placeholder="Angsuran yang telah dibayar" disabled>
													</div>
													<label class="control-label col-sm-2">No Rangka :</label>
													<div class="col-sm-4">          
														<input type="text" class="form-control" id="detail-no-rangka" placeholder="No Rangka" disabled>
													</div>
												</div>
												<div class="form-group col-sm-12">
													<label class="control-label col-sm-2">Total Angsuran :</label>
													<div class="col-sm-4">          
														<input type="text" class="form-control" id="detail-total-ang" placeholder="Jumlah Angsuran" disabled>
													</div>
													<label class="control-label col-sm-2">Warna :</label>
													<div class="col-sm-4">          
														<input type="text" class="form-control" id="detail-total-ang" placeholder="Warna" disabled>
													</div>
												</div>
												<div class="form-group col-sm-12">
													<div class="col-sm-6">
													</div>
													<label class="control-label col-sm-2">Tahun Produksi :</label>
													<div class="col-sm-4">
														<input type="text" class="form-control" id="detail-thn-produksi" placeholder="Tahun Produksi" disabled>
													</div>
												</div>
											</form>
						                </div>
									</div>
								</div>
	            			</div>
	            		</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>