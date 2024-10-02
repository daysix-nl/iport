<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$link = get_field('link');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
<!-- BUTTON -->
<a href="<?php echo $link_url; ?>" class="text-14 leading-14 xl:text-16 xl:leading-16 text-white font-normal md:min-w-[130px] h-[43px] px-[20px] border-[1px] border-[#1C1C1C] bg-[#2A3041] lg:hover:bg-[#009FE3] lg:hover:border-[#009FE3] duration-300 rounded-[14px] md:rounded-[15px] xl:rounded-[18px] lg:hover:text-white flex items-center justify-center w-fit" target="<?php echo $link_target; ?>">
    <span class="correction"><?php echo $link_text; ?></span>
    <svg id="Group_134" data-name="Group 134" xmlns="http://www.w3.org/2000/svg" width="9.953" height="9.954" viewBox="0 0 9.953 9.954" class="ml-[50px] xl:ml-[30px]">
        <path id="Path_5" data-name="Path 5" d="M1.28,0,0,1.278l6.615.005L7.9,0Z" transform="translate(-0.001 0)" fill="#f6f6f6"/>
        <path id="Path_6" data-name="Path 6" d="M10.942,0,3.051,7.892l.9.9,6.6-6.6V9.954l1.287-1.281V0Z" transform="translate(-1.893 0)" fill="#f6f6f6"/>
    </svg>
</a>
<?php endif; ?>
