import { defineConfig } from "vite";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    // server: {
    //     host: "0.0.0.0", // biar bisa diakses dari jaringan
    //     port: 5173,
    //     strictPort: true,
    //     hmr: {
    //         host: "192.168.1.9", // GANTI dengan IP lokal kamu
    //     },
    // },
    plugins: [
        tailwindcss(),
    ],
});
