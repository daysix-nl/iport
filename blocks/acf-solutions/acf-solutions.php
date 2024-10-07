<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- SOLUTIONS -->
<section class="bg-[#F6F6F6]">
    <div class="py-[60px]">
        <div class="text-left md:text-center container ">
        <h2 class="text-[#2A3041] font-semibold text-32 leading-33 md:text-42 md:leading-43 lg:text-45 lg:leading-47 xl:text-54 xl:leading-56"><?php echo get_field('title');?></h2>
        </div>
        <div class="flex md:flex-wrap md:justify-center space-x-[8px] overflow-x-auto scroll-blok w-full md:w-[688px] lg:w-[1129px] xl:w-[1272px] px-[calc(50vw-175.5px)] md:px-[unset] md:mx-auto mt-[20px] md:mt-[25px] lg:mt-[35px] xl:mt-[45px]">
            <?php
            if( have_rows('solutions') ):
                $tab_number = 1; // Teller starten bij 1
                while( have_rows('solutions') ) : the_row(); ?>
                    <button class="tablinks text-14 leading-14 xl:text-16 xl:leading-16 text-[#2A3041] font-medium md:min-w-[130px] h-[43px] px-[20px] border-[1px] border-[#1C1C1C] rounded-[14px] md:rounded-[15px] xl:rounded-[18px] mt-[8px] lg:hover:text-white lg:hover:bg-[#2A3041] duration-300" 
                        onclick="openTab(event, 'Tab<?php echo $tab_number; ?>')">
                        <span class="correction"><?php echo get_sub_field('title');?></span>
                    </button>
                <?php
                    $tab_number++; // Verhoog de teller
                endwhile;
            else :
            endif;
        ?>
        </div>

        <div class="container mt-[30px] md:mt-[60px] lg:mt-[90px] xl:mt-[80px] solutions-items">
            <?php
            if( have_rows('solutions') ):
                $tab_number = 1; // Teller starten bij 1
                while( have_rows('solutions') ) : the_row(); ?>
                <?php
                $link = get_sub_field('link');
                $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                ?>
                <?php
                $image = get_sub_field('image');
                $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                ?>


            <div id="Tab<?php echo $tab_number; ?>" class="tabcontent">
                <div class="lg:flex justify-between">
                    <div class="w-[351px] md:w-[450px] mx-auto lg:mx-[unset] accordion-group">
                        <?php
                        if( have_rows('repeater') ):
                            while( have_rows('repeater') ) : the_row(); ?>
                            <div class="accordion-item"> 
                                <button class="accordion text-[#203145] font-medium text-12 leading-13 md:text-15 md:leading-16 xl:text-18 xl:leading-19 py-[20px] xl:py-[20px]">
                                    <span class="pr-4"><?php echo get_sub_field('title');?></span>
                                </button>
                                <div class="panel">
                                    <div class="pr-[15px] pb-[20px] xl:pb-[20px]">
                                        <div class="text-[#203145] text-12 leading-22 md:text-14 md:leading-25 xl:text-16 xl:leading-30 font-normal w-full text-editor"><?php echo get_sub_field('text');?></div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                        <?php if (get_sub_field('link')): ?>   
                        <a href="<?php echo $link_url; ?>" class="text-14 leading-14 xl:text-16 xl:leading-16 text-[#2A3041] font-medium md:min-w-[130px] h-[43px] px-[20px] border-[1px] border-[#1C1C1C] rounded-[14px] md:rounded-[15px] xl:rounded-[18px] mt-[30px] md:mt-[40px] lg:mt-[60px] xl:mt-[50px] lg:hover:text-white lg:hover:bg-[#2A3041] duration-300 flex items-center justify-center w-fit" target="<?php echo $link_target; ?>"><span class="correction"><?php echo $link_text; ?></span></a>
                        <?php endif; ?>
                    </div>
                    <div class="w-[350px] md:w-[509px] lg:w-[590px] xl:w-[713px] mx-auto lg:mx-[unset] h-[197px] md:h-[286px] lg:h-[332px] xl:h-[400px] mt-[30px] md:mt-[40px] lg:mt-[unset] rounded-[40px] overflow-hidden item-shadow zoom-in">
                         <?php if (get_sub_field('video')): ?>  
                        <video controls class="h-full min-h-full min-w-full object-cover object-center">
                            <source src="<?php echo get_sub_field('video');?>#t=0.001" type="video/mp4">
                            Your browser does not support the video element.
                        </video>
                        <?php endif; ?>
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center"> 
                    </div>
                </div>
            </div>
            <?php
                    $tab_number++; // Verhoog de teller
                endwhile;
            else :
            endif;
        ?>
        </div>
    </div>
</section>
<?php endif; ?>
