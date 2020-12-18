import Vue from 'vue';
import axios from 'axios';

// console.log(axios);

const app = new Vue ({
    el: '#app',
    data: {
        cds: [],
        genres: [],
        selectedGen: 'All',
        dataUrl: window.location.href 
    }, // <<<< End Data

    created(){
        // Axios Call
        axios.get(this.dataUrl + 'scripts/json-script.php',)
        .then(response => {
            // console.log(response.data);
            this.cds = response.data;
        })
        .catch (error => {
            console.log(error)
        });
    }, // <<<< End Created

    methods:{
        // Lista generi
        listGenre(genres){
            this.cds.forEach(cd =>{
                if(! genres.includes(cd.genre)){
               return genres.push(cd.genre);}
            })
           return genres; 
        },
        // Filtra generi
        filterGenre(){
            axios.get(this.dataUrl + 'scripts/filter-script.php?genre='+ this.selectedGen,)
                .then(response =>{
                    this.cds = (response.data);
                })
                .catch(error => {
                    console.log(error);
                })
        }  
    },

});
