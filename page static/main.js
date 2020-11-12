import {Lista} from './lista.js';

window.suportCustomElements = "cuxtomElements" in window;

window.customElements.define('lista-valor',Lista);