<?php
get_header();

$args = array(
    'post_type' => 'projects_region',
    'posts_per_page' => 10
);

$query = new WP_Query($args); ?>
<div class="project-list">
    <div class="project-listing-title-container">
        <h1 class="project-listing-title">Projects Listing</h1>
    </div>
    <div class="container-project">
        <?php
        if (have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                get_template_part('template-parts/projects-list-item');

            endwhile;

        else :
            _e('Sorry, no posts matched your criteria.', 'textdomain');
        endif; ?>
    </div>
</div>

<?php get_footer();
