Vue.config.devtools = true;
const app = new Vue ({
    el:'#root',
    data: {
        discs: [],
        selected: "",
        genres: [],
        filteredGenre: [],
        opzioni: [
              "Tutti",
              "Rock",
              "Pop",
              "Jazz",
              "Metal"
            ],
    },
    created() {
       
        this.getGenre();
    
        // axios
        //     // .get('http://localhost:8888/php-ajax-dischi/api/server.php')
        //     .get('api/server.php')
        //     .then((response) => {
                
        //         this.discs = response.data;
        //         console.log(this.discs);
                
        //     })
    },
    methods: {
        
        getGenre() {
            axios
                .get('api/server.php?genre=' + this.selected)
                .then(res => {
                    this.filteredGenre = res.data;
                })
           console.log(this.filteredGenre);
            
        }
    },
   

})