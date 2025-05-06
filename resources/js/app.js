import './bootstrap';
import '../css/app.css';
import Alpine from 'alpinejs';
import 'flyonui/flyonui';

window.Alpine = Alpine;

Alpine.start();

import { Observer } from 'tailwindcss-intersect';
 
Observer.start();