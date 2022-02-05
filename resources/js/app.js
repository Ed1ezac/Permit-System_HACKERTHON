require('./bootstrap');

import { createApp } from 'vue';
//import Sidebar from './components/sidebar.vue';
import Navbar from './components/navbar.vue';
import ApplicationProgress from './components/application-progress.vue';
import PaymentTabs from './components/payment-tabs.vue';

const app = createApp({
    components:{
        Navbar,
        ApplicationProgress,
        PaymentTabs,
    }
})
app.mount("#app");
