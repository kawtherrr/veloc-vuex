<template >

        <div class="container">

            <label for="">Email</label>
            <input class="form-control" type="email" v-model="user.email">
            <p v-if="errors3.email" class="text-red-600  mb-2">{{ errors3.email }} </p>

            <label for="">password</label>
            <input class="form-control" type="password" v-model="user.password">
            <p v-if="errors3.password" class="text-red-600  mb-2">{{ errors3.password }} </p>

            <button class="btn btn-dark mt-2" @click="login">Login</button>

        </div>

</template>

<script>

export default {
 
data() {
    return {
        user: {
                password: '',
                email:''
                
            },
            errors3: {},
    }
},

mounted() {
 console.log(localStorage.getItem('name'))
},

methods: {
    // async saveData(){
    //    console.log(this.user.email)
    //    console.log(this.user.password)

    //    try {

    //     const response = await axiosClient.post("/checklogin", this.user)
    //     console.log(response),

    //         alert('agency logged in!')
    //         localStorage.setItem('user', JSON.stringify(response.data.user))
    //         localStorage.setItem('token', response.data.token)
    //         localStorage.setItem('name', JSON.stringify(response.data.name))
    //         window.location.replace('/agency/dashboard');

    //     } catch (error) {
    //     console.log(error?.response?.data?.errors);
    //     }

    // }

    login(){
        if(this.user.email == ''){
            this.errors3.email = 'please enter your email'
        }else{
            this.errors3.email = ''
        }

        if(this.user.password == ''){
            this.errors3.password = 'please enter your password'
        }else{
            this.errors3.password = ''
        }

        if(this.user.email != '' && this.user.password != ''){
            this.$store.dispatch('currentUser/loginUser',this.user)
        }

       
    }
}
}

</script>