import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host: '0.0.0.0',  // listen on all interfaces inside container
        port: 5173,
        strictPort: true,
        hmr: {
            host: 'localhost', // or your host machine's IP if not localhost
        },
    },
});
