import Vue from "vue";
import VueRouter from "vue-router";
import axios from "axios";
import VueAxios from "vue-axios";
import VueSocketio from 'vue-socket.io'


// importing custom components
import SidebarCollapse from "./components/SidebarCollapse";
import ImageUpload from "./components/ImageUpload";
import UserActivation from "./components/user-activation/UserActivation";
import InfoBox from "./components/info-box/InfoBox";
import UserImage from './components/UserImage'
import ConfirmModal from './components/ConfirmModal'
import ActivityGraph from './components/ActivityGraph/ActivityGraph'
import MediaManager from './components/MediaManager/MediaManager'
import BulmaModal from './components/BulmaModal'
import FileField from './components/FileField'
import ImportUsers from './components/UserImport/ImportUsers'
import EditUsers from './components/UserImport/EditUsers'
import FileManager from './components/FileManager/FileManager'
//

// Adding the X-CSRF-Token to all axios request
axios.interceptors.request.use(function(config){
  config.headers['X-CSRF-TOKEN'] = window.Laravel.csrfToken
  // config.headers['APP'] = 'dungdang'
  return config
})

window.eventBus = new Vue({})

Vue.use(VueAxios, axios)
Vue.use(VueRouter)

// Vue.use(VueSocketio, 'http://localhost:8890')

// Making axios available as $http
// so that the ajax calls are not axios dependent
Vue.prototype.$http = axios

Vue.component('sidebar-collapse', SidebarCollapse)
Vue.component('image-upload', ImageUpload)
Vue.component('user-activation', UserActivation)
Vue.component('info-box', InfoBox)
Vue.component('user-image', UserImage)
Vue.component('confirm-modal', ConfirmModal)
Vue.component('activity-graph', ActivityGraph)
Vue.component('media-manager', MediaManager)
Vue.component('bulma-modal', BulmaModal)
Vue.component('file-field', FileField)
Vue.component('import-users', ImportUsers)
Vue.component('edit-users', EditUsers)
Vue.component('file-manager', FileManager)
//

// Vue.component('edit-post', require('./components/Editpost.vue'));
// Vue.component('dropzone', require('./components/Dropzone.vue'));
// Vue.component('v-select', require('./components/V-Select.vue'));
// Vue.component('file-manager', require('./components/FileManager/FileManager.vue'));
// Vue.component('van-ban', require('./components/Vanban.vue'));
// Vue.component('vanban-manager', require('./components/VanBanManager/VanBanManager.vue'));

const app = new Vue({
  el: '#app',
  data: {
    message: 'Chúc bạn một ngày làm việc vui vẻ và hiệu quả!'
  }
})
