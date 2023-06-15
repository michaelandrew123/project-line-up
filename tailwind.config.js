/** @type {import('tailwindcss').Config} */
module.exports = {
  content:  [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      // animation:{
      //    pulse: "pulse 1.5s cubic-bezier(0.4, 0, 0.6, 1) infinite",
      // },
      // keyframes:{
      //   pulse: {
      //    "0%, 100% ":{
      //      opacity: 1,
      //    },
      //    "50%" :{
      //      opacity: .5,
      //    },
      //  },
      // },	 


    },
  },
  plugins: [],
};

