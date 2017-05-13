 <template>
<div class="control">

<div style="padding-bottom: 5%;"  v-for="(person, index) in people">
    <!-- Telefone DDD -->
<label class="label">Telefone {{index+1}}</label>
  <!-- FIX or CELL -->
                <div class="field">
                <div class="control">
                  <label class="radio">
                    <input  v-model="people[index].type" value="fix" type="radio" :name="'type'+index">
                    Fixo
                  </label>
                  <label class="radio">
                    <input  v-model="people[index].type" value="cell" type="radio" :name="'type'+index">
                    Celular
                  </label>
                </div>
              </div>
  <!-- FIM FIX or CELL -->
  <div class="field has-addons has-addons-centered" >
  <p class="control" style="min-width: 60px; width: 70px;">
  <!-- DDD -->
    <input 
      class="input"
      @input="getNumbers(people, index)"
      @blur="$v.people.$each[index].ddd.$touch()"
      :class="[{'is-danger' : $v.people.$each[index].ddd.$error}, {'is-success' : !$v.people.$each[index].ddd.$invalid}]"
      type="text"
      placeholder="99"
      v-model.trim="person.ddd">
  
  </p>
  <!-- number -->
  <p class="control is-expanded">
    <input 
      class="input"
      @input="getNumbers(people, index)"
      @blur="$v.people.$each[index].number.$touch()"
      :class="[{'is-danger' : $v.people.$each[index].number.$error}, {'is-success' : !$v.people.$each[index].number.$invalid}]"
      type="text"
      placeholder="99999-9999"
      v-model.trim="person.number">
  
  </p>
  <p class="control">
    <a class="button" @click="onClick(people, index)">
    <span>Excluir</span>
    <span class="icon is-small">
      <i class="fa fa-times"></i>
    </span>
  </a>
  </p>
</div>
    
    <p v-if="!$v.people.$each[index].type.required" class="help is-danger">'Celular' ou 'Fixo' é obrigatório</p>
    <!-- LEgenda DDD -->
    <p v-if="!$v.people.$each[index].ddd.required" class="help is-danger">O código de área é obrigatório</p>
    <p class="help is-danger" v-if="!$v.people.$each[index].ddd.minLength">O código de área deve ter pelo menos {{ $v.people.$each[index].ddd.$params.minLength.min }} caracteres.</p>
    <p class="help is-danger" v-if="!$v.people.$each[index].ddd.maxLength ">O código de área não pode ter mais {{ $v.people.$each[index].ddd.$params.maxLength.max }} caracteres.</p>
    <!-- LEgenda NUmero -->
    <p v-if="!$v.people.$each[index].number.required" class="help is-danger">O Telefone é obrigatório</p>
    <p class="help is-danger" v-if="!$v.people.$each[index].number.minLength ">O Telefone deve ter pelo menos {{ $v.people.$each[index].number.$params.minLength.min }} caracteres.</p>
    <p class="help is-danger" v-if="!$v.people.$each[index].number.maxLength ">O Telefone não pode ter mais {{ $v.people.$each[index].number.$params.maxLength.max }} caracteres.</p>
    <!-- && $v.people.$each[index].number.$dirty -->

  </div>

<div class="field-body">
    <div class="field">
      <div class="control">
      <div class="block">
        <a class="button is-light is-fullwidth" @click="people.push({number: null, type:null, ddd: null})">
        <span>Adicionar Novo Telefone</span>
        <span class="icon is-small">
          <i class="fa fa-phone"></i>
        </span>
        </a>
      </div>
    </div>
  </div>
</div>
</div>


</template>

<script>
import { required, minLength, maxLength } from 'vuelidate/lib/validators'

export default {
  name: 'Phone',
  props:['phones'],
  data () {
    return {
      people: [{
        number: null,
        type: null,
        ddd: null,
      },],
      mask: '9999-9999',
    }
  },
  validations: {
    people: {
      required,
      minLength: minLength(1),
      $each: {
        number: {
          required,
          minLength: minLength(9),
          maxLength: maxLength(10),
        },
        type:{
          required,
        },
        ddd:{
          required,
          minLength: minLength(2),
          maxLength: maxLength(2),
        }
      }
    }
  },
  beforeMount(){
    if (this.phones) {
      this.people = this.phones;
    }
    this.getNumbers();
   
  },
  methods:{
      onClick(people, index){
        // deleta um {objeto} (número) de telefone
      if (people[index]['id']) {
        axios.delete('/admin/phone/'+ people[index]['id']).then(response => {
               console.log(response.data);
            }).catch(function (error) {console.log(error);});
      }

        people.splice(index, 1); 
    
      },
    getNumbers(people, index){
      this.storeProf.phones = this.people;

      // console.log(this.storeProf.phones)   
    },
  }
}
</script>

<style lang="css" scoped>
  .box{
    /*background-color: #E0F7FA;*/
  }
  .block{
    padding-top: 12px;
  }
.label:not(:last-child) {
    margin-top: 0.10em;
}
</style>