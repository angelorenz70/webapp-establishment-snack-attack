const { createApp } = Vue
  createApp({
    data() {
      return {
        formData : {
            name: '',
            email: '',
            cellphone: '',
            messages: ''
        },
        baseUrl : window.location.origin
      }
    },
    methods : {
        async sendMessage(event) {
            event.preventDefault(); 
            console.log(this.formData)
            axios.post(this.baseUrl + '/api/contacts', this.formData)
            .then( response => {
                console.log(response)
                this.formData.name = ''
                this.formData.email = ''
                this.formData.cellphone = ''
                this.formData.messages = ''
            });

        }
    }
  }).mount('#app')