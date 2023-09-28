/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: "jit",
    content: [
        "./index.php",
        "./header.php",
        "./footer.php",
        "./functions.php",
        "./searchform.php",
        "./page-templates/**/*.php",
        "./template-parts/**/*.php",
        "./components/**/*.php",
        "./src/ts/**/*.ts",
        "./src/php/**/*.php",
    ],
    theme: {
        extend: {
            animation: {
                fadeIn: "fadeIn 1200ms 800ms ease-in forwards",
                "fadeIn-fast": "fadeIn 600ms 800ms ease-in forwards",
                tap: "tap 3000ms infinite",
            },
            keyframes: {
                fadeIn: {
                    "0%": { opacity: 0 },
                    "100%": { opacity: 1 },
                },
                tap: {
                    "8%": { transform: "scale(1.05)" },
                    "16%": { transform: "scale(0.95)" },
                    "24%": { transform: "scale(1)" },
                },
            },
            boxShadow: {
                "sub-menu": "0 0 5px",
            },
            fontSize: {
                xl: ["1.375rem", "2.75rem"],
                "5xl": ["3.25rem", "1"],
                ilink: ["2.625rem", "3.875rem"],
                "ilink-l": ["4.5rem", "3.875rem"],
                year: ["6.375rem", "2.75rem"],
                heading: ["2rem", "3.875rem"],
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
            primary: "#c09042",
            secondary: "#DFB100",
            white: "#fefefe",
            "l-gray": "#f9f9f6",
            gray: "#cdcdcd",
            "d-gray": "#515151",
            dark: "#1f1f1f",
            current: "currentColor",
            black: "#050505",
            transparent: "transparent",
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
