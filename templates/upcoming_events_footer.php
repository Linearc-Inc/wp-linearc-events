<div class="foot-latest-events">
                            <h2>Upcoming Events</h2>
                            <ul>
                                <?php while ($upcoming_events->have_posts()) : $upcoming_events->the_post(); ?>
                                    <li>
                                        <h3><a href="<?php the_permalink(); ?>"  ><?php the_title(); ?></a></h3>
                                        <div class="posted-date"><?php the_date(); ?></div>
                                    </li>
                                <?php endwhile; wp_reset_query(); ?>
                            </ul>
                        </div><!-- .foot-latest-events -->