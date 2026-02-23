( function ( blocks, blockEditor, components, element, apiFetch ) {
    var registerBlockType   = blocks.registerBlockType;
    var InspectorControls   = blockEditor.InspectorControls;
    var useBlockProps       = blockEditor.useBlockProps;
    var PanelBody           = components.PanelBody;
    var TextControl         = components.TextControl;
    var Spinner             = components.Spinner;
    var createElement       = element.createElement;
    var useState            = element.useState;
    var useEffect           = element.useEffect;
    var Fragment            = element.Fragment;

    registerBlockType( 'athensindependent/recirculation', {
        edit: function ( props ) {
            var attributes = props.attributes;
            var setAttributes = props.setAttributes;
            var postId = attributes.postId;

            var blockProps = useBlockProps();

            var state = useState( { post: null, loading: false, error: null } );
            var data    = state[0];
            var setData = state[1];

            useEffect( function () {
                if ( ! postId ) {
                    setData( { post: null, loading: false, error: null } );
                    return;
                }

                setData( { post: null, loading: true, error: null } );

                apiFetch( { path: '/wp/v2/posts/' + postId + '?_fields=id,title,link,featured_media_src_url' } )
                    .then( function ( post ) {
                        setData( { post: post, loading: false, error: null } );
                    } )
                    .catch( function () {
                        setData( { post: null, loading: false, error: 'Post not found.' } );
                    } );
            }, [ postId ] );

            var preview;

            if ( ! postId ) {
                preview = createElement( 'p', { style: { color: '#999', margin: 0 } }, 'Enter a Post ID in the sidebar to preview.' );
            } else if ( data.loading ) {
                preview = createElement( Spinner );
            } else if ( data.error ) {
                preview = createElement( 'p', { style: { color: '#cc0000', margin: 0 } }, data.error );
            } else if ( data.post ) {
                var post = data.post;
                var title = post.title && post.title.rendered ? post.title.rendered : '(no title)';
                var thumbUrl = post.featured_media_src_url || '';

                var thumbEl = thumbUrl
                    ? createElement(
                        'div',
                        { className: 'aci-recirculation__thumbnail' },
                        createElement( 'img', { src: thumbUrl, alt: title } )
                    )
                    : null;

                preview = createElement(
                    'a',
                    { className: 'aci-recirculation__link', href: '#', onClick: function ( e ) { e.preventDefault(); } },
                    thumbEl,
                    createElement( 'p', { className: 'aci-recirculation__title', dangerouslySetInnerHTML: { __html: title } } )
                );
            } else {
                preview = null;
            }

            return createElement(
                Fragment,
                null,
                createElement(
                    InspectorControls,
                    null,
                    createElement(
                        PanelBody,
                        { title: 'Recirculation Settings', initialOpen: true },
                        createElement( TextControl, {
                            label: 'Post ID',
                            value: postId ? String( postId ) : '',
                            type: 'number',
                            onChange: function ( val ) {
                                setAttributes( { postId: val ? parseInt( val, 10 ) : 0 } );
                            },
                        } )
                    )
                ),
                createElement(
                    'div',
                    blockProps,
                    preview
                )
            );
        },

        save: function () {
            return null; // Dynamic block — rendered server-side.
        },
    } );
} )(
    window.wp.blocks,
    window.wp.blockEditor,
    window.wp.components,
    window.wp.element,
    window.wp.apiFetch
);
