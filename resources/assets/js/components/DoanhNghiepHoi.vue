<template>
    <div class="dv">
        <div class="dv-header">
            <div class="dv-header-title">
                {{title}}
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
                    <tr v-for="row in model">
                        <td>{{ row.cauhoi }}</td>
                        <td>{{ row.doanhnghiep }}</td>
                        <td>{{ row.ngaytraloi }}</td>
                        <td>{{ row.coquan.name }}</td>
                    </tr>
                </tbody>
            </table>
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
                columns: {}
            }
        },
        created() {
            this.fetchIndexData()
        },
        methods: {
            fetchIndexData() {
                var vm = this

                axios.get(`${this.source}`)
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