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

<header class="bg-white fixed top-0 left-0 right-0 border-b-[1px] border-[#F4F4F5] z-[9999]">
    <div class="container h-[71px] lg:h-[64px] xl:h-[73px] w-full flex items-center justify-between">
        <div class="w-[85px] md:w-[340px] lg:w-[940px] xl:w-[1001px] flex">
            <!-- LOGO -->
            <div class="h-[25px] xl:h-[30px]">
                <a href="/">
                    <img src="/wp-content/themes/iport/img/local/logo_iport.png" alt="" class="h-full">
                </a>
            </div>
            <!-- NAVIGATIE -->
             <div class="items-center h-[25px] xl:h-[30px] hidden lg:flex lg:space-x-[35px] xl:space-x-[30px] lg:ml-[40px] xl:ml-[50px]">
                <a href="" class="text-[#1A3247] hover:text-[#009FE3] duration-300 font-medium lg:text-12 lg:leading-12 xl:text-14 xl:leading-14">For airlines</a>
                <a href="" class="text-[#1A3247] hover:text-[#009FE3] duration-300 font-medium lg:text-12 lg:leading-12 xl:text-14 xl:leading-14">For groundhandlers</a>
                <a href="" class="text-[#1A3247] hover:text-[#009FE3] duration-300 font-medium lg:text-12 lg:leading-12 xl:text-14 xl:leading-14">For airports</a>
                <a href="" class="text-[#1A3247] hover:text-[#009FE3] duration-300 font-medium lg:text-12 lg:leading-12 xl:text-14 xl:leading-14">Costumers</a>
                <a href="" class="text-[#1A3247] hover:text-[#009FE3] duration-300 font-medium lg:text-12 lg:leading-12 xl:text-14 xl:leading-14">News & Events</a>
                <a href="" class="text-[#1A3247] hover:text-[#009FE3] duration-300 font-medium lg:text-12 lg:leading-12 xl:text-14 xl:leading-14">About us</a>
                <a href="" class="text-[#1A3247] hover:text-[#009FE3] duration-300 font-medium lg:text-12 lg:leading-12 xl:text-14 xl:leading-14">Academy</a>
             </div>
        </div>
        <div class="w-[250px] md:w-[230px] lg:w-[160px] xl:w-[170px] flex items-center justify-end">
            <a href="" id="talk" class="h-[35px] md:h-[37px] xl:h-[43px] flex items-center lg:text-14 lg:leading-14 xl:text-16 xl:leading-16 text-[#009FE3] border-[1px] border-[#009FE3] px-[20px] rounded-[14px] md:rounded-[15px] xl:rounded-[18px]">Talk to us 
                <svg id="Group_5" data-name="Group 5" xmlns="http://www.w3.org/2000/svg" width="10.955" height="10.955" viewBox="0 0 10.955 10.955" class="ml-[20px] lg:ml-[35px] xl:ml-[40px]">
                    <path id="Path_5" data-name="Path 5" d="M1.409,0,0,1.407l7.281.006L8.694,0Z" transform="translate(-0.001 0)" fill="#009fe3"/>
                    <path id="Path_6" data-name="Path 6" d="M11.737,0,3.051,8.686l.994.994,7.269-7.269v8.544l1.417-1.41V0Z" transform="translate(-1.776 0)" fill="#009fe3"/>
                </svg>
            </a>
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

<div id="hbm" class="fixed top-[71px] lg:top-[64px] xl:top-[73px] h-[calc(100dvh-71px)] lg:h-[calc(100dvh-64px)] xl:h-[calc(100dvh-73px)] w-full bg-white lg:hidden z-[998]">
    <hr class="border-[#F4F4F5]">

    <div class="h-full">
      <div class="mobilemenu">
    
         <!-- HOOFDMENU MOBIEL -->
      
            <div class="mobilemenuitem">
              <hr class="border-[#F4F4F5]">
              <a href="" class="container my-[25px] block text-[#1A3247] font-medium text-16 leading-16">For airlines</a>
            </div>
            <div class="mobilemenuitem">
              <hr class="border-[#F4F4F5]">
              <a href="" class="container my-[25px] block text-[#1A3247] font-medium text-16 leading-16">For groundhandlers</a>
            </div>
            <div class="mobilemenuitem">
              <hr class="border-[#F4F4F5]">
              <a href="" class="container my-[25px] block text-[#1A3247] font-medium text-16 leading-16">For airports</a>
            </div>
            <div class="mobilemenuitem">
              <hr class="border-[#F4F4F5]">
              <a href="" class="container my-[25px] block text-[#1A3247] font-medium text-16 leading-16">Customers</a>
            </div>
            <div class="mobilemenuitem">
              <hr class="border-[#F4F4F5]">
              <a href="" class="container my-[25px] block text-[#1A3247] font-medium text-16 leading-16">News & Events</a>
            </div>
            <div class="mobilemenuitem">
              <hr class="border-[#F4F4F5]">
              <a href="" class="container my-[25px] block text-[#1A3247] font-medium text-16 leading-16">About us</a>
            </div>
            <div class="mobilemenuitem">
              <hr class="border-[#F4F4F5]">
              <a href="" class="container my-[25px] block text-[#1A3247] font-medium text-16 leading-16">Academy</a>
            </div>
            <hr class="border-[#F4F4F5]">
            <div class="container mt-[40px]">
                <a href="" class="h-[35px] md:h-[37px] xl:h-[43px] flex items-center lg:text-14 lg:leading-14 xl:text-16 xl:leading-16 text-[#fff] border-[1px] border-[#009FE3] bg-[#009FE3] px-[20px] rounded-[14px] md:rounded-[15px] xl:rounded-[18px] w-fit">Talk to us 
                    <svg id="Group_5" data-name="Group 5" xmlns="http://www.w3.org/2000/svg" width="10.955" height="10.955" viewBox="0 0 10.955 10.955" class="ml-[40px]">
                        <path id="Path_5" data-name="Path 5" d="M1.409,0,0,1.407l7.281.006L8.694,0Z" transform="translate(-0.001 0)" fill="#fff"/>
                        <path id="Path_6" data-name="Path 6" d="M11.737,0,3.051,8.686l.994.994,7.269-7.269v8.544l1.417-1.41V0Z" transform="translate(-1.776 0)" fill="#fff"/>
                    </svg>
                </a>
            </div>
      </div>
    </div>
</div>
