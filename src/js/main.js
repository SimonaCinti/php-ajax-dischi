import Vue from 'vue';
import axios from 'axios';

// console.log(axios);

const app = new Vue ({
    el: '#app',
    data: {
        cds: []
    }, // <<<< End Data

    created(){
        //! Chiamata per il server
        // axios.get('http://localhost/php-ajax-dischi/scripts/json-script.php')
        //! Chiamata per il server con browserSync
        axios.get('http://localhost:3000/php-ajax-dischi/scripts/json-script.php')
        .then(response => {
            this.cds = response.data;
        })
        .catch (error => {
            console.log(error)
        });

    } // <<<< End Created
});