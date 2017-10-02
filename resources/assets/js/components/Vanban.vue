<template>
    <select name="tags[]" class="form-control select2"  multiple="multiple" data-placeholder="Chọn tệp văn bản" style="width: 100%;" ondragover="allowDrop(event)" ondrop="drop(event)">
        <option v-for="file in files">{{ file.filename + '.' +  file.extension }}</option>

    </select>
</template>

<script>
    import {
        getFile
    } from './../config'

    export default {

        data () {
            return {


                files: [],

            }
        },

        created () {
            this.$http.get(getFile)
                .then(response => {
                    this.files = response.data.data
                })

        }
    }


</script>

