import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'build', // NOT public/build — it will go directly inside public_html
        manifest: true,
        emptyOutDir: true,
    },
});
