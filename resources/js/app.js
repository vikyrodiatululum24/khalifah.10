import './bootstrap';
import '../css/app.css';

// Import AOS
import AOS from 'aos'
import 'aos/dist/aos.css'

// Import FlyonUI
import 'flyonui/flyonui';
import { Observer } from 'tailwindcss-intersect';

// Import Alpine
import Alpine from 'alpinejs'
import collapse from '@alpinejs/collapse'


// Pasang plugin collapse ke Alpine
Alpine.plugin(collapse)
window.Alpine = Alpine
Alpine.start()

document.addEventListener('DOMContentLoaded', () => {
  AOS.init({
    duration: 800,
    once: false, // agar bisa animasi ulang saat scroll lagi
    offset: 100
  })

  // Fallback refresh jika dibutuhkan
  setTimeout(() => {
    AOS.refresh()
  }, 500)
})

Observer.start();