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
            fontFamily: {
                newsCycle: ["News Cycle"],
                cuprum: ["Cuprum"],
                ekMukta: ["Mukta"],
            },
            colors: {
                red: "#e40510",
                honeydew: "#ebf5df",
                celadon: "#bad4aa",
                vanilla: "#d4d4aa",
                grey: "#B7B7B7",
                duskBlack: "#000100",
                flashWhite: "#f1f1f1",
                white: "#ffffff",
            },
            keyframes: {
                wiggle: {
                    "0%": { transform: "translateX(0)" },
                    "50%": { transform: "translateX(25%)" },
                    "100%": { transform: "translateX(0)" },
                },
                shrink: {
                    "100%": { width: "0" },
                },
            },
            animation: {
                wiggle: "wiggle 1s ease-in-out infinite",
                shrink: "shrink 3s linear forwards"
            },
        },
    },
    plugins: [],
};
