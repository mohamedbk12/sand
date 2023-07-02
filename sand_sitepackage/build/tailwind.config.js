/** @type {import('tailwindcss').Config} */
const tailwindcss = require('tailwindcss');

module.exports = {
  content: ['./index.html', './sliders.html', './forms.html', './productDetail.html', './productDetail2.html', './products.html', './machineDetail.html', './machineDetail2.html', './application.html', 'contentSliders.html', 'noNeedsElements.html'],
  theme: {
    extend: {
      screens: {
        '2080': '2080px',
        '3xl': '1680px',
        '4xl': '1900px',
        'x': '1180px',
        '668': '668px',
      },
      fontSize:{
        'xxs': '.5rem',
        '10xl': '9rem',
        '11xl': '10rem',
        '12xl': '11rem',
        '13xl': '12rem',
        '14xl': '13rem',
        '15xl': '14rem',
        '16xl': '15rem',
      },
      lineHeight: {
        'big-txt': '0.7',
      },
      maxWidth: {
        '1920': '1920px',
        '100-48': 'calc(100% - 48px)' ,
        '50%-of-container': '960px' 
      },
      minHeight: {
        '64': '16rem',
        'fill': 'calc(100vh - (80px + 296px))'
      },
      colors: {
        "color-main-blue": '#0b208b',
        "color-blue": '#0C3766',
        "color-blue-1": '#05254B',
        "color-blue-2": '#082B53',
        "color-blue-3": '#08315D',
        "color-blue-4": '#0D3767',
        "color-blue-7": '#0E4B8E',
        "color-blue-8": '#1C68BA',
        "color-blue-9": '#5D9EE3',
        "color-blue-10": '#E6E7E9',
        "color-blue-hover": '#001C3B',
        "color-blue-hover-opacity": '#001c3b40',
        "color-truiceblue": '#eaedf2',
        "color-white": '#fff',
        "color-black": '#000',
        "color-grey": '#E6E7E9',
        "color-light-grey": '#f6f6f6',
        "color-dark-grey": '#8694A1',
        "color-green": '#8BA188',
        "color-brown": '#3A3A3A',
        "color-light-brown": '#A8917B',
        "color-powder": '#AB7F81',
        "color-trugreen": '#BBD03A',
        "color-truyellow": '#fefe51',
        "color-transparent": 'transparent',
        "color-grey-border": '#9F9F9F',
      },
      letterSpacing: {
        'title': '-0.72px'
      },
      height: {
        'slider': '800px',
        '500': '500px',
        '600': '600px',
        '700': '700px',
        '800': '800px',
        '900': '900px',
        '1000': '1000px',
        'wv-80': '80vw'
      },
      spacing: {
        'unset': 'unset !important',
        'n-20': '-20px !important',
        'slider-type-2-arrow': 'calc(50% - 5rem)',
      },
      gridTemplateColumns: {
        '70-1fr': '70px minmax(0, 1fr)'
      },
      fontFamily: {
        'awesome': '"FONT AWESOME 5 FREE"'
      },
      boxShadow: {
        'product-info-detail': '0 0 25px 0px rgba(0, 0, 0, .1)'
      },
      scale: {
        '25': '.25'
      },
      aspectRatio: {
        'rectangle': '2'
      }
    },
  },
  plugins: [
    tailwindcss,
    require('./assets/css/buttons.css'),
  ],
}

