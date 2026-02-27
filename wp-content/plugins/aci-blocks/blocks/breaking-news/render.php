<?php
/**
 * Render callback for athensindependent/breaking-news block.
 *
 * Queries for the most recent published aci_breaking_news post
 * with _aci_breaking_news_active = '1'. If none found, outputs nothing.
 */

$aci_options = get_option( 'aci_options', array() );
$bn_enabled  = $aci_options['breaking_news_enabled'] ?? '1';
if ( ! $bn_enabled ) {
	return '';
}

$query = new WP_Query( array(
    'post_type'      => 'aci_breaking_news',
    'post_status'    => 'publish',
    'posts_per_page' => 1,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'meta_query'     => array(
        array(
            'key'   => '_aci_breaking_news_active',
            'value' => '1',
        ),
    ),
    'no_found_rows'  => true,
) );

if ( ! $query->have_posts() ) {
    return '';
}

$query->the_post();
$headline = get_the_title();
$url      = get_post_meta( get_the_ID(), '_aci_breaking_news_url', true );
wp_reset_postdata();

if ( empty( $headline ) ) {
    return '';
}

$wrapper_attributes = get_block_wrapper_attributes( array( 'class' => 'aci-breaking-news' ) );
?>
<div <?php echo $wrapper_attributes; ?>>
<?php if ( ! empty( $url ) ) : ?>
    <a class="aci-breaking-news__link" href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $headline ); ?></a>
<?php else : ?>
    <span class="aci-breaking-news__link"><?php echo esc_html( $headline ); ?></span>
<?php endif; ?>
</div>
