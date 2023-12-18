<template>
    <div>

      
       
        <div :style="{ filter: hidePopup ? 'blur(8px)' : 'none' }">
            <div class="dashboard-container">
                <!-- <navbar></navbar>
                <sidebar></sidebar> -->
                <p>date</p>
                <div class="main-content">
        
                    <div class="absolute text-black text-lg font-bold" style="margin-left: 62%; margin-top: -3%;">
    
                </div>
                <!-- <analyticsA></analyticsA> -->
                <calotabs></calotabs>
          
                </div>
            </div>
        </div>
        

        
        <!-- this is the popup div, this file isnt meant for it only but also for the entire dashboard page  -->
        <div v-if="hidePopup" class="popup-container">
            <div class="popup-box flex flex-col items-center">
                <img class="w-[220px] h-[45px]" src="/images/veloc-img.svg" alt="veloc logo">
                <label class="text-2xl my-2">
                    Your registration is in review. <br> Your cars are not published until we finish <br> the confirmation
                    of all the documents
                </label>
                <button class="bg-fdc100 text-white text-lg rounded-md w-[90px] h-[40px] mt-3"
                    @click="closePopup">Done</button>
            </div>
        </div>
    </div>
</template>

<script>
import Sidebar from '@/components/global/agencyDashboard/sidebar.vue';
import Navbar from '@/components/global/agencyDashboard/navbarD.vue';
import AnalyticsA from './graphCharts.vue';
import Calotabs from '@/components/global/agencyDashboard/calotabs.vue';

import axiosClient from '@/axios/axiosClient.js';

export default {
    components: {
    Sidebar,
    Navbar,
    AnalyticsA,
    Calotabs
    },
data() {
    return {
        userData: null,
        hidePopup: false,
    }
},

computed: {
    currentUser: {
        get(){
            return this.$store.state.currentUser.user 
        } 
    },
    currentAgency: {
        get(){
            return this.$store.state.currentUser.agency 
        } 
    }
},

mounted() {
    let user = localStorage.getItem('userData')
 
    // let token = localStorage.getItem('token')
    // console.log(token)

    let agency = localStorage.getItem('name')
    this.userData = JSON.parse(agency)
 
    this.checkPopup()
},

methods: {

   
        async closePopup() {
        this.hidePopup = false

        try {
            const response = await axiosClient.post("/updateWarningStatus/" + this.userData.agency_name)

            console.log(response)
            if (response.data.status_code == 1) {
                this.hidePopup = false
                console.log('status changed')
            }

        } catch (error) {
            console.log(error);
            this.errors = error?.response?.data?.errors
        }
    },

        async checkPopup() {
        try {
            const response = await axiosClient.post("/checkWarningStatus/" + this.userData.agency_name)

            console.log(response)
            if (response.data.status_code == 1) {
                this.hidePopup = false
            } else {
                this.hidePopup = true
            }

        } catch (error) {
            console.log(error);
            this.errors = error?.response?.data?.errors
        }



    },
},


}
</script>

<style scoped>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: mulish;
}
.dashboard-container {
    display: flex;
}

.main-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}


.popup-container {
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.popup-box {
    background: white;
    padding: 40px;
    border-radius: 8px;
    text-align: center;
    box-shadow: 2px 2px 7px lightgray;

}
</style>
