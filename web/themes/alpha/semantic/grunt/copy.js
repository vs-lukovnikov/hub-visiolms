'use strict';
module.exports = {
  semanticui: {
    expand: true,
    cwd: 'node_modules/semantic-ui',
    src: '**',
    dest: 'sources/vendor/semantic-ui'
  },
  fonts: {
    expand: true,
    cwd: 'sources/fonts',
    src: '{,**/}*.{eot,otf,svg,ttf,woff,woff2}',
    dest: 'assets/fonts'
  },
  images: {
    expand: true,
    cwd: 'sources/tmp/images',
    src: '**',
    dest: 'assets/images'
  },
  css: {
    expand: true,
    cwd: 'sources/tmp/css',
    src: '**',
    dest: 'assets/css'
  },
  js: {
    expand: true,
    cwd: 'sources/tmp/js',
    src: '**',
    dest: 'assets/js'
  },
  vendors: {
    expand: true,
    cwd: 'sources/vendor',
    src: '**',
    dest: 'assets/vendor'
  }
};
