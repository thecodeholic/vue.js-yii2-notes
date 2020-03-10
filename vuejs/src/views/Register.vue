<template>
  <div class="register">
    <h3>Register and create notes</h3>
    <div v-if="errors" class="errors">
      <p v-for="(error, field) in errors" :key="field">
        {{error[0]}}
      </p>
    </div>
    <form @submit.prevent="register" action="">
      <input type="text" v-model="form.username" placeholder="Your username"><br>
      <input type="password" v-model="form.password" placeholder="Your password"><br>
      <input type="password" v-model="form.password_repeat" placeholder="Repeat password"><br>
      <button>Login</button>
      <router-link to="/login" style="float: right">Login</router-link>
    </form>
  </div>
</template>

<script>
  import authService from "../auth.service";

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
  .register {
    background-color: white;
    padding: 20px;
    width: 300px;
    margin: 0 auto;
    border-radius: 4px;
    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
  }

  h3 {
    text-align: center;
    margin-bottom: 30px;
  }

  input {
    display: block;
    width: 100%;
    border: 2px solid #e6e6e6;
    padding: 6px 12px;
    transition: all 0.3s;

    &:focus {
      outline: 0;
      border-color: #4fb2c1;
    }
  }

  button {
    outline: 0;
    cursor: pointer;
    border: 1px solid darken(#4fb2c1, 5%);
    background-color: #4fb2c1;
    color: white;
    padding: 6px 12px;
    transition: all 0.3s;

    &:hover {
      background-color: darken(#4fb2c1, 10%);
    }
  }

  .errors{
    margin-bottom: 15px;
    padding: 10px 15px;
    color: #fff;
    background-color: #ff6969;
    font-size: 12px;
    p{
      margin: 0;
    }
  }
</style>
