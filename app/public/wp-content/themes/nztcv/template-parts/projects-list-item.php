<div class="projects-container">
    <div>
        <?php the_post_thumbnail([200, 200], array("class" => "project-list-item__thumb")); ?>
    </div>
    <div class="project-list-item">
        <div class="h2-conatiner">
            <h2 class="project-list-item__header"><?php the_title() ?></a></h2>
        </div>
        <div class="p-container">
            <p class="project-list-item__excerpt"><?php the_content(); ?></p>
        </div>
    </div>
</div>