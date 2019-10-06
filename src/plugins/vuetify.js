import Vue from 'vue';
import Vuetify from 'vuetify/lib';
import fa from 'vuetify/es5/locale/fa';

Vue.use(Vuetify);

export default new Vuetify({
    lang: {
      locales: { fa },
      current: 'fa',
    },
  icons: {
    iconfont: 'mdi',
  },
});
