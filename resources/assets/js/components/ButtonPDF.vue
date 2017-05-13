<template>
            <a @click="onDownloadGuidePDF" class="button is-info is-inverted is-medium" :class="{'is-loading': isLoading}">
              <span class="icon">
                <i class="fa fa-file-pdf-o" style="color:#ff3860"></i>
              </span>
              <small>CRIAR PDF</small>
            </a>
</template>

<script>
export default {

  name: 'ButtonPDF',

  data () {
    return {
    	isLoading: false,

    };
  },
  methods:{
  	onDownloadGuidePDF(){
  		this.isLoading = true;
  		axios.get('/guia_medico/guia_medico_impressao').then(response => {
            console.log('cheguei');
            this.isLoading = false;
        });
  	}
  }
};
</script>

<style lang="css" scoped>
</style>