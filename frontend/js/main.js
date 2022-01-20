const app = new Vue({
    el: "#app",

    data:{
        discs:[]
    },

    created() {
        axios.get("http://localhost:8888/php-ajax-dischi/backend/index.php")
        .then((result) => {
            this.discs = result.data;
        })
    }
});