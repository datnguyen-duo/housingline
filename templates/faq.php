<?php
/* Template Name: FAQ */

$developers_faq_headline = get_field('developers_faq_headline');
$developer_faq_list = get_field('developer_faq_list');
$developers_icon = get_field('developers_icon');

$tenants_faq_headline = get_field('tenants_faq_headline');
$tenants_faq_list = get_field('tenants_faq_list');
$tenants_icon = get_field('tenants_icon');
get_header(); ?>

<div class="faq_wrap">
    <div class="faq_wrap_content">
        <div class="left">
            <div class="left_content animate">
                <div class="main_content">
                    <div class="icon_holder" data-tenantimage="<?php echo $tenants_icon['url'] ?>" data-developerimage="<?php echo $developers_icon['url'] ?>">
                        <img src="<?php echo $developers_icon['url'] ?>">
                    </div>
                    <h2>
                        Developers
                    </h2>
                </div>

                <div class="filters_holder">
                    <div class="single_filter developer">
                        For Developers
                    </div>
                    <div class="single_filter tenant">
                        For Tenants
                    </div>
                </div>

            </div>
        </div>

        <div class="right">
            <div class="right_content animate">
                <h1 data-tenant="<?php echo $tenants_faq_headline; ?>" data-developer="<?php echo $developers_faq_headline; ?>">
                    <?php echo $developers_faq_headline; ?>
                </h1>

                <div class="questions_wrap developer">
                    <?php foreach($developer_faq_list as $singleItem): ?>
                        <div class="single_question_wrap">
                            <div class="single_question">
                                <div class="question_header">
                                    <h3>
                                        <?php echo $singleItem['single_question'] ?>
                                    </h3>
                                    <div class="question_opener">
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="question_answer">
                                    <?php echo $singleItem['single_answer'] ?>
                                </div>
                            </div>
                        </div>    
                    <?php endforeach; ?>
                </div>

                <div class="questions_wrap tenant">
                    <?php foreach($tenants_faq_list as $singleItem): ?>
                        <div class="single_question_wrap">
                            <div class="single_question">
                                <div class="question_header">
                                    <h3>
                                        <?php echo $singleItem['single_question'] ?>
                                    </h3>
                                    <div class="question_opener">
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="question_answer">
                                    <?php echo $singleItem['single_answer'] ?>
                                </div>
                            </div>
                        </div>    
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer(); ?>