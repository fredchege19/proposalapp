<template>
  <div id="app">
    <a href="/profile" class="btn btn-primary" >Profile</a>
    <a href="/respositories" class="btn btn-primary" >Respositories</a>
    <a href="/createrepo" class="btn btn-primary" >Create Repo</a>
  
    <div id="respositories">
  <h2>My Respositories</h2>
  <ul >
  <li v-for="respository in repositories">
   <span class="name">{{respository.name}}</span>
   <span class="date">{{respository.date}}</span>
   <span class="commit">{{respository.commit}}</span>
</li>
<br>
<a href="/profile" class="btn btn-primary" >Create new Repository</a>
  </ul>
    <router-view/>
  </div>
  </div>
</template>

<script>
import { mapState } from 'vuex';
export default{
 mounted () {
    this.$store.dispatch('loadRepositories')
  },
    computed: mapState([
    'repositories'
  ])
}
</script>

<style scoped>
#respositories{
    background: #D1E4FF;
    box-shadow: 1px 2px 3px rgba(0,0,0,0.2);
    margin-bottom: 30px;
    padding: 10px 20px;
}
#respositories ul{
    padding: 0;
    list-style-type: none;
}
#respositories li{
    margin-right: 10px;
    margin-top: 10px;
    padding: 20px;
    background: rgba(255,255,255,0.7);
}
.commit{
    font-weight: bold;
    color: #860CE8;
    display: block;
}
.date{
    margin-left:5px;
}
</style>
