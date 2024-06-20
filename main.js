const { createApp } = Vue;

createApp({
    data(){
        return{
            server_url:'http://localhost/php-dischi-json/server.php',
            discs:[],
        }
    },
    methods:{
        getDisc(){
            axios.get(this.server_url).then((response)=>{
                this.discs = response.data;
            })
        }
    },
    created(){
        this.getDisc();
    }
}).mount('#app');
