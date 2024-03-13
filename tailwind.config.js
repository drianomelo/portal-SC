/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            xl: { max: "1440px" },
            lg: { max: "1200px" },
            sm: { max: "768px" },
        },

        extend: {
            fontFamily: {
                inter: "'Inter', sans-serif",
                times: "Times New Roman, serif",
                dyslexic: "Verdana, serif",
            },

            backgroundPosition: {
                "home-xl": "top -100px right 50%",
                "home-sm": "bottom",
                "municipio-xl": "top 650px right 50%",
            },

            keyframes: {
                drop: {
                    "0%": { top: "-8px" },
                    "100%": { top: "200px" },
                },

                "arrow-bounce": {
                    "0%": { transform: "translateY(0)" },
                    "100%": { transform: "translateY(-10%)" },
                },
            },

            animation: {
                drop: "drop 2s  linear infinite",
                "arrow-bounce":
                    "arrow-bounce .5s  ease-in-out infinite alternate",
            },
        },
    },
    plugins: [],
};
