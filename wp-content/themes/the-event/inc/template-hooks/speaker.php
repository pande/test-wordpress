<?php
/**
 * Speaker hook
 *
 * @package the_event
 */

if ( ! function_exists( 'the_event_add_speaker_section' ) ) :
    /**
    * Add speaker section
    *
    *@since The Event 1.0.0
    */
    function the_event_add_speaker_section() {

        // Check if speaker is enabled on frontpage
        $speaker_enable = apply_filters( 'the_event_section_status', 'enable_speaker', '' );

        if ( ! $speaker_enable )
            return false;

        // Get speaker section details
        $section_details = array();
        $section_details = apply_filters( 'the_event_filter_speaker_section_details', $section_details );

        if ( empty( $section_details ) ) 
            return;

        // Render speaker section now.
        the_event_render_speaker_section( $section_details );
    }
endif;

if ( ! function_exists( 'the_event_get_speaker_section_details' ) ) :
    /**
    * speaker section details.
    *
    * @since The Event 1.0.0
    * @param array $input speaker section details.
    */
    function the_event_get_speaker_section_details( $input ) {

        $content = array();
        $page_ids = array();
        $position = array();

        for ( $i = 1; $i <= 5; $i++ )  :
            $page_id = the_event_theme_option( 'speaker_content_page_' . $i );

            if ( ! empty( $page_id ) ) :
                $page_ids[] = $page_id;
                $position[] = the_event_theme_option( 'speaker_position_' . $i );
            endif;

        endfor;
        
        $args = array(
            'post_type'         => 'page',
            'post__in'          =>  ( array ) $page_ids,
            'posts_per_page'    => 5,
            'orderby'           => 'post__in',
            );                    


        // Run The Loop.
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) : 
            $i = 0;
            while ( $query->have_posts() ) : $query->the_post();
                $page_post['title']     = get_the_title();
                $page_post['url']       = get_the_permalink();
                $page_post['position']  = ! empty( $position[ $i ] ) ? $position[ $i ] : '';
                $page_post['image']     = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_id(), 'the-event-medium' ) : '';

                // Push to the main array.
                array_push( $content, $page_post );
                $i++;
            endwhile;
        endif;
        wp_reset_postdata();
            
        if ( ! empty( $content ) )
            $input = $content;
       
        return $input;
    }
endif;
// speaker section content details.
add_filter( 'the_event_filter_speaker_section_details', 'the_event_get_speaker_section_details' );


if ( ! function_exists( 'the_event_render_speaker_section' ) ) :
  /**
   * Start speaker section
   *
   * @return string speaker content
   * @since The Event 1.0.0
   *
   */
   function the_event_render_speaker_section( $content_details = array() ) {
        if ( empty( $content_details ) )
            return;

        $title = the_event_theme_option( 'speaker_title', '' );
        $sub_title = the_event_theme_option( 'speaker_sub_title', '' );

        ?>
    	<div class="page-section speaker-section team-section relative">
            <div class="wrapper">
                 <?php if ( ! empty( $title ) || ! empty( $sub_title ) ) : ?>
                    <div class="section-header align-center">
                        <?php if ( ! empty( $sub_title ) ) : ?>
                            <p class="sub-title"><?php echo esc_html( $sub_title ); ?></p>
                        <?php endif;

                        if ( ! empty( $title ) ) : ?>
                            <h2 class="section-title"><?php echo esc_html( $title ); ?></h2>
                        <?php endif; ?>
                    </div><!-- .section-header -->
                <?php endif; ?>

                <div class="section-content column-5 circle-layout">
                    <?php foreach ( $content_details as $content ) : ?>
                        <article class="hentry <?php echo ! empty( $content['image'] ) ? '' : 'no-featured-image'; ?>">
                            <div class="post-wrapper">
                                <?php if ( ! empty( $content['image'] ) ) : ?>
                                    <div class="team-image">
                                        <a href="<?php echo esc_url( $content['url'] ); ?>">
                                            <img src="<?php echo esc_url( $content['image'] ); ?>" alt="<?php echo esc_attr( $content['title'] ) ?>">
                                        </a>
                                    </div><!-- .speaker-image -->
                                <?php endif; ?>

                                <div class="entry-container">
                                    <?php if ( ! empty( $content['title'] ) ) : ?>
                                        <header class="entry-header">
                                            <h2 class="entry-title"><a href="<?php echo esc_url( $content['url'] ); ?>"><?php echo esc_html( $content['title'] ); ?></a></h2>
                                        </header>
                                    <?php endif; ?>

                                    <?php if ( ! empty( $content['position'] ) ) : ?>
                                        <h6 class="position"><?php echo esc_html( $content['position'] ); ?></h6>
                                    <?php endif; ?>

                                </div><!-- .entry-container -->
                            </div><!-- .post-wrapper -->
                        </article>
                    <?php endforeach; ?>
                </div><!-- .section-content -->
            </div><!-- .wrapper -->
        </div><!-- #speaker-posts -->
    <?php 
    }
endif;