<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<br><br><br><br>
<section class="gallery-section px-55 rpx-0 pt-115 rpt-95 pb-85 rpb-65">
    <div class="container-fluid">
        <div class="section-title text-center mb-55">
            <span class="sub-title">Our Gallery</span>
            <h2>Some Of Our Work</h2>
        </div>
        <div class="row text-white justify-content-center">

            <?php
            foreach ($activities as $activitie) {
                $temp_arr = explode(',', $activitie->photo);
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
</section>
<?php $this->load->view('templates/footer'); ?>