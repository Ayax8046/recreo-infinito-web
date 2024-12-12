import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue(),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
        },
    },
    build: {
        outDir: 'public/build',
        rollupOptions: {
            output: {
                assetFileNames: (assetInfo) => {
                    let extType = assetInfo.name.split('.').pop();
                    if (/css|js|png|jpe?g|svg|gif|tiff|bmp|ico/i.test(extType)) {
                        extType = extType.toLowerCase();
                    } else {
                        extType = 'other';
                    }
                    return `${extType}/[name]-[hash][extname]`;
                }
            }
        }
    },
    server: {
        https: true,
    }
});
