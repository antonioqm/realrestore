<!-- Vue component -->
<template>
<div>
  <label class="label">Especialidades</label>
  <multiselect @input="getSpecialties" selected-label="selecionado" select-label="" deselect-label="" v-model="value" :options="specialties" :multiple="true" :close-on-select="false" :clear-on-select="false" :hide-selected="true" placeholder="escolha" label="name" track-by="name" :disabled="isDisabled">
  	<span slot="noResult">Ops! Não há resultados para a busca.</span>
  </multiselect>

</div>
</template>

<script>
import Multiselect from 'vue-multiselect'

export default {
  components: {
    Multiselect
  },
  props:['specialties'],
  name:'SelectSpecialty',
  data () {
    return {
    isDisabled: false,
      value: null,
      bar: 'sou a mensagem',
      options: [
        { name: 'Vue.js', code: 'vu' },
        { name: 'Javascript', code: 'js' },
        { name: 'Monterail', code: 'pl' },
        { name: 'Open Source', code: 'os' }
      ]
    }
  },
  methods: {
      getSpecialties(){
        return this.storeProf.specialties = this.value.map(function (elemento) {
                                              return elemento.id;
                                            });
      }
    },
}
</script>

<!-- New step!
     Add Multiselect CSS. Can be added as a static asset or inside a component. -->
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
<style type="text/css">
	.multiselect__tag, .multiselect__option--highlight{
		background-color: #3273dc !important;
	}
	.multiselect__tag-icon:after{
		color: #4FC3F7 !important;
	}
	 .multiselect__tag-icon:focus, .multiselect__tag-icon:hover, .multiselect__option--highlight:after{
		background-color: #114ba9 !important;
	}
	.multiselect__input{
		font-size: 16px !important;
	}
	.multiselect{
		/*z-index: 18000 !important;*/
	}
	.multiselect__select:before{
	border: 1px solid #00d1b2 !important;
    border-right: 0 !important;
    border-top: 0 !important;
    content: " " !important;
    display: block !important;
    height: 0.5em !important;
    pointer-events: none !important;
    position: absolute !important;
    -webkit-transform: rotate(-45deg) !important;
    transform: rotate(-45deg) !important;
    width: 0.5em !important;
    margin-top: -0.375em !important;
    right: 1.125em !important;
    top: 50% !important;
    /*z-index: 4 !important;*/
	}
</style>