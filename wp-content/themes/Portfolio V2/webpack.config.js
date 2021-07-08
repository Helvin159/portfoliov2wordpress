const path = require('path');
const currentTask = process.env.npm_lifecycle_event;

let config = {
	entry   : {
		scripts : './js/index.js',
	},
	plugins : [],
	module  : {
		rules : [],
	},
};

if (currentTask === 'build') {
	config.output = {
		publicPath    : 'wp-contents/themes/Portfolio V2',
		chunkFilename : 'bundled.[chunkhash].js',
		filename      : 'bundled.[chunkhash].js',
		path          : path.resolve(__dirname, 'bundled-assets'),
	};

	config.mode = 'production';
}

if (currentTask !== 'build') {
	config.output = {
		publicPath    : 'wp-contents/themes/Portfolio V2',
		chunkFilename : 'dev.js',
		filename      : 'dev.js',
		path          : path.resolve(__dirname, 'bundled-assets'),
	};

	config.mode = 'production';
}

module.exports = config;
