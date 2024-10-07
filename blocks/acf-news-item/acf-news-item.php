<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: 

function get_current_post_type() {
    if ( is_singular() ) {
        // Haal het posttype op als je op een enkele post of pagina bent
        return get_post_type();
    } elseif ( is_post_type_archive() ) {
        // Haal het posttype op als je op een post type archiefpagina bent
        return get_query_var('post_type');
    } else {
        return null;
    }
}
$post_type = get_current_post_type();
?>
<!-- NEWS ITEM -->
 <section class="bg-white pb-[60px]">
    <div class="container pt-[50px] lg:pt-[60px] xl:pt-[50px] pb-[30px]">
        <div class="w-full lg:w-[718px] xl:w-[794px]">
            <?php 
            if ( $post_type == 'event' ) {?>
                <a href="/news-events/" class="flex items-center">
                    <div class="mr-[8px]">
                        <svg width="15.9339442px" height="15.9339442px" viewBox="0 0 15.9339442 15.9339442" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Group" fill="#9DDAF4" fill-rule="nonzero">
                                    <g id="Group_443" transform="translate(7.967, 7.967) rotate(-135) translate(-7.967, -7.967)translate(2.3075, 2.3595)">
                                        <polygon id="Path_5" points="2.645 3.33934269e-16 1.365 1.278 7.98 1.283 9.265 3.33934269e-16"></polygon>
                                        <polygon id="Path_6" points="10.415 3.33934269e-16 -4.4408921e-16 10.415 0.8 11.215 10.032 2.191 10.032 9.954 11.319 8.673 11.319 3.33934269e-16"></polygon>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="correction text-14 leading-14 md:text-20 md:leading-20 lg:text-18 lg:leading-18 xl:text-20 xl:leading-20 text-[#9DDAF4] font-medium">See all events</span>
                </a>
                <?php
            } elseif ( $post_type == 'news' ) { ?>
                <a href="/news-events/" class="flex items-center">
                    <div class="mr-[8px]">
                        <svg width="15.9339442px" height="15.9339442px" viewBox="0 0 15.9339442 15.9339442" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Group" fill="#9DDAF4" fill-rule="nonzero">
                                    <g id="Group_443" transform="translate(7.967, 7.967) rotate(-135) translate(-7.967, -7.967)translate(2.3075, 2.3595)">
                                        <polygon id="Path_5" points="2.645 3.33934269e-16 1.365 1.278 7.98 1.283 9.265 3.33934269e-16"></polygon>
                                        <polygon id="Path_6" points="10.415 3.33934269e-16 -4.4408921e-16 10.415 0.8 11.215 10.032 2.191 10.032 9.954 11.319 8.673 11.319 3.33934269e-16"></polygon>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="correction text-14 leading-14 md:text-20 md:leading-20 lg:text-18 lg:leading-18 xl:text-20 xl:leading-20 text-[#9DDAF4] font-medium">See all news</span>
                </a>

            <?php
            } else {
            }
            ?>
            
            <h1 class="text-[#2A3041] font-semibold text-32 leading-33 md:text-42 md:leading-43 lg:text-45 lg:leading-47 xl:text-54 xl:leading-56 mt-[20px] md:mt-[30px] lg:mt-[35px]"><?php the_title();?></h1>
            <p class="text-12 md:text-14 leading-22 lg:leading-25 xl:text-18 xl:leading-30 text-[#1C1C1C] font-normal mt-[8px] md:mt-[10px]"><?php the_time('j F Y'); ?></p>
            <p class="text-18 leading-25 md:text-22 md:leading-30 xl:text-25 xl:leading-30 font-medium text-[#000000] mt-[10px] md:mt-[15px]"><?php echo get_field('introduction', $post_id);?></p>
            <div class="w-[265px] xl:w-[280px]">
                <div class="w-full h-[31px] flex space-x-[6px] mt-[15px] md:mt-[20px]">
                    <?php
                    $tags = get_the_tags($post_id);
                    if ($tags) {
                        // Toon maximaal 3 tags
                        $max_tags = array_slice($tags, 0, 3);
                        foreach ($max_tags as $tag) {
                            // Haal het kleurveld op bij de tag zelf
                            $tag_color = get_field('colour', 'post_tag_' . $tag->term_id); ?>
                            <div class="h-[31px] px-[8px] <?php echo esc_attr($tag_color); ?> flex items-center text-12 leading-12 xl:text-14 xl:leading-14 rounded-[11px] text-white w-fit">
                            <?php echo '<span class="correction">#' . esc_html($tag->name) . '</span>'; ?>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container lg:flex justify-between">
        <div class="grid gap-[15px] md:gap-[30px] w-full lg:w-[722px] ">
            <div class="h-[182px] md:h-[364px] bg-black">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="h-full min-h-full min-w-full object-cover object-center">
            </div>
            <?php $allowed_blocks_inner = ['acf/acf-template-button', 'acf/acf-template-image', 'acf/acf-template-images', 'acf/acf-template-text', 'acf/acf-template-video', 'acf/acf-template-youtube'];?>
            <InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks_inner ) ); ?>"/>
        </div>
        
 
    <?php 
         if ( $post_type == 'event' ) {?>
        <div class="h-auto">
            <div class="hidden lg:block lg:sticky top-[108px] xl:top-[123px] lg:w-[350px] xl:w-[417px]">
                <a href="/news-events/" class="flex items-center justify-between">
                    <span class="text-12 md:text-12 leading-22 lg:leading-22 xl:text-18 xl:leading-18 text-[#009FE3] font-medium">More events</span>
                    <div class="">
                        <svg id="Group_181" data-name="Group 181" xmlns="http://www.w3.org/2000/svg" width="9.953" height="9.954" viewBox="0 0 9.953 9.954">
                            <path id="Path_5" data-name="Path 5" d="M1.28,0,0,1.278l6.615.005L7.9,0Z" transform="translate(-0.001 0)" fill="#009fe3"/>
                            <path id="Path_6" data-name="Path 6" d="M10.942,0,3.051,7.892l.9.9,6.6-6.6V9.954l1.287-1.281V0Z" transform="translate(-1.893 0)" fill="#009fe3"/>
                        </svg>
                    </div>
                </a>
                <hr class="border-[0.5px] border-[#203145] mt-[10px] mb-[15px]">
                <?php
                $current_post_id = get_the_ID(); // Haal het ID van de huidige post op
                $loop = new WP_Query( array(
                    'post_type' => 'event', 
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DECS',
                    'post__not_in' => array($current_post_id) // Sluit de huidige post uit
                ) );
                ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
                    <a href="<?php the_permalink();?>">
                        <h3 class="text-12 md:text-18 leading-22 lg:leading-25 xl:text-18 xl:leading-25 text-[#203145] font-medium"><?php the_title();?></h3>
                        <p class="text-12 md:text-14 leading-22 lg:leading-22 xl:text-16 xl:leading-26 text-[#203145] font-normal mt-[5px]"><?php echo get_field('introduction', $post_id);?></p>
                        <hr class="border-[0.5px] border-[#203145] mt-[15px] mb-[15px]">
                    </a>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
            <?php
         } elseif ( $post_type == 'news' ) { ?>
       <div class="h-auto">
            <div class="hidden lg:block lg:sticky top-[108px] xl:top-[123px] lg:w-[350px] xl:w-[417px]">
                <a href="/news-events/" class="flex items-center justify-between">
                    <span class="text-12 md:text-12 leading-22 lg:leading-22 xl:text-18 xl:leading-18 text-[#009FE3] font-medium">More news</span>
                    <div class="">
                        <svg id="Group_181" data-name="Group 181" xmlns="http://www.w3.org/2000/svg" width="9.953" height="9.954" viewBox="0 0 9.953 9.954">
                            <path id="Path_5" data-name="Path 5" d="M1.28,0,0,1.278l6.615.005L7.9,0Z" transform="translate(-0.001 0)" fill="#009fe3"/>
                            <path id="Path_6" data-name="Path 6" d="M10.942,0,3.051,7.892l.9.9,6.6-6.6V9.954l1.287-1.281V0Z" transform="translate(-1.893 0)" fill="#009fe3"/>
                        </svg>
                    </div>
                </a>
                <hr class="border-[0.5px] border-[#203145] mt-[10px] mb-[15px]">
                <?php
                $current_post_id = get_the_ID(); // Haal het ID van de huidige post op
                $loop = new WP_Query( array(
                    'post_type' => 'news', 
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DECS',
                    'post__not_in' => array($current_post_id) // Sluit de huidige post uit
                ) );
                ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
                    <a href="<?php the_permalink();?>">
                        <h3 class="text-12 md:text-18 leading-22 lg:leading-25 xl:text-18 xl:leading-25 text-[#203145] font-medium"><?php the_title();?></h3>
                        <p class="text-12 md:text-14 leading-22 lg:leading-22 xl:text-16 xl:leading-26 text-[#203145] font-normal mt-[5px]"><?php echo get_field('introduction', $post_id);?></p>
                        <hr class="border-[0.5px] border-[#203145] mt-[15px] mb-[15px]">
                    </a>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>

        <?php
        } else {
        }
        ?>
        </div>
 </section>


 <?php
    // Haal de tags van de huidige post op
    $current_post_id = get_the_ID(); // Huidige post-ID
    $current_tags = wp_get_post_tags($current_post_id, array('fields' => 'ids')); // Haal de tag IDs op

    if ($current_tags) {
        // Query voor vergelijkbare berichten op basis van gedeelde tags
        $loop = new WP_Query(array(
            'post_type' => array('event', 'news'), // Meerdere post types
            'posts_per_page' => 3, // Aantal berichten
            'orderby' => 'date', // Sorteer op datum
            'order' => 'DESC', // Nieuwste berichten eerst
            'post__not_in' => array($current_post_id), // Sluit de huidige post uit
            'tag__in' => $current_tags, // Toon alleen berichten met minstens één van dezelfde tags
        ));
        
        if ($loop->have_posts()) { ?>
        <!-- NEWS & EVENTS -->
        <section class="bg-white pb-[60px]">
            <div class="container text-center pb-[30px] md:pb-[40px] lg:pb-[40px] xl:pb-[50px]">
                <h2 class="text-[#2A3041] font-semibold text-32 leading-33 md:text-42 md:leading-43 lg:text-45 lg:leading-47 xl:text-54 xl:leading-56">Related</h2>
            </div>
            <div class="w-full lg:w-[1129px] xl:w-[1272px] mx-auto">
                <div class="swiper swipernews pb-[30px] md:pb-[40px] lg:pb-[50px] xl:pb-[50px] lg:px-[5px]">
                <div class="flex w-full swiper-wrapper">
        <?php
            while ($loop->have_posts()) : $loop->the_post(); $post_id = get_the_ID(); ?>
                <a href="<?php the_permalink();?>" class="swiper-slide h-[495px] xl:h-[551px] w-[317px] lg:w-full rounded-[40px] item-shadow-news overflow-hidden">
                    <div class="w-full h-[190px] xl:h-[236px] bg-black overflow-hidden">
                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="h-full min-w-full min-h-full object-cover object-center">
                    </div>
                    <div class="w-[265px] xl:w-[280px] mx-auto h-[200px]">
                        <div class="w-full h-[31px] flex space-x-[6px] mt-[20px]">
                            <?php
                            $tags = get_the_tags($post_id);
                            if ($tags) {
                                // Toon maximaal 3 tags
                                $max_tags = array_slice($tags, 0, 3);
                                foreach ($max_tags as $tag) {
                                    // Haal het kleurveld op bij de tag zelf
                                    $tag_color = get_field('colour', 'post_tag_' . $tag->term_id); ?>
                                    <div class="h-[31px] px-[8px] <?php echo esc_attr($tag_color); ?> flex items-center text-12 leading-12 xl:text-14 xl:leading-14 rounded-[11px] text-white">
                                    <?php echo '<span class="correction">#' . esc_html($tag->name) . '</span>'; ?>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="h-[80px] w-full mt-[20px]">
                        <h3 class="text-18 leading-22 xl:text-22 xl:leading-25 font-medium text-[#000000] line-clamp-3"><?php the_title();?></h3>
                        </div>
                        <div class="h-[60px] w-full mt-[10px]">
                        <p class="text-14 leading-14 xl:text-16 xl:leading-16 font-normal text-[#000000]"><?php the_time('j F Y'); ?></p>
                        </div>
                        <div class="w-full">
                            <div id="button" class="text-14 leading-14 xl:text-16 xl:leading-16 text-[#203145] font-normal md:min-w-[130px] h-[43px] px-[20px] border-[1px] border-[#1C1C1C]  lg:hover:bg-[#F6F6F6] duration-300 rounded-[14px] md:rounded-[15px] xl:rounded-[18px] flex items-center justify-between w-[237px] xl:w-[272px] mt-[10px]">
                            <span class="correction">Read more</span>
                            <svg id="Group_134" data-name="Group 134" xmlns="http://www.w3.org/2000/svg" width="9.953" height="9.954" viewBox="0 0 9.953 9.954" class="ml-[50px] xl:ml-[30px]">
                                <path id="Path_5" data-name="Path 5" d="M1.28,0,0,1.278l6.615.005L7.9,0Z" transform="translate(-0.001 0)" fill="#203145"/>
                                <path id="Path_6" data-name="Path 6" d="M10.942,0,3.051,7.892l.9.9,6.6-6.6V9.954l1.287-1.281V0Z" transform="translate(-1.893 0)" fill="#203145"/>
                            </svg>
                        </div>
                        </div>
                    </div>
                </a>
    <?php endwhile; 
            wp_reset_postdata(); // Reset de query
        
        ?>
            </div>
                <div class="swiper-pagination bottom-[0px]"></div>
                </div>
            </div>
            <div class="container mt-[30px] md:mt-[40px] lg:mt-[unset]">
                <a href="" class="text-14 leading-14 xl:text-16 xl:leading-16 text-white font-normal md:min-w-[130px] h-[43px] px-[20px] border-[1px] border-[#1C1C1C] bg-[#2A3041] lg:hover:bg-[#009FE3] lg:hover:border-[#009FE3] duration-300 rounded-[14px] md:rounded-[15px] xl:rounded-[18px] lg:hover:text-white flex items-center justify-center w-fit mx-auto" target="<?php echo $link_target; ?>">
                <span class="correction">More news & events</span>
                <svg id="Group_134" data-name="Group 134" xmlns="http://www.w3.org/2000/svg" width="9.953" height="9.954" viewBox="0 0 9.953 9.954" class="ml-[50px] xl:ml-[30px]">
                    <path id="Path_5" data-name="Path 5" d="M1.28,0,0,1.278l6.615.005L7.9,0Z" transform="translate(-0.001 0)" fill="#f6f6f6"/>
                    <path id="Path_6" data-name="Path 6" d="M10.942,0,3.051,7.892l.9.9,6.6-6.6V9.954l1.287-1.281V0Z" transform="translate(-1.893 0)" fill="#f6f6f6"/>
                </svg>
                </a>
            </div>
        </section>
        <?php
        } else {
        }
    }
    ?>
<?php endif; ?>

<?php 
if ( $post_type == 'event' ) {?>
<div class="container lg:hidden pb-[60px]">
    <div class="w-full">
        <a href="/news-events/" class="flex items-center justify-between">
            <span class="text-12 md:text-12 leading-22 lg:leading-22 xl:text-18 xl:leading-18 text-[#009FE3] font-medium">More events</span>
            <div class="">
                <svg id="Group_181" data-name="Group 181" xmlns="http://www.w3.org/2000/svg" width="9.953" height="9.954" viewBox="0 0 9.953 9.954">
                    <path id="Path_5" data-name="Path 5" d="M1.28,0,0,1.278l6.615.005L7.9,0Z" transform="translate(-0.001 0)" fill="#009fe3"/>
                    <path id="Path_6" data-name="Path 6" d="M10.942,0,3.051,7.892l.9.9,6.6-6.6V9.954l1.287-1.281V0Z" transform="translate(-1.893 0)" fill="#009fe3"/>
                </svg>
            </div>
        </a>
        <hr class="border-[0.5px] border-[#203145] mt-[10px] mb-[15px]">
        <?php
            $loop = new WP_Query( array(
                'post_type' => 'event', // Meerdere post types
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DECS'
            )
            );
            ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
        <a href="<?php the_permalink();?>">
            <h3 class="text-12 md:text-18 leading-22 lg:leading-25 xl:text-18 xl:leading-25 text-[#203145] font-medium"><?php the_title();?></h3>
            <p class="text-12 md:text-14 leading-22 lg:leading-22 xl:text-16 xl:leading-26 text-[#203145] font-normal mt-[5px]"><?php echo get_field('introduction', $post_id);?></p>
            <hr class="border-[0.5px] border-[#203145] mt-[15px] mb-[15px]">
        </a>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</div>
    <?php
  } elseif ( $post_type == 'news' ) { ?>
<div class="container lg:hidden pb-[60px]">
    <div class="w-full">
        <a href="/news-events/" class="flex items-center justify-between">
            <span class="text-12 md:text-12 leading-22 lg:leading-22 xl:text-18 xl:leading-18 text-[#009FE3] font-medium">More news</span>
            <div class="">
                <svg id="Group_181" data-name="Group 181" xmlns="http://www.w3.org/2000/svg" width="9.953" height="9.954" viewBox="0 0 9.953 9.954">
                    <path id="Path_5" data-name="Path 5" d="M1.28,0,0,1.278l6.615.005L7.9,0Z" transform="translate(-0.001 0)" fill="#009fe3"/>
                    <path id="Path_6" data-name="Path 6" d="M10.942,0,3.051,7.892l.9.9,6.6-6.6V9.954l1.287-1.281V0Z" transform="translate(-1.893 0)" fill="#009fe3"/>
                </svg>
            </div>
        </a>
        <hr class="border-[0.5px] border-[#203145] mt-[10px] mb-[15px]">
        <?php
            $loop = new WP_Query( array(
                'post_type' => 'news', // Meerdere post types
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DECS'
            )
            );
            ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
        <a href="<?php the_permalink();?>">
            <h3 class="text-12 md:text-18 leading-22 lg:leading-25 xl:text-18 xl:leading-25 text-[#203145] font-medium"><?php the_title();?></h3>
            <p class="text-12 md:text-14 leading-22 lg:leading-22 xl:text-16 xl:leading-26 text-[#203145] font-normal mt-[5px]"><?php echo get_field('introduction', $post_id);?></p>
            <hr class="border-[0.5px] border-[#203145] mt-[15px] mb-[15px]">
        </a>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</div>

<?php
} else {
}
?>


