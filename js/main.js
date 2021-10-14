Vue.config.devtools = true;
const app = new Vue({
    el: '#root',
    data: {
        album: [],
    },
    created() {
        axios
            .get('http://localhost/php-ajax-dischi/api/server.php')
            .then( (db) => {
                this.album = db.data;
                console.log(this.album);
            }) 
    } 
})