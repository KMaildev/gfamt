<header class="main-header header-five">

    <div class="header-top-wrap bg-lighter py-10">
        <div class="container">
            <div class="header-top">
                <div class="top-left">
                    <ul>
                        <li>Call Us: <a href="callto:01-9552316">01-9552316</a></li>
                        <li>Call Us: <a href="callto:+66805453522 ">+66805453522 </a></li>
                        <li>Email us: <a href="mailto:goldenfutureaungmyinthu@gmail.com">goldenfutureaungmyinthu@gmail.com</a></li>
                    </ul>
                </div>
                <div class="top-right">
                    <div class="office-time">
                        <i class="far fa-clock"></i><span>09:00 am - 05:00 pm</span>
                    </div>
                    <div class="social-style-one">
                        <a href="http://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="http://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="container clearfix">
            <div class="header-inner d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo">
                        <a href="<?php echo site_url('welcome'); ?>">
                            <img src="<?php echo base_url(); ?>public/data/logo.png" alt="Logo" title="Logo" style="width: 140px;">
                        </a>
                    </div>
                </div>

                <div class="nav-outer clearfix d-flex align-items-center">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg mx-lg-auto">
                        <div class="navbar-header">
                            <div class="mobile-logo py-15">
                                <a href="<?php echo site_url('welcome'); ?>">
                                    <img src="<?php echo base_url(); ?>public/data/logo.png" alt="Logo" title="Logo">
                                </a>
                            </div>

                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">

                                <li class="current">
                                    <a href="<?php echo site_url('welcome'); ?>" style="color: #432875; text-shadow: 5px 5px 5px gray; font-weight: bold; ">
                                        Home
                                    </a>
                                </li>

                                <li class="dropdown">
                                    <a href="#" style="color: #432875; text-shadow: 5px 5px 5px gray; font-weight: bold; ">
                                        Our Company
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul>

                                        <li class="parent">
                                            <a href="<?php echo site_url('about'); ?>">
                                                About Us
                                            </a>
                                        </li>

                                        <li class="parent">
                                            <a href="<?php echo site_url('organizational'); ?>">
                                                Organizational Chart
                                            </a>
                                        </li>

                                        <li class="parent">
                                            <a href="<?php echo site_url('about/team'); ?>">
                                                Our Team
                                            </a>
                                        </li>

                                    </ul>
                                </li>


                                <li class="current">
                                    <a href="<?php echo base_url('public/data/profile.pdf'); ?>" target="_blank" style="color: #432875; text-shadow: 5px 5px 5px gray; font-weight: bold; ">
                                        Company Brochure
                                    </a>
                                </li>

                                <li class="dropdown">
                                    <a href="#" style="color: #432875; text-shadow: 5px 5px 5px gray; font-weight: bold; ">
                                        Our Services
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul>
                                        <?php
                                        foreach ($country_lists as $key => $value) {
                                        ?>
                                            <li class="parent">
                                                <a href="<?php echo site_url('oversea_jobs/category/' . $value->id); ?>">
                                                    <?php echo $value->name; ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" style="color: #432875; text-shadow: 5px 5px 5px gray; font-weight: bold; ">
                                        Registration Form
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul>
                                        <li class="parent">
                                            <a href="<?php echo site_url('job_seeker'); ?>">
                                                Job Seeker
                                            </a>
                                        </li>

                                        <li class="parent">
                                            <a href="<?php echo site_url('employers'); ?>">
                                                Employers
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="current">
                                    <a href="<?php echo site_url('activities'); ?>" style="color: #432875; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                                        Our Activities
                                    </a>
                                </li>

                                <li class="current">
                                    <a href="<?php echo site_url('contact'); ?>" style="color: #432875; text-shadow: 5px 5px 5px gray; font-weight: bold;">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->

                    <div class="menu-btn">
                        <a href="mailto:info@goldenfutureaungmyinthu.com" class="theme-btn">
                            Mail Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>