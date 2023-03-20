/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from '@wordpress/block-editor';
import { RichText } from '@wordpress/block-editor';

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @param  root0
 * @param  root0.attributes
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#save
 *
 * @return {WPElement} Element to render.
 */
export default function save( { attributes } ) {
	const blockProps = useBlockProps.save();
	const { imageUrl, heading, copy, button } = attributes;
	return (
		<section
			{ ...blockProps }
			style={ { backgroundImage: `url(${ imageUrl })` } }
		>
			<div className="hero-content">
				<h1>{ heading }</h1>
				<p>{ copy }</p>
				<RichText.Content value={ button } />
			</div>
		</section>
	);
}
