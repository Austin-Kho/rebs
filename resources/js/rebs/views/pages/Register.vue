<template>
   <div class="app flex-row align-items-center">
      <div class="container">
         <b-row class="justify-content-center">
            <b-col md="6" sm="8">
               <b-card no-body class="mx-4">
                  <b-card-body class="p-4">
                     <b-form>
                        <h1>Register</h1>
                        <p class="text-muted">Create your account</p>
                        <b-input-group class="mb-3">
                           <b-input-group-prepend>
                              <b-input-group-text><i class="icon-user"></i></b-input-group-text>
                           </b-input-group-prepend>
                           <b-form-input v-model="name" type="text" class="form-control" placeholder="Username"
                                         autocomplete="name"/>
                        </b-input-group>

                        <b-input-group class="mb-3">
                           <b-input-group-prepend>
                              <b-input-group-text>@</b-input-group-text>
                           </b-input-group-prepend>
                           <b-form-input v-model="email" type="text" class="form-control" placeholder="Email"
                                         autocomplete="email"/>
                        </b-input-group>

                        <b-input-group class="mb-3">
                           <b-input-group-prepend>
                              <b-input-group-text><i class="icon-lock"></i></b-input-group-text>
                           </b-input-group-prepend>
                           <b-form-input v-model="password" type="password" class="form-control" placeholder="Password"
                                         autocomplete="password"/>
                        </b-input-group>

                        <b-input-group class="mb-4">
                           <b-input-group-prepend>
                              <b-input-group-text><i class="icon-lock"></i></b-input-group-text>
                           </b-input-group-prepend>
                           <b-form-input v-model="password_confirmation" type="password" class="form-control"
                                         placeholder="Repeat password"
                                         autocomplete="password_confirmation"/>
                        </b-input-group>

                        <b-button @click="signup" variant="success" block>Create Account</b-button>
                     </b-form>
                  </b-card-body>
                  <b-card-footer class="p-4">
                     <b-row>
                        <b-col cols="6">
                           <b-button @click="notice_ready" block class="btn btn-facebook"><span>facebook</span>
                           </b-button>
                        </b-col>
                        <b-col cols="6">
                           <b-button @click="notice_ready" block class="btn btn-twitter" type="button">
                              <span>twitter</span></b-button>
                        </b-col>
                     </b-row>
                  </b-card-footer>
               </b-card>
            </b-col>
         </b-row>
      </div>
   </div>
</template>

<script>
   import axios from 'axios'

   export default {
      name: 'Register',
      data() {
         return {
            name: '',
            email: '',
            password: '',
            password_confirmation: ''
         };
      },
      methods: {
         signup() {

            const name = this.name;
            const email = this.email;
            const password = this.password;
            const password_confirmation = this.password_confirmation;

            if (!name || !email || !password || !password_confirmation) {
               return false;
            }

            axios.post('https://api.rebs.app/auth/register', {name, email, password, password_confirmation})
               .then(res => {
                  if (res.data.status === 'success') {
                     // 성공적으로 회원가입이 되었을 경우
                     this.$router.push({name: 'Login'});
                  }
               })
               .catch(err => {
                  alert(err);
               })
         },

         notice_ready() {
            alert('준비 중입니다!');
         }
      }
   }
</script>
