<?php
$html = <<<HTML
<!-- wp:group {"align":"full","className":"animate__animated animate__fadeIn","style":{"spacing":{"padding":{"top":"50px","bottom":"50px","left":"20px","right":"20px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull animate__animated animate__fadeIn has-base-background-color has-background" style="padding-top:50px;padding-right:20px;padding-bottom:50px;padding-left:20px">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"50%"} -->
        <div class="wp-block-column" style="flex-basis:50%">
            <!-- wp:paragraph {"className":"eyebrow","style":{"typography":{"textTransform":"uppercase","fontWeight":"600"}}} -->
            <p class="eyebrow" style="font-weight:600;text-transform:uppercase">Live cohorts — Batch 24 opens 8 Sep</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":1,"className":"animate__animated animate__fadeInUp","style":{"typography":{"fontSize":"48px","fontWeight":"800"}}} -->
            <h1 class="wp-block-heading animate__animated animate__fadeInUp" style="font-size:48px;font-weight:800">Learn the skill. Build the proof. <em>Get hired.</em></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"20px"}}} -->
            <p style="font-size:20px">Instructor-led programs in digital marketing, data, security and full-stack engineering - taught live, graded by mentors, and backed by a placement team that has put 41,000 learners into jobs.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"contrast","style":{"border":{"radius":"5px"}}} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-contrast-background-color has-background wp-element-button" style="border-radius:5px">Talk to a counsellor</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"animate__animated animate__fadeInUp","style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull animate__animated animate__fadeInUp has-background-background-color has-background" style="padding-top:50px;padding-bottom:50px">
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center">Four things happen every single week.</h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"textAlign":"center"} -->
    <p class="has-text-align-center">The structure is the product. It repeats until the habit sticks and the portfolio is full.</p>
    <!-- /wp:paragraph -->

    <!-- wp:columns -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":4} -->
            <h4 class="wp-block-heading">1. Live Classes</h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p>90 minutes each, camera-on, capped at 60 seats. Ask questions out loud instead of typing into a void. Recordings land the same night.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":4} -->
            <h4 class="wp-block-heading">2. Portfolio Work</h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p>One shippable artifact a week - a campaign, a dashboard, a working feature. A mentor reviews it line by line.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"animate__animated animate__fadeInUp","style":{"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull animate__animated animate__fadeInUp has-base-background-color has-background" style="padding-top:50px;padding-bottom:50px">
    <!-- wp:heading {"textAlign":"center"} -->
    <h2 class="wp-block-heading has-text-align-center">What they say about us</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"textAlign":"center"} -->
    <p class="has-text-align-center">Unfiltered feedback from learners who built real careers with us.</p>
    <!-- /wp:paragraph -->

    <!-- wp:columns -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:quote -->
            <blockquote class="wp-block-quote"><p>"Live, mentor-led tech education for people who need a job at the end of it - not just a certificate."</p><cite>Learner A.</cite></blockquote>
            <!-- /wp:quote -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
HTML;

echo $html;
?>
