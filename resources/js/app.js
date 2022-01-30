require('./bootstrap');

import { createApp } from 'vue';
//import Sidebar from './components/sidebar.vue';
import ApllicationProgress from './components/application_progress.vue';

const app = createApp({
    components:{
        ApllicationProgress,
    }
})

app.mount("#app");
