<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<section class="page-banner bgs-cover overlay pt-50" style="background-image: url(https://www.kindpng.com/picc/m/124-1247096_elevate-website-icons-contact-us-graphic-design-hd.png);">
	<div class="container">
		<div class="banner-inner">
			<h1 class="page-title">Contact Us</h1>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="<?php echo site_url('welcome'); ?>">Home</a>
					</li>
					<li class="breadcrumb-item active">Contact Us</li>
				</ol>
			</nav>
		</div>
	</div>
</section>

<section class="contact-page py-120 rpy-100">
	<div class="container">

		<div class="contact-info-area mb-80">
			<div class="contact-info-item wow fadeInUp delay-0-2s">
				<i class="far fa-map"></i>
				<p>
					Building No.72,1st Floor(A), Awba Street, Kyauk Myaung Gyi Ward, TarmweTsp, Yangon, Myanmar.
				</p>
			</div>

			<div class="contact-info-item wow fadeInUp delay-0-4s">
				<i class="far fa-envelope"></i>
				<p>
					<a href="mailto:support@gmail.com">
						goldenfutureaungmyinthu@gmail.com
					</a>
					<br>
					<a href="mailto:info@goldenfutureaungmyinthu.com">
						info@goldenfutureaungmyinthu.com
					</a>
				</p>
			</div>

			<div class="contact-info-item wow fadeInUp delay-0-6s">
				<i class="fas fa-phone-alt"></i>
				<p>
					<a href="call:01-9552316">
						01-9552316
					</a>
					<br>
					<a href="call:01-9552162">
						01-9552162
					</a>
					<br>
					<a href="call:+959-43115104">
						+959-43115104
					</a>
					<br>
					<a href="call:+66805453522">
						+66805453522
					</a>
				</p>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-4">
				<div class="contact-form-left bgs-cover h-100 wow fadeInLeft delay-0-2s" style="background-image: url(<?php echo base_url('public/data/contact.jpeg') ?>)">

				</div>
			</div>
			<div class="col-lg-8">
				<div class="contact-form ml-40 rml-0 rmt-55 wow fadeInRight delay-0-2s">
					<h3 class="comment-title mb-35">Send A Message</h3>
					<p>
						Alternatively, you may contact us by filling up the contact form. Our team will response you shortly.
					</p>

					<form method="post" action="<?php echo site_url('contact/save'); ?>" autocomplete="off" class="comment-form mt-35">

						<div class="row clearfix justify-content-center">

							<div class="col-md-12">
								<?php $this->load->view('templates/shared/alert'); ?>
							</div>

							<div class="col-sm-6">
								<div class="form-group">
									<label for="full-name"><i class="far fa-user"></i></label>
									<input type="text" placeholder="Name *" name="name">
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-group">
									<label for="email"><i class="far fa-envelope"></i></label>
									<input type="text" placeholder="Email *" name="email">
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-group">
									<label for="email"><i class="fa fa-envelope"></i></label>
									<input type="text" placeholder="Phone *" name="phone">
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-group">
									<label for="email"><i class="fa fa-pencil-square-o"></i></label>
									</i><input type="text" placeholder="Subject" name="subject">
								</div>
							</div>


							<div class="col-sm-12">
								<div class="form-group">
									<label for="comments"><i class="fas fa-pencil-alt"></i></label>
									<textarea name="message" id="comments" class="form-control" rows="4" placeholder="Write Message" required=""></textarea>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group mb-0">
									<button type="submit" class="theme-btn">Send Message</button>
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