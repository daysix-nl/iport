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
<!-- HEADER -2 -->
 <section class="h-[calc(100vh-71px)] lg:h-[calc(100dvh-64px)] xl:h-[calc(100dvh-73px)] min-h-[480px] w-full relative overflow-hidden">
    <div class="absolute top-0 left-0 right-0 bottom-0 z-[10]">
        <div class="h-full w-full">
            <div class="container pt-[80px] md:pt-[100px] lg:pt-[140px]">
                <h2 class="text-white font-semibold text-32 leading-33 md:text-45 md:leading-47 xl:text-54 xl:leading-56 w-full lg:max-w-[820px]"><?php echo get_field('title');?></h2>
            </div>
        </div>
    </div>
    <div class="absolute top-0 left-0 right-0 bottom-0 bg-[#1C1C1C] z-[6] opacity-[0.15]"></div>
    <?php if (get_field('video')): ?>  
    <video autoplay loop muted playsinline class="min-h-full h-full w-full object-center object-cover z-[5]">
        <source src="<?php echo get_field('video');?>#t=0.001" type="video/mp4">
        Your browser does not support the video element.
    </video>
    <?php endif; ?>
    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="min-h-full h-full w-full object-center object-cover z-[5]">
 </section>
<?php endif; ?>
