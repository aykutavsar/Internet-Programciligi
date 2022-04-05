<?php include "includes/header.php"; ?>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 text-center mb-5">
				<h2 class="heading-section">Öğrenci Ekleme</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="wrapper">
					<div class="row no-gutters">
						<div class="col-md-12">
							<div class="contact-wrap w-100 p-lg-5 p-4">
								<form method="POST" action="<?php echo base_url("ogrenci/insert"); ?>" name="contactForm" class="contactForm">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" name="ad" placeholder="Ad">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" name="soyad" placeholder="Soyad">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" name="ogrenciNo" placeholder="Ogrenci No">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<select name="sinif" class="form-control" id="">
													<option value="1" style="color:black;">1.Sınıf</option>
													<option value="2" style="color:black;">2.Sınıf</option>
													<option value="3" style="color:black;">3.Sınıf</option>
													<option value="4" style="color:black;">4.Sınıf</option>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<button type="submit" class="btn btn-primary">Öğrenci Ekle</button>

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
</section>
<?php include "includes/footer.php"; ?>