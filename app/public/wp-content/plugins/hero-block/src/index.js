/**
 * Registers a new block provided a unique name and an object defining its behavior.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */
import { registerBlockType } from '@wordpress/blocks';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * All files containing `style` keyword are bundled together. The code used
 * gets applied both to the front of your site and to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './style.scss';

/**
 * Internal dependencies
 */
import Edit from './edit';
import save from './save';
import metadata from './block.json';

/**
 * Every block starts by registering a new block type definition.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */
registerBlockType( metadata.name, {
	icon: {
		src: (
			<svg version="1.1" viewBox="0 0 50 50">
				<g id="Layer_1_1_">
					<path d="M1,39h18.523l-3.2,8H12v2h3.523h18.954H38v-2h-4.323l-3.2-8H49V1H1V39z M31.523,47H18.477l3.2-8h6.646L31.523,47z    M29.677,37h-9.354H3v-8h44v8H29.677z M47,3v24H3V3H47z" />
					<rect x="24" y="32" width="2" height="2" />
				</g>
			</svg>
		),
		background: '#efeae7',
		foreground: '#000000',
	},
	/**
	 * @see ./edit.js
	 */
	edit: Edit,

	/**
	 * @see ./save.js
	 */
	save,
} );
