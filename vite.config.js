import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/sass/_variables.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
