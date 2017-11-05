import Vue from 'vue'

import VanBanViewer from './components/DataViewer.vue'
import DoanhNghiepHoi from './components/DoanhNghiepHoi.vue'
import HoTroPhapLy from './components/HoTroPhapLy.vue'


var app = new Vue({
    el: '#app',
    components: {
        VanBanViewer,
        DoanhNghiepHoi,
        HoTroPhapLy
    }
})