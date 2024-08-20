import Vue from 'vue';
import VueRouter from 'vue-router';
import PhotoList from '../components/PhotoList.vue';

Vue.use(VueRouter);

const routes = [
  {
    path: '/',
    name: 'PhotoList',
    component: PhotoList,
  },
];

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes,
});

export default router;
