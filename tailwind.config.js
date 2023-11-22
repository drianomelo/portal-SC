/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                inter: "'Inter', sans-serif",
            },
            keyframes: {
                "bounce-side": {
                    "0%, 100%": { transform: "translateX(-25%)" },
                    "50%": { transform: "translateX(0)" },
                },
            },
            animation: {
                'bounce-side': 'bounce-side .6s linear infinite',
            }
        },
    },
    plugins: [],
};
