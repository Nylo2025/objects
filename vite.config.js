import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/style.scss',
                'node_modules/bootstrap/scss/bootstrap.scss',
                'node_modules/swiper/swiper-bundle.min.css',

                'resources/js/app.js',
                'resources/js/counter.init.js',
                'resources/js/swiper.js'
            ],
            refresh: true,
        }),
    ],
});
