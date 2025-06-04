import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import glob from "glob";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/sass/frontend.scss',
                'resources/js/app.js',
                'resources/js/frontend.js',
                'resources/js/home.js',
                'resources/js/jquery-ui.min.js',
                'resources/js/jqueryUiTouch.js',
				...glob.sync("resources/js/tools/*.js"),
            ],
            refresh: true,
        }),
    ],
});
