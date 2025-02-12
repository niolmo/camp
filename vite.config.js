import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/bootstrap.css', 'resources/css/app.css',
                'resources/js/bootstrap.bundle.js','resources/js/app.js'],
            refresh: true,
        }),
    ],
});
