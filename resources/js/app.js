import './bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler.js'
import 'bootstrap-icons/font/bootstrap-icons.css';

import navbar from './components/global/navbar.vue'
import hero from './components/global/hero.vue'
import calendar from './components/specifique/calendar.vue'
import timer from './components/specifique/timer.vue'

import selcars from './components/specifique/selcars.vue'
import location from './components/specifique/location.vue'
import goSignupA from './components/global/goSignupA.vue'
import goSigninA from './components/global/goSigninA.vue'
import dashboardIndex from './components/global/agencyDashboard/index.vue'


import store from './store';




const app = createApp({});

app.component("navbar-component", navbar);
app.component("hero-component", hero);
app.component("calendar-component", calendar);
app.component("timer-component", timer);
app.component("selcars-component", selcars);
app.component("location-component", location);
app.component("gosignupa-component", goSignupA);
app.component("gosignina-component", goSigninA);
app.component("dashboardindex-component", dashboardIndex);

app.use(store)
app.mount("#app")