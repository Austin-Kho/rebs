<template>
   <div class="app flex-row align-items-center">
      <div class="container">
         <b-row class="justify-content-center">
            <b-col md="8">
               <b-card-group>
                  <b-card no-body class="p-4">
                     <b-card-body>
                        <b-form>
                           <h1>Login</h1>
                           <p class="text-muted">Sign In to your account</p>
                           <b-input-group class="mb-3">
                              <b-input-group-prepend>
                                 <b-input-group-text><i class="icon-user"></i></b-input-group-text>
                              </b-input-group-prepend>
                              <b-form-input v-model="email" type="text" class="form-control" placeholder="Email"
                                            autocomplete="email"/>
                           </b-input-group>
                           <b-input-group class="mb-4">
                              <b-input-group-prepend>
                                 <b-input-group-text><i class="icon-lock"></i></b-input-group-text>
                              </b-input-group-prepend>
                              <b-form-input v-model="password" type="password" class="form-control" placeholder="Password"
                                            autocomplete="password"/>
                           </b-input-group>
                           <b-row>
                              <b-col cols="6">
                                 <b-button @click="login" variant="primary" class="px-4">Login</b-button>
                              </b-col>
                              <b-col cols="6" class="text-right">
                                 <b-button @click="notice_ready" variant="link" class="px-0">Forgot password?</b-button>
                              </b-col>
                           </b-row>
                        </b-form>
                     </b-card-body>
                  </b-card>
                  <b-card no-body class="text-white bg-primary py-5 d-md-down-none" style="width:44%">
                     <b-card-body class="text-center">
                        <div>
                           <h2>Sign up</h2>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                              incididunt ut
                              labore et dolore magna aliqua.</p>
                           <b-button to="/pages/register" variant="primary" class="active mt-3">Register Now!
                           </b-button>
                        </div>
                     </b-card-body>
                  </b-card>
               </b-card-group>
            </b-col>
         </b-row>
      </div>
   </div>
</template>

<script>
   import axios from 'axios'

   export default {
      name: 'Login',
      data() {
         return {
            email: '',
            password: '',
         };
      },
      methods: {
         login() {
            const email = this.email;
            const password = this.password;

            if (!email || !password) {
               return false;
            }

            axios.post('https://api.rebs.app/auth/login', {email, password})
               .then(res => {
                  if (res.status === 201) {
                     document.cookie = `accessToken=${res.data.token}`;
                     axios.defaults.headers.common['x-access-token'] = res.data.token;
                     this.$router.push({name: 'Home'});
                  }
               })
               .catch(err => {
                  alert('로그인 실패');
               })
         },

         notice_ready() {
            alert('준비 중입니다!');
         },
      }
   }
</script>
