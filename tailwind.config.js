/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        container: {
            center: true,
            padding: "16px",
        },
        extend: {
            colors: {
                coffe: "#d1b599",
                secondary: "#334155",
            },
            screens: {
                "2xl": "1320px",
            },
        },
    },
    plugins: [],
};
