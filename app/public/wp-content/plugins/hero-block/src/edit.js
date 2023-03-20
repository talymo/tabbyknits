/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import {
	useBlockProps,
	MediaPlaceholder,
	BlockControls,
	MediaReplaceFlow,
	RichText,
} from '@wordpress/block-editor';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @param  root0
 * @param  root0.attributes
 * @param  root0.setAttributes
 * @param  root0.setAttibutes
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit( { attributes, setAttributes } ) {
	const setImageAttributes = ( media ) => {
		if ( ! media || ! media.url ) {
			setAttributes( {
				imageUrl: null,
				imageId: null,
				imageAlt: null,
			} );
			return;
		}
		setAttributes( {
			imageUrl: media.url,
			imageId: media.id,
			imageAlt: media?.alt,
		} );
	};

	const { imageUrl, imageId, heading, copy, button } = attributes;

	return (
		<section
			{ ...useBlockProps() }
			style={ { backgroundImage: `url(${ imageUrl })` } }
		>
			{ imageId && (
				<div className="hero-content">
					<BlockControls>
						<MediaReplaceFlow
							mediaId={ imageId }
							mediaUrl={ imageUrl }
							allowedTypes={ [ 'image' ] }
							accept="image/*"
							onSelect={ setImageAttributes }
							name={
								! imageUrl
									? __( 'Add Image' )
									: __( 'Replace Image' )
							}
						/>
					</BlockControls>
					<RichText
						tagName="h1"
						value={ heading }
						onChange={ ( heading ) => setAttributes( { heading } ) }
						placeholder={ __( 'Headline' ) }
					/>
					<RichText
						tagName="p"
						value={ copy }
						onChange={ ( copy ) => setAttributes( { copy } ) }
						placeholder={ __( 'Copy' ) }
					/>
					<RichText
						tagName="a"
						value={ button }
						onChange={ ( button ) => setAttributes( { button } ) }
						placeholder={ __( 'Link' ) }
					/>
				</div>
			) }
			{ ! imageId && (
				<div>
					<MediaPlaceholder
						accept="image/*"
						allowedTypes={ [ 'image' ] }
						onSelect={ setImageAttributes }
						multiple={ false }
						handleUpload={ true }
					/>
				</div>
			) }
		</section>
	);
}
