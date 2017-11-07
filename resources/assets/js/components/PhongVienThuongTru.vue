<template>
    <div class="dv">
        <div class="dv-header">
            <div class="dv-header-title">
                {{title}}
            </div>
        </div>
        <div class="dv-body ">
            <table class="dv-table">
                <thead>
                <tr>
                    <th>
                        <span>TT</span>
                    </th>
                    <th>
                        <span>Đơn vị</span>
                    </th>

                    <th>
                        <span>Họ và Tên</span>
                    </th>

                    <th>
                        <span>Số TNB</span>
                    </th>
                    <th>
                        <span>Điện thoại</span>
                    </th>
                    <th>
                        <span>Email</span>
                    </th>
                </tr>
                </thead>

                <tbody>
                    <tr v-for="row in model">
                        <td>{{ row.id }}</td>
                        <td>{{ row.cqbc }}</td>
                        <td>{{ row.pvtt }}</td>
                        <td>{{ row.sothe }}</td>
                        <td>{{ row.dienthoai }}</td>
                        <td>{{ row.email }}</td>
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