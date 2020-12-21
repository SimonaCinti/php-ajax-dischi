import Vue from 'vue';
import axios from 'axios';

// console.log(axios);

const app = new Vue ({
    el: '#app',
    data: {
        cds: [],
        genres: [],
        selectedGen: 'all',
        dataUrl: window.location.href 
    }, // <<<< End Data

    created(){
        // Axios Call
        axios.get(this.dataUrl + 'scripts/json-script.php',)
        .then(response => {
            // console.log(response.data);
            this.cds = response.data.albums;
            this.genres = response.data.genres
        })
        .catch (error => {
            console.log(error)
        });
    }, // <<<< End Created

    methods:{
        // Filtra generi
        filterGenre(){
            axios.get(this.dataUrl + 'scripts/json-script.php',{
                params: {
                    genre: this.selectedGen,
                } 
            })
                .then(response =>{
                    this.cds = response.data.albums;
                    // this.genres = response.data.genres;
                })
                .catch(error => {
                    console.log(error);
                })
        }  
    },

});
