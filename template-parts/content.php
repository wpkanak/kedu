<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kedu
 */

?>
<article class="" id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
      <div class="blogs-list">
                <div class="row mb-30">
                    <div class="col-lg-12">
                        <div class="bloglist-item">
                            <div class="bloglist-img">
							<?php the_post_thumbnail( "large" ); ?>
                            </div>
                            <div class="bloglist-content">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p>
								<?php 

								$excerpt = get_the_excerpt();
                                $excerpt = substr( $excerpt , 0, 200);
                                 echo $excerpt;
								?>
								</p>	
								<a href="<?php the_permalink(); ?>"><?php esc_html_e(' Read More ', 'kedu' ); ?><span class="fas fa-angle-right"></span></a>
                            </div>
                            <div class="bloglist-meta">
                                <ul>
                                <li><i class="far fa-user"></i><?php esc_html_e(' Posted by ', 'kedu' ); ?><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a>
                                    </li>
                                    <li><i class="far fa-clock"></i><?php echo esc_html(get_the_date()); ?></li>
                                    <li><i class="far fa-comment-dots"></i><?php echo esc_html(get_comments_number()); esc_html_e(' Comments', 'kedu' ); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </article><!-- #post-<?php the_ID(); ?> -->

