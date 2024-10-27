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
 <!-- COMPANIES -->
<section class="bg-gradient-to-b from-white to-[#F6F6F6] py-[60px]">
    <div class="container">
        <h2 class="text-[#2A3041] font-semibold text-32 leading-33 md:text-42 md:leading-43 lg:text-45 lg:leading-47 xl:text-54 xl:leading-56"><?php echo get_field('title');?></h2>
    </div>

    
    <div class="mt-[20px] md:mt-[25px] lg:mt-[35px] xl:mt-[45px]">
        <div class="w-screen relative overflow-x-hidden swiper swipercompanies">
            <div class="flex w-full swiper-wrapper kleuren-wrapper">

            <?php
                // Haal de waarde van het ACF taxonomy veld 'categories' op.
                $selected_categories = get_field('categories');

                // Controleer of er categorieën zijn geselecteerd.
                if( $selected_categories ) {
                    // Zet de categorieën om in een array van categorie-ID's.
                    $category_ids = array_map(function($category) {
                        return $category->term_id;
                    }, $selected_categories);

                    // Als er categorieën zijn geselecteerd, voer de WP_Query uit.
                    $args = array(
                        'post_type' => 'company',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category', // Vervang 'category' door de naam van je taxonomy als het anders is.
                                'field'    => 'term_id',
                                'terms'    => $category_ids,
                            ),
                        ),
                    );

                    $loop = new WP_Query( $args );

                    // Check of er posts zijn gevonden
                    if ( $loop->have_posts() ) :
                        while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
                            <?php
                            $image = get_field('logo', $post_id);
                            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                            ?>
                            <div class="flex items-center w-max swiper-slide">
                                <div class="w-[292.15px] h-[461px] md:w-[290.73px] md:h-[460px] xl:h-[520px] xl:w-[328px] bg-kleur rounded-[15px] flex justify-center items-start relative overflow-hidden">
                                    <div class="absolute left-[13px] top-[236px] md:top-[236px] lg:top-[237px] xl:top-[267px] h-[18px] w-[13px] bg-kleur z-[3]"></div>
                                    <div class="absolute right-[13px] top-[236px] md:top-[236px] lg:top-[237px] xl:top-[267px] h-[18px] w-[13px] bg-kleur z-[3]"></div>
                                    <div class="absolute right-[0px] bottom-[0px] w-[100px] h-[60px] xl:h-[70px] xl:w-[120px] bg-kleur rounded-[10px] flex items-center justify-center z-[3]">
                                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="merklogo">
                                    </div>
                                    <div class="content w-[266.15px] h-[417px] md:w-[264.73px] md:h-[416px] xl:h-[476px] xl:w-[302px] bg-white rounded-[10px] mt-[13px] overflow-hidden relative z-[2]">
                                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="h-full min-h-full min-w-full object-cover object-center">
                                        <div class="hover-effect">
                                            <div class="h-full w-full flex items-end px-[20px] py-[35px] xl:px-[30px] xl:py-[45px]">
                                            <div class="grid">
                                                <h3 class="text-white text-12 leading-22 xl:text-14 xl:leading-25 font-semibold"><?php echo get_field('name', $post_id);?></h3>
                                                <p class="text-white text-10 leading-22 xl:text-12 xl:leading-25 font-normal"><?php echo get_field('text', $post_id);?></p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                    else :
                    endif;
                    wp_reset_query();
                } else {
                }
            ?>
            </div>
        </div>
    </div>
    <?php if (get_field('link')): ?>   
    <div class="container">
        <a href="<?php echo $link_url; ?>" class="text-14 leading-14 xl:text-16 xl:leading-16 text-white font-normal md:min-w-[130px] h-[43px] px-[20px] border-[1px] border-[#1C1C1C] bg-[#2A3041] lg:hover:bg-[#009FE3] lg:hover:border-[#009FE3] duration-300 rounded-[14px] md:rounded-[15px] xl:rounded-[18px] mt-[30px] md:mt-[40px] lg:mt-[60px] xl:mt-[50px] lg:hover:text-white flex items-center justify-center w-fit mx-auto" target="<?php echo $link_target; ?>">
        <span class="correction"><?php echo $link_text; ?></span>
        <svg id="Group_134" data-name="Group 134" xmlns="http://www.w3.org/2000/svg" width="9.953" height="9.954" viewBox="0 0 9.953 9.954" class="ml-[50px] xl:ml-[30px]">
            <path id="Path_5" data-name="Path 5" d="M1.28,0,0,1.278l6.615.005L7.9,0Z" transform="translate(-0.001 0)" fill="#f6f6f6"/>
            <path id="Path_6" data-name="Path 6" d="M10.942,0,3.051,7.892l.9.9,6.6-6.6V9.954l1.287-1.281V0Z" transform="translate(-1.893 0)" fill="#f6f6f6"/>
        </svg>
        </a>
    </div>
    <?php endif; ?>
</section>
<?php endif; ?>
