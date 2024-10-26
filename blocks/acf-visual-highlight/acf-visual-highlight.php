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
<!-- VISUAL HIGHLIGHT -->
 <section class="bg-white py-[60px]">
    <?php if (get_field('title')): ?>   
    <div class="container text-left md:text-center mb-[20px] md:mb-[25px] lg:mb-[35px] xl:mb-[45px]">
         <h2 class="text-[#2A3041] font-semibold text-32 leading-33 md:text-42 md:leading-43 lg:text-45 lg:leading-47 xl:text-54 xl:leading-56 w-full lg:max-w-[820px] mx-auto"><?php echo get_field('title');?></h2>
    </div>
    <?php endif; ?>
    <div class="container">
        <div class="w-full md:w-full lg:w-[838px] xl:w-[838px] mx-auto h-[197px] md:h-[386px] lg:h-[471px] xl:h-[471px] mt-[30px] md:mt-[40px] lg:mt-[unset] rounded-[40px] overflow-hidden item-shadow zoom-in">
            <?php if (get_field('video')): ?>  
            <video controls controlsList="nodownload" <?php echo get_field('autoplay_video');?> muted loop playsinline class="h-full min-h-full min-w-full object-cover object-center">
                <source src="<?php echo get_field('video');?>#t=0.001" type="video/mp4">
                Your browser does not support the video element.
            </video>
            <?php endif; ?>
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center"> 
        </div>
    </div>
 </section>
<?php endif; ?>
