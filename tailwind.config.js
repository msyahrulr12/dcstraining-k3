/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/views/**/*.blade.php",
      "./resources/css/**/*.css",
      "./resources/js/**/*.js",
    ],
    theme: {
      extend: {},
      screens: {
        sm: '640px',
        md: '768px',
        lg: '1024px',
        xl: '1280px',
        '2xl': '1536px',
      }
    },
    plugins: [
    ],
  }
