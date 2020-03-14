<template>
  <div class="form-wrapper">
    <h3>Register and create notes</h3>
    <form @submit.prevent="register" action="">
      <div v-if="errors" class="errors">
        <p v-for="(error, field) in errors" :key="field">
          {{error[0]}}
        </p>
      </div>
      <input type="text" v-model="form.username" placeholder="Your username"><br>
      <input type="password" v-model="form.password" placeholder="Your password"><br>
      <input type="password" v-model="form.password_repeat" placeholder="Repeat password"><br>
      <button>Register</button>
      <router-link to="/login" class="link">Click here to login</router-link>
    </form>
  </div>
</template>

<script>
  import authService from "../services/auth.service";

  export default {
    name: "Register",
    data() {
      return {
        form: {
          username: '',
          password: '',
          password_repeat: ''
        },
        errors: null
      }
    },
    methods: {
      async register() {
        console.log(this.form);

        const {success, errors} = await authService.register(this.form);
        if (success) {
          this.$router.push({name: 'Home'});
        } else {
          this.errors = errors;
        }
      }
    }
  }
</script>

<style lang="scss" scoped>
</style>
