<template>
<div class="tabs is-centered">
  <ul>
    <li class="is-active">
      <a>
        <span class="icon icon-small"><i class="fa fa-user-md"></i></span>
        <span>Profissional</span>
      </a>
    </li>
    <li>
      <a>
        <span class="icon icon-small"><i class="fa fa-medkit"></i></span>
        <span>Especialidade</span>
      </a>
    </li>
    <li>
      <a>
        <span class="icon icon-small"><i class="fa fa-map"></i></span>
        <span>Endereço</span>
      </a>
    </li>
    <li>
      <a>
        <span class="icon icon-small"><i class="fa fa-phone"></i></span>
        <span>Contato</span>
      </a>
    </li>
  </ul>
</div>
</template>

<script>
export default {

  name: 'ProfessionalTab',

  data () {
    return {

    };
  }
};
</script>

<style lang="css" scoped>
.tabs{
  margin-bottom: 0px !important;
}
</style>