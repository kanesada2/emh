import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    envDir: './',
    plugins: [
        laravel({
            input: 'resources/js/app.ts',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    
    server: {
        proxy: {
            '/api': {
              target: 'http://localhost:8000',
              changeOrigin: true,
              secure: false,
              ws: true,
            },
        },
        host: true,
        hmr: {
            host: 'localhost',
            //clientPort: 443,
        }
    },
});
