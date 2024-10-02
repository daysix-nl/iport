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
<?php
$image3 = get_field('image_3');
$image3_url = isset($image3['url']) ? esc_url($image3['url']) : '';
$image3_alt = isset($image3['alt']) ? esc_attr($image3['alt']) : '';
?>
<?php
$link = get_field('link');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
<?php
$link2 = get_field('link_2');
$link2_url = isset($link2['url']) ? esc_url($link2['url']) : '';
$link2_text = isset($link2['title']) ? esc_html($link2['title']) : '';
$link2_target = isset($link2['target']) ? esc_attr($link2['target']) : '';
?>
<?php
$link3 = get_field('link_3');
$link3_url = isset($link3['url']) ? esc_url($link3['url']) : '';
$link3_text = isset($link3['title']) ? esc_html($link3['title']) : '';
$link3_target = isset($link3['target']) ? esc_attr($link3['target']) : '';
?>
<!-- HEADER -->
<section class="home-header bg-[#F6F6F6]">
    <a href="<?php echo $link_url; ?>" class="h-[calc(100vh-135px)] lg:h-[calc(100dvh+55px)] xl:h-[calc(100dvh+35px)] max-h-[600px] md:max-h-[688px] lg:max-h-[950px] xl:max-h-[1000px] min-h-[550px] md:min-h-[500px] lg:min-h-[550px] xl:min-h-[600px] w-full block relative overflow-hidden" target="<?php echo $link_target; ?>">
        <?php if (get_field('link')): ?>   
        <div class="button-header w-[200px] lg:w-[265px] xl:w-[299px] h-[43px] bg-white text-[#203145] text-14 leading-14 xl:text-16 xl:leading-16 rounded-[14px] md:rounded-[15px] xl:rounded-[18px] absolute bottom-[200px] right-[calc(50vw-175px)] md:right:[unset] md:bottom-[117px] md:left-[calc(50vw+70px)] lg:bottom-[190px] lg:left-[calc(50vw+293px)] xl:bottom-[160px] xl:left-[calc(50vw+298px)] flex items-center justify-between px-[20px] z-[10]">
            <span class="correction"><?php echo $link_text; ?></span>
            <svg id="Group_5" data-name="Group 5" xmlns="http://www.w3.org/2000/svg" width="10.955" height="10.955" viewBox="0 0 10.955 10.955">
                <path id="Path_5" data-name="Path 5" d="M1.409,0,0,1.407l7.281.006L8.694,0Z" transform="translate(-0.001 0)" fill="#203145"/>
                <path id="Path_6" data-name="Path 6" d="M11.737,0,3.051,8.686l.994.994,7.269-7.269v8.544l1.417-1.41V0Z" transform="translate(-1.776 0)" fill="#203145"/>
            </svg>
        </div>
        <?php endif; ?>
        <div class="absolute top-0 left-0 right-0 bottom-0 md:bottom-[90px] lg:bottom-[170px] xl:bottom-[140px] z-[8]">
            <div class="container h-full flex md:items-center mt-[135px] md:mt-[unset]">
                <div class="grid gap-[15px] w-[298px] md:w-[566px] lg:w-[814px] xl:w-[883px] mx-[unset] md:mx-auto lg:mx-[unset] h-fit">
                    <h1 class="text-white font-semibold text-32 leading-33 md:text-45 md:leading-47 xl:text-54 xl:leading-56"><?php echo get_field('title');?></h1>
                    <h2 class="text-white font-normal text-20 leading-25 md:text-22 md:leading-23 xl:text-25 xl:leading-26"><?php echo get_field('subtitle');?></h2>
                </div>
            </div>
        </div>
        <div class="absolute top-0 left-0 right-0 bottom-0 bg-[#1C1C1C] z-[6] opacity-[0.15]"></div>
        <?php if (get_field('video')): ?>  
        <video autoplay loop muted class="min-h-full h-full w-full object-center object-cover z-[5]">
            <source src="<?php echo get_field('video');?>#t=0.001" type="video/mp4">
            Your browser does not support the video element.
        </video>
        <?php endif; ?>
        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="min-h-full h-full w-full object-center object-cover z-[5]">
    </a>
    <div class="md:flex md:justify-between md:mt-[-90px] lg:mt-[-170px] xl:mt-[-140px] z-[9] relative">
        <a href="<?php echo $link2_url; ?>" class="h-[184px] md:h-[252px] lg:h-[455px] xl:h-[492px] md:w-[calc(50vw+32px)] lg:w-[calc(50vw+250px)] xl:w-[calc(50vw+250px)] mt-[-165px] md:mt-[unset] rounded-tl-[40px] md:rounded-tl-[unset] rounded-tr-[40px] md:rounded-br-[40px] relative block overflow-hidden" target="<?php echo $link2_target; ?>">
        <?php if (get_field('link_2')): ?>   
        <div class="button-header w-[200px] lg:w-[265px] xl:w-[299px] h-[43px] bg-white text-[#203145] text-14 leading-14 xl:text-16 xl:leading-16 rounded-[14px] md:rounded-[15px] xl:rounded-[18px] absolute top-[35px] md:top-[28px] right-[calc(50vw-175px)] md:right-[28px] flex items-center justify-between px-[20px] z-[6]">
            <span class="correction"><?php echo $link2_text; ?></span>
            <svg id="Group_5" data-name="Group 5" xmlns="http://www.w3.org/2000/svg" width="10.955" height="10.955" viewBox="0 0 10.955 10.955">
                <path id="Path_5" data-name="Path 5" d="M1.409,0,0,1.407l7.281.006L8.694,0Z" transform="translate(-0.001 0)" fill="#203145"/>
                <path id="Path_6" data-name="Path 6" d="M11.737,0,3.051,8.686l.994.994,7.269-7.269v8.544l1.417-1.41V0Z" transform="translate(-1.776 0)" fill="#203145"/>
            </svg>
        </div>
        <?php endif; ?>
        <img src="<?php echo $image2_url; ?>" alt="<?php echo $image2_alt; ?>" class="min-h-full h-full w-full object-center object-cover z-[5]">
        </a>
        <a href="<?php echo $link3_url; ?>" class="h-[184px] md:h-[252px] lg:h-[455px] xl:h-[492px] md:w-[calc(50vw-45px)] lg:w-[calc(50vw-265px)] xl:w-[calc(50vw-270px)] mt-[-68px] md:mt-[unset] rounded-tl-[40px] rounded-tr-[40px] md:rounded-tr-[unset] md:rounded-bl-[40px] relative block overflow-hidden" target="<?php echo $link3_target; ?>">
        <?php if (get_field('link_3')): ?>   
        <div class="button-header w-[200px] lg:w-[265px] xl:w-[299px] h-[43px] bg-white text-[#203145] text-14 leading-14 xl:text-16 xl:leading-16 rounded-[14px] md:rounded-[15px] xl:rounded-[18px] absolute top-[35px] md:top-[28px] right-[calc(50vw-175px)] md:right:[unset] md:left-[28px] flex items-center justify-between px-[20px] z-[6]">
            <span class="correction"><?php echo $link3_text; ?></span>
            <svg id="Group_5" data-name="Group 5" xmlns="http://www.w3.org/2000/svg" width="10.955" height="10.955" viewBox="0 0 10.955 10.955">
                <path id="Path_5" data-name="Path 5" d="M1.409,0,0,1.407l7.281.006L8.694,0Z" transform="translate(-0.001 0)" fill="#203145"/>
                <path id="Path_6" data-name="Path 6" d="M11.737,0,3.051,8.686l.994.994,7.269-7.269v8.544l1.417-1.41V0Z" transform="translate(-1.776 0)" fill="#203145"/>
            </svg>
        </div>
        <?php endif; ?>
        <img src="<?php echo $image3_url; ?>" alt="<?php echo $image3_alt; ?>" class="min-h-full h-full w-full object-center object-cover z-[5]">
        </a>
    </div>
</section>

<?php endif; ?>
