import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flyonui/dist/js/*.js",
        // "./node_modules/flyonui/dist/js/accordion.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
                sora: ['Sora', 'sans-serif'],
            },
            colors: {
                primary: "#FF9800",
                secondary: "#17254E", 
                accent: "#333931",
              },
            backgroundImage: {
                
            },
        },
    },
    flyonui: {
        themes: ["light"]
    },

    plugins: [
        forms,
        require("flyonui"),
        require("flyonui/plugin")
    ],
};
