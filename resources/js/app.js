import './bootstrap';
import { createApp } from 'vue';
import ElementPlus from 'element-plus';
import 'element-plus/dist/index.css';
import * as ElementPlusIconsVue from '@element-plus/icons-vue';
import UserManagement from './components/UserManagement.vue';

// Create Vue app
const app = createApp({});

// Register Element Plus
app.use(ElementPlus);

// Register all icons
for (const [key, component] of Object.entries(ElementPlusIconsVue)) {
    app.component(key, component);
}

// Register UserManagement component
app.component('user-management', UserManagement);

// Mount the app
app.mount('#app');
