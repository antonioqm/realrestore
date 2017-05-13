<template>	
<transition name="modal">
   <div class="modal modal-mask is-active">
    <div class="modal-wrapper">
  <div class="modal-background"></div>
  <div  class="modal-content">
    <!-- Card -->
    <p  class="title is-4">
    
      Você quer mesmo exluir
    </p>
    <slot name="nameProfessional">
	    <p class="subtitle is-2">
	      {{name}}<strong>?</strong>
	    </p>
    </slot>
    <div class="field is-grouped">
  		<p class="control">
	      	<a @click="$emit('delete')"  class="button is-danger">
				<span class="icon is-small">
	      				<i class="fa fa-times"></i>
	    		</span>
	    		<span>Excluir</span>
			</a>
		</p>
			<p class="control">
				<a @click="$emit('close')" class="button is-white">
					<span class="icon is-small">
		      				<i class="fa fa-times"></i>
		    		</span>
		    		<span>Cancelar</span>
				</a>
			</p>
    </div>
  </div>
    <!-- FIm card -->
  </div>
  <button @click="$emit('close')" class="modal-close"></button>
</div>
  </transition>
</template>

<script>
export default {

  name: 'DeleteProfessional',

  data () {
    return {
    	anima: true,
    };
  },
  props:['name', 'id'],
};
</script>

<style lang="css" scoped>
.title{
  color: #fff !important;
  text-transform: uppercase;

  }
.subtitle{
  color:#fff !important;
  text-transform: uppercase !important;
}
strong{
  color: #fff !important;
}

</style>