<template >
    <div class="big pt-14 pb-10 pl-24">
        <div class="container flex flex-row sm:w-3/4 md:w-2/3">

            <div class="side-box text-white flex flex-col items-center justify-center rounded-xl shadow-2xl p-4">
                <h1 class="lg:text-3xl md:text-xl sm:text-md font-semibold underline mb-4">Rental Your Cars</h1>
                <p align="justify" class="lg:text-xl md:text-lg sm:text-md">
                    Welcome to <span class="text-fdc100">Ve</span>LoC , to start renting your cars please follow the
                    registration of your account .
                </p>
            </div>

            <div class="first-form bg-white flex flex-col items-center justify-center w-full sm:w-1/2 lg:w-2/5"
                v-if="googleOrEmail">
                <div class="w-52 mb-4"><img src="/images/logo.svg" alt="logo"></div>
                <div class="flex flex-col items-center ">
                    <h1 class="text-2xl text-neutral-500 font-normal mb-4">Create your Account</h1>
                    <div class="my-4 text-neutral-500 text-lg">With</div>
                    <div class="custom justify-center flex w-72">
                        <img src="/images/google-icon.svg" class="mr-2">
                        <button @click="handleGoogleAuth"
                            class="py-2 font-semibold text-base cursor-pointer text-neutral-500 hover:no-underline hover:text-neutral-500">
                            Continue with Google
                        </button>
                    </div>
                    <div class="my-4 text-neutral-500 text-lg">Or</div>
                    <div class="custom justify-center flex w-72">
                        <img src="/images/email-icon.svg" class="mr-4">
                        <button
                            class="py-2 font-semibold text-base  cursor-pointer text-neutral-500 hover:no-underline hover:text-neutral-500"
                            @click="handleEmailAuth">Sign
                            up with email</button>
                    </div>
                </div>
                <div class="flex flex-row space-x-4" style="margin-top: 90px;">
                    <img src="/images/pnt-yw.svg">
                    <img src="/images/pnt-gr.svg">
                    <img src="/images/pnt-gr.svg">
                    <img src="/images/pnt-gr.svg">
                </div>
            </div>

            <div class="first-form bg-white flex flex-col items-center justify-center w-full sm:w-1/2 lg:w-2/5"
                v-if="googleStep1">

                <GoogleStepOne v-model:email="user.email" v-model:google_id="user.google_id" v-model:name="user.name"
                    v-model:agency_name="user.agency_name" v-model:car_models="user.car_models"
                    v-model:working_days="user.working_days" v-model:openHour="user.opening_hour"
                    v-model:closeHour="user.closing_hour" :errors4="errors4" :carTypes="carTypes" />





                <button @click="verifyGooglestep2"
                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ">next</button>

                <div class="flex flex-row mt-4 space-x-4">
                    <img src="/images/pnt-gr.svg">
                    <img src="/images/pnt-yw.svg">
                    <img src="/images/pnt-gr.svg">
                </div>

            </div>

            <div class="first-form bg-white flex flex-col items-center justify-center w-full sm:w-1/2 lg:w-2/5"
                v-if="googleStep2">

                <GoogleStepTwo v-model:state="user.wilaya" v-model:city="user.city" v-model:address="user.agency_address"
                    v-model:phone="user.phone" :errors4="errors4" />


                <button @click='saveData'
                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ">Confirm</button>


                <div class="flex flex-row mt-4 space-x-4">
                    <img src="/images/pnt-gr.svg">
                    <img src="/images/pnt-gr.svg">
                    <img src="/images/pnt-yw.svg">
                </div>

            </div>

            <div class="first-form bg-white flex flex-col items-center justify-center w-full sm:w-1/2 lg:w-2/5"
                v-if="emailStep1">

                <EmailStepOne v-model:userEmail="emailUser.email" v-model:password="emailUser.password"
                    v-model:password_confirmation="emailUser.password_confirmation" :errors3="errors3" />

                <button @click="verifyEmailSteps"
                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ">next</button>

                <div class="flex flex-row mt-4 space-x-4">
                    <img src="/images/pnt-gr.svg">
                    <img src="/images/pnt-yw.svg">
                    <img src="/images/pnt-gr.svg">
                    <img src="/images/pnt-gr.svg">
                </div>

            </div>

            <div class="first-form bg-white flex flex-col items-center justify-center w-full sm:w-1/2 lg:w-2/5"
                v-if="isLoading">
                <div class="w-44 mb-3"><img src="/images/logo.svg" alt="logo"></div>
                <div class="flex flex-col items-center">
                    <div class="flex flex-col mb-3">
                        <p class="bg-red">sending email...</p> <!-- loading screen -->
                    </div>
                </div>
            </div>

            <div class="email-confirmed bg-white flex flex-col items-center justify-center w-full sm:w-1/2 lg:w-2/5"
                v-if="showEmailConfirmed">
                <div class="w-44 mb-2"><img src="/images/logo.svg" alt="logo"></div>
                <div class="flex flex-col items-center">
                    <h1 class="text-lg text-neutral-500 font-normal  mb-4 underline">Activate your account</h1>
                    <img src="/images/email-sended.svg" class="w-28 mb-6">
                    <p class="text-BDBEBD font-light text-md">We sent an email to : <span class="text-black font-normal">{{
                        emailUser.email }}</span></p>
                    <p class="text-707070 text-xs w-80 mt-4 px-3 py-1 font-light"
                        style="background-color: rgba(253, 193, 0, 0.28);"> Open your email and click on the link to activate
                        your account to continue your inscription . </p>
                    <div class="text-black underline font-bold flex flex-col items-center mt-4">
                        <a @click="ResendEmail" class="hover:text-black mb-2" style="cursor: pointer">Send another email to
                            confirm</a>
                        <a class="hover:text-black" style="cursor: pointer" @click="changeEmail">Change my email</a>
                    </div>
                </div>
            </div>

            <div class="first-form bg-white flex flex-col items-center justify-center w-full sm:w-1/2 lg:w-2/5"
                v-if="emailStep2">


                <EmailStepTwo v-model:name="emailUser.name" v-model:agency_name="emailUser.agency_name"
                    v-model:car_models="user.car_models" v-model:working_days="user.working_days"
                    v-model:openHour="emailUser.opening_hour" v-model:closeHour="emailUser.closing_hour" :errors3="errors3"
                    :carTypes="carTypes" />

                <button @click="verifyEmailStep2"
                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ">next</button>

                <div class="flex flex-row mt-4 space-x-4">
                    <img src="/images/pnt-gr.svg">
                    <img src="/images/pnt-gr.svg">
                    <img src="/images/pnt-yw.svg">
                    <img src="/images/pnt-gr.svg">
                </div>

            </div>

            <div class="first-form bg-white flex flex-col items-center justify-center w-full sm:w-1/2 lg:w-2/5"
                v-if="emailStep3">

                <EmailStepThree v-model:state="emailUser.wilaya" v-model:city="emailUser.city"
                    v-model:address="emailUser.agency_address" v-model:phone="emailUser.phone" :errors3="errors3" />
                <button @click="saveData2"
                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ">Confirm</button>

                <div class="flex flex-row mt-4 space-x-4">
                    <img src="/images/pnt-gr.svg">
                    <img src="/images/pnt-gr.svg">
                    <img src="/images/pnt-gr.svg">
                    <img src="/images/pnt-yw.svg">
                </div>

            </div>
        </div>
    </div>
