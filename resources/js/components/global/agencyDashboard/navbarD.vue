<template>
    <nav class="navbar border-b-2 flex flex-row">
        <div class="">
            <router-link to="/my-cars" class="border-r-2 mx-1 py-3">
                <img class="inline-block mr-2 mb-1" src="/images/caro.svg" alt="cars icon">
                My Cars
            </router-link>
            <router-link to="/my-clients" class="border-r-2 mx-1 py-3">
                <img class="inline-block mr-2 mb-1" src="/images/clients.svg" alt="persons icon">
                My Clients
            </router-link>
            <router-link to="/rants" class=" mx-1 py-3">
                <img class="inline-block mr-2 mb-1" src="/images/rants.svg" alt="rants icon">
                My Rants
            </router-link>
        </div>

        <div class="flex">
            <router-link to="/notifications" class="border-x-2 mx-1 py-1">
                <img class="inline-block mx-2 mb-1" src="/images/cloche.svg" alt="rants icon">
            </router-link>
            <router-link to="/agency-profile" class="flex flex-row">
                <img class="inline-block mr-2 mb-1 w-7" src="/images/profile.svg" alt="rants icon">
                <div class="text-gray-800 text-lg font-normal flex flex-col mx-2">
                    Agency Name
                    <small class="text-707070 text-[13px] -mt-2">Name and Last Name</small>
                </div>
                <img src="/images/arrow-profile.svg">
            </router-link>
        </div>
    </nav>
</template>


<style scoped>
.navbar {
    position: fixed;
    top: 0;
    left: 320px;
    right: 0;
    background-color: #fff;
    color: #707070;
}
</style>
