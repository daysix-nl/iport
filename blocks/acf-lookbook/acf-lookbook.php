<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- LOOKBOOK TABLET / MOBIEL -->
 <section class="bg-white lg:hidden">
    <div class="container my-[60px]">
        <div class="mb-[20px] md:mb-[25px] lg:mb-[35px] xl:mb-[45px]">
            <h2 class="text-[#2A3041] font-semibold text-32 leading-33 md:text-42 md:leading-43 lg:text-45 lg:leading-47 xl:text-54 xl:leading-56"><?php echo get_field('title');?></h2>
        </div>
        <div class="swiper swiperlookbookmobile pb-[70px]">
            <div class="swiper-wrapper flex items-center lg:hidden">
                <?php
                    // Check value exists.
                    if( have_rows('lookbook') ):
                        // Loop through rows.
                        while ( have_rows('lookbook') ) : the_row();
                            // Case: images layout.
                            if( get_row_layout() == 'images' ): ?>
                            <?php
                            $image = get_sub_field('image_1');
                            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                            ?>
                            <?php
                            $image2 = get_sub_field('image_2');
                            $image2_url = isset($image2['url']) ? esc_url($image2['url']) : '';
                            $image2_alt = isset($image2['alt']) ? esc_attr($image2['alt']) : '';
                            ?>
                                <!-- SWIPER IMAGE -->
                                <div class="swiper-slide w-full justify-between flex">
                                    <div class="content swiper-slide w-[350px] h-[234px] md:h-[458px] md:w-[688px] rounded-[40px] overflow-hidden my-auto">
                                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
                                        <?php if (get_sub_field('title_1')): ?>   
                                        <div class="hover-effect">
                                            <div class="h-full w-full flex items-end px-[20px] py-[35px] xl:px-[30px] xl:py-[45px]">
                                                <div class="grid">
                                                    <h3 class="text-white text-12 leading-22 xl:text-14 xl:leading-25 font-semibold"><?php echo get_sub_field('title_1');?></h3>
                                                    <p class="text-white text-10 leading-22 xl:text-12 xl:leading-25 font-normal"><?php echo get_sub_field('text_1');?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <!-- SWIPER IMAGE -->
                                <div class="swiper-slide w-full justify-between flex">
                                    <div class="content swiper-slide w-[350px] h-[477px] md:h-[458px] md:w-[304px] mx-auto rounded-[40px] overflow-hidden">
                                        <img src="<?php echo $image2_url; ?>" alt="<?php echo $image2_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
                                        <?php if (get_sub_field('title_2')): ?>   
                                        <div class="hover-effect">
                                            <div class="h-full w-full flex items-end px-[20px] py-[35px] xl:px-[30px] xl:py-[45px]">
                                                <div class="grid">
                                                    <h3 class="text-white text-12 leading-22 xl:text-14 xl:leading-25 font-semibold"><?php echo get_sub_field('title_2');?></h3>
                                                    <p class="text-white text-10 leading-22 xl:text-12 xl:leading-25 font-normal"><?php echo get_sub_field('text_2');?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php
                            // Case: video layout.
                            elseif( get_row_layout() == 'video' ): ?>
                            <!-- SWIPER VIDEO -->
                                <div class="swiper-slide w-full">
                                    <div class="w-[350px] h-[234px] md:h-[458px] md:w-[688px] rounded-[40px] overflow-hidden mx-auto">
                                        <video controls controlsList="nodownload" playsinline class="h-full min-h-full min-w-full object-cover object-center">
                                            <source src="<?php echo get_sub_field('video');?>#t=0.002" type="video/mp4">
                                            Your browser does not support the video element.
                                        </video>
                                    </div>
                                </div>
                            <?php
                            endif;
                        // End loop.
                        endwhile;
                    // No value.
                    else :
                        // Do something...
                    endif;
                ?>
                </div>
                <div class="swiper-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
                        <g id="Group_483" data-name="Group 483" transform="translate(-1297 -1253)">
                            <circle id="Ellipse_32" data-name="Ellipse 32" cx="25.5" cy="25.5" r="25.5" transform="translate(1297 1253)" fill="#2a3041"/>
                            <g id="Group_5" data-name="Group 5" transform="translate(1322.5 1270.754) rotate(45)">
                            <path id="Path_5" data-name="Path 5" d="M1.409,0,0,1.407l7.281.006L8.694,0Z" transform="translate(-0.001 0)" fill="#fff"/>
                            <path id="Path_6" data-name="Path 6" d="M11.737,0,3.051,8.686l.994.994,7.269-7.269v8.544l1.417-1.41V0Z" transform="translate(-1.776 0)" fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="swiper-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
                        <g id="Group_484" data-name="Group 484" transform="translate(-84 -1253)">
                            <circle id="Ellipse_33" data-name="Ellipse 33" cx="25.5" cy="25.5" r="25.5" transform="translate(135 1304) rotate(180)" fill="#2a3041"/>
                            <g id="Group_446" data-name="Group 446" transform="translate(111.5 1286.498) rotate(-135)">
                            <path id="Path_5" data-name="Path 5" d="M1.409,0,0,1.407l7.281.006L8.694,0Z" transform="translate(-0.001 0)" fill="#fff"/>
                            <path id="Path_6" data-name="Path 6" d="M11.737,0,3.051,8.686l.994.994,7.269-7.269v8.544l1.417-1.41V0Z" transform="translate(-1.776 0)" fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="swiper-pagination hidden lg:block"></div>
            </div>

    </div>
 </section>


