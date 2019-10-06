import '@mdi/font/css/materialdesignicons.css'
import Vue from 'vue'
import Vuetify, {
    VApp, VContainer, VContent, VAppBar, VAppBarNavIcon, VBtn, VIcon, VToolbarTitle, VRow, VCol, VCard, VCardText, VCardTitle, VForm, VTextarea, VTextField, VDialog, VSwitch, VRadio
  } from 'vuetify/lib'

  Vue.use(Vuetify, {
    components: {
      VApp, VContainer, VContent, VAppBar, VAppBarNavIcon, VBtn, VIcon, VToolbarTitle, VRow, VCol, VCard, VCardText, VCardTitle, VForm, VTextarea, VTextField, VDialog, VSwitch, VRadio
    },
  })  

const opts = {
    rtl: true,
    icons: {
        iconfont: 'mdi', // 'mdi' || 'mdiSvg' || 'md' || 'fa' || 'fa4'
      },
      theme: {
        themes: {
          light: {
            primary: '#563fb5',
            secondary: '#b0bec5',
            accent: '#8c9eff',
          },
        },
      },
}

export default new Vuetify(opts)