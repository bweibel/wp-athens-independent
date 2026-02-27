( function ( blocks, blockEditor, element ) {
    var registerBlockType = blocks.registerBlockType;
    var useBlockProps     = blockEditor.useBlockProps;
    var createElement     = element.createElement;

    registerBlockType( 'athensindependent/breaking-news', {
        edit: function () {
            var blockProps = useBlockProps( { style: { background: '#E6EA9B', color: '#231F20', padding: '8px 16px', textAlign: 'center', fontSize: '12px', fontWeight: '700', letterSpacing: '0.08em', textTransform: 'uppercase' } } );
            return createElement(
                'div',
                blockProps,
                'Breaking News - manage items under Breaking News in the admin.'
            );
        },

        save: function () {
            return null; // Dynamic block — rendered server-side.
        },
    } );
} )(
    window.wp.blocks,
    window.wp.blockEditor,
    window.wp.element
);
