<?php
/** Loop Association Matters CPT
 */

       if(have_posts()):

       while ( have_posts() ) : the_post();
            echo '<div class="association-matter">';
                echo '<h4 class="entry-title"><a href="'.get_permalink().'">'.get_the_title().'</a></h4>';
                echo '<div class="entry-content">';
                    the_excerpt();
                echo '</div>';
            echo '</div>';
       endwhile;
       echo paginate_links();


           wp_reset_query();
   endif;



