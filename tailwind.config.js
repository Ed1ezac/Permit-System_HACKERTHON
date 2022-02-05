module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        'sans':['Roboto', 'Arial', 'sans-serif', '-apple-system','BlinkMacSystemFont',],
        'body':['Quicksand','Roboto', 'Arial','-apple-system'],
        'headings':['Abel','Roboto', 'Arial','-apple-system'],
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
