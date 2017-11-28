<template>
    <div class="dv">
        <div class="dv-header">
            <div class="dv-header-title">
                {{title}}
            </div>
            <div class="dv-header-columns">
                <span class="dv-header-pre">Lọc: </span>
                <select class="dv-header-select" v-model="query.search_column">
                    <option value="cauhoi">Câu hỏi</option>
                    <option value="doanhnghiep">Doanh nghiệp</option>
                </select>
            </div>
            <div class="dv-header-operators" style="display:none;">
                <select class="dv-header-select" v-model="query.search_operator">
                    <option v-for="(value, key) in operators" :value="key">{{value}}</option>
                </select>
            </div>
            <div class="dv-header-search">
                <input type="text" class="dv-header-input"
                       placeholder="Nội dung lọc"
                       v-model="query.search_input"
                       @keyup.enter="fetchIndexData()">
            </div>
            <div class="dv-header-submit">
                <button class="dv-header-btn"@click="fetchIndexData()">Lọc</button>
            </div>
        </div>
        <div class="dv-body">
            <table class="dv-table">
                <thead>
                <tr>
                    <th>
                        <span>Câu hỏi</span>
                    </th>
                    <th>
                        <span>Tên Doanh nghiệp</span>
                    </th>

                    <th>
                        <span>Ngày trả lời</span>
                    </th>

                    <th>
                        <span>Đơn vị trả lời</span>
                    </th>
                </tr>
                </thead>

                <tbody>
                    <tr v-for="row in model.data">
                        <td>{{ row.cauhoi }}</td>
                        <td>{{ row.doanhnghiep }}</td>
                        <td>{{ row.ngaytraloi }}</td>
                        <td>{{ row.coquan.name }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="dv-footer">
            <div class="dv-footer-item">
                <span>Đang hiện thị từ {{model.from}} đến {{model.to}} trong tổng {{model.total}} văn bản</span>
            </div>
            <div class="dv-footer-item">
                <div class="dv-footer-sub">
                    <span>Tùy chỉnh số văn bản trên mỗi trang</span>
                    <input type="text" v-model="query.per_page"
                           class="dv-footer-input"
                           @keyup.enter="fetchIndexData()">
                </div>
                <div class="dv-footer-sub">
                    <button class="dv-footer-btn" @click="prev()">&laquo;</button>
                    <input type="text" v-model="query.page"
                           class="dv-footer-input"
                           @keyup.enter="fetchIndexData()">
                    <button class="dv-footer-btn" @click="next()">&raquo;</button>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
    import Vue from 'vue'
    import axios from 'axios'
    //similar to vue-resource

    export default {
        props: ['source', 'title'],
        data() {
            return {
                model: {},
                columns: {},
                query: {
                    page: 1,
                    column: 'ngaytraloi',
                    direction: 'desc',
                    per_page: 25,
                    search_column: 'ngaytraloi',
                    search_operator: 'like',
                    search_input: ''
                },
                operators: {
                    like: 'LIKE'
                }
            }
        },
        created() {
            this.fetchIndexData()
        },
        methods: {
            next() {
                if(this.model.next_page_url) {
                    this.query.page++
                    this.fetchIndexData()
                }
            },
            prev() {
                if(this.model.prev_page_url) {
                    this.query.page--
                    this.fetchIndexData()
                }
            },
            toggleOrder(column) {
                if(column === this.query.column) {
                    // only change direction
                    if(this.query.direction === 'desc') {
                        this.query.direction = 'asc'
                    } else {
                        this.query.direction = 'desc'
                    }
                } else {
                    this.query.column = column
                    this.query.direction = 'asc'
                }

                this.fetchIndexData()
            },
            fetchIndexData() {
                var vm = this

                axios.get(`${this.source}?column=${this.query.column}&direction=${this.query.direction}&page=${this.query.page}&per_page=${this.query.per_page}&search_column=${this.query.search_column}&search_operator=${this.query.search_operator}&search_input=${this.query.search_input}`)

                        .then(function(response) {

                        Vue.set(vm.$data, 'model', response.data.model)

                        Vue.set(vm.$data, 'columns', response.data.columns)
                    })
                    .catch(function(response) {

                        console.log(response)

                    })
            }

        }
    }
</script>