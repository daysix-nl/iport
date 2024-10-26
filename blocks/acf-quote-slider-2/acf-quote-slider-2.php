<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- QUOTE SLIDER 2 -->
 <section class="bg-[#F6F6F6]">
    <div class=" py-[60px] relative">
        <div class="swiper swiperquote-2 overflow-hidden container">
            <div class="swiper-wrapper">
                <?php
                    if( have_rows('quote_slider') ):
                        while( have_rows('quote_slider') ) : the_row(); ?>
                        <?php
                        $image = get_sub_field('logo');
                        $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                        $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                        ?>
                        <?php
                        $image1 = get_field('image');
                        $image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
                        $image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
                        ?>
                        <?php
                        $link = get_sub_field('link');
                        $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                        $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                        $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                        ?>
                        <div class="swiper-slide w-full pt-[80px] md:pt-[120px] lg:pt-[unset] pb-[80px] lg:pb-[80px] overflow-hidden">
                            <div class="grid lg:grid-cols-2 items-center gap-[30px] lg:gap-[40px] lg:px-[80px]">
                                <div class="order-2 lg:order-1">
                                    <div class="w-full aspect-[16/9] rounded-[40px] overflow-hidden item-shadow zoom-in">
                                        <?php if (get_sub_field('video')): ?>  
                                        <video controls controlsList="nodownload" playsinline class="h-full min-h-full min-w-full object-cover object-center">
                                            <source src="<?php echo get_sub_field('video');?>#t=0.001" type="video/mp4">
                                            Your browser does not support the video element.
                                        </video>
                                        <?php endif; ?>
                                        <img src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center"> 
                                    </div>
                                </div>
                                <div class="order-1 lg:order-2">
                                    <?php if (get_sub_field('title')): ?>   
                                    <div class="h-[20px] text-20 leading-20 xl:text-20 xl:leading-20 text-[#2A3041] uppercase"><?php echo get_sub_field('title');?></div>
                                    <?php endif; ?>
                                    <div class="w-full max-w-[863px] mt-[10px] h-[150px] md:h-[138px] lg:h-[155px] overflow-hidden">
                                        <h3 class="#2A3041 font-medium text-18 leading-28 md:text-24 md:leading-34 lg:text-25 lg:leading-30 mt-[8px]"><?php echo get_sub_field('text');?></h3>
                                    </div>
                                    <div class="w-full lg:flex lg:justify-between lg:items-end mt-[40px]">
                                        <?php if (get_sub_field('name')): ?>   
                                        <div class="w-full lg:w-[400px]">
                                            <h4 class="#2A3041 text-18 leading-18 md:text-22 md:leading-22 font-medium"><?php echo get_sub_field('name');?></h4>
                                            <p class="#2A3041 text-12 leading-12 md:text-16 md:leading-16 font-normal mt-[8px]"><?php echo get_sub_field('function');?></p>
                                        </div>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('link')): ?>   
                                        <div class="w-full lg:w-[400px] mt-[30px] lg:mt-[unset]">
                                            <a href="<?php echo $link_url; ?>" class="text-14 leading-14 xl:text-16 xl:leading-16 text-white font-normal flex items-center" target="<?php echo $link_target; ?>">
                                                <span class="correction"><?php echo $link_text; ?></span>
                                                <svg id="Group_134" data-name="Group 134" xmlns="http://www.w3.org/2000/svg" width="9.953" height="9.954" viewBox="0 0 9.953 9.954" class="ml-[15px] xl:ml-[15px]">
                                                    <path id="Path_5" data-name="Path 5" d="M1.28,0,0,1.278l6.615.005L7.9,0Z" transform="translate(-0.001 0)" fill="#fff"></path>
                                                    <path id="Path_6" data-name="Path 6" d="M10.942,0,3.051,7.892l.9.9,6.6-6.6V9.954l1.287-1.281V0Z" transform="translate(-1.893 0)" fill="#fff"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php if (get_sub_field('logo')): ?>   
                            <div class="company absolute top-0 left-0 lg:right-0 lg:bottom-0 lg:top-[unset] lg:left-[unset]">
                                <img decoding="async" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full max-h-[50px] md:max-h-[80px] w-auto merklogo">
                            </div>
                            <?php endif; ?>
                            
                        </div>
                        <?php
                        endwhile;
                    else :
                    endif;
                ?>
            </div>
            <div class="absolute top-0 bottom-0 left-0 w-[80px] bg-gradient-to-r from-[#F6F6F6] to-transparent z-[1] hidden lg:block"></div>
            <div class="absolute top-0 bottom-[80px] right-0 w-[80px] bg-gradient-to-r from-transparent to-[#F6F6F6] z-[1] hidden lg:block"></div>
            <div class="swiper-button-next hidden lg:block">
                <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
                    <g id="Group_456" data-name="Group 456" transform="translate(-1297 -1253)">
                        <circle id="Ellipse_32" data-name="Ellipse 32" cx="25.5" cy="25.5" r="25.5" transform="translate(1297 1253)" fill="#fff"/>
                        <g id="Group_5" data-name="Group 5" transform="translate(1322.5 1270.754) rotate(45)">
                        <path id="Path_5" data-name="Path 5" d="M1.409,0,0,1.407l7.281.006L8.694,0Z" transform="translate(-0.001 0)" fill="#009fe3"/>
                        <path id="Path_6" data-name="Path 6" d="M11.737,0,3.051,8.686l.994.994,7.269-7.269v8.544l1.417-1.41V0Z" transform="translate(-1.776 0)" fill="#009fe3"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="swiper-button-prev hidden lg:block">
                <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
                    <g id="Group_458" data-name="Group 458" transform="translate(-84 -1253)">
                        <circle id="Ellipse_33" data-name="Ellipse 33" cx="25.5" cy="25.5" r="25.5" transform="translate(135 1304) rotate(180)" fill="#fff"/>
                        <g id="Group_446" data-name="Group 446" transform="translate(111.5 1286.498) rotate(-135)">
                        <path id="Path_5" data-name="Path 5" d="M1.409,0,0,1.407l7.281.006L8.694,0Z" transform="translate(-0.001 0)" fill="#009fe3"/>
                        <path id="Path_6" data-name="Path 6" d="M11.737,0,3.051,8.686l.994.994,7.269-7.269v8.544l1.417-1.41V0Z" transform="translate(-1.776 0)" fill="#009fe3"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
 </section>
<?php endif; ?>
