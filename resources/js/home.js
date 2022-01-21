import Vue from 'vue'
import VueI18n from 'vue-i18n';
import locales from 'lang/index';
import httpPlugin from 'plugins/http/index';

try {
  window.Popper = require('popper.js').default;
  window.$ = window.jQuery = require('jquery');

  require('bootstrap');
} catch (e) {}

require('social-share.js/dist/js/social-share.min.js');
require('vendor/select2.min.js');
require('vendor/jquery.fluidbox.js');
window.marked = require('marked');
window.hljs = require('highlight.js');
window.toastr = require('toastr/build/toastr.min.js');
window.lightbox2 = require('lightbox2');
window.jqcloud2 = require('jqcloud2');

Vue.use(VueI18n);
Vue.use(httpPlugin);

Vue.config.lang = window.Language;

const i18n = new VueI18n({
  locale: Vue.config.lang,
  messages: locales
})

Vue.component('comment', require('home/components/Comment.vue').default);

Vue.component('parse', require('home/components/Parse.vue').default);

Vue.component('parse-textarea', require('home/components/Textarea.vue').default);

Vue.component('avatar', require('home/components/AvatarUpload.vue').default);

new Vue({
  i18n: i18n,
}).$mount('#app');
