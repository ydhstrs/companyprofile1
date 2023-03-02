const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {

content: [
'./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
'./storage/framework/views/*.php',
'./resources/views/**/*.blade.php',
],

theme: {

extend: {
        backgroundImage: {
        'header': "url('/images/LANDINGHEADER3.png')",
      },
colors: {
      transparent: 'transparent',
      current: 'currentColor',
      'primary1': '#9B5A30',
      'primary2': '#F3EFE9',
      'third1': '#ECE5D5',
      'fourth1': '#505924',
    },
fontFamily: {
sans: ['Nunito', ...defaultTheme.fontFamily.sans],
Akira: ['Akira Expanded', ...defaultTheme.fontFamily.serif],
Amiri: ['"Amiri"', 'serif'],
Epilogue: ['"Epilogue"', 'sans']
},
},
},

plugins: [require('@tailwindcss/forms')],
};
