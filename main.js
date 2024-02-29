const {
    createApp
} = Vue

createApp({
    data(){
        return {
            apiUrl:"server.php",
            dischi: [],
            selectedDisc: {},
            isShown: false,
        }
    },
    mounted(){
        this.getData();
    },
    methods:{
        
        getData(){
            axios.get(this.apiUrl)
            .then((res)=>{
                this.dischi = res.data
            })
        },
        
        getDisc(index){
            const params = {
                // http call parameter
                discIndex: index
            }
            
            axios.post(
                this.apiUrl, 
                params, 
                {   
                    headers:{
                        'Content-Type': 'multipart/form-data'
                    }
                }).then((res)=>{
                    console.log(res.data)
                    this.selectedDisc = res.data
                    this.isShown = true
                })
            
        }
    }
}).mount("#app")