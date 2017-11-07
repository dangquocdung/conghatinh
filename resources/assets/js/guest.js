import Vue from 'vue'

import VanBanViewer from './components/DataViewer.vue'
import DoanhNghiepHoi from './components/DoanhNghiepHoi.vue'
import HoTroPhapLy from './components/HoTroPhapLy.vue'
import NguoiPhatNgon from './components/NguoiPhatNgon.vue'
import PhongVienThuongTru from './components/PhongVienThuongTru.vue'


var app = new Vue({
    el: '#app',
    components: {
        VanBanViewer,
        DoanhNghiepHoi,
        HoTroPhapLy,
        NguoiPhatNgon,
        PhongVienThuongTru
    }
})