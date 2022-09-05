<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kedu
 */

?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
    <div class="single-post-item">
                     <?php the_post_thumbnail( "large" ); ?>
                      <div class="single-post-meta">
                        <ul>
                            <li><i class="far fa-user"></i><?php esc_html_e(' Posted by ', 'kedu' ); ?><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a>
                            <li><i class="far fa-clock"></i><?php echo esc_html(get_the_date()); ?></li>
                            <li><i class="far fa-comment-dots"></i><?php echo esc_html(get_comments_number()); esc_html_e(' Comments', 'kedu' ); ?></li>
                        </ul>
                    </div>
                    <div class="single-item-content">
                    <h2><?php the_title(); ?></h2>
                       <?php the_content(); ?>
                    </div>
                  </div>

              
               <div class="row mb-30">
                   <div class="col-md-6">
                   <div class="related-tag">	
                            <span><?php esc_html_e(' Tags : ', 'kedu' ); ?></span> 
                            <ul>
                            <?php echo get_the_tag_list( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
                            </ul>
                        </div>
                   </div>
                   <div class="col-md-6">
                   <div class="single-cat">
                            <span><?php esc_html_e(' Categories : ', 'kedu' ); ?></span> 
                            <ul>
                            <li><?php the_category( " " ); ?></li>
                            </ul>
                        </div>
                   </div>
               </div>
        </article><!-- #post-<?php the_ID(); ?> -->

