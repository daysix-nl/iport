<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- MAP -->
<section class="bg-white py-[60px]">
    <div class="container text-left md:text-center">
        <h2 class="text-[#2A3041] font-semibold text-32 leading-33 md:text-42 md:leading-43 lg:text-45 lg:leading-47 xl:text-54 xl:leading-56"><?php echo get_field('title');?></h2>
    </div>
    <div class="md:flex justify-between mt-[20px] md:mt-[25px] lg:mt-[35px] xl:mt-[45px]">
        <div class="md:pl-[calc(50vw-344px)] lg:pl-[calc(50vw-564.5px)] xl:pl-[calc(50vw-636px)] flex flex-col justify-between">
            <div class="grid w-[351px] mx-auto md:mx-[unset] md:w-[190px] lg:w-[321px] h-fit map-menu">
                <hr class="border-[#2A3041]">
                <?php
                if( have_rows('regions') ):
                    while( have_rows('regions') ) : the_row(); ?>
                        <button class="location text-left py-[12px] md:py-[20px] text-15 leading-15 xl:text-18 xl:leading-18 font-medium lg:hover:text-[#2A3041] duration-300" data-value="<?php echo get_sub_field('filter_location');?>"><?php echo get_sub_field('title');?></button>
                        <hr class="border-[#2A3041]">
                    <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
            <div class="block md:hidden lg:block w-[351px] mx-auto md:mx-[unset] md:w-[390px] my-[30px] md:my-[unset]">
                <h3 class="text-18 leading-19 font-medium text-[#009FE3]">Did you know?</h3>
                <div class="mt-[12px] md:mt-[20px] map-fact">
                    <?php
                    if( have_rows('regions') ):
                        while( have_rows('regions') ) : the_row(); ?>
                             <p class="fact text-14 leading-22 lg:text-14 lg:leading-25 xl:text-16 xl:leading-30 font-normal text-black active" data-value="<?php echo get_sub_field('filter_location');?>"><?php echo get_sub_field('fact');?></p>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
            </div>
        </div>
        <div class="w-[100vw] md:w-[calc(50vw+107px)] lg:w-[calc(50vw+102px)] xl:w-[calc(50vw+177px)] overflow-hidden h-[276px] md:h-[344px] lg:h-[515px] xl:h-[647px]">
            <div class="origin-center-center google-map">
                <?php echo do_shortcode( '[wpsl]' ); ?>
            </div>
        </div>
    </div>
    <div class="container hidden md:block lg:hidden">
        <div class="w-[351px] mx-auto md:mx-[unset] md:w-[390px] mt-[20px]">
            <h3 class="text-18 leading-19 font-medium text-[#009FE3]">Did you know?</h3>
            <div class="mt-[12px] md:mt-[20px] map-fact">
                <?php
                if( have_rows('regions') ):
                    while( have_rows('regions') ) : the_row(); ?>
                            <p class="fact text-14 leading-22 lg:text-14 lg:leading-25 xl:text-16 xl:leading-30 font-normal text-black active" data-value="<?php echo get_sub_field('filter_location');?>"><?php echo get_sub_field('fact');?></p>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
