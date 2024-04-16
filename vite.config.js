import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import glob from "glob";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                ...glob.sync("resources/js/*.js"),
                "resources/css/app.css",
            ],
            refresh: true,
        }),
    ],

    server: {
        host: "10.36.14.94",
        port: 3000,
    },
});
