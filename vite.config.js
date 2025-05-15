import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/sass/frontend.scss',
                'resources/js/app.js',
                'resources/js/frontend.js',
                'resources/js/home.js',
            ],
            refresh: true,
        }),
    ],
});
