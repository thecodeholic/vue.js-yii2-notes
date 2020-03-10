<template>
  <div>
    <navbar :user="user"/>
    <router-view/>
  </div>
</template>

<script>
  import authService from "../auth.service";
  import Navbar from "./Navbar";

  export default {
    name: "DefaultLayout",
    components: {Navbar},
    data(){
      return {
        user: {}
      }
    },
    async mounted() {
      this.user = await authService.getUser()
    }
  }
</script>

<style scoped>

</style>
