import { defineConfig } from 'vite';
import laravel from 'vite-plugin-laravel';

export default defineConfig({
    plugins: [
        laravel()
    ],
    css:   {devSourcemap: true},
    build: {sourcemap: true},
});