<!-- LOOKBOOK LAPTOP / DESKTOP -->
 <section class="bg-white hidden lg:block">
    <div class="container my-[60px]">
        <div class="mb-[20px] md:mb-[25px] lg:mb-[35px] xl:mb-[45px]">
            <h2 class="text-[#2A3041] font-semibold text-32 leading-33 md:text-42 md:leading-43 lg:text-45 lg:leading-47 xl:text-54 xl:leading-56"><?php echo get_field('title');?></h2>
        </div>
        <div class="swiper swiperlookbook pb-[70px] xl:pb-[80px]">
            
            <div class="swiper-wrapper flex">
            <?php
                // Check value exists.
                if( have_rows('lookbook') ):
                    // Loop through rows.
                    while ( have_rows('lookbook') ) : the_row();
                        // Case: images layout.
                        if( get_row_layout() == 'images' ): ?>
                        <?php
                        $image = get_sub_field('image_1');
                        $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                        $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                        ?>
                        <?php
                        $image2 = get_sub_field('image_2');
                        $image2_url = isset($image2['url']) ? esc_url($image2['url']) : '';
                        $image2_alt = isset($image2['alt']) ? esc_attr($image2['alt']) : '';
                        ?>
                           <!-- SWIPER IMAGES -->
                            <div class="swiper-slide w-full justify-between flex">
                                <div class="content swiper-slide lg:w-[761px] lg:h-[508px] xl:h-[572px] xl:w-[857px] rounded-[40px] overflow-hidden">
                                    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
                                    <?php if (get_sub_field('title_1')): ?>   
                                    <div class="hover-effect">
                                        <div class="h-full w-full flex items-end px-[20px] py-[35px] xl:px-[30px] xl:py-[45px]">
                                            <div class="grid">
                                                <h3 class="text-white text-12 leading-22 xl:text-14 xl:leading-25 font-semibold"><?php echo get_sub_field('title_1');?></h3>
                                                <p class="text-white text-10 leading-22 xl:text-12 xl:leading-25 font-normal"><?php echo get_sub_field('text_1');?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="content swiper-slide lg:w-[338px] lg:h-[508px] xl:h-[572px] xl:w-[381px] rounded-[40px] overflow-hidden">
                                    <img src="<?php echo $image2_url; ?>" alt="<?php echo $image2_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
                                    <?php if (get_sub_field('title_2')): ?>   
                                    <div class="hover-effect">
                                        <div class="h-full w-full flex items-end px-[20px] py-[35px] xl:px-[30px] xl:py-[45px]">
                                            <div class="grid">
                                                <h3 class="text-white text-12 leading-22 xl:text-14 xl:leading-25 font-semibold"><?php echo get_sub_field('title_2');?></h3>
                                                <p class="text-white text-10 leading-22 xl:text-12 xl:leading-25 font-normal"><?php echo get_sub_field('text_2');?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php
                        // Case: video layout.
                        elseif( get_row_layout() == 'video' ): ?>
                           <!-- SWIPER VIDEO -->
                            <div class="swiper-slide w-full">
                                <div class="lg:h-[508px] xl:h-[572px] aspect-[16/9] bg-black rounded-[40px] overflow-hidden mx-auto">
                                    <video controls controlsList="nodownload" playsinline class="h-full min-h-full min-w-full object-cover object-center">
                                        <source src="<?php echo get_sub_field('video');?>#t=0.002" type="video/mp4">
                                        Your browser does not support the video element.
                                    </video>
                                </div>
                            </div>
                        <?php
                        endif;
                    // End loop.
                    endwhile;
                // No value.
                else :
                    // Do something...
                endif;
            ?>
            </div>
            <div class="swiper-button-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
                    <g id="Group_483" data-name="Group 483" transform="translate(-1297 -1253)">
                        <circle id="Ellipse_32" data-name="Ellipse 32" cx="25.5" cy="25.5" r="25.5" transform="translate(1297 1253)" fill="#2a3041"/>
                        <g id="Group_5" data-name="Group 5" transform="translate(1322.5 1270.754) rotate(45)">
                        <path id="Path_5" data-name="Path 5" d="M1.409,0,0,1.407l7.281.006L8.694,0Z" transform="translate(-0.001 0)" fill="#fff"/>
                        <path id="Path_6" data-name="Path 6" d="M11.737,0,3.051,8.686l.994.994,7.269-7.269v8.544l1.417-1.41V0Z" transform="translate(-1.776 0)" fill="#fff"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="swiper-button-prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51">
                    <g id="Group_484" data-name="Group 484" transform="translate(-84 -1253)">
                        <circle id="Ellipse_33" data-name="Ellipse 33" cx="25.5" cy="25.5" r="25.5" transform="translate(135 1304) rotate(180)" fill="#2a3041"/>
                        <g id="Group_446" data-name="Group 446" transform="translate(111.5 1286.498) rotate(-135)">
                        <path id="Path_5" data-name="Path 5" d="M1.409,0,0,1.407l7.281.006L8.694,0Z" transform="translate(-0.001 0)" fill="#fff"/>
                        <path id="Path_6" data-name="Path 6" d="M11.737,0,3.051,8.686l.994.994,7.269-7.269v8.544l1.417-1.41V0Z" transform="translate(-1.776 0)" fill="#fff"/>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="swiper-pagination hidden lg:block"></div>
        </div>

    </div>
 </section>
<?php endif; ?>
