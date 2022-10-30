<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<br><br><br>
<section class="contact-page py-120 rpy-100">
	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<div class="contact-form ml-40 rml-0 rmt-55 wow fadeInRight delay-0-2s">
					<h3 class="comment-title mb-35">
						Apply for your job
					</h3>
					<p>
						Alternatively, you may contact us by filling up the contact form. Our team will response you shortly.
					</p>

					<form method="post" action="<?php echo site_url('job_seeker/save'); ?>" autocomplete="off">
						<div class="row" style="background-color: #432875; padding: 20px;">
							<div class="col-md-12">
								<?php $this->load->view('templates/shared/alert'); ?>
							</div>
							<div class="col-xl-12 col-md-12 col-sm-12 jp_contact_inputs_wrapper" style="padding-top: 20px;">
								<label style="color: white;">Name</label>
								<input type="text" placeholder="Name" name="name" value="<?php echo set_value('name'); ?>">
							</div>

							<div class="col-xl-12 col-md-12 col-sm-12 jp_contact_inputs_wrapper" style="padding-top: 20px;">
								<label style="color: white;">NRC No</label>
								<input type="text" placeholder="NRC No" name="nrc" value="<?php echo set_value('nrc'); ?>">
							</div>

							<div class="col-xl-12 col-md-12 col-sm-12 jp_contact_inputs_wrapper" style="padding-top: 20px;">
								<label style="color: white;">Email Address</label>
								<input type="email" placeholder="Email Address" name="email" value="<?php echo set_value('email'); ?>">
							</div>

							<div class="col-xl-12 col-md-12 col-sm-12 jp_contact_inputs_wrapper" style="padding-top: 20px;">
								<label style="color: white;">Phone Number</label>
								<input type="text" placeholder="Phone Number" name="phone" value="<?php echo set_value('phone'); ?>">
							</div>

							<div class="col-xl-12 col-md-12 col-sm-12 jp_contact_inputs_wrapper" style="padding-top: 20px;">
								<label style="color: white;">Date Of Birth</label>
								<input type="text" placeholder="Date Of Birth" name="date_of_birth" value="<?php echo set_value('name'); ?>">
							</div>

							<div class="col-xl-12 col-md-12 col-sm-12 jp_contact_inputs_wrapper" style="padding-top: 20px;">
								<label style="color: white;">Health Status</label>
								<input type="text" placeholder="Health Status" name="health_status" value="<?php echo set_value('health_status'); ?>">
							</div>

							

							<div class="col-xl-12 col-md-12 col-sm-12 jp_contact_inputs_wrapper" style="padding-top: 20px;">
								<label style="color: white;">Gender</label>
								<select name="gender" class="form-control">
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>

							<div class="col-xl-4 col-md-4 col-sm-12 jp_contact_inputs_wrapper" style="padding-top: 20px;">
								<label style="color: white;">Age</label>
								<input type="text" placeholder="Age" name="age" value="<?php echo set_value('age'); ?>">
							</div>

							<div class="col-xl-4 col-md-4 col-sm-12 jp_contact_inputs_wrapper" style="padding-top: 20px;">
								<label style="color: white;">Height</label>
								<input type="text" placeholder="Height" name="height" value="<?php echo set_value('height'); ?>">
							</div>

							<div class="col-xl-4 col-md-4 col-sm-12 jp_contact_inputs_wrapper" style="padding-top: 20px;">
								<label style="color: white;">Weight <small>(lb)</small></label>
								<input type="text" placeholder="Weight" name="weight" value="<?php echo set_value('weight'); ?>">
							</div>

							<div class="col-xl-12 col-md-12 col-sm-12 jp_contact_inputs_wrapper" style="padding-top: 20px;">
								<label style="color: white;">Passport</label>
								<input type="text" placeholder="Passport" name="passport" value="<?php echo set_value('passport'); ?>">
							</div>

							<div class="col-xl-12 col-md-12 col-sm-12 jp_contact_inputs_wrapper" style="padding-top: 20px;">
								<label style="color: white;">Date Of Expiry (Passport)</label>
								<input type="text" placeholder="Date Of Expiry (Passport)" name="expire_date" value="<?php echo set_value('expire_date'); ?>">
							</div>

							<div class="col-xl-12 col-md-12 col-sm-12 jp_contact_inputs_wrapper" style="padding-top: 20px;">
								<label style="color: white;">Education Background</label>
								<input type="text" placeholder="Education" name="education" value="<?php echo set_value('education'); ?>">
							</div>

							<div class="col-xl-12 col-md-12 col-sm-12 jp_contact_inputs_wrapper" style="padding-top: 20px;">
								<label style="color: white;">Skill(Special Skills)</label>
								<input type="text" placeholder="Skill" name="skill" value="<?php echo set_value('skill'); ?>">
							</div>

							<div class="col-xl-12 col-md-12 col-sm-12 jp_contact_inputs_wrapper" style="padding-top: 20px;">
								<label style="color: white;">Language</label>
								<input type="text" placeholder="English 4 skills, N5 Japanese" name="language" value="<?php echo set_value('language'); ?>">
							</div>

							<div class="col-xl-12 col-md-12 col-sm-12 jp_contact_inputs_wrapper" style="padding-top: 20px;">
								<label style="color: white;">Current Address</label>
								<input type="text" placeholder="Current Address" name="current_address" value="<?php echo set_value('current_address'); ?>">
							</div>

							<div class="col-sm-12 py-3">
								<div class="form-group mb-0">
									<button type="submit" class="theme-btn">Apply Now</button>
								</div>
							</div>

						</div>
					</form>

				</div>
			</div>
		</div>


	</div>
</section>

<?php $this->load->view('templates/footer'); ?>