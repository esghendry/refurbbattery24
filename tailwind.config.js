import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "node_modules/preline/dist/*.js",
    ],
    theme: {
        extend: {
            colors: {
                "rb-green": "#52B05E",
                "rb-dark-blue": "#1B365E",
            },
            fontFamily: {
                mulish: ["Mulish", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [
        require("preline/plugin"), 
        require("@tailwindcss/typography")
    ],
};
