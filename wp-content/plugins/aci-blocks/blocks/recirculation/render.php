<?php
/**
 * Recirculation block — server-side render.
 *
 * @param array $attributes Block attributes.
 * @return string Block HTML.
 */

$post_id = isset( $attributes['postId'] ) ? (int) $attributes['postId'] : 0;

if ( ! $post_id ) {
    return '';
}

$post = get_post( $post_id );

if ( ! $post || 'publish' !== get_post_status( $post ) ) {
    return '';
}

$title     = get_the_title( $post );
$permalink = get_permalink( $post );
$thumb_url = get_the_post_thumbnail_url( $post_id, 'medium' );

$wrapper_attrs = get_block_wrapper_attributes( array( 'class' => 'aci-recirculation' ) );
?>
<div <?php echo $wrapper_attrs; ?>>
    <a class="aci-recirculation__link" href="<?php echo esc_url( $permalink ); ?>">
        <?php if ( $thumb_url ) : ?>
        <div class="aci-recirculation__thumbnail">
            <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( $title ); ?>">
        </div>
        <?php endif; ?>
        <p class="aci-recirculation__title"><?php echo esc_html( $title ); ?></p>
    </a>
</div>
