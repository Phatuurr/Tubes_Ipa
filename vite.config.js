import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            // Hanya refresh jika file di folder ini berubah (menghindari loop di routes)
            refresh: [
                'resources/views/**',
                'resources/css/**',
                'resources/js/**',
            ],
        }),
        tailwindcss(),
    ],
    server: {
        // Memastikan watcher tidak memproses file temporary
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});