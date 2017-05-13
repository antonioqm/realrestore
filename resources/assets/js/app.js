/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('example', require('./components/Example.vue'));
Vue.component('task', require('./components/Task.vue'));
Vue.component('professional-card', require('./components/ProfessionalCard.vue'));
Vue.component('professional-tab', require('./components/ProfessionalTab.vue'));
Vue.component('professional-modal', require('./components/ProfessionalModal.vue'));
Vue.component('select-specialty', require('./components/SelectSpecialty.vue'));
Vue.component('select-city', require('./components/SelectCity.vue'));
Vue.component('select-state', require('./components/SelectState.vue'));
Vue.component('phone', require('./components/Phone.vue'));
Vue.component('delete-professional', require('./components/DeleteProfessional.vue'));
Vue.component('button-pdf', require('./components/ButtonPDF.vue'));

// DATA TABLES

import Multiselect from 'vue-multiselect'
// FIM DATA TABLE

// import Vue from 'vue'
import Vuelidate from 'vuelidate'
import { required, minLength, maxLength } from 'vuelidate/lib/validators'
Vue.use(Vuelidate)


Vue.prototype.storeProf = {};



const app = new Vue({

    el: '#app',
    components: {
        Multiselect
    },
    data: {
    	professionals:[],
    	isDisabled: '',
        professional:{
                        pt: 'DRA',
                        name: 'Lorem ipsum dolor sit amet, consectetur a', 
                        register: ' consectetur a',
                        type: 'PF',
                        doctor: 'S',
                        sex: 'M',
                        key_words: null,
                        metts: null,
                      },
        address:{
            clinic: 'Lorem ipsum dolor sit amet, consectetur a',
            thoroughfare: 'RUa',
            address: 'Valdomiro LOpes, 1429',
            district: 'conquista',
            complement: 'legal muito lega',
            city_id: '16',
        },
        phones:[],
        store:[],
        modalBtnSubmitAction: null,
        showModalDeleteProfessional: false,
        showModalCreateProfessional: false,
        showModalDeleteProfessionalName: null,
        deleteProfessionalID: null,
        buttonLoadingPDF: [],
        createErros: {},
        createSuccess: {},
        titleModal: '',

    // Data EESTADOS COMPONENTE
    getState:{
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
        ],
    },
    // DATA Cidades
    getCity:{
        value: null,
        options: [{name: 'Antonio', id: 1}],
        isLoading: false,
        isDisabled: true,
    },
    // DATA Especialidades
    getSpecialty:{
        isDisabled: true,
        value: null,
        options: [
            { name: 'Vue.js', code: 'vu' },
            { name: 'Javascript', code: 'js' },
            { name: 'Monterail', code: 'pl' },
            { name: 'Open Source', code: 'os' }
        ]


    },


    },
    validations:{
        // address:{
        //     required,
        //     minLength: minLength(1),
        //     thoroughfare: {required, minLength: minLength(2)},
        //     address: {required, minLength: minLength(6)},
        //     district: {required, minLength: minLength(3)},
        // },
        professional:{
            minLength: minLength(1),
            pt: {required,},
            name: {required, minLength: minLength(3)}, 
            // type: {required,},            
            // doctor: {required},
            // sex: {required},
            
          },

        phones: [],
    },
    methods:{
        
        cleanRadio(){
            this.professional.sex = null;
            this.professional.doctor = null;
        },
        // Início Selects Métodos Para lista cidades
        listCities (option) {
        // this.getState.isLoading = true;

        console.log('cheguei aqui nas cidades');
                this.getCity.isLoading = true;
                this.getSpecialty.isDisabled = true;
            axios.get('/admin/city/'+option.id).then(response => {
                console.log(response);
                this.getCity.options = response.data; 
                this.getCity.isLoading = false;
                this.getCity.isDisabled = false;
                this.getCity.value = response.data[0]; 
                // this.getState.getCities = response.data;
                // this.getState.isLoading = false;
                // store = this.value;
                // this.store = ""
                // console.log(store[0]);
            });
           
        },

        listSpecialties(option){
            this.getSpecialty.value = null;
            console.log('Me chamou? Esou a espcialdiade!');
            this.getSpecialty.isLoading = true;
            axios.get('/admin/specialty/'+option.id).then(response => {
              this.getSpecialty.options = response.data;
              this.getSpecialty.isLoading = false;
              this.getSpecialty.isDisabled = false;
            });
        },
        getSpecialties(){
            console.log('Aqui eu');
        },
        // FIM selects
        onEditProfessional(professionalId, professionalName){
            // modalBtnSubmitAction Define se estou editandando ou Criando 
            // No caso quando o valor de modalBtnSubmitAction for TRUE, estou editando e FALSE, Criando
            this.titleModal = 'Editando Profissional';
            this.modalBtnSubmitAction = true;
            axios.get('/admin/professionals/'+professionalId+'/edit').then(response => {
               console.log(response.data);
               this.address = response.data.addresses[0];
               this.getState.value = response.data.addresses[0].city.state;
               this.getCity.value = response.data.addresses[0].city;
               this.getSpecialty.value = response.data.specialties;
               this.phones = response.data.phones;
               this.professional = response.data;
               // this.address = this.professionalGetEdit[0];
                this.showModalCreateProfessional = true;


            }).catch(function (error) {console.log(error);});

               // this.address = this.professionalGetEdit.addresses;

                // .then(response =>  this.professional = response.data)

                // Ativa o Modal
                // Preenche os campos do Modal
                // this.address = this.professionalGetEdit.addresses;
                // console.log(this.professionalGetEdit);

        },
        onDeleteProfessional(professionalId, professionalName){
            this.showModalDeleteProfessional = true;
            this.showModalDeleteProfessionalName = professionalName;
            this.deleteProfessionalID = professionalId;
            console.log(professionalId+ ' ' +this.showModalDeleteProfessionalName);
            // Detetando o profissional;
            // this.deleteProfessional(professionalId);
        },
        deleteProfessional(id){
            console.log('deletado '+id);
            axios.delete('/admin/professionals/'+id)
            .then(function (response) {
                console.log(response);
                
              })
              .catch(function (error) {
                console.log(error);
              });
              // atualiza a página
              location.reload();
        },
        modalProfessionalOpen(){
            // modalBtnSubmitAction Define se estou editandando ou Criando 
            this.titleModal = 'Novo Profissional';
            this.modalBtnSubmitAction = false;
            console.log('modal aberto')
            this.showModalCreateProfessional = true;
            // this.professional = null;
            // Limpa os campos dos dados pessoais do profissional
            this.cleanFieldsProfesisonal();
            // Limpa os campos de endereço
            this.cleanFieldsAddress(); 
            // Limpa os campos de Telefones
            this.cleanFieldsPhones();
            this.cleanFieldsSelects();
        },
    	onSubmit(){
            this.storeProf.professional = this.professional;
            this.storeProf.address = this.address;
            // adicionar o valor da cidade no objeto endereço
            this.storeProf.address.city_id =  this.getCity.value.id;
            // Pega as especialidades do campo de multiselect
            this.storeProf.specialties = this.getSpecialty.value.map(function (elemento) {return elemento.id;});
            this.phones = this.storeProf.phones;

            //teste de atualização de credenciado 
            if (this.modalBtnSubmitAction == true) {
                // Aqui é feita a atualização do Credenciado
            console.log(this.storeProf.professional.id);
            axios.put('/admin/professionals/'+this.storeProf.professional.id, this.storeProf)
                    .then(response =>  alert('Credenciado EDITADO com sucesso!'))
                    .catch(erro => alert('Ops! Algo deu errado'));
                    // .then(response => console.log('deu certo! mandei os dados ao put controller'))
                    // .catch(erro =>  console.log('Deu erro ao gravar dados'));
                    // console.log(this.modalBtnSubmitAction);
            }else if(this.modalBtnSubmitAction == false){
            // Aqui é feita o POST de gravação
                axios.post('/admin/professionals', this.storeProf)
                    .then(response =>  alert('Credenciado cadastrado com sucesso!'))
                    .catch(erro => alert('Ops! Algo deu errado'));
                    // console.log(this.modalBtnSubmitAction);

            }
            location.reload();
        },
        cleanFieldsProfesisonal(){
            return this.professional = {
                        pt: 'dra',
                        name: null, 
                        register: null,
                        type: null,
                        doctor: null,
                        sex: null,
                        key_words: null,
                        metts: null,
                      };
        },
        cleanFieldsAddress(){
            this.address={
            clinic: null,
            thoroughfare: null,
            address: null,
            district: null,
            complement: null,
            city_id: null,
        }
        },
        cleanFieldsPhones(){
            this.phones = null;
        },
        cleanFieldsSelects(){
            // this.getCity.value = null;
            // this.getState.vale = null;
            // this.getSpecialty.value = null;
        }
      
    },

    mounted(){
        this.buttonLoadingPDF = this.$children;
        // Exemplo de como capturar o as proprietades de um elemento filho
        // console.log(this.buttonLoadingPDF[0].isLoading);
    },

    created () {
        this.getState.isLoading = true;
        axios.get('/admin/state').then(response => {
          this.getState.options = response.data;
        this.getState.isLoading = false;
        });
    },
 //    created() {
	// 	axios.get('/admin/professionals').then(response => {
	// 	  this.professionals = response.data.data;
	// 	  console.log(this.professionals);

	// 	});
	// }



});
