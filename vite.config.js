import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel(
            [
                'resources/assets/js/app.js',
                'resources/assets/js/admin.js',
                'resources/assets/scss/app.scss',
                'resources/assets/scss/admin.scss',
            ]
        )
    ],
    resolve: {
        alias: {
            '$': '/resources/assets/js',
            '@': '/resources/assets/scss',
        },
    },
    // server: {
    //     https: true,
    //     host:  'localhost',
    // },
});
