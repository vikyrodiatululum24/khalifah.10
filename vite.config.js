import { defineConfig } from 'vite';
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";


// export default defineConfig({
//     plugins: [
//       tailwindcss(),
//     ],
//     server: {
//       host: "0.0.0.0", // biar bisa diakses dari jaringan
//       port: 5173,
//       strictPort: true,
//       hmr: {
//           host: "192.168.1.9", // GANTI dengan IP lokal kamu
//       },
//   },
// });
export default defineConfig({
  plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    tailwindcss(),
  ],
  // server: {
  //   host: "0.0.0.0", // biar bisa diakses dari jaringan
  //   port: 5173,
  //   strictPort: true,
  //   hmr: {
  //       host: "192.168.1.8", // GANTI dengan IP lokal kamu
  //   },
// },
})

