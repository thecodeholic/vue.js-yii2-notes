<template>
  <div id="auth-layout">
    <router-view/>
  </div>
</template>

<script>
  export default {
    name: "AuthLayout"
  }
</script>

<style lang="scss">
  #auth-layout {
    padding: 50px;

    .form-wrapper {
      background-color: white;
      padding: 20px;
      width: 300px;
      margin: 0 auto;
      border-radius: 4px;
      box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);

      h3 {
        text-align: center;
        margin-bottom: 30px;
      }
    }

    form {

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

      .errors {
        margin-bottom: 15px;
        padding: 10px 15px;
        color: #fff;
        background-color: #ff6969;
        font-size: 12px;

        p {
          margin: 0;
        }
      }

      .link {
        font-size: 80%;
        float: right;
      }
    }
  }
</style>
