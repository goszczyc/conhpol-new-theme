/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: "jit",
    content: [
        "./index.php",
        "./header.php",
        "./footer.php",
        "./functions.php",
        "./page-templates/**/*.php",
        "./template-parts/**/*.php",
        "./components/**/*.php",
        "./src/ts/**/*.ts",
    ],
    theme: {
        extend: {
            animation: {
                "fadeIn": "fadeIn 1200ms 2000ms ease-in forwards",
            },
            keyframes: {
                fadeIn: {
                    "0%": { opacity: 0 },
                    "100%": { opacity: 1 },
                },
            },
        },
        screens: {
            xs: "576px",
            sm: "768px",
            md: "992px",
            lg: "1200px",
            xl: "1400px",
            "2xl": "1600px",
        },
        container: {
            screens: {
                lg: "1764px",
            },
        },
        colors: {
            primary: "#e30613",
            white: "#fefefe",
            "l-gray": "#f5f5f5",
            gray: "#9b9b9b",
            "d-gray": "#515151",
            dark: "#1f1f1f",
            current: "currentColor",
            black: "#050505",
            transparent: "transparent",
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
