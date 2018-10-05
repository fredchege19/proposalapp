<template>
  <div id="app">
   
    <router-view/>
  </div>


</template>


<script>
import axios from 'axios'
import VueAxios from 'vue-axios'
import Router from 'vue-router';


 export default{
    name: 'app',
    data(){
      return{
          
 }
  },
  methods:{
 loginGit(){
   this.$action.get('doLogin')
 }

 }
 }
</script>


<style>
#app{

align: center;
margin-left: auto;
margin-right: auto;
top:5%;
height: 200px;

width: 1000px;


}
</style>
