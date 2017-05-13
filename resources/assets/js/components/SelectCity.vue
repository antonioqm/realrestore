<template>
<div >
     <div class="field">
      <label class="label">Cidade</label>
      <div class="control">
        <div class="is-fullwidth ">
        <!-- <select-city></select-city> -->
<!--         <select disabled name="city">
            <option>Rio Branco</option>
            <option>Sena Madureira</option>
            <option>Acrelândia</option>
          </select>  -->

         <multiselect @select="showSpecialties" :disabled="isDisabled" selected-label="selecionado" :loading="isLoading" select-label="" deselect-label="" v-model="value" track-by="name" label="name" placeholder="Selecione uma cidade" :options="cities" :searchable="false" :allow-empty="true"></multiselect>
        </div>

      </div>
    </div>
<!-- <pre><code>{{valueCity}}</code></pre> -->
<select-specialty v-if="!isLoading" :specialties="getSpecialties"></select-specialty>  
</div>
</template>

<script>



import Multiselect from 'vue-multiselect';

export default {
  name: 'SelectCity',
  components: {
    Multiselect
  },
  props: ['cities', 'valueCity', 'isLoadCity', 'editCities'],


  data () {
    return {
      value: this.valueCity,
      isLoading: false,
      isDisabled: false,
      getSpecialties: [],
      options: [{name: 'Antonio', id: 1}],
    }
  },
  methods: {
    showSpecialties (option) {
      this.getDataStore(option);
      
       // this.stateId = option.id;
       this.isLoading = true;
        axios.get('/admin/specialty/'+option.id).then(response => {
          this.getSpecialties = response.data;
          this.isLoading = false;
        });
    },
    getDataStore(option){
        this.storeProf.city = option.id;
    }
      // showCities(){
      //   console.log(this.options);
      // }
  },

};
</script>

<style lang="css" scoped>
.multiselect{
		/*z-index: 18009 !important;*/
	}
</style>