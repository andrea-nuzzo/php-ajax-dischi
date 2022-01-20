const app = new Vue({
    el: "#app",

    props:{

    },

    data:{
        discs:[],
        genre: ,
    },

    created() {
        axios.get("http://localhost:8888/php-ajax-dischi/backend/index.php", {
            params: {
                genre: this.genre
            }
        })
        .then((result) => {
            this.discs = result.data;
        })
    }
});