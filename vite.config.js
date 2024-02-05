import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    server: {
      hmr: {
        host: 'sbe.test'
      },
      host: 'sbe.test'
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [...refreshPaths, "app/Http/Livewire/**"],
        }),
    ],
});
