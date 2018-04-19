'use strict';

require('node-sass');
var hexdigest = require('hexdigest');
var nodeSassAssetFunctions = require('node-sass-asset-functions');
// @TODO Replace node-sass-glob-once with postcss plugin.
var nodeSassGlobOnce = require('node-sass-glob-once');

module.exports = {
  options: {
    outputStyle: 'compact',
    precision: 8,
    sourceComments: false,
    sourceMap: true,
    importer: nodeSassGlobOnce,

    includePaths: [
      // Include necessary node modules.
      'node_modules/node-normalize-scss',
      'node_modules/sass-toolkit/stylesheets',
      'node_modules/breakpoint-sass/stylesheets',
      // Include self for access to files via package name.
      'sources/sass/semantic'
    ],

    functions: nodeSassAssetFunctions({
      images_path: 'assets/images',
      fonts_path: 'assets/fonts',
      http_images_path: '../images',
      http_fonts_path: '../fonts',
      asset_cache_buster: function (http_path, real_path, done) {
        hexdigest(real_path, 'md5', function (err, digest) {
          if (err) { done('0000000000'); }
          else { done(digest.substring(0, 10)); }
        });
      }
    })
  },

  dev: {
    options: {
      outputStyle: 'expanded',
      sourceComments: true
    },
    files: [
      {
        expand: true,
        flatten: false,
        cwd: 'sources/sass/semantic',
        src: ['{,**/}*.{scss,sass}'],
        dest: 'sources/tmp/css',
        ext: '.css',
        extDot: 'last'
      }
    ]
  },

  prod: {
    files: [
      {
        expand: true,
        flatten: false,
        cwd: 'sources/sass/semantic',
        src: ['{,**/}*.{scss,sass}'],
        dest: 'sources/tmp/css',
        ext: '.css',
        extDot: 'last'
      }
    ]
  }
};
