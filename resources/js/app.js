require('./bootstrap');

import { createApp } from 'vue';
//import Sidebar from './components/sidebar.vue';
import Navbar from './components/navbar.vue';
import ApllicationProgress from './components/application-progress.vue';

const app = createApp({
    components:{
        Navbar,
        ApllicationProgress
    }
})
app.mount("#app");
