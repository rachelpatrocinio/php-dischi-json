const { createApp } = Vue

createApp({
  data() {
    return {
      disks: [],
      currentDisk: 0
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

        const overlay = document.querySelector('.overlay');
        overlay.classList.remove('d-none');
        overlay.classList.add('d-block');
    }
  },
  created(){
    this.fetchDisks();
  }
}).mount('#app')