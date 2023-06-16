    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Pay</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
				<div class="row align-items-center table-responsive">
					<table id="DataTable" border="1" class="text-center">
					<thead class="dt-head-right">	
							<tr>
								<th class="col-sm text-center" style="width:5%;">N0</th>
								<th class="col-sm text-center" style="width:15%;">Customer</th>
								<th class="col-sm text-center" style="width:15%;">Tujuan</th>
								<th class="col-sm text-center" style="width:8%;">Harga</th>
								<th class="col-sm text-center" style="width:8%;">Jumlah</th>
								<th class="col-sm text-center" style="width:8%;">Total</th>
								<th class="col-sm text-center" style="width:10%;">Tanggal</th>
								<th class="col-sm  text-center" style="width:10%;">Action</th>
								
							</tr>
						</thead>
						<tbody>
							<?php 
							$no = 1;
							foreach($tiket as $u){
								$nama = "";
                                foreach($user as $arr){
                                    if($arr->id === $u->id_user){
                                        $nama = $arr->nama;
                                    }
                                } 
								 if($u->status === "belum lunas"){
							?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $nama ?></td>
								<td><?php echo $u->nama ?></td>
								<td><?php echo $u->harga_tiket	?></td>
								<td><?php echo $u->jumlah ?></td>
								<td><?php echo $u->jumlah * $u->harga_tiket ?></td>
								
								<td>
								<?php echo $u->tanggal
									
								?>
								</td>
								<td>
									<a type="button" class="btn btn-primary" data-toggle="modal" data-toggle="modal" data-target="#Pay<?= $u->id_tiket?>">Pay</a></li>
								</td>
													
								</tr>
								<!-- Modal -->
								<div class="modal fade" id="Pay<?= $u->id_tiket?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Pay</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												
											<form class="form" action="<?php base_url()?>ControllerPay/Pay/<?php echo $u->id_tiket?>" method="post">
												<div class="form-group">
													<label>Tujuan</label>
													<input type="text" class="form-control"  value="<?php echo $u->nama ?>" disabled>
												</div>
												<div class="form-group">
													<label>Harga</label>
													<input type="text" class="form-control"  value="<?php echo $u->harga_tiket ?>" disabled>
												</div>
												<div class="form-group">
													<label>Jumlah</label>
													<input type="text" class="form-control"  value="<?php echo $u->jumlah ?>" disabled>
												</div>
												<div class="form-group">
													<label>Total</label>
													<input type="text" class="form-control"  value="<?php echo $u->jumlah * $u->harga_tiket ?>" disabled>
												</div>
												<div class="form-group">
													<input type="hidden" name="status" value="lunas">
												</div>
													<button type="submit" class="btn btn-primary">Pay</button>
											</form>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</tbody>
						<?php } ?>
					</table>
				</div>
    
    
                
            </div>
        </section>
    <!-- ================ contact section end ================= -->
   