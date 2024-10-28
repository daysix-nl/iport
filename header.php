<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GR9B57M647"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-GR9B57M647');
    </script>
    <script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="c49b4dbc-fbed-4bc7-8901-b6b7c8aaf805" type="text/javascript" async></script>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'page-block hamburger-closed' ); ?>>
<?php
$linktalk = get_field('featured_link', 'option');
$linktalk_url = isset($linktalk['url']) ? esc_url($linktalk['url']) : '';
$linktalk_text = isset($linktalk['title']) ? esc_html($linktalk['title']) : '';
$linktalk_target = isset($linktalk['target']) ? esc_attr($linktalk['target']) : '';
?>

<header class="bg-white fixed top-0 left-0 right-0 border-b-[1px] border-[#F4F4F5] z-[9999]">
    <div class="container h-[71px] lg:h-[64px] xl:h-[73px] w-full flex items-center justify-between">
        <div class="w-[85px] md:w-[340px] lg:w-[940px] xl:w-[1001px] flex">
            <!-- LOGO -->
            <div class="h-[25px] xl:h-[30px]">
                <a href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="67.8" height="24.995" viewBox="0 0 67.8 24.995" class="pb-[0.6px]">
                      <g id="Iport_logo_zwart" transform="translate(-359.099 -318.5)">
                        <g id="Group_1" data-name="Group 1" transform="translate(359.099 318.5)">
                          <rect id="Rectangle_1" data-name="Rectangle 1" width="4.129" height="16.872" transform="translate(0.447 7.779)" fill="#009fe3"/>
                          <path id="Path_1" data-name="Path 1" d="M510.294,341.127a9.4,9.4,0,0,0-4.569-1.027H498.2v23.432h4.2V355.8h3.334a8.881,8.881,0,0,0,4.535-1.089,7.407,7.407,0,0,0,2.866-2.9,8.243,8.243,0,0,0,.987-3.988,7.935,7.935,0,0,0-.976-3.915A7.048,7.048,0,0,0,510.294,341.127Zm-.953,9.183a3.8,3.8,0,0,1-1.58,1.6,5.105,5.105,0,0,1-2.493.564h-2.877v-9.037h2.877a5.87,5.87,0,0,1,2.527.491,3.383,3.383,0,0,1,1.563,1.472,5.01,5.01,0,0,1,.53,2.426A5.184,5.184,0,0,1,509.341,350.31Z" transform="translate(-490.352 -338.882)" fill="#009fe3"/>
                          <path id="Path_2" data-name="Path 2" d="M800.947,452.511a10.513,10.513,0,0,0-9.409,0,8.15,8.15,0,0,0-3.187,3.074,8.8,8.8,0,0,0-1.151,4.535,8.915,8.915,0,0,0,1.151,4.547,8.159,8.159,0,0,0,3.187,3.108,10.419,10.419,0,0,0,9.409,0,8.156,8.156,0,0,0,3.187-3.108,8.9,8.9,0,0,0,1.151-4.547,8.8,8.8,0,0,0-1.151-4.535A8.112,8.112,0,0,0,800.947,452.511Zm-.491,10.43a4.514,4.514,0,0,1-1.687,1.867,5.109,5.109,0,0,1-5.043,0,4.49,4.49,0,0,1-1.692-1.867,6.224,6.224,0,0,1-.6-2.82,6.117,6.117,0,0,1,.6-2.8,4.4,4.4,0,0,1,1.692-1.833,4.8,4.8,0,0,1,2.516-.649,4.853,4.853,0,0,1,2.527.649,4.459,4.459,0,0,1,1.687,1.833,6.135,6.135,0,0,1,.6,2.8A6.241,6.241,0,0,1,800.456,462.941Z" transform="translate(-763.05 -443.903)" fill="#009fe3"/>
                          <path id="Path_3" data-name="Path 3" d="M1403.333,577.43c-.711,0-1.162-.237-1.348-.716a5.14,5.14,0,0,1-.288-1.89V570.3h-4.2v5.793a5.342,5.342,0,0,0,.474,2.431,3.388,3.388,0,0,0,1.258,1.4,4.961,4.961,0,0,0,1.715.649,9.9,9.9,0,0,0,1.845.175h2.426l-.006-3.322h-1.878Z" transform="translate(-1338.923 -556.096)" fill="#009fe3"/>
                          <path id="Path_4" data-name="Path 4" d="M1159.383,363.174V357.9h-4.2v3.655a1.619,1.619,0,0,1-1.619,1.619h-3.875a6.091,6.091,0,0,0-2.318.412,5,5,0,0,0-1.732,1.151,5.7,5.7,0,0,0-.762.987v-2.268h-4.18v16.872h4.18v-8.834a5.175,5.175,0,0,1,.22-1.472,6.4,6.4,0,0,1,.733-1.907,3.556,3.556,0,0,1,1.376-1.173,4.733,4.733,0,0,1,2.155-.434h15.044v-3.334Z" transform="translate(-1096.609 -355.677)" fill="#009fe3"/>
                          <circle id="Ellipse_1" data-name="Ellipse 1" cx="2.397" cy="2.397" r="2.397" transform="translate(0)" fill="#009fe3"/>
                        </g>
                      </g>
                    </svg>
                </a>
            </div>
            <!-- NAVIGATIE -->
             <div class="items-center h-[25px] xl:h-[30px] hidden lg:flex lg:space-x-[35px] xl:space-x-[30px] lg:ml-[40px] xl:ml-[50px]">
                <?php
                if( have_rows('main_menu', 'option') ):
                    while( have_rows('main_menu', 'option') ) : the_row(); ?>
                    <?php
                    $link = get_sub_field('link', 'option');
                    $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                    $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                    $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                    ?>
                        <a href="<?php echo $link_url; ?>" class="text-[#1A3247] hover:text-[#009FE3] duration-300 font-medium lg:text-12 lg:leading-12 xl:text-14 xl:leading-14" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                    <?php
                    endwhile;
                else :
                endif;
                ?>
             </div>
        </div>
        
        <div class="w-[250px] md:w-[230px] lg:w-[160px] xl:w-[170px] flex items-center justify-end">
            <?php if (get_field('featured_link', 'option')): ?>  
            <a href="<?php echo $linktalk_url; ?>" id="talk" class="h-[35px] md:h-[37px] xl:h-[43px] flex items-center lg:text-14 lg:leading-14 xl:text-16 xl:leading-16 text-[#009FE3] border-[1px] border-[#009FE3] px-[20px] rounded-[14px] md:rounded-[15px] xl:rounded-[18px]" target="<?php echo $linktalk_target; ?>"><span class="correction"><?php echo $linktalk_text; ?></span> 
                <svg id="Group_5" data-name="Group 5" xmlns="http://www.w3.org/2000/svg" width="10.955" height="10.955" viewBox="0 0 10.955 10.955" class="ml-[20px] lg:ml-[35px] xl:ml-[40px]">
                    <path id="Path_5" data-name="Path 5" d="M1.409,0,0,1.407l7.281.006L8.694,0Z" transform="translate(-0.001 0)" fill="#009fe3"/>
                    <path id="Path_6" data-name="Path 6" d="M11.737,0,3.051,8.686l.994.994,7.269-7.269v8.544l1.417-1.41V0Z" transform="translate(-1.776 0)" fill="#009fe3"/>
                </svg>
            </a>
            <?php endif; ?>
            <div class="block lg:hidden ml-[20px] md:ml-[35px]">
                <button id="hamburger" class="button-hamburger uppercase rounded-[2px] w-[24px] h-[47px] md:h-[40px] md:w-[24px] flex items-center justify-center">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</header>
