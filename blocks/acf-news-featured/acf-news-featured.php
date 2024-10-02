<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$link = get_field('link');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>

<!-- NEWS & EVENTS -->
<section class="bg-white pb-[60px]">
    <div class="container text-center pb-[30px] md:pb-[40px] lg:pb-[40px] xl:pb-[50px]">
        <h2 class="text-[#2A3041] font-semibold text-32 leading-33 md:text-42 md:leading-43 lg:text-45 lg:leading-47 xl:text-54 xl:leading-56"><?php echo get_field('title');?></h2>
    </div>
    <div class="w-full lg:w-[1129px] xl:w-[1272px] mx-auto">
        <div class="swiper swipernews pb-[30px] md:pb-[40px] lg:pb-[50px] xl:pb-[50px] lg:px-[5px]">
        <div class="flex w-full swiper-wrapper">
            <?php
            $featured_post_id = get_field('featured_item_1');

            if ($featured_post_id) {
                $loop = new WP_Query( array(
                    'post_type' => array('event', 'news'), // Meerdere post types
                    'post__in' => array($featured_post_id), // Beperk tot de geselecteerde post
                    'orderby' => 'post__in' // Zorg ervoor dat de volgorde correct is
                ));

                while ($loop->have_posts()) : $loop->the_post(); 
                    $post_id = get_the_ID(); ?>
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
            }
            ?>
           

           <?php
            $featured_post_id = get_field('featured_item_2');

            if ($featured_post_id) {
                $loop = new WP_Query( array(
                    'post_type' => array('event', 'news'), // Meerdere post types
                    'post__in' => array($featured_post_id), // Beperk tot de geselecteerde post
                    'orderby' => 'post__in' // Zorg ervoor dat de volgorde correct is
                ));

                while ($loop->have_posts()) : $loop->the_post(); 
                    $post_id = get_the_ID(); ?>
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
            }
            ?>

            <?php
            $featured_post_id = get_field('featured_item_3');

            if ($featured_post_id) {
                $loop = new WP_Query( array(
                   'post_type' => array('event', 'news'), // Meerdere post types
                    'post__in' => array($featured_post_id), // Beperk tot de geselecteerde post
                    'orderby' => 'post__in' // Zorg ervoor dat de volgorde correct is
                ));

                while ($loop->have_posts()) : $loop->the_post(); 
                    $post_id = get_the_ID(); ?>
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
            }
            ?>
        </div>
        <div class="swiper-pagination bottom-[0px]"></div>
        </div>
    </div>
    <?php if (get_field('link')): ?>   
    <div class="container mt-[30px] md:mt-[40px] lg:mt-[unset]">
        <a href="<?php echo $link_url; ?>" class="text-14 leading-14 xl:text-16 xl:leading-16 text-white font-normal md:min-w-[130px] h-[43px] px-[20px] border-[1px] border-[#1C1C1C] bg-[#2A3041] lg:hover:bg-[#009FE3] lg:hover:border-[#009FE3] duration-300 rounded-[14px] md:rounded-[15px] xl:rounded-[18px] lg:hover:text-white flex items-center justify-center w-fit mx-auto" target="<?php echo $link_target; ?>">
        <span class="correction"><?php echo $link_text; ?></span>
        <svg id="Group_134" data-name="Group 134" xmlns="http://www.w3.org/2000/svg" width="9.953" height="9.954" viewBox="0 0 9.953 9.954" class="ml-[50px] xl:ml-[30px]">
            <path id="Path_5" data-name="Path 5" d="M1.28,0,0,1.278l6.615.005L7.9,0Z" transform="translate(-0.001 0)" fill="#f6f6f6"/>
            <path id="Path_6" data-name="Path 6" d="M10.942,0,3.051,7.892l.9.9,6.6-6.6V9.954l1.287-1.281V0Z" transform="translate(-1.893 0)" fill="#f6f6f6"/>
        </svg>
        </a>
    </div>
    <?php endif; ?>
</section>
<?php endif; ?>
