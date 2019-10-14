import '@mdi/font/css/materialdesignicons.css'
import Vue from 'vue'
import Vuetify, {
    VApp, VContainer, VContent, VAppBar, VAppBarNavIcon, VBtn, VIcon, VToolbar, VToolbarItems, VToolbarTitle, VRow, VCol, VCard, VCardText, VCardTitle, VForm, VTextarea, VTextField, VDialog, VSwitch, VRadio, VMenu, VList, VListItem, VCheckbox, VTabs, VTab, VTabItem, VSimpleTable
  } from 'vuetify/lib'

  Vue.use(Vuetify, {
    components: {
      VApp, VContainer, VContent, VAppBar, VAppBarNavIcon, VBtn, VIcon, VToolbar, VToolbarItems, VToolbarTitle, VRow, VCol, VCard, VCardText, VCardTitle, VForm, VTextarea, VTextField, VDialog, VSwitch, VRadio, VMenu, VList, VListItem, VCheckbox, VTabs, VTab, VTabItem, VSimpleTable
    },
  })  

const opts = {
    rtl: true,
    icons: {
        iconfont: 'mdi', // 'mdi' || 'mdiSvg' || 'md' || 'fa' || 'fa4'
      },
      theme: {
        themes: {
          light:{
            primary: '#8a51ff',
            secondary: '#e91e63',
            accent: '#9c27b0',
            }, 
        },
      },
}

export default new Vuetify(opts)