<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- VIDEO -->
<div class="w-full lg:w-[722px] h-[233px] md:h-[460px] lg:h-[478px] xl:h-[482px] bg-white">
    <video controls class="h-full min-h-full min-w-full object-cover object-center">
        <source src="<?php echo get_field('video');?>#t=0.002" type="video/mp4">
        Your browser does not support the video element.
    </video>
</div>
<?php endif; ?>