</template>


<script>
import GoogleStepOne from './GoogleAgencySignup/stepOne.vue'
import GoogleStepTwo from './GoogleAgencySignup/stepTwo.vue'


import EmailStepOne from './EmailAgencySignup/stepOne.vue'
import EmailStepTwo from './EmailAgencySignup/stepTwo.vue'
import EmailStepThree from './EmailAgencySignup/stepThree.vue'

import axiosClient from '@/axios/axiosClient.js';



export default {

    components: {
        GoogleStepOne,
        GoogleStepTwo,
        EmailStepOne,
        EmailStepTwo,
        EmailStepThree,
    },

    data() {
        return {
            googleOrEmail: true,
            googleStep1: false,
            googleStep2: false,
            emailStep1: false,
            emailStep2: false,
            emailStep3: false,
            showEmailConfirmed: false,
            isLoading: false,

            carTypes: [
                "Car",
                "Luxe Car",
                "Van",
            ],

            user: {
                name: '',
                email: '',
                google_id: '',
                agency_name: '',
                car_models: [],
                working_days: [],
                closing_hour: null,
                opening_hour: null,
                wilaya: '',
                city: '',
                agency_address: '',
                phone: '',
            },

            emailUser: {
                email: '',
                password: '',
                password_confirmation: '',
                name: '',
                agency_name: '',
                closing_hour: null,
                opening_hour: null,
                car_models2: [],
                working_days: [],
                wilaya: '',
                city: '',
                agency_address: '',
                phone: '',
            },

            errors3: {},
            errors4: {},

        }

    },

    mounted() {
        this.handleGoogleInfo();
        this.handleVerificationEmail();
    },

    methods: {
        toggleAllDays() {
            this.selectedDays = [];
            this.selectAllDays = !this.selectAllDays;
        },
        toggleDaySelection(day) {
            const index = this.selectedDays.indexOf(day);
            if (index === -1) {
                this.selectedDays.push(day);
            } else {
                this.selectedDays.splice(index, 1);
            }
        },
        toggleSelectors() {
            this.selectorsVisible = !this.selectorsVisible;
        },


        handleEmailAuth() {
            this.emailStep1 = true;
            this.googleOrEmail = false
        },

        changeEmail() {
            this.emailStep1 = true
            this.googleOrEmail = false
            this.showEmailConfirmed = false
            this.emailUser.email = ''
            this.emailUser.password = ''
            this.emailUser.password_confirmation = ''
            this.errors3.email = ''
            this.errors3.password = ''
            this.errors3.password_confirmation = ''
        },

        async verifyEmailSteps() {
            try {
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.emailUser.email)) {

                    const response = await axios.post("http://127.0.0.1:8000/api/checkemails/" + this.emailUser.email)
                    console.log(response)

                    if (response.status == 204) {
                        var validEmail = true
                        this.errors3.email = ''
                    } else {
                        this.errors3.email = 'email already used'
                    }

                } else {
                    this.errors3.email = 'please enter a valid email'
                }

                if (this.emailUser.email == '') {
                    this.errors3.email = 'email is a required field'
                }

                if (this.emailUser.password == '') {
                    this.errors3.password = 'password is a required feild'
                } else {
                    this.errors3.password = ''

                    if (this.emailUser.password.length < 8) {
                        this.errors3.password = "password must be at least 10 characters long"
                    } else {
                        this.errors3.password = ''
                    }
                }

                if (this.emailUser.password_confirmation == '') {
                    this.errors3.password_confirmation = 'password confirmation is a required feild'
                } else {
                    this.errors3.password_confirmation = ''

                    if (this.emailUser.password.length < 8) {
                        this.errors3.password_confirmation = "password must be at least 10 characters long"
                    } else {
                        this.errors3.password_confirmation = ''
                    }
                }

                if (this.emailUser.password_confirmation != this.emailUser.password && this.emailUser.password_confirmation != '' && this.emailUser.password != '') {
                    this.errors3.password_confirmation = "passwords do not match"
                } else {
                    this.errors3.password_confirmation = ''
                }



                if (this.emailUser.password != '' && this.emailUser.password_confirmation != ''
                    && this.emailUser.password == this.emailUser.password_confirmation && validEmail == true
                    && this.emailUser.password.length > 9 && this.emailUser.password_confirmation.length > 9
                ) {

                    this.emailStep1 = false
                    this.isLoading = true
                    const sendEmail = await axiosClient.post("/sendemail", this.emailUser)
                    console.log(sendEmail)

                    if (sendEmail.status == 200) {
                        this.isLoading = false
                        this.showEmailConfirmed = true
                        // this.emailUser.working_days = null
                        // this.emailUser.car_models2 = null
                    } else {
                        this.isLoading = true
                    }

                }

            } catch (error) {
                console.log(error);
                this.errors2 = error?.response?.data?.errors
            }
        },

        async ResendEmail() {
            try {
                this.showEmailConfirmed = false
                this.isLoading = true

                const response = await axiosClient.post("/resendemail/" + this.emailUser.email)
                console.log(response)

                this.showEmailConfirmed = true
                this.isLoading = false

                if (response.data.code == '0') {
                    this.step3Hidden = true;
                    this.googleOrEmail = true;
                }

            } catch (error) {
                console.log(error)
            }
        },

        handleVerificationEmail() {

            var url2 = window.location.href;
            url2 = url2.replace('http://127.0.0.1:8000/', 'http://127.0.0.1:8000/api/');
            var verifyUrl2 = url2.includes("verify_email");

            if (verifyUrl2 == true) {
                axios.get(url2).then(res => {
                    console.log(res);

                    this.emailUser = res.data.user;

                    this.emailStep2 = true
                    this.googleOrEmail = false

                    if (url2.includes(res.data.user.verification_code)) {
                        console.log(res.data.user.verification_code);

                    } else {
                        window.location.replace('/signup');
                    }

                })
                    .catch((error) => {

                        window.location.replace('/signup');
                    })
            }

        },

        async verifyEmailStep2() {

            try {



                if (this.emailUser.name == '' || this.emailUser.name == null || this.emailUser.name == 'undefined') {
                    this.errors3.name = 'name is a required feild'
                } else {
                    this.errors3.name = ''
                    var namevalid = true;
                }

                if (this.emailUser.agency_name == '' || this.emailUser.agency_name == null || this.emailUser.agency_name == 'undefined') {
                    this.errors3.agency_name = 'agency name is a required feild'
                } else {
                    this.errors3.agency_name = ''

                }


                if (this.user.car_models.length == 0) {
                    this.errors3.car_models2 = 'car model is a required feild'
                } else {
                    this.errors3.car_models2 = ''
                    this.emailUser.car_models2 = this.user.car_models
                    console.log(this.emailUser.car_models2)
                }

                if (this.user.working_days.length === 0 || this.emailUser.opening_hour == null || this.emailUser.closing_hour == null) {
                    this.errors3.working_days = 'please specify your working time'
                } else {
                    this.errors3.working_days = ''
                    this.emailUser.working_days = this.user.working_days
                    console.log(this.emailUser.working_days)
                }

                if (this.emailUser.agency_name != '' || this.emailUser.agency_name == null || this.emailUser.agency_name == 'undefined') {

                    const response = await axiosClient.post("/checkagencies/" + this.emailUser.agency_name)
                    console.log(response)

                    if (response.status == 204) {
                        var agencynamevalid = true;

                    } else {
                        namevalid = false
                        this.errors3.agency_name = 'agency name taken';
                    }

                    if (agencynamevalid == true && namevalid == true &&
                        this.emailUser.car_models2.length != 0 && this.emailUser.working_days.length != 0
                        && this.emailUser.opening_hour != null && this.emailUser.closing_hour != null

                    ) {

                        this.emailStep2 = false
                        this.emailStep3 = true

                    }
                }

            } catch (error) {
                console.log(error);
            }
        },

        async saveData2() {

            console.log(this.emailUser.phone)
            console.log(this.emailUser.working_days)
            console.log(this.emailUser.car_models2)

            if (this.emailUser.wilaya == '' || this.emailUser.wilaya == null || this.emailUser.wilaya == 'undefined') {
                var validWilaya = false
                this.errors3.wilaya = 'wilaya is a required feild'
            } else {
                this.errors3.wilaya = ''
                var validWilaya = true
            }

            if (this.emailUser.city == '' || this.emailUser.city == null || this.emailUser.city == 'undefined') {
                var validCity = false
                this.errors3.city = 'city is a required feild'
            } else {
                this.errors3.city = ''
                var validCity = true
            }
            if (this.emailUser.agency_address == '' || this.emailUser.agency_address == null || this.emailUser.agency_address == 'undefined') {
                var validAddress = false
                this.errors3.agency_address = 'agency address is a required feild'
            } else {
                var validAddress = true
                this.errors3.agency_address = ''
            }

            if (this.emailUser.phone == '' || this.emailUser.phone == null || this.emailUser.phone == 'undefined') {
                var validPhone = false
                this.errors3.phone = 'agency phone is a required feild'
            } else {
                this.errors3.phone = ''
                var validPhone = true

                var numbers = /^[0-9]+$/;
                if (this.emailUser.phone.match(numbers)) {
                    this.errors3.phone = ''
                    var validPhone = true
                    if (this.emailUser.phone.length < 10) {
                        this.errors3.phone = "please enter valid phone number"
                        var validPhone = false
                    } else {
                        this.errors3.phone = ""
                        var validPhone = true
                    }

                } else {
                    this.errors3.phone = 'agency phone is a numeric feild'
                    var validPhone = false
                }
            }


            if (validAddress == true && validCity == true && validPhone == true && validWilaya == true) {

                try {

                    const response = await axiosClient.post("/checksignup", this.emailUser)
                    console.log(response),
                        alert('agency created!')
                        localStorage.setItem('userData', JSON.stringify(this.user))
                        window.location.replace('/agency/dashboard');

                } catch (error) {
                    console.log(error?.response?.data?.errors);
                }

            }

        },

        handleGoogleAuth() {

            var page = `http://127.0.0.1:8000/api/auth/google`;
            axios.get(page)
                .then(res => {
                    console.log(res);

                    if (res.data.url) {
                        window.location.href = res.data.url;

                    }
                })
        },

        handleGoogleInfo() {

            var url = window.location.href;
            url = url.replace('http://127.0.0.1:8000/auth', 'http://127.0.0.1:8000/api/auth');
            var verifyUrl = url.includes("/auth/google/callback");
            console.log(verifyUrl);

            if (verifyUrl == true) {
                this.googleStep1 = true;
                this.googleOrEmail = false
                axios.get(url)
                    .then(res => {
                        console.log(res);

                        this.user.google_id = res.data.user.google_id
                        this.user.email = res.data.user.email
                        this.user.name = res.data.user.name

                    })

                    .catch((error) => {
                        window.location.replace('/signup');

                    })
            }

        },

        async verifyGooglestep2() {

            try {
                if (this.user.name == '') {
                    this.errors4.name = 'name is a required feild'
                } else {
                    this.errors4.name = ''
                }

                if (this.user.agency_name == '') {
                    this.errors4.agency_name = 'agency name is a required feild'
                } else {
                    this.errors4.agency_name = ''
                }

                if (this.user.car_models == '') {
                    this.errors4.car_models = 'car model is a required feild'
                } else {
                    this.errors4.car_models = ''
                }

                if (this.user.working_days.length === 0 || this.user.opening_hour == null || this.user.closing_hour == null) {
                    this.errors4.working_days = 'please specify your working time'
                } else {
                    this.errors4.working_days = ''
                }



                if (this.user.agency_name != '') {

                    const response = await axiosClient.post("/checkagencies/" + this.user.agency_name)
                    console.log(response)

                    if (response.status == 204) {
                        var namevalid = true;
                    } else {
                        namevalid = false
                        this.errors4.agency_name = 'agency name taken';

                    }

                    console.log(this.user.working_days);
                    console.log(this.user.car_models);
                    if (this.user.agency_name != '' && this.user.name != '' && namevalid == true
                        && this.user.working_days.length != 0 && this.user.car_models.length != 0
                        && this.user.opening_hour != '' && this.user.closing_hour != ''
                    ) {

                        this.googleStep1 = false,
                            this.googleStep2 = true
                    }
                }


            } catch (error) {
                console.log(error);
            }


        },


        async saveData() {

            if (this.user.wilaya == '') {
                var validWilaya = false
                this.errors4.wilaya = 'wilaya is a required feild'
            } else {
                this.errors4.wilaya = ''
                var validWilaya = true
            }

            if (this.user.city == '') {
                var validCity = false
                this.errors4.city = 'city is a required feild'
            } else {
                this.errors4.city = ''
                var validCity = true
            }
            if (this.user.agency_address == '') {
                var validAddress = false
                this.errors4.agency_address = 'agency address is a required feild'
            } else {
                var validAddress = true
                this.errors4.agency_address = ''
            }

            if (this.user.phone == '') {
                var validPhone = false
                this.errors4.phone = 'agency phone is a required feild'
            } else {
                this.errors4.phone = ''
                var validPhone = true

                var numbers = /^[0-9]+$/;
                if (this.user.phone.match(numbers)) {
                    this.errors4.phone = ''
                    var validPhone = true
                    if (this.user.phone.length < 10) {
                        this.errors4.phone = "please enter valid phone number"
                        var validPhone = false
                    } else {
                        this.errors4.phone = ""
                        var validPhone = true
                    }

                } else {
                    this.errors4.phone = 'agency phone is a numeric feild'
                    var validPhone = false
                }
            }


            if (validAddress == true && validCity == true && validPhone == true && validWilaya == true) {

                try {
                    const response = await axiosClient.post("/signupWithGoogle", this.user)
                    console.log(response),
                        alert('agency created!')
                        localStorage.setItem('authToken', response.data.token)
                        localStorage.setItem('userData', JSON.stringify(response.data.user))
                        localStorage.setItem('agencyData', JSON.stringify(response.data.agency))
                    
                        window.location.replace('/agency/dashboard');

                } catch (error) {
                    console.log(error?.response?.data?.errors);
                    this.errors = error?.response?.data?.errors
                }
            }

        },




    }

}
</script>


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;1,300&family=Poppins:wght@200;300;400&family=Sometype+Mono:wght@400;600&display=swap');

