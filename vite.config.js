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
                'resources/js/jquery-ui.min.js',
                'resources/js/jqueryUiTouch.js',                               
                'resources/js/tools/fd-calculator.js',
				'resources/js/tools/emi-calculator.js',
				'resources/js/tools/sip-calculator.js',
				'resources/js/tools/timezone.js',
            ],
            refresh: true,
        }),
    ],
});
