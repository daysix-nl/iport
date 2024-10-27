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
<?php
$image1 = get_field('logo');
$image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
$image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
?>
<!-- CONTENT -->
 <section class="bg-white my-[60px]">
    <div class="container">
        <?php if (get_field('image')): ?>  
        <div class="w-full md:w-full lg:w-[917px] xl:w-[917px] mx-auto h-[197px] md:h-[386px] lg:h-[515px] xl:h-[515px] mt-[30px] md:mt-[40px] lg:mt-[unset] rounded-[40px] overflow-hidden item-shadow zoom-in mb-[30px] md:mb-[40px]">
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center"> 
        </div>
        <?php endif; ?>
        <?php if (get_field('video')): ?>
        <div class="w-full md:w-full lg:w-[917px] xl:w-[917px] mx-auto h-[197px] md:h-[386px] lg:h-[515px] xl:h-[515px] mt-[30px] md:mt-[40px] lg:mt-[unset] rounded-[40px] overflow-hidden item-shadow zoom-in mb-[30px] md:mb-[40px]">
            <video controls controlsList="nodownload" <?php echo get_field('autoplay_video');?> muted loop playsinline class="h-full min-h-full min-w-full object-cover object-center">
                <source src="<?php echo get_field('video');?>#t=0.001" type="video/mp4">
                Your browser does not support the video element.
            </video>
        </div>
        <?php endif; ?>
        <div class="w-full lg:max-w-[863px] mx-auto">
            <div class="text-editor"><?php echo get_field('text');?></div>
            <div class="w-full flex justify-between items-end">
                <?php if (get_field('name')): ?> 
                 <div class="w-full lg:w-[400px] h-[80px] flex items-end">
                    <div class="">
                        <h4 class="text-[#2A3041] text-18 leading-18 md:text-22 md:leading-22 font-medium"><?php echo get_field('name');?></h4>
                        <p class="text-[#2A3041] text-12 leading-12 md:text-16 md:leading-16 font-normal mt-[8px]"><?php echo get_field('function');?></p>
                    </div>
                </div>
                <?php endif; ?>
                <?php if (get_field('logo')): ?>   
                <div class="company">
                    <img decoding="async" src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>" class="h-full max-h-[80px] md:max-h-[80px] w-auto merklogo object-right-bottom">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
 </section>
<?php endif; ?>
