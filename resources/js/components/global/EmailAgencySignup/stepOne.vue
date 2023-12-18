<template>
    <div class="w-44 mb-3"><img src="/images/logo.svg" alt="logo"></div>
    <div class="flex flex-col items-center">

        <div class="flex flex-col mb-4">
            <label for="namePerson" class="text-707070 font-light">Email </label>
            <img src="/images/email-input.svg" class="w-6 h-auto absolute ml-2 mt-[34px]" alt="email icon">
            <input type="text" :value="userEmail" @input="$emit('update:userEmail', $event.target.value)"
                class="-mt-2 px-10 py-2" placeholder="example@email.com"
                style="border: 1px solid #BDBEBD; border-radius: 10px; width:350px">
            <p v-if="errors3.email" class="text-red-600  mb-2">{{ errors3.email }} </p>
        </div>

        <div class="flex flex-col mb-4">
            <label for="nameAgency" class="text-707070 font-light">Password</label>
            <img src="/images/locked.svg" class="w-6 h-auto absolute ml-2 mt-[30px]" alt="lock icon">
            <input type="password" :value="password" @input="$emit('update:password', $event.target.value)"
                class="-mt-2 px-10 py-2" placeholder="" style="border: 1px solid #BDBEBD; border-radius: 10px; width:350px">
            <p v-if="errors3.password" class="text-red-600  mb-2">{{ errors3.password }} </p>
        </div>

        <div class="flex flex-col mb-4">
            <label for="nameAgency" class="text-707070 font-light">Confirm Password</label>
            <img src="/images/locked.svg" class="w-6 h-auto absolute ml-2 mt-[30px]" alt="lock icon">
            <input type="password" :value="password_confirmation"
                @input="$emit('update:password_confirmation', $event.target.value)" class="-mt-2 px-10 py-2" placeholder=""
                style="border: 1px solid #BDBEBD; border-radius: 10px; width:350px">
            <p v-if="errors3.password_confirmation" class="text-red-600  mb-2">{{ errors3.password_confirmation }} </p>
        </div>

    </div>
</template>

<script>

export default {

    props: {
        userEmail: {
            type: String
        },
        password: {
            type: String
        },
        password_confirmation: {
            type: String
        },

        errors3: {
            type: Object
        },
    },

}


</script>
  
  