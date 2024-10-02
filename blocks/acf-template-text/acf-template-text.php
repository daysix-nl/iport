<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- TEXT -->
    <div class="w-full lg:w-[722px] bg-white">
        <div class="text-12 md:text-14 leading-22 lg:leading-25 xl:text-18 xl:leading-30 text-[#1C1C1C] font-normal text-editor"><?php echo get_field('text');?></div>
    </div>
<?php endif; ?>
