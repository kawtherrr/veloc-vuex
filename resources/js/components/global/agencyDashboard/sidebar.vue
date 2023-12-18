<template>
    <div class="sidebar">
        <img class="pl-3 py-3" src="/images/veloc-img.svg" alt="veloc logo">
        <ul>
            <li @click="navigateTo('dashboard')" :class="{ active: currentTab === 'dashboard' }">
                <img :src="currentTab === 'dashboard' ? '/images/dash-wh.svg' : '/images/dash-gr.svg'"
                    class="inline-block w-6 mr-2">
                Dashboard
            </li>
            <li @click="navigateTo('bookings')" :class="{ active: currentTab === 'bookings' }">
                <img :src="currentTab === 'bookings' ? '/images/book-wh.svg' : '/images/book-gr.svg'"
                    class="inline-block w-6 mr-2">
                Bookings
            </li>
            <li @click="navigateTo('transactions')" :class="{ active: currentTab === 'transactions' }">
                <img :src="currentTab === 'transactions' ? '/images/trans-wh.svg' : '/images/trans-gr.svg'"
                    class="inline-block w-6 mr-2">
                Transactions
            </li>

            <li @click="navigateTo('payment')" :class="{ active: currentTab === 'payment' }">
                <img :src="currentTab === 'payment' ? '/images/pay-wh.svg' : '/images/pay-gr.svg'"
                    class="inline-block w-6 mr-2">
                Payment
            </li>

            <li @click="navigateTo('settings')" :class="{ active: currentTab === 'settings' }">
                <img :src="currentTab === 'settings' ? '/images/set-wh.svg' : '/images/set-gr.svg'"
                    class="inline-block w-6 mr-2">
                Settings
            </li>

            <li @click="navigateTo('help')" style="margin-top: 100px;" :class="{ active: currentTab === 'help' }">
                <img :src="currentTab === 'help' ? '/images/help-wh.svg' : '/images/help-gr.svg'"
                    class="inline-block w-6 mr-2">
                Help
            </li>

            <li @click="logout" :class="{ active: currentTab === 'logout' }">
               
                
                    <img :src="currentTab === 'logout' ? '/images/logout-wh.svg' : '/images/logout-gr.svg'"
                    class="inline-block w-6 mr-2">
                    <a href="" @click="logOut()">Logout</a>
                
                
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            currentTab: '',
        };
    },
    created() {
        // Set 'dashboard' as the default active tab
        this.currentTab = 'dashboard';
    },
    methods: {
        navigateTo(tab) {
            this.currentTab = tab;
            console.log('Navigate to:', tab);
            document.querySelectorAll('.sidebar li').forEach((li) => {
                li.classList.remove('active');
            });
        },
        async logOut(){

            try {

                const response = await axios.post('http://127.0.0.1:8000/api/logout',{})
                console.log(response),
                alert('agency logged out!')
                localStorage.removeItem('user')
                localStorage.removeItem('token')
                localStorage.removeItem('name')
                window.location.replace('/login') 

            } catch (error) {
                 console.log(error?.response?.data?.errors);
            }
            
        }
    },
};
</script>

<style scoped>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.sidebar {
    background-color: #fff;
    width: 320px;
    height: 100vh;
    border-right: 2px solid #DBDBDB;
    padding-right: 10px;
}

ul {
    list-style-type: none;
    padding-top: 26px;
}

li {
    font-size: 20px;
    color: #707070;
    cursor: pointer;
    margin-bottom: 15px;
    padding-top: 6px;
    padding-bottom: 6px;
    padding-left: 20px;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
    transition: background-color 0.3s;
}

.sidebar .active {
    color: #fff;
    background-color: #fdc100;
}

.sidebar li.active {
    color: #fff;
    background-color: #fdc100;
}
</style>