<div id="header-space" class="h-[71px] lg:h-[64px] xl:h-[73px]"></div>

<div id="hbm" class="fixed top-[71px] lg:top-[64px] xl:top-[73px] h-[calc(100dvh-71px)] lg:h-[calc(100dvh-64px)] xl:h-[calc(100dvh-73px)] w-full bg-white lg:hidden z-[998]">
    <hr class="border-[#F4F4F5]">

    <div class="h-full">
      <div class="mobilemenu">
    
         <!-- HOOFDMENU MOBIEL -->
            <?php
            if( have_rows('main_menu', 'option') ):
                while( have_rows('main_menu', 'option') ) : the_row(); ?>
                <?php
                $link = get_sub_field('link', 'option');
                $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                ?>
                  <div class="mobilemenuitem">
                    <hr class="border-[#F4F4F5]">
                    <a href="<?php echo $link_url; ?>" class="container my-[25px] block text-[#1A3247] font-medium text-16 leading-16" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                  </div>
                <?php
                endwhile;
            else :
            endif;
            ?>
            <hr class="border-[#F4F4F5]">
            <?php if (get_field('featured_link', 'option')): ?>  
            <div class="container mt-[40px]">
                <a href="<?php echo $linktalk_url; ?>" class="h-[35px] md:h-[37px] xl:h-[43px] flex items-center lg:text-14 lg:leading-14 xl:text-16 xl:leading-16 text-[#fff] border-[1px] border-[#009FE3] bg-[#009FE3] px-[20px] rounded-[14px] md:rounded-[15px] xl:rounded-[18px] w-fit" target="<?php echo $linktalk_target; ?>"><span class="correction"><?php echo $linktalk_text; ?></span> 
                    <svg id="Group_5" data-name="Group 5" xmlns="http://www.w3.org/2000/svg" width="10.955" height="10.955" viewBox="0 0 10.955 10.955" class="ml-[40px]">
                        <path id="Path_5" data-name="Path 5" d="M1.409,0,0,1.407l7.281.006L8.694,0Z" transform="translate(-0.001 0)" fill="#fff"/>
                        <path id="Path_6" data-name="Path 6" d="M11.737,0,3.051,8.686l.994.994,7.269-7.269v8.544l1.417-1.41V0Z" transform="translate(-1.776 0)" fill="#fff"/>
                    </svg>
                </a>
            </div>
            <?php endif; ?>
      </div>
    </div>
</div>

