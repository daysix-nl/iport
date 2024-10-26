<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image = get_field('image');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<!-- UPCOMING EVENTS -->
 <section class="bg-[#009FE3] py-[60px]">
    <div class="flex justify-between pl-[calc(50vw-180px)] md:pl-[calc(50vw-344px)] lg:pl-[calc(50vw-564.5px)] xl:pl-[calc(50vw-636px)]">
        <div class="w-[472px] lg:mt-[90px]">
            <h2 class="text-32 leading-33 md:text-54 md:leading-56 font-semibold text-white"><?php echo get_field('title');?></h2>
            <p class="text-12 leading-22 md:text-18 md:leading-30 text-white font-normal w-full max-w-[334px] md:max-w-[441px] mt-[15px]"><?php echo get_field('text');?></p>
        </div>
        <div class="hidden lg:block lg:w-[calc(50vw+30px)] xl:w-[calc(50vw+125px)] h-[717px] rounded-l-[40px] overflow-hidden">
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-center object-cover">
        </div>
    </div>
    <div class="swiper swiperevents pl-[calc(50vw-180px)] md:pl-[calc(50vw-344px)] lg:pl-[calc(50vw-155px)] xl:pl-[calc(50vw-195px)] pr-[30px] mt-[30px] md:mt-[40px] lg:mt-[-322px] xl:mt-[-320px]">
        <div class="swiper-wrapper pb-[60px] md:pb-[90px] lg:pb-[60px]">
            <?php
                $loop = new WP_Query( array(
                    'post_type' => 'event',
                    'posts_per_page' => 10,
                    'orderby' => 'date',
                    'order' => 'DECS'
                )
                );
                ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
            <div class="swiper-slide w-[334px] md:w-[315px] lg:w-[315px] xl:w-[386px]">
                <a href="<?php the_permalink();?>" class="swiper-slide h-[460px] xl:h-[516px] w-full rounded-[40px] item-shadow-news overflow-hidden bg-white">
                    <div class="w-full h-[190px] xl:h-[236px] overflow-hidden">
                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="h-full min-w-full min-h-full object-cover object-center">
                    </div>
                    <div class="w-[265px] xl:w-[280px] mx-auto h-[165px]">
                        <div class="w-full h-[31px] flex space-x-[6px] mt-[20px]">
                            <p class="text-16 leading-17 font-normal text-[#2A3041] uppercase"><?php echo get_field('location', $post_id);?></p>
                        </div>
                        <div class="h-[80px] w-full mt-[0px]">
                        <h3 class="text-18 leading-22 xl:text-22 xl:leading-25 font-medium text-[#000000] line-clamp-3"><?php the_title();?></h3>
                        </div>
                        <div class="h-[45px] w-full mt-[10px]">
                        <p class="text-14 leading-14 xl:text-16 xl:leading-16 font-normal text-[#000000]"><?php echo get_field('date', $post_id);?></p>
                        </div>
                        <div class="w-full">
                            <div id="button" class="text-14 leading-14 xl:text-16 xl:leading-16 text-[#203145] font-normal md:min-w-[130px] h-[43px] px-[20px] border-[1px] border-[#1C1C1C]  lg:hover:bg-[#F6F6F6] duration-300 rounded-[14px] md:rounded-[15px] xl:rounded-[18px] flex items-center justify-between w-[237px] xl:w-[272px] mt-[10px]">
                            <span class="correction">More info</span>
                            <svg id="Group_134" data-name="Group 134" xmlns="http://www.w3.org/2000/svg" width="9.953" height="9.954" viewBox="0 0 9.953 9.954" class="ml-[50px] xl:ml-[30px]">
                                <path id="Path_5" data-name="Path 5" d="M1.28,0,0,1.278l6.615.005L7.9,0Z" transform="translate(-0.001 0)" fill="#203145"/>
                                <path id="Path_6" data-name="Path 6" d="M10.942,0,3.051,7.892l.9.9,6.6-6.6V9.954l1.287-1.281V0Z" transform="translate(-1.893 0)" fill="#203145"/>
                            </svg>
                        </div>
                        </div>
                    </div>
                </a>
                
            </div>
            <?php endwhile; wp_reset_query(); ?>
            
                    
        </div>
        <div class="swiper-button-next">
            <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
                <g id="Group_453" data-name="Group 453" transform="translate(-1297 -1253)">
                    <circle id="Ellipse_32" data-name="Ellipse 32" cx="25.5" cy="25.5" r="25.5" transform="translate(1297 1253)" fill="#fff"/>
                    <g id="Group_5" data-name="Group 5" transform="translate(1322.5 1270.754) rotate(45)">
                    <path id="Path_5" data-name="Path 5" d="M1.409,0,0,1.407l7.281.006L8.694,0Z" transform="translate(-0.001 0)" fill="#009fe3"/>
                    <path id="Path_6" data-name="Path 6" d="M11.737,0,3.051,8.686l.994.994,7.269-7.269v8.544l1.417-1.41V0Z" transform="translate(-1.776 0)" fill="#009fe3"/>
                    </g>
                </g>
            </svg>
        </div>
        <div class="swiper-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
                <g id="Group_455" data-name="Group 455" transform="translate(-84 -1253)">
                    <circle id="Ellipse_33" data-name="Ellipse 33" cx="25.5" cy="25.5" r="25.5" transform="translate(135 1304) rotate(180)" fill="#fff"/>
                    <g id="Group_446" data-name="Group 446" transform="translate(111.5 1286.498) rotate(-135)">
                    <path id="Path_5" data-name="Path 5" d="M1.409,0,0,1.407l7.281.006L8.694,0Z" transform="translate(-0.001 0)" fill="#009fe3"/>
                    <path id="Path_6" data-name="Path 6" d="M11.737,0,3.051,8.686l.994.994,7.269-7.269v8.544l1.417-1.41V0Z" transform="translate(-1.776 0)" fill="#009fe3"/>
                    </g>
                </g>
            </svg>
        </div>
    </div>

 </section>
<?php endif; ?>
