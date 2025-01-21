const app = new Vue({

    el: '#app',
    data:{
        group_name: '',
        eklenenler: [

        ]
    },
    methods:{
        ekle(){

            const formData = new FormData();

            formData.append('groupname', this.group_name);

            axios.post('server.php?islem=addgroup', formData)
                .then(response => {
                    this.eklenenler.push({id: response.data.data.id, name: response.data.data.name});
                })
                .catch(error => console.log(error));
        }
    }

})