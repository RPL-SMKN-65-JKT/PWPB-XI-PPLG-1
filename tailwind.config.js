/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
        "./src/**/*.{html,js}",
    ],
    theme: {
        extend: {
            fontFamily: {
                Poppins: ['"Poppins"'],
                Sora: ['"Sora"'],
            },
            screens: {
                s: "300px",

                sm: "640px",
                // => @media (min-width: 640px) { ... }

                md: "768px",
                // => @media (min-width: 768px) { ... }

                lg: "1024px",
                // => @media (min-width: 1024px) { ... }

                xl: "1280px",
                // => @media (min-width: 1280px) { ... }

                "2xl": "1536px",
                // => @media (min-width: 1536px) { ... }
            },
            backgroundImage: {
                hero: "url('https://annedece.sirv.com/Images/Wave-10s-1920px.png')",
            },
            colors: {
                glass: "rgb(82 190 226 / 12%)",
            },
            boxShadow: {
                glas_shadow: "0 8px 32px 0 rgba(31, 38, 135, 0.37)",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
