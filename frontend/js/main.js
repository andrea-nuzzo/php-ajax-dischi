const app = new Vue({
    el: "#app",

    props:{

    },

    data:{
        discs:[],
        typegenre: "",
    },

    created() {
        axios.get("http://localhost:8888/php-ajax-dischi/backend/index.php", {
            params: {
                genre: this.typegenre
            }
        })
        .then((result) => {
            this.discs = result.data;
        })
    },

    methods:{
        recall(typegenre){
            axios.get("http://localhost:8888/php-ajax-dischi/backend/index.php", {
                params: {
                    genre: typegenre
                }
            })
            .then((result) => {
                this.discs = result.data;
            })
        }
    }

    
});