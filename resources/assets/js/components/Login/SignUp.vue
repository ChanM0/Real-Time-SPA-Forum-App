<template>
   <v-container>
         <v-form @submit.prevent="signup">

            <v-text-field
            v-model="form.name"
            label="Name"
            type="text"
            required
            ></v-text-field>
            <span class="red--text" v-if="errors.name">{{errors.name[0]}}</span>

            <v-text-field
            v-model="form.email"
            label="E-mail"
            type="email"
            required
            ></v-text-field>
            <span class="red--text" v-if="errors.email">{{errors.email[0]}}</span>

            <v-text-field
            v-model="form.password"
            label="Password"
            type="password"
            required
            ></v-text-field>
            <span class="red--text" v-if="errors.password">{{errors.password[0]}}</span>

            <v-text-field
            v-model="form.password_confirmation"
            label="Password Confirmation"
            type="password"
            required
            ></v-text-field>

            <v-btn 
            color="green"
            type="submit"
            >
                Signup
            </v-btn>

             <router-link to="/login">
                
                <v-btn 
                color="blue"
                
                >
                    login
                </v-btn>

            </router-link>

        </v-form>
    </v-container>
</template>

<script>
export default {
	data() {
		return {
			form: {
				name: null,
				email: null,
				password: null,
				password_confirmation: null
			},
			errors: {}
		};
	},
	methods: {
		signup() {
			var path = "http://localhost:8888/Forum-App/public/";
			path += "api/auth/signup";
			axios
				.post(path, this.form)
				.then(res => {
					User.responseAfterLogin(res);
					this.$router.push({ name: "forum" });
				})
				.catch(error => {
					console.log(error);
					this.errors = error.response.data.errors;
				});
			// .catch(error => console.log(error.response.data));
		}
	}
};
</script>

<style>
</style>
