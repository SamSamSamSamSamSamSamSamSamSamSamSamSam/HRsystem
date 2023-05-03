/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./build/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        "human-resource-blue": "#030530",
        "human-resource-white": "#DFDFDF",
        "human-resource-gray": "#9A9A9A",
      },
    },
  },
  plugins: [],
};
