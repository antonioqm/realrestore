<template >

	<div class="column is-two-thirds is-offset-2">
		<div class="card">
<!-- 			<header class="card-header">
			  <p class="card-header-title name">
			    <slot name="professional">
			    	
			    </slot>
			  </p>
			  <a class="card-header-icon">
			    <span class="icon">
			      <i class="fa fa-angle-down"></i>
			    </span>
			  </a>
			</header> -->
			<!-- Início NOVO CARD -->
			<div class="card">
  <div class="card-image">
<!--     <figure class="image is-4by3">
      <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Image">
    </figure> -->
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
          <!-- <img src="http://bulma.io/images/placeholders/96x96.png" alt="Image"> -->
          <div>
          	<slot name="sex"></slot>
          </div>
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4 name" >
        	<slot name="pt"></slot>
        	<slot name="professional">
        	AntonioQM  	
			 </slot>
        </p>
        <p class="subtitle is-6 register">
        <slot  name="register">
        	CRM - 123/AC
        </slot>
        </p>
      </div>
    </div>

    <div class="content">
        <slot name="key_words">
		palavras-chave
		</slot><br>
		<slot name="specialties"></slot>
		<hr>
      <small>11:09 PM - 1 Jan 2016</small>
      <p>
      	<slot name="address">
      		
      	</slot>	
      </p>
    </div>
  </div>
</div>
			<!-- FIM NOVO CARD -->
			<!-- Tab -->
			<!-- <professional-tab></professional-tab> -->
			<!-- Tab -->

			<footer class="card-footer">
			 <!-- <a class="card-footer-item">Save</a> -->
			  <a class="card-footer-item" @click="showModal = true">Edit</a>
			  <a class="card-footer-item">Delete</a>
			</footer>
		</div>
</div>
</template>

<script>
export default {

  name: 'ProfessionalCard',

  props:['showModal'],

  data () {
    return {
    };
  }
};
</script>

<style lang="css" scoped>
	.register, .name, .metts, .key_words{
		text-transform: uppercase;
	}
	.card{
		box-shadow: none !important;
	}
	.card-footer{

	}
</style>