* {
    margin:0;
    padding:0;
    font-family: 'Mulish', sans-serif;
}

.toggle-button {
    cursor: pointer;
    border: 1px solid #bdbebd;
    border-radius: 10px;
}

.big {
    background-image: url(/images/signup-bg.svg);
    background-size: cover;
    background-repeat: no-repeat;
    height: 100vh;
    padding-top: 1%;
    padding-bottom: 1%;
}

.container {
    background-image: url(/images/cars-bg33.svg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    border-radius: 30px;
    width: 70%;
    height: 100%; 
    margin: auto;

}


.first-form,
.rest-infog,
.timing-infog,
.loc-infog,
.email-info,
.rest-infoe,
.email-confirmed,
.loc-infoe {
    border-bottom-right-radius: 30px;
    border-top-right-radius: 30px;
    width: 52%;
    margin-left: auto;
}

.side-box {
    margin-top: auto;
    margin-bottom: auto;
    margin-left: auto;
    width: 35%;
    height: 40%;
    backdrop-filter: blur(15px);
}

.custom {
    border: 1px solid #BDBEBD;
    border-radius: 10px;
    transition: border-color 0.1s, box-shadow 0.1s;
}

.custom:hover {
    border-color: #fdc100;
    box-shadow: 0 4px 4px 0 rgba(253, 193, 0, 0.25);
}
</style>