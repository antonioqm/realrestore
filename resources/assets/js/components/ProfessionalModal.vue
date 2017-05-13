<template>
<div class="modal is-active">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">Profissional</p>
      <button class="delete" @click="$emit('close')"></button>
    </header>
    <section class="modal-card-body">
      Texto Provisório!
    </section>
    <footer class="modal-card-foot">
      <a class="button is-success">Save changes</a>
      <a class="button">Cancel</a>
    </footer>
  </div>
</div>
</template>

<script>
export default {

  name: 'ProfessionalModal',

  data () {
    return {

    };
  }
};
</script>

<style lang="css" scoped>
</style>