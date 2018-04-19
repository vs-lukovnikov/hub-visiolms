'use strict';
module.exports = {
  beauty: {
    options: {
      mangle: false,
      compress: false,
      preserveComments: 'all',
      screwIE8: true,
      quoteStyle: 1,
      beautify: {
        beautify: true,
        width: 80,
        indent_level: 2,
        bracketize: true
      }
    },
    files: [
      {
        src: ['sources/js/parts/{,**/}*.js'],
        dest: 'sources/tmp/js/bootstrapper.js'
      },
      {
        expand: true,
        flatten: false,
        cwd: 'sources/js',
        dest: 'sources/tmp/js',
        src: ['{,**/}*.js', '!parts/{,**/}*.js']
      }
    ]
  },
  compress: {
    options: {
      mangle: true,
      compress: true,
      preserveComments: false,
      screwIE8: true
    },
    files: [
      {
        expand: true,
        flatten: false,
        cwd: 'sources/tmp/js',
        dest: 'sources/tmp/js',
        src: ['{,**/}*.js']
      }
    ]
  }
};
