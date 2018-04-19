'use strict';
module.exports = {
  tmp_images: ['sources/tmp/images'],
  tmp_css: ['sources/tmp/css'],
  tmp_js: ['sources/tmp/js'],
  tmp: ['sources/tmp/{,**/}*', '!sources/tmp/README.md'],

  prod_images: ['assets/images/{,**/}*', '!assets/images/README.md'],
  prod_fonts: ['assets/fonts/{,**/}*', '!assets/fonts/README.md'],
  prod_css: ['assets/css/{,**/}*', '!assets/css/README.md'],
  prod_js: ['assets/js/{,**/}*', '!assets/js/README.md'],
  prod: [
    'assets/*/',
    '!assets/{images/,fonts/,css/,js/}',
    'assets/{images/,fonts/,css/,js/}*/',
    'assets/{images/,fonts/,css/,js/}*.*',
    '!assets/{images/,fonts/,css/,js/}README.md'
  ]
};

