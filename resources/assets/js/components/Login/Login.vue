<template>
    <v-container>
         <v-form @submit.prevent="login">

            <v-text-field
            v-model="form.email"
            label="E-mail"
            type="email"
            required
            ></v-text-field>

            <v-text-field
            v-model="form.password"
            label="Password"
            type="password"
            required
            ></v-text-field>

            <v-btn 
            color="green"
            type="submit"
            >
                Login
            </v-btn>
        </v-form>
    </v-container>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      form: {
        email: null,
        password: null
      }
    };
  },
  methods: {
    login() {
      let path = "http://localhost:8888/Forum-App/public/";
      path += "api/auth/login";
      axios
        .post(path, this.form)
        .then(res => console.log(res.data))
        .catch(error => console.log(error.response.data));
    }
  }
};
</script>

<style>
</style>
