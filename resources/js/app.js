import '../css/app.css';
import {createApp, h} from 'vue';
import {createInertiaApp, Link} from '@inertiajs/vue3';
import ThePlain from "@ui/Layouts/ThePlain.vue";
import {resolvePageComponent} from "laravel-vite-plugin/inertia-helpers";
import PrimeVue from 'primevue/config';
import Lara from '../presets/lara'

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Account';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: async name => {
        let page = await resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue'))
        page.default.layout = ThePlain
        return page
    },
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(PrimeVue, {
                unstyled: true,
                pt: Lara
            })
            .mount(el)
    },
    progress: {
        color: '#4B5563',
    },
});
