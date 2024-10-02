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
 <!-- IMAGE -->
<div class="w-full lg:w-[722px] h-[233px] md:h-[460px] lg:h-[478px] xl:h-[482px] bg-white">
    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
</div>
<?php endif; ?>
