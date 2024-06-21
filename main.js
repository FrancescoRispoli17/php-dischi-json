const { createApp } = Vue;

createApp({
    data(){
        return{
            server_url:'http://localhost/php-dischi-json/server/server.php',
            discs:[],
            currentFocus:'',
            focusDisc:[],
            newName:'',
            newAuthor:'',
            newYear:'',
            newUrl:'',
            newDescription:'',
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
        },
        addDisc(){
            const data={
                action:'create',
                name:this.newName,
                author:this.newAuthor,
                year:this.newYear,
                url:this.newUrl,
                description:this.newDescription,
            }
            axios.post(this.server_url, data,{
                headers:{'Content-type':'multipart/form-data'},
            }).then(response=>{
                this.discs=response.data;
                console.log(response.data)
            })
            console.log(data)
        }
    },
    created(){
        this.getDisc();
    }
}).mount('#app');
