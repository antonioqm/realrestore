<template>
<div>
<div class="field is-horizontal">
  <div class="field-body">
    <div class="field">
      <label class="label">Estado</label>
      <div class="control">
        <div class="is-fullwidth ">
          <multiselect @select="listCities" :loading="isLoading" selected-label="selecionado" select-label="" deselect-label="" v-model="value" track-by="name" label="name" placeholder="Selecione um Estado"  :options="options" :searchable="false" :allow-empty="true"></multiselect>
  <!--      <select-state v-model.lazy="msg"> </select-state> 
          <select name="state">
            <option>Acre</option>
            <option>Mazonas</option>
            <option>São Paulo</option>
          </select>  -->
        </div>

      </div>
    </div>
  </div>
</div>
<!-- <pre class="language-json"><code>{{ trackBy  }}</code></pre> -->
<!-- <select-city v-if="!isLoading" :isLoadCity="isLoading" :valueCity="getValue" :cities="getCities"></select-city> -->

</div>
</template>

<script>



 import Multiselect from 'vue-multiselect'

export default {
  name: 'SelectState',

  components: {
    Multiselect
  },
  props:{
    address:{
      default: function () {
        return {id: 1, name: 'hello' }
      }
    }
  },

  data () {
    return {
      isDisabled: false,
      isLoading: false,
      value: this.address,
      stateId: '',
      getCities: [],
      getValue: [],
      options: [
        { name: 'Vue.js', language: 'JavaScript' },
        { name: 'Rails', language: 'Ruby' },
        { name: 'Sinatra', language: 'Ruby' },
        { name: 'Laravel', language: 'PHP' },
        { name: 'Phoenix', language: 'Elixir' }
      ]
    }
  },
  methods: {
    listCities (option) {

      this.getDataStore(option);

       this.isLoading = true;
        axios.get('/admin/city/'+option.id).then(response => {
          this.getCities = response.data;
          this.isLoading = false;
          // store = this.value;
          // this.store = ""
          // console.log(store[0]);
        });
           
      },
      getDataStore(option){
        this.storeProf.state = option.id;
      }
      // showCities(){
      //   console.log(this.options);
      // }
  },
    created () {
		axios.get('/admin/state').then(response => {
		  this.options = response.data;
		});
	},


};
</script>

<style lang="css" scoped>
.multiselect{
		/*z-index: 19001 !important;*/
	}
</style>