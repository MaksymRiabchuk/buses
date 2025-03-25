import './bootstrap';
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { ZiggyVue } from 'ziggy-js';
// import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/index.js'
import '../css/app.css';
import Toast, { POSITION } from "vue-toastification"
import "vue-toastification/dist/index.css"
import {Link,Head} from '@inertiajs/vue3'
import AdminLayout from "./Layouts/AdminLayout.vue";
// import '@tiptap/vue-3/styles.css';
createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
        let page=pages[`./Pages/${name}.vue`];
        page.default.layout=page.default.layout || AdminLayout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(Toast, {
                position: POSITION.TOP_RIGHT,
                timeout: 5000,
            })
            .component('Head',Head)
            .component('Link',Link)
            .mount(el)
    },
    progress:{
        color:'#fff',
        includeCss:true,
        showSpinner:true,
    }
})
