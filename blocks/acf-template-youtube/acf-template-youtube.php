<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
 <!-- YOUTUBE -->
<div class="w-full lg:w-[722px] h-[233px] md:h-[460px] lg:h-[478px] xl:h-[482px] bg-white">
    <iframe class="h-full min-h-full min-w-full object-cover object-center" src="<?php echo get_field('youtube');?>"></iframe>
</div>
<?php endif; ?>
