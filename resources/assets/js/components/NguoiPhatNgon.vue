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
                        <span>TT</span>
                    </th>
                    <th>
                        <span>Cơ quan</span>
                    </th>

                    <th>
                        <span>Họ và Tên</span>
                    </th>

                    <th>
                        <span>Chức danh</span>
                    </th>
                    <th>
                        <span>ĐT cố định</span>
                    </th>
                    <th>
                        <span>ĐT di động</span>
                    </th>
                    <th>
                        <span>Địa chỉ e-mail</span>
                    </th>
                </tr>
                </thead>

                <tbody>
                    <tr v-for="row in model">
                        <td>{{ row.id }}</td>
                        <td>{{ row.coquan.name }}</td>
                        <td>{{ row.name }}</td>
                        <td>{{ row.chucdanh }}</td>
                        <td>{{ row.codinh }}</td>
                        <td>{{ row.didong }}</td>
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