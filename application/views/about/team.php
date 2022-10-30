<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/menu'); ?>

<br><br><br><br>
<section class="gallery-section px-55 rpx-0 pt-115 rpt-95 pb-85 rpb-65">
    <div class="container-fluid">
        <div class="section-title text-center mb-55">
            <span class="sub-title">
                GOLDEN FUTURE AUNG MYIN THU CO.,LTD
            </span>
            <h2>OUR TEAM</h2>
        </div>
        <div class="row text-white justify-content-center">

            <?php
            foreach ($members as $activitie) {
                $temp_arr = explode(',', $activitie->photo);
                $total_count = count($temp_arr);
                for ($i = 0; $i < $total_count; $i++) {
            ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="gallery-item style-four wow fadeInUp delay-0-2s" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                            <img src="<?php echo base_url(); ?>admin/<?php print_r($temp_arr[$i]); ?>" alt="Gallery" style="width: 100%; height: 200px; object-fit: cover; background-size: corver;" data-enlargeable="">
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>
<?php $this->load->view('templates/footer'); ?>