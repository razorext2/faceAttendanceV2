import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // css
                "resources/css/app.css",
                // js
                "resources/js/app.js",
                "resources/js/alpine.js",
                "resources/js/bootstrap.js",
                "resources/js/chart.js",
                "resources/js/simpleTables.js",
                "resources/js/leaflet.js",
            ],
            refresh: true,
        }),
    ],
});
