<template src="./FileManager.html"></template>
<script>
  import {
    getFile, fileUpload, deleteFile
  } from './../../config'

  import Dropzone from 'vue2-dropzone'

  export default {
      components: {
          Dropzone
      },

      data () {
          return {
              showUploader: false,
              csrfHeaders: null,
              files: [],
              fileUpload: fileUpload,
              currentFile: this.setCurrentFile()
          }
      },

      created () {
          this.$http.get(getFile)
              .then(response => {
                  this.files = response.data.data
              })
          this.csrfHeaders = {
              'X-CSRF-TOKEN': window.Laravel.csrfToken
          }
      },

      methods: {
          setCurrentFile () {
              return {
                  directory: '',
                  filename: '',
                  extension: '',
                  id: '',
              }
          },
          showSuccess (file, response) {
              console.log('response', response)
              var fileData = response.data
              this.files.unshift(fileData)
          },
          onError (file, error) {
              console.log('file error', file, error)
          },

          handleFileDetails(file) {
              window.eventBus.$emit('bulmaModalOpen', file)
              this.currentFile = file
          },


          deleteFile() {

              this.$http.post(deleteFile, this.currentFile)
                  .then(response => {

                      console.log('response', response)

                  }).catch(error => {
                  console.log('error', error)
              })


              location.reload();
          }
      }



  }
</script>

<style lang="scss">
  .galleryWrapper {
      ul{
          padding:0;
          margin: 0;

          li {
              list-style: none;
              float: left;
              padding: 8px;
              margin: 0;
          }

      }

  }
  .file-manager-details {
    .modal-content {
        height: 100% !important;
        padding: 0 !important;
      object{
          width: 100%;
          height: 940px;

      }
    }
  }
</style>
