const { createApp } = Vue

createApp({
  data() {
    return {
      disks: []
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
    }
  },
  created(){
    this.fetchDisks();
  }
}).mount('#app')