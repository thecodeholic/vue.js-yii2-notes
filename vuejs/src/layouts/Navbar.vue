<template>
  <div class="navbar">
    Welcome {{user.username}}
    <a href="javascript:void(0)" @click="logout">Logout</a>
  </div>
</template>

<script>
  import authService from "../auth.service";

  export default {
    name: "Navbar",
    props: {
      user: Object
    },
    methods: {

      logout() {
        authService.logout();
      }
    }
  }
</script>

<style lang="scss" scoped>
  .navbar {
    height: 50px;
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    line-height: 50px;
    background-color: #1f5d6b;
    color: #FFF;
    padding: 0 15px;
    text-align: right;
    transition: font-weight 0.3s;
    a{
      color: #FFF;
    }
  }
</style>
