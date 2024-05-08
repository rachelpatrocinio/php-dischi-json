const { createApp } = Vue

createApp({
  data() {
    return {
      disks: [],
      currentDisk: 0,
      isOpen: false
    }
  },
  methods:{
    fetchDisks(){
        axios
        .get('./server.php')
        .then((response)=>{
            console.log(response);
            this.disks = response.data
            console.log(this.disks);
        })
    },
    openCard(i){
        console.log(i);
        this.currentDisk = i
         if(this.isOpen === false){
            this.isOpen = true;
         } else{
            this.isOpen = false
         }
    }
  },
  created(){
    this.fetchDisks();
  }
}).mount('#app')