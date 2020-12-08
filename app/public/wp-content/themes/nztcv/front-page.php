<?php

get_header();


?>
<section>
    <div class="banner">
        <div class="text">
            <h1>Kia Ora, Welcome to NZTCV</h1>
            <p>New Zealand Trust for Conservation Volunteers</p>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <h2 class="text-home-join-us">Join us in creating, preserving and restoring </h2>
            <h2>New Zealand's natural environment</h2>
            <p class="p-text-home">Help us to 'nurture nature' in sustaining our ecosystems, wildlife, native bush and forest, parks and reserves, beaches, waterways, urban and rural landscape.</p>
            <div class="ul-bullets">
                <h4>We list Nationwide projects covering</h4>

                <ul class="ul-bullets">
                    <li class="li-li">Sustainability and Eco diversity</li>
                    <li class="li-li">Wildlife and habitat</li>
                    <li class="li-li">Planting & restoration</li>
                    <li class="li-li">Research and field work</li>
                    <li class="li-li">Botanical and Organic centres</li>
                </ul>
            </div>
        </div>
        <div class="col-6 col-md-4">
            <div class="img-bird">
            </div>
        </div>
    </div>
</div>


<div class="container-about-us">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="about-info">
                    <h4>About Us</h4>
                    <p><?php echo wpautop(get_theme_mod('about_media_object_paragraph')) ?></p>
                </div>
            </div>
            <div class="col">
                <h4>Our objectives include</h4>
                <ul class="ul-bullets">
                    <li class="li-li">Encouraging environmental volunteerism nationwide</li>
                    <li class="li-li">Supporting environmental groups and projects nationwide</li>
                    <li class="li-li">Providing a sector wide notice-board and information source</li>
                    <li class="li-li">Encouraging a sharing of information, knowledge and ideas</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>



<?php

get_footer();
