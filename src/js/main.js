import Vue from 'vue';
import axios from 'axios';

// console.log(axios);

const app = new Vue ({
    el: '#app',
    data: {
        cds: [],
        genres: [],

        selectedGen: 'All',
        dataUrl: window.location.href + 'scripts/json-script.php',
    }, // <<<< End Data

    created(){
        // Axios Call
        axios.get(this.dataUrl)
        .then(response => {
            this.cds = response.data;
        })
        .catch (error => {
            console.log(error)
        });
    }, // <<<< End Created

    methods:{
        // Lista generi
        listgenre(genres){
            this.cds.forEach(cd =>{
                if(! genres.includes(cd.genre)){
               return genres.push(cd.genre);}
            })
        }
    },

});
