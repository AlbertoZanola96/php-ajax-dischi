const app = new Vue({
    el: 'root',
    data: {

    },
    created() {
        axios
            .get('http://localhost/php-ajax-dischi/api/server.php')
            .then( (data) => {
                console.log(data);
            })
    }
})