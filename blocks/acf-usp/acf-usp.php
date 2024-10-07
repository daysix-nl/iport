<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- USP -->
 <section class="bg-white py-[60px]">
    <div class="container">
        <h2 class="text-[#1C1C1C] font-semibold text-32 leading-33 md:text-42 md:leading-43 lg:text-45 lg:leading-47 xl:text-54 xl:leading-56"><?php echo get_field('title');?></h2>
        <h3 class="text-[#203145] font-medium text-18 leading-20 md:text-20 md:leading-24 lg:text-22 lg:leading-30 mt-[8px]"><?php echo get_field('subtitle');?> </h3>
    </div>
    <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-fit gap-y-[30px] lg:gap-y-[50px] xl:gap-y-[60px]  md:gap-x-[54px] lg:gap-x-[114.5px] xl:gap-x-[186px] mt-[30px] lg:mt-[50px] xl:mt-[60]">
        <?php
        if( have_rows('usps') ):
            while( have_rows('usps') ) : the_row(); ?>
            <?php
            $image = get_sub_field('icon');
            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
            ?>
             <div class="w-[350px] md:w-[317px] lg:w-[300px]">
                <div class="flex items-end justify-start w-[50px] h-[50px]">
                   <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                </div>
                <h4 class="text-[#203145] font-medium text-18 leading-20 md:text-20 md:leading-24 lg:text-22 lg:leading-30 mt-[25px]"><?php echo get_sub_field('title');?></h4>
                <p class="text-14 leading-22 lg:text-14 lg:leading-25 xl:text-16 xl:leading-30 mt-[8px]"><?php echo get_sub_field('text');?></p>
            </div>
            <?php
            endwhile;
        else :
        endif;
        ?>
    </div>
 </section>
<?php endif; ?>
