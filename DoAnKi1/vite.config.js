import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { nodeResolve } from '@rollup/plugin-node-resolve';
import tailwindcss from 'tailwindcss';
import autoprefixer from 'autoprefixer';
import del from 'rollup-plugin-delete';
import vue from '@vitejs/plugin-vue';

// https://vitejs.dev/config/
export default defineConfig({
  build: {
    outDir: 'public', // Thư mục xuất ra là public
    assetsDir: '.', // Thư mục assets
    manifest: true, // Tạo file manifest.json
    emptyOutDir: false, // Xóa nội dung thư mục xuất ra trước khi build
    rollupOptions: {
      // Cấu hình đường dẫn xuất tệp
      output: {
        entryFileNames: 'js/[name].js', // Đường dẫn xuất tệp app.js
        chunkFileNames: 'js/[name].js', // Đường dẫn xuất tệp chunk
        assetFileNames: 'css/[name].css', // Đường dẫn xuất tệp CSS
      },
      plugins: [
        // Plugin để xóa tệp đã xuất ra trước đó
        del({ targets: 'public/js/', runOnce: true, verbose: true }),
        del({ targets: 'public/css/', runOnce: true, verbose: true }),
      ]
    },
  },
  plugins: [
    laravel({
      input: ['resources/css/app.css',
              'resources/js/app.js',
              'resources/js/loginjs.js'],
      refresh: true,
    }),
    vue(),
  ],
  css: {
    postcss: {
      plugins: [
        tailwindcss,
        autoprefixer,
      ],
    },
  },
  resolve: {
    plugins: [nodeResolve()],
  },
});
