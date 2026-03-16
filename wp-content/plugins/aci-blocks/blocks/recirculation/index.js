( function ( blocks, blockEditor, components, element, apiFetch ) {
    var registerBlockType = blocks.registerBlockType;
    var InspectorControls = blockEditor.InspectorControls;
    var useBlockProps     = blockEditor.useBlockProps;
    var PanelBody         = components.PanelBody;
    var TextControl       = components.TextControl;
    var Button            = components.Button;
    var Spinner           = components.Spinner;
    var createElement     = element.createElement;
    var useState          = element.useState;
    var useEffect         = element.useEffect;
    var useRef            = element.useRef;
    var Fragment          = element.Fragment;

    registerBlockType( 'athensindependent/recirculation', {
        edit: function ( props ) {
            var attributes    = props.attributes;
            var setAttributes = props.setAttributes;
            var postId        = attributes.postId;

            var blockProps = useBlockProps();

            // ── Preview state (resolved selected post) ─────────────────────
            var previewState = useState( { post: null, loading: false, error: null } );
            var preview    = previewState[0];
            var setPreview = previewState[1];

            // ── Search state ───────────────────────────────────────────────
            // `searching` = true while the search UI is open (either no post
            // selected yet, or user clicked "Change Post").
            var searchState = useState( { query: '', results: [], loading: false, searching: ! postId } );
            var search    = searchState[0];
            var setSearch = searchState[1];

            var debounceRef = useRef( null );

            // ── Load preview whenever postId changes ───────────────────────
            useEffect( function () {
                if ( ! postId ) {
                    setPreview( { post: null, loading: false, error: null } );
                    return;
                }

                setPreview( { post: null, loading: true, error: null } );

                apiFetch( { path: '/wp/v2/posts/' + postId + '?_fields=id,title,link,featured_media_src_url' } )
                    .then( function ( post ) {
                        setPreview( { post: post, loading: false, error: null } );
                    } )
                    .catch( function () {
                        setPreview( { post: null, loading: false, error: 'Post not found.' } );
                    } );
            }, [ postId ] );

            // ── Search handler (debounced 300 ms) ──────────────────────────
            function handleSearchChange( val ) {
                setSearch( function ( prev ) {
                    return { query: val, results: [], loading: !! val.trim(), searching: prev.searching };
                } );

                if ( debounceRef.current ) {
                    clearTimeout( debounceRef.current );
                }

                if ( ! val.trim() ) {
                    return;
                }

                debounceRef.current = setTimeout( function () {
                    var term = val.trim();
                    var promises = [];

                    // 1. By numeric ID — fetch single post directly.
                    if ( /^\d+$/.test( term ) ) {
                        promises.push(
                            apiFetch( { path: '/wp/v2/posts/' + term + '?_fields=id,title,slug' } )
                                .then( function ( p ) { return [ p ]; } )
                                .catch( function () { return []; } )
                        );
                    }

                    // 2. By exact slug.
                    promises.push(
                        apiFetch( { path: '/wp/v2/posts?slug=' + encodeURIComponent( term ) + '&_fields=id,title,slug&per_page=5' } )
                            .catch( function () { return []; } )
                    );

                    // 3. By title (full-text search).
                    promises.push(
                        apiFetch( { path: '/wp/v2/posts?search=' + encodeURIComponent( term ) + '&_fields=id,title,slug&per_page=5' } )
                            .catch( function () { return []; } )
                    );

                    Promise.all( promises ).then( function ( arrays ) {
                        // Merge and deduplicate by ID; preserve priority order.
                        var seen   = {};
                        var merged = [];
                        arrays.forEach( function ( arr ) {
                            arr.forEach( function ( post ) {
                                if ( ! seen[ post.id ] ) {
                                    seen[ post.id ] = true;
                                    merged.push( post );
                                }
                            } );
                        } );
                        setSearch( function ( prev ) {
                            return { query: prev.query, results: merged.slice( 0, 8 ), loading: false, searching: prev.searching };
                        } );
                    } );
                }, 300 );
            }

            // ── Select a post from search results ──────────────────────────
            function selectPost( id ) {
                setAttributes( { postId: id } );
                setSearch( { query: '', results: [], loading: false, searching: false } );
            }

            // ── Sidebar content ────────────────────────────────────────────
            var sidebarContent;

            if ( postId && ! search.searching ) {
                // A post is selected — show its title + "Change Post" button.
                var selectedTitle = preview.post
                    ? ( preview.post.title && preview.post.title.rendered
                            ? preview.post.title.rendered
                            : '(no title)' )
                    : 'Post #' + postId;

                sidebarContent = createElement(
                    'div',
                    null,
                    createElement(
                        'p',
                        { style: { fontSize: '12px', marginBottom: '8px' } },
                        createElement( 'strong', null, 'Selected: ' ),
                        createElement( 'span', { dangerouslySetInnerHTML: { __html: selectedTitle } } )
                    ),
                    createElement(
                        Button,
                        {
                            variant: 'secondary',
                            isSmall: true,
                            onClick: function () {
                                setSearch( { query: '', results: [], loading: false, searching: true } );
                            },
                        },
                        'Change Post'
                    )
                );
            } else {
                // Search UI — shown when no post selected or "Change Post" clicked.
                var resultsList = null;

                if ( search.loading ) {
                    resultsList = createElement( Spinner );
                } else if ( search.results.length > 0 ) {
                    resultsList = createElement(
                        'div',
                        { style: { marginTop: '4px' } },
                        search.results.map( function ( post ) {
                            var postTitle = post.title && post.title.rendered
                                ? post.title.rendered
                                : '(no title)';
                            var label = postTitle + ' — ' + post.slug;
                            return createElement(
                                Button,
                                {
                                    key: post.id,
                                    variant: 'tertiary',
                                    isSmall: true,
                                    style: {
                                        display: 'block',
                                        width: '100%',
                                        textAlign: 'left',
                                        marginBottom: '4px',
                                        whiteSpace: 'normal',
                                        height: 'auto',
                                    },
                                    onClick: function () { selectPost( post.id ); },
                                },
                                createElement( 'span', { dangerouslySetInnerHTML: { __html: label } } )
                            );
                        } )
                    );
                } else if ( search.query && ! search.loading ) {
                    resultsList = createElement(
                        'p',
                        { style: { color: '#999', fontSize: '12px', marginTop: '4px' } },
                        'No posts found.'
                    );
                }

                sidebarContent = createElement(
                    'div',
                    null,
                    createElement( TextControl, {
                        label: 'Search posts',
                        placeholder: 'Title, slug, or post ID\u2026',
                        value: search.query,
                        onChange: handleSearchChange,
                        autoFocus: search.searching,
                        __nextHasNoMarginBottom: true,
                    } ),
                    resultsList,
                    // "Cancel" button — only shown when changing an already-set post.
                    postId && search.searching && createElement(
                        Button,
                        {
                            variant: 'tertiary',
                            isSmall: true,
                            style: { marginTop: '8px' },
                            onClick: function () {
                                setSearch( { query: '', results: [], loading: false, searching: false } );
                            },
                        },
                        'Cancel'
                    )
                );
            }

            // ── Block preview area ─────────────────────────────────────────
            var previewEl;

            if ( ! postId ) {
                previewEl = createElement(
                    'p',
                    { style: { color: '#999', margin: 0 } },
                    'Search for a post in the sidebar to preview.'
                );
            } else if ( preview.loading ) {
                previewEl = createElement( Spinner );
            } else if ( preview.error ) {
                previewEl = createElement(
                    'p',
                    { style: { color: '#cc0000', margin: 0 } },
                    preview.error
                );
            } else if ( preview.post ) {
                var post     = preview.post;
                var title    = post.title && post.title.rendered ? post.title.rendered : '(no title)';
                var thumbUrl = post.featured_media_src_url || '';

                var thumbEl = thumbUrl
                    ? createElement(
                        'div',
                        { className: 'aci-recirculation__thumbnail' },
                        createElement( 'img', { src: thumbUrl, alt: '' } )
                    )
                    : null;

                previewEl = createElement(
                    'a',
                    { className: 'aci-recirculation__link', href: '#', onClick: function ( e ) { e.preventDefault(); } },
                    thumbEl,
                    createElement( 'p', { className: 'aci-recirculation__title', dangerouslySetInnerHTML: { __html: title } } )
                );
            } else {
                previewEl = null;
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
                        sidebarContent
                    )
                ),
                createElement( 'div', blockProps, previewEl )
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
