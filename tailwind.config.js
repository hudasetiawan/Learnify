import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            // fontFamily: ["Poppins", ...defaultTheme.fontFamily.sans],
            fontFamily: {
                poppins: ["Poppins", ...defaultTheme.fontFamily.sans],
                nunito: ["Nunito", ...defaultTheme.fontFamily.sans],
                fredoka: ["Fredoka One", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: ["#6246EA"],
                secondary: ["#D1D1E9"],
                purpleActive: ["#C3ACD0"],
            },
            boxShadow:{
                card: ["box-shadow: 4px 10px 26px 5px rgba(0,0,0,0.1);"]
            }
        },
    },
    plugins: [],
};
