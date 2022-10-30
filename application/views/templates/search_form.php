<form action="<?php echo site_url('oversea_jobs/search') ?>">
    <div class="jp_slider_form_main_wrapper" data-animation-in="fadeInUp" data-animation-out="animate-out fadeOutDown">
        <div class="jp_main_slider_heading_wrapper">
            <h2>Find Your Job!</h2>
        </div>
        <div class="jp_slider_form_input">
            <input type="text" placeholder="Keyword e.g. (Job Title, Description, Tags)" name="keyword">
        </div>
        <div class="jp_slider_form_location_wrapper">
            <i class="fa fa-dot-circle-o first_icon"></i>
            <select name="country_id">
                <?php
                foreach ($country_lists as $key => $value) {
                ?>
                    <option value="<?php echo $value->id; ?>">
                        <?php echo $value->name; ?>
                    </option>
                <?php } ?>
            </select>
            <i class="fa fa-angle-down second_icon"></i>
        </div>
        <div class="jp_slider_form_btn_wrapper">
            <div class="jp_newsletter_field">
                <button type="submit" style="width: 100%;">
                    SEARCH
                </button>
            </div>
        </div>
    </div>
</form>