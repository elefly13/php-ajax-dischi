const app = new Vue ({
    el:'#root',
    data: {
        discs: [],
    },
    created() {
        axios
            .get('http://localhost:8888/php-ajax-dischi/api/server.php')
            .then((response) => {
                
                this.discs = response.data;
                console.log(this.discs);
            })
    }

})