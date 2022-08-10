<?php
/* Template Name: Home */

$hero_headline = get_field('hero_headline');
$hero_subheadline = get_field('hero_subheadline');
$hero_image = get_field('hero_image');
$hero_first_button = get_field('hero_first_button');
$hero_second_button = get_field('hero_second_button');

$our_mission_headline = get_field('our_mission_headline');
$our_mission_description = get_field('our_mission_description');
$our_mission_developer_box_icon = get_field('our_mission_developer_box_icon');
$our_mission_developer_box_link = get_field('our_mission_developer_box_link');
$our_mission_tenant_box_icon = get_field('our_mission_tenant_box_icon');
$our_mission_tenant_box_link = get_field('our_mission_tenant_box_link');

$services_list = get_field('services_list');

$project_middle_info = get_field('project_middle_info');
$projects_first_list = get_field('projects_first_list');
$projects_second_list = get_field('projects_second_list');

$developers_image = get_field('developers_image');
$developers_headline = get_field('developers_headline');
$developers_description = get_field('developers_description');
$developers_button = get_field('developers_button');
$developers_list = get_field('developers_list');

$tenants_image = get_field('tenants_image');
$tenants_headline = get_field('tenants_headline');
$tenants_description = get_field('tenants_description');
$tenants_button = get_field('tenants_button');
$tenants_list = get_field('tenants_list');

$resources_headline = get_field('resources_headline');
$resources_subheadline = get_field('resources_subheadline');
$resources_list = get_field('resources_list');

$contact_headline = get_field('contact_headline');
$contact_description = get_field('contact_description');
$contact_form_id = get_field('contact_form_id');

get_header(); ?>

