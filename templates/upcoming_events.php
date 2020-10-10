<div class="upcoming-events">
    <div class="section-heading">
        <h2 class="entry-title">Upcoming Events</h2>
    </div><!-- .section-heading -->
<?php while ($upcoming_events->have_posts()) : $upcoming_events->the_post(); ?>
    <div class="event-wrap d-flex flex-wrap justify-content-between">
        <figure class="m-0">
            <?php the_post_thumbnail(); ?>
        </figure>

        <div class="event-content-wrap">
            <header class="entry-header d-flex flex-wrap align-items-center">
                <h3 class="entry-title w-100 m-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="posted-date">
                    <a href="<?php the_permalink(); ?>"> <?php the_date(); ?> </a>
                </div><!-- .posted-date -->

                <div class="cats-links">
                    <a href="<?php the_permalink(); ?>" ><?php echo get_post_meta(get_the_ID(), '_event_location_key', true); ?></a>
                </div><!-- .cats-links -->
            </header><!-- .entry-header -->

            <div class="entry-content">
                <p class="m-0"><?php the_excerpt(); ?></p>
            </div><!-- .entry-content -->

            <div class="entry-footer">
                <a href="<?php the_permalink(); ?>">Read More</a>
            </div><!-- .entry-footer -->
        </div><!-- .event-content-wrap -->
    </div><!-- .event-wrap -->
<?php endwhile; wp_reset_query(); ?>
</div><!-- .upcoming-events -->