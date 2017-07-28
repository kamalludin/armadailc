<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<form class="form-horizontal" id="pindah-armada">
				<!-- Panel atas -->
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Pindah Armada</h3>
					</div>
					<div class="panel-body">
						<div class="form-group col-sm-12">
							<div class="col-sm-6">
							<h4>Armada Asal</h4>
							</div>
							<div class="col-sm-6">
							<h4>Pindah Cabang</h4>
							</div>
						</div>
						<form id="form-input-armada">
							<div class="form-group col-sm-12">
								<label class="control-label col-sm-2">Kota :</label>
								<div class="col-sm-4">          
									<select class="form-control select-kota" id="kota-asal" name="kota">
									</select>
								</div>
								<label class="control-label col-sm-2">Kota :</label>
								<div class="col-sm-4">
									<select class="form-control select-kota" id="kota-pindah" name="kota_pindah">
									</select>
								</div>
							</div>
							<div class="form-group col-sm-12">
								<label class="control-label col-sm-2">Cabang :</label>
								<div class="col-sm-4">          
									<select class="form-control select-cabang" id="cabang-asal" name="cabang_asal">
									</select>
								</div>
								<label class="control-label col-sm-2">Cabang :</label>
								<div class="col-sm-4">          
									<select class="form-control select-cabang" id="cabang-pindah" name="cabang_pindah">
									</select>
								</div>
							</div>
							<div class="form-group col-sm-12">
								<label class="control-label col-sm-2">No Polisi :</label>
								<div class="col-sm-4">          
									<select class="form-control select-nopol" id="nopol-armada" name="nopol_armada">
									</select>
								</div>
							</div>
						</form>
						<div class="panel-footer col-sm-12" id="panel-button">
							<div class="col-sm-10">
							</div>
							<div class="col-sm-2">
								<button type="button" class="btn btn-default" id="btn-clear-pindah"><i class="fa fa-trash-o" ></i> Clear</button>
								<button type="button" class="btn btn-primary" id="btn-pindah"><i class="fa fa-save"></i> Save</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>