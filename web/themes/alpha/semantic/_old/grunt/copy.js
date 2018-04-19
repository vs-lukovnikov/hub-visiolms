'use strict';
module.exports = {
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
  source_css: {
    expand: true,
    cwd: 'sources/css',
    src: '**',
    dest: 'sources/tmp/css'
  }
};
