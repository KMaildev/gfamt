<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>
<div class="jp_contact_form_main_wrapper" style="padding-top: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form method="post" action="<?php echo site_url('job_seeker/upload_cv'); ?>" enctype="multipart/form-data">
                    <div class="jp_contact_form_box" style="background-color: #e8a930;">
                        <div class="col-xl-12 col-md-12 col-sm-12" style="padding-top: 20px;">
                            <div class="job-bx-title clearfix">
                                <h3 style="color: #5c130e; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                                    Upload Your CV
                                </h3>
                            </div>
                            <p style="color: white;">
                                We help employees transition quickly and successfully into new jobs and career opportunities.
                            </p>
                            <?php $this->load->view('templates/shared/alert'); ?>
                        </div>

                        <div class="col-xl-6 col-md-6 col-sm-12 jp_contact_inputs_wrapper" style="padding-top: 20px;">
                            <label style="color: white;">Name</label>
                            <input type="text" style="background-color: white;" class="form-control" required placeholder="Name" name="name" value="<?php echo set_value('name'); ?>" autocomplete="off">
                        </div>

                        <div class="col-xl-6 col-md-6 col-sm-12 jp_contact_inputs_wrapper" style="padding-top: 20px;">
                            <label style="color: white;">Phone</label>
                            <input type="text" style="background-color: white;" class="form-control" required placeholder="Phone Number" name="phone" value="<?php echo set_value('phone'); ?>" autocomplete="off">
                        </div>

                        <div class="col-xl-12 col-md-12 col-sm-12" style="padding-top: 20px;">
                            <label style="color: white;">Choose Your CV File</label>
                            <input type="file" name="attached_file" accept=".pdf, .doc, .docx" required>
                        </div>

                        <div class="col-xl-12 col-md-12 col-sm-12" style="padding-top: 20px;">
                            <div class="jp_newsletter_field">
                                <button type="submit" style="background-color: white; color: black">
                                    Apply Now
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('templates/footer'); ?>