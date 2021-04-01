const { merge } = require( 'webpack-merge' );
const common = require( './webpack.config.js' );
const CssMinimizerPlugin = require( 'css-minimizer-webpack-plugin' );
const ImageminPlugin = require( 'imagemin-webpack-plugin' ).default;

/**
 * Webpack config (Production mode)
 *
 * @see https://webpack.js.org/guides/production/
 */
module.exports = merge( common, {
	plugins: [
		/**
		 * Uses Imagemin to compress source images.
		 *
		 * @see https://www.npmjs.com/package/imagemin-webpack-plugin
		 */
		new ImageminPlugin( {
			disable: false,
			test: /\.(jpe?g|png|gif|svg)$/i,
			gifsicle: {
				interlaced: true,
			},
			optipng: {
				optimizationLevel: 3,
			},
			jpegtran: {
				quality: 70,
				progressive: true,
			},
			svgo: {
				plugins: [
					{ removeViewBox: false },
					{ removeDimensions: true },
					{
						removeAttrs: {
							attrs: '*:(stroke|fill):((?!^none$).)*',
						},
					},
				],
			},
		} ),
	],
	optimization: {
		minimize: true,
		minimizer: [
			/**
			 * Minify CSS.
			 *
			 * @see https://www.npmjs.com/package/css-minimizer-webpack-plugin
			 */
			new CssMinimizerPlugin( {
				sourceMap: false,
				parallel: true,
				minimizerOptions: {
					preset: [
						'default',
						{
							discardComments: { removeAll: true },
						},
					],
				},
			} ),
		],
	},
} );
