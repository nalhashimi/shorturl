import './assets/main.css'

import { createApp } from 'vue'
// import { createPinia } from 'pinia'
import { store } from "@/store/store";
// import { useStore } from './store';

import App from './App.vue'
import router from './router'

const app = createApp(App)

// app.use(createPinia())
app.use(router)
app.use(store)

app.mount('#app')
