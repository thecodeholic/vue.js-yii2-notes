<template>
    <div class="login">
        <h3>Login to create notes</h3>
        <pre>{{errors}}</pre>
        <form @submit.prevent="login" action="">
            <input type="text" v-model="form.username" placeholder="Your username"><br>
            <input type="password" v-model="form.password" placeholder="Your password"><br>
            <button>Login</button>
        </form>
    </div>
</template>

<script>
  import authService from "../auth.service";

  export default {
    name: "Login",
    data() {
      return {
        form: {},
        errors: {}
      }
    },
    methods: {
      async login() {
        console.log(this.form);

        const {success, errors} = await authService.login(this.form);
        if (success) {
          this.$router.push({name: 'Home'});
        } else {
          this.errors = errors;
        }
      }
    }
  }
</script>

<style scoped>

</style>