<div class="home_wrap">

    <div class="hero_section">
        <div class="left">
            <div class="left_content animate">
                <?php if($hero_headline): ?>
                    <h1>
                        <?php echo $hero_headline; ?>
                    </h1>
                <?php endif; ?>

                <?php if($hero_subheadline): ?>
                    <p>
                        <?php echo $hero_subheadline; ?>
                    </p>
                <?php endif; ?>

                <div class="buttons_holder">
                    <?php if($hero_first_button): ?>
                        <a href="<?php echo $hero_first_button['url']; ?>" target="<?php echo $hero_first_button['target']; ?>" class="btn dark large">
                            <?php echo $hero_first_button['title']; ?>
                        </a>
                    <?php endif; ?>

                    <?php if($hero_second_button): ?>
                        <a href="<?php echo $hero_second_button['url']; ?>" target="<?php echo $hero_second_button['target']; ?>" class="btn">
                            <?php echo $hero_second_button['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="right_content animate">
                <div class="image_holder">
                    <?php echo wp_get_attachment_image( $hero_image['id'], "full", false ); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="first_section">
        <div class="first_section_content">
            <div class="left">
                <div class="left_content animate">
                    <div class="tag">
                        Our Mission
                    </div>

                    <?php if($our_mission_headline): ?>
                        <h2>
                            <?php echo $our_mission_headline; ?>
                        </h2>
                    <?php endif; ?>

                    <?php if($our_mission_description): ?>
                        <p>
                            <?php echo $our_mission_description; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="right">
                <div class="right_content">
                    <?php if($our_mission_developer_box_icon || $our_mission_developer_box_link): ?>
                        <div class="single_box_holder animate">
                            <div class="single_box developer">
                                <?php if($our_mission_developer_box_icon): ?>
                                    <div class="icon_holder">
                                        <img src="<?php echo $our_mission_developer_box_icon['url'] ?>">
                                    </div>
                                <?php endif; ?>

                                <?php if($our_mission_developer_box_link): ?>
                                    <a href="<?php echo $our_mission_developer_box_link['url'] ?>" target="<?php echo $our_mission_developer_box_link['target'] ?>" class="btn">
                                        <?php echo $our_mission_developer_box_link['title'] ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($our_mission_tenant_box_icon || $our_mission_tenant_box_link): ?>
                        <div class="single_box_holder tenant animate">
                            <div class="single_box orange">
                                <?php if($our_mission_tenant_box_icon): ?>
                                    <div class="icon_holder">
                                        <img src="<?php echo $our_mission_tenant_box_icon['url'] ?>">
                                    </div>
                                <?php endif; ?>
                                <?php if($our_mission_tenant_box_link): ?>
                                    <a href="<?php echo $our_mission_tenant_box_link['url'] ?>" target="<?php echo $our_mission_tenant_box_link['target'] ?>" class="btn">
                                        <?php echo $our_mission_tenant_box_link['title'] ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="second_section">
        <?php foreach($services_list as $singleItem): ?>
            <div class="single_section">
                <div class="left">
                    <?php if($singleItem['single_service_background_image']): ?>
                        <?php echo wp_get_attachment_image( $singleItem['single_service_background_image']['id'], "full", false, ["class" => "box_background"] ); ?>
                    <?php endif; ?>

                    <?php if($singleItem['single_service_image']): ?>
                        <div class="image_holder animate">
                            <?php echo wp_get_attachment_image( $singleItem['single_service_image']['id'], "full", false ); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="right">
                    <div class="service_indicator animate">
                        <span>Our Services</span>
                        <div class="progress_line"></div>
                    </div>
                    <div class="right_content animate">
                        <?php if($singleItem['single_service_headline']): ?>
                            <h2><?php echo $singleItem['single_service_headline'] ?></h2>
                        <?php endif; ?>

                        <?php if($singleItem['single_service_description']): ?>
                            <p>
                                <?php echo $singleItem['single_service_description'] ?>
                            </p>
                        <?php endif; ?>

                        <?php if($singleItem['single_service_list']): ?>
                            <ul>
                                <?php foreach($singleItem['single_service_list'] as $listItem): ?>
                                    <li>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/mark.png">
                                        <?php echo $listItem['single_item']; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="third_section">
        <div class="third_section_content animate">
            <?php if($projects_first_list): ?>
                <div class="top_content">
                    <?php foreach($projects_first_list as $singleProject): ?>
                        <div class="single_project">
                            <div class="image_holder">
                                <?php if($singleProject['project_image']): ?>
                                    <?php echo wp_get_attachment_image( $singleProject['project_image']['id'], "full", false ); ?>
                                <?php endif; ?>

                                <div class="project_info">
                                    <?php if($singleProject['project_name']): ?>
                                        <h3><?php echo $singleProject['project_name']; ?></h3>
                                    <?php endif; ?>
                                    <?php if($singleProject['number_of_units']): ?>
                                        <div class="tag"><?php echo $singleProject['number_of_units']; ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if($project_middle_info): ?>
                <div class="middle_content">
                    <div class="left">
                        <div class="left_content">
                            <div class="tag">Our Projects</div>
                            <?php if($project_middle_info['projects_headline']): ?>
                                <h2><?php echo $project_middle_info['projects_headline'] ?></h2>
                            <?php endif; ?>
                            <?php if($project_middle_info['projects_description']): ?>
                                <p>
                                    <?php echo $project_middle_info['projects_description']; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="right">
                        <div class="image_holder">
                            <?php if($project_middle_info['project_image']['url']): ?>
                                <?php echo wp_get_attachment_image( $project_middle_info['project_image']['id'], "full", false ); ?>
                            <?php endif; ?>

                            <div class="project_info">
                                <?php if($project_middle_info['project_headline']): ?>
                                    <h3><?php echo $project_middle_info['project_headline']; ?></h3>
                                <?php endif; ?>
                                <?php if($project_middle_info['number_of_units']): ?>
                                    <div class="tag"><?php echo $project_middle_info['number_of_units']; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
            <?php if($projects_second_list): ?>
                <div class="bottom_content">
                    <?php foreach($projects_second_list as $singleProject): ?>
                        <div class="single_project">
                            <div class="image_holder">
                                <?php if($singleProject['project_image']): ?>
                                    <?php echo wp_get_attachment_image( $singleProject['project_image']['id'], "full", false ); ?>
                                <?php endif; ?>

                                <div class="project_info">
                                    <?php if($singleProject['project_name']): ?>
                                        <h3><?php echo $singleProject['project_name']; ?></h3>
                                    <?php endif; ?>
                                    <?php if($singleProject['number_of_units']): ?>
                                        <div class="tag"><?php echo $singleProject['number_of_units']; ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="fourth_section">
        <div class="fourth_section_content_wrap" id="developers_and_tenants">
            <div class="fourth_section_header animate">
                <h2>For Developers</h2>
    
                <div class="filters_holder">
                    <div class="single_filter developer">
                        For Developers
                    </div>
                    <div class="single_filter tenant">
                        For Tenants
                    </div>
                </div>
            </div>

            <div class="fourth_section_content">
                <div class="description animate">
                    <div class="left">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 955.283 510.395">
                            <path id="Intersection_2" data-name="Intersection 2" d="M961.209,547V407.013L529.849,157.955,108.022,359.6V245.607l429.062-209,1.156.678,525.066,307.936V547Zm-853.187,0V448.566L532.881,259.241V547Z" transform="translate(-108.022 -36.605)" fill="#2d57e0" opacity="0.999"/>
                        </svg>

                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <?php if($developers_image['url']): ?>
                                        <div class="image_holder">
                                            <?php echo wp_get_attachment_image( $developers_image['id'], "full", false ); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="swiper-slide">
                                    <?php if($tenants_image['url']): ?>
                                        <div class="image_holder">
                                            <?php echo wp_get_attachment_image( $tenants_image['id'], "full", false ); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="right_content">
                            <div class="content developer">
                                <?php if($developers_headline): ?>
                                    <h2><?php echo $developers_headline; ?></h2>
                                <?php endif; ?>

                                <?php if($developers_description): ?>
                                    <p>
                                        <?php echo $developers_description; ?>
                                    </p>
                                <?php endif; ?>

                                <?php if($developers_button): ?>
                                    <a href="<?php echo $developers_button['url']; ?>" target="<?php echo $developers_button['target']; ?>" class="btn large">
                                        <?php echo $developers_button['title']; ?>
                                    </a>
                                <?php endif; ?>
                            </div>

                            <div class="content tenant">
                                <?php if($tenants_headline): ?>
                                    <h2><?php echo $tenants_headline; ?></h2>
                                <?php endif; ?>
                                
                                <?php if($tenants_description): ?>
                                    <p>
                                        <?php echo $tenants_description; ?>
                                    </p>
                                <?php endif; ?>

                                <?php if($tenants_button): ?>
                                    <a href="<?php echo $tenants_button['url']; ?>" target="<?php echo $tenants_button['target']; ?>" class="btn large">
                                        <?php echo $tenants_button['title']; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php if($developers_list): ?>
                    <div class="three_box_section developer">
                        <?php foreach($developers_list as $singleItem): ?>
                            <div class="single_box_holder">
                                <div class="single_box">
                                    <div class="left">
                                        <?php if($singleItem['box_icons']): ?>
                                            <div class="icon_holder">
                                                <img src="<?php echo $singleItem['box_icons']['url'] ?>">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="right">
                                        <div class="right_content">
                                            <?php if($singleItem['box_headline']): ?>
                                                <h3>
                                                    <?php echo $singleItem['box_headline']; ?>
                                                </h3>
                                            <?php endif; ?>
                                            <?php if($singleItem['box_description']): ?>
                                                <p>
                                                    <?php echo $singleItem['box_description']; ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if($tenants_list): ?>
                    <div class="three_box_section tenant">
                        <?php foreach($tenants_list as $singleItem): ?>
                            <div class="single_box_holder">
                                <div class="single_box">
                                    <div class="left">
                                        <?php if($singleItem['box_icon']): ?>
                                            <div class="icon_holder">
                                                <img src="<?php echo $singleItem['box_icon']['url'] ?>">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="right">
                                        <div class="right_content">
                                            <?php if($singleItem['box_headline']): ?>
                                                <h3>
                                                    <?php echo $singleItem['box_headline']; ?>
                                                </h3>
                                            <?php endif; ?>
                                            <?php if($singleItem['box_description']): ?>
                                                <p>
                                                    <?php echo $singleItem['box_description']; ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>     
        </div>
    </div>

    <div class="fifth_section">
        <div class="fifth_section_content animate">
            <div class="headline_wrap">
                <?php if($resources_headline): ?>
                    <h2>
                        <?php echo $resources_headline; ?>
                    </h2>
                <?php endif; ?>

                <?php if($resources_subheadline): ?>
                    <p>
                        <?php echo $resources_subheadline; ?>
                    </p>
                <?php endif; ?>
            </div>

            <?php if($resources_list): ?>
                <div class="slider_holder">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php foreach($resources_list as $singleItem): ?>
                                <div class="swiper-slide">
                                    <a href="https://www.google.com/" target="_blank" class="single_news">
                                        <div class="image_holder">
                                            <?php if($singleItem['resource_image']): ?>
                                                <?php echo wp_get_attachment_image( $singleItem['resource_image']['id'], "full", false ); ?>
                                            <?php endif; ?>
                                            <?php if($singleItem['resource_category']): ?>
                                                <div class="tag"><?php echo $singleItem['resource_category']; ?></div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="news_descripiton">
                                            <?php if($singleItem['resource_headline']): ?>
                                                <h3><?php echo $singleItem['resource_headline']; ?></h3>
                                            <?php endif; ?>

                                            <?php if($singleItem['resource_description']): ?>
                                                <p>
                                                    <?php echo $singleItem['resource_description']; ?>
                                                </p>
                                            <?php endif; ?>

                                            <?php if($singleItem['resource_link']): ?>
                                                <div href="<?php echo $singleItem['resource_link']['url']; ?>" target="<?php echo $singleItem['resource_link']['target']; ?>" class="link">
                                                    <?php echo $singleItem['resource_link']['title']; ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow_right.png">
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper_pagination_holder">
                            <div class="prev_slide_holder">
                                <div class="swiper-button-prev">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/prev.png">
                                </div>
                            </div>

                            <div class="swiper-pagination"></div>

                            <div class="next_slide_holder">
                                <div class="swiper-button-next">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/next.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="sixth_section">
        <div class="sixth_section_content" id="contact">
            <div class="headline_wrap">

                <?php if($contact_headline): ?>
                    <h2>
                        <?php echo $contact_headline; ?>
                    </h2>
                <?php endif; ?>
                <?php if($contact_description): ?>
                    <p>
                        <?php echo $contact_description; ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="form_holder">
                <?php echo do_shortcode($contact_form_id); ?>
            </div>
        </div>
    </div>

</div>

<?php
get_footer(); ?>