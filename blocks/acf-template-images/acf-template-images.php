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
$image2 = get_field('image_2');
$image2_url = isset($image2['url']) ? esc_url($image2['url']) : '';
$image2_alt = isset($image2['alt']) ? esc_attr($image2['alt']) : '';
?>
<!-- IMAGES -->
<div class="w-full lg:w-[722px] h-[233px] md:h-[460px] lg:h-[478px] xl:h-[482px] grid grid-cols-2 gap-[15px] bg-white">
    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
    <img src="<?php echo $image2_url; ?>" alt="<?php echo $image2_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center">
</div>
<?php endif; ?>
