'use strict';

module.exports = {

  txt: {
    options: {
      accessibilityLevel: 'WCAG2AA',
      force: true,
      browser: true,
      reportType: 'txt',
      reportLocation: '/build/reports/txt',
      urls: ['https://example.com']
    }
  },

  json: {
    options: {
      accessibilityLevel: 'WCAG2AA',
      force: true,
      browser: true,
      reportType: 'json',
      reportLocation: '/build/reports/json',
      urls: ['https://example.com']
    }
  }
};
