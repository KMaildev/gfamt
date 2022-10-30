<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<br><br><br><br>
<section class="gallery-section px-55 rpx-0 pt-115 rpt-95 pb-85 rpb-65">
	<div class="container-fluid">
		<?php
		foreach ($oversea_jobs as $key => $value) {
			if ($value->country_id == $country_title->id) {
		?>
				<div class="col-md-12" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; padding: 20px;">
					<div class="section-title">
						<h2 style="text-align: left;">
							<?php echo $value->name; ?>
						</h2>
						<span>
							Job in
							<?php echo $country_title->name; ?>
						</span>
						<p style="text-align: justify;">
							<?php echo $value->description ?>
						</p>
					</div>
					<div class="row text-white justify-content-center">
						<?php
						if ($value->photo) {
							$temp_arr = explode(',', $value->photo);
							$total_count = count($temp_arr);
							for ($i = 0; $i < $total_count; $i++) {
						?>
								<div class="col-xl-3 col-lg-4 col-sm-6">
									<div class="gallery-item style-four wow fadeInUp delay-0-2s">
										<img src="<?php echo base_url(); ?>admin/<?php print_r($temp_arr[$i]); ?>" alt="Gallery" style="width: 100%; height: 200px; object-fit: cover; background-size: corver; border: 3px solid white;" data-enlargeable="">
									</div>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
			<hr>
		<?php } ?>
	</div>
</section>

<?php $this->load->view('templates/footer'); ?>