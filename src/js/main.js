import Vue from 'vue';
import axios from 'axios';

// console.log(axios);

const app = new Vue ({
    el: '#app',
    data: {
        cds: []
    }, // <<<< End Data

    created(){
        // Declare dynamic url for servercall
        const dataUrl = window.location.href + 'scripts/json-script.php'
        // Axios Call
        axios.get(dataUrl)
        .then(response => {
            this.cds = response.data;
        })
        .catch (error => {
            console.log(error)
        });
    },  // <<<< End Created
});