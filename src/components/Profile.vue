<template>
<div id="app">
    <a href="/profile" class="btn btn-primary" >Profile</a>
    <a href="/respositories" class="btn btn-primary" >Respositories</a>
    <a href="/createrepo" class="btn btn-primary" >Create Repo</a>
   
    
    <div id="profile">
  <h2>My Profile</h2>
  <ul v-for="profile in profiles">
  <li>
   <span class="name">{{profile.name}}</span>
</li>
<li>
   <span class="name">{{profile.Age}}</span>
</li>
<li>
   <span class="name">{{profile.Email}}</span>
</li>
<li>
   <span class="name">{{profile.Respositories}}</span>
</li>
<li>
   <span class="name">{{profile.City}}</span>
</li>
<li>
   <span class="name">{{profile.Gender}}</span>
</li>
<li>
   <span class="name">{{profile.Marital}}</span>
</li>
  </ul>
    <router-view/>
  </div>
  </div>
</template>

<script>
import { mapState } from 'vuex';
export default{
 mounted () {
    this.$store.dispatch('loadProfiles')
  },
    computed: mapState([
    'profiles'
  ])
}
</script>

<style scoped>
#profile{
    background: #D1E4FF;
    box-shadow: 1px 2px 3px rgba(0,0,0,0.2);
    margin-bottom: 30px;
    padding: 10px 20px;
}
#profile ul{
    padding: 0;
    list-style-type: none;
}
#profile li{
    margin-right: 10px;
    margin-top: 10px;
    padding: 20px;
    background: rgba(255,255,255,0.7);
}
.price{
    font-weight: bold;
    color: #860CE8;
    display: block;
}
</style>
