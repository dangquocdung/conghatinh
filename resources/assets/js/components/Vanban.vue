<template>
    <div class="form-group">
        <label>Chọn tệp văn bản</label>
            <select name="vanban[]" class="form-control select2"  multiple="multiple" data-placeholder="Chọn tệp văn bản" style="width: 100%;" ondragover="allowDrop(event)" ondrop="drop(event)">
                <option v-for="file in files">{{ file.filename + '.' +  file.extension }}</option>

            </select>
    </div>
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

