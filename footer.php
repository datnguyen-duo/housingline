<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package housingline
 */

$copyright = get_field('copyright', 'option');
$facebook_link = get_field('facebook_link', 'option');
$linkedin_link = get_field('linkedin_link', 'option');
?>

<footer>
    <div class="footer_content">
        <div class="social_wrap">
            <span>
                Follow Us:
            </span>
            <?php if($linkedin_link): ?>
                <a href="<?php echo $linkedin_link['url'] ?>" target="<?php echo $linkedin_link['target'] ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg">
                    <?php echo $linkedin_link['title'] ?>
                </a>
            <?php endif; ?>
            <?php if($facebook_link): ?>
                <a href="<?php echo $facebook_link['url'] ?>" target="<?php echo $facebook_link['target'] ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg">
                    <?php echo $facebook_link['title'] ?>
                </a>
            <?php endif; ?>
        </div>

        <?php if($copyright): ?>
            <div class="copyright">
                <p>
                    <?php echo $copyright; ?>
                </p>
            </div>
        <?php endif; ?>

        <div class="footer_menu">
            <ul>
                <li>
                    <a href="">Privacy Terms</a>
                </li>
                <li>
                    <a href="">Terms & Conditions</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
