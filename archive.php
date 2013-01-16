<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage lucasr
 */

get_header();?>

      <div class="row-fluid">

        <div class="span12">

          <?php if ( have_posts() ) : ?>

            <header class="entry-header">

              <hgroup>
                <h1 class="entry-title"><?php
                  if ( is_day() ) :
                    _e( 'Daily Archives', 'lucasr' );
                  elseif ( is_month() ) :
                    _e( 'Monthly Archives', 'lucasr' );
                  elseif ( is_year() ) :
                    _e( 'Yearly Archives', 'lucasr' );
                  else :
                    _e( 'Archives', 'lucasr' );
                  endif;
                  ?></h1>
                <h2 class="entry-date"><?php
                  if ( is_day() ) :
                    echo get_the_date();
                  elseif ( is_month() ) :
                    echo get_the_date( _x( 'F Y', 'monthly archives date format', 'lucasr' ) );
                  elseif ( is_year() ) :
                    echo get_the_date( _x( 'Y', 'yearly archives date format', 'lucasr' ) );
                  else :
                    _e( 'Archives', 'lucasr' );
                  endif;
                  ?></h2>
              </hgroup>

            </header>

            <ul class="thumbnails">

            <?php while ( have_posts() ) : the_post(); ?>
              <li class="span6">
                <div class="thumbnail">
                  <?php get_template_part( 'content', 'list' ); ?>
                </div>
              </li>
            <?php endwhile; ?>

            </ul>

          <?php else : ?>

            <?php get_template_part( 'content', 'none' ); ?>

          <?php endif; // end have_posts() check ?>

        </div> <!-- span12 -->

      </div> <!-- row-fluid -->

<?php get_footer(); ?>