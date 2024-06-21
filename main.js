const { createApp } = Vue;

createApp({
    data(){
        return{
            server_url:'http://localhost/php-dischi-json/server/server.php',
            discs:[],
            currentFocus:'',
            focusDisc:[],
        }
    },
    methods:{
        getDisc(){
            axios.get(this.server_url).then((response)=>{
                this.discs = response.data;
            })
        },
        focus(idDisc){
            axios.get(this.server_url,{
                params:{
                    id:idDisc,
                    action:'read',
                },
            }).then((response)=>{
                this.currentFocus=true;
                this.focusDisc = response.data;
            })
        }
    },
    created(){
        this.getDisc();
    }
}).mount('#app');
