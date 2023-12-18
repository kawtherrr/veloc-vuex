<template>
    <div class="w-50" style="margin-right: auto; margin-left: 2%; margin-bottom: 2%; margin-top: 3%;">
        <div class="column">

            <h1 class="text-base font-normal">Bookings</h1>
            <p class="lg:text-[30px] font-medium">{{ bookings }}</p>
        </div>

        <div class="column mx-3">

            <h1 class="text-base font-normal">Clients</h1>
            <p class="lg:text-[30px] font-medium">{{ clients }}</p>
        </div>

        <div class="column">

            <h1 class="text-base font-normal">Revenue</h1>
            <p class="lg:text-[30px] font-medium">{{ revenue }}K</p>
        </div>
    </div>

    <div class="rating w-50  bg-white rounded-[10px] border border-neutral-200 mt-2"
        style="margin-right: auto; margin-left: 2%;">
        <h1 class="ml-4 mt-2 mb-3 text-black text-xl font-normal">Customers Satisfaction</h1>

        <div class="flex flex-row mb-4">
            <div class="rating-stars w-30 flex flex-col items-center justify-center" style="margin-right: 14%;">
                <p class="average-rating text-5xl font-medium">{{ averageRating }}</p>
                <div class="star-icons">
                    <i v-for="star in Math.floor(averageRating)" :key="star" class="bi bi-star-fill"></i>
                    <i v-if="averageRating % 1 !== 0" class="bi bi-star-half"></i>
                </div>
                <p class="users-rating text-[18px] font-normal text-707070 ">{{ numberOfUsers }} users</p>
            </div>

            <div class="w-50 mr-3">
                <div v-for="(percentage, index) in ratingPercentages" :key="index" class="my-1">
                    <div class="flex items-center">
                        <span class="rating-label text-2xl">{{ 5 - index }}</span>
                        <div class="progress h-5 ml-2 flex-grow rounded-xl">
                            <div class="progress-bar bg-fdc100 rounded-xl" role="progressbar"
                                :style="{ width: percentage + '%' }">
                                {{}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>


    <div class="cars w-50 bg-white rounded-[10px] border border-neutral-200 mt-4"
        style="margin-right: auto; margin-left: 2%;">
        <h1 class="ml-4 mt-2 mb-3 text-black text-xl font-normal">Distribution by Vehicle Type</h1>

        <div class="flex items-center mb-2 mx-4" v-if="carCount !=0">
            <span class="text-lg">Car</span>
            <div class="progress h-4 ml-2 flex-grow rounded-r-xl">
                <div class="progress-bar bg-aee7ff rounded-r-xl" role="progressbar"
                    :style="{ width: (carCount / carTotal) * 100 + '%' }">
                    {{ }}
                </div>
            </div>
            <span class="ml-3">{{ carCount }} / {{ carTotal }}</span>
        </div>

        <div class="flex items-center mb-2 mx-4" v-if="vanCount !=0">
            <span class="text-lg">Van</span>
            <div class="progress h-4 ml-2 flex-grow rounded-r-xl">
                <div class="progress-bar bg-92E3A9 rounded-r-xl" role="progressbar"
                    :style="{ width: (vanCount / vanTotal) * 100 + '%' }">
                    {{ }}
                </div>
            </div>
            <span class="ml-3">{{ vanCount }} / {{ vanTotal }}</span>
        </div>

        <div class="flex items-center mx-4 mb-3" v-if="luxeCarCount != 0">
            <span class="text-lg">Luxe Car</span>
            <div class="progress h-4 ml-2 flex-grow rounded-r-xl">
                <div class="progress-bar bg-fdc100 rounded-r-xl" role="progressbar"
                    :style="{ width: (luxeCarCount / luxeCarTotal) * 100 + '%' }">
                    {{ }}
                </div>
            </div>
            <span class="ml-4">{{ luxeCarCount }} / {{ luxeCarTotal }}</span>
        </div>
    </div>

    <div class="w-50 border-2" style="margin-right: auto; margin-left: 2%; margin-top: 1%;">
        <canvas ref="myChart" role="img" aria-label="Doughnut Chart" width="400" height="400"></canvas>
    </div>
</template>

<script>
import Chart from 'chart.js/auto';
import axiosClient from '@/axios/axiosClient.js';
export default {
    data() {
        return {
            userData: null,
            vehicles: null,
            bookings: 0,
            clients: 0,
            revenue: 0,
            // averageRating: null,
            numberOfUsers: 5,
            ratingCounts: [1, 1, 1, 1, 1],
            carCount: 0,
            vanCount: 0,
            luxeCarCount: 0,
            carTotal: 10,
            vanTotal: 12,
            luxeCarTotal: 7,


        };
    },
    computed: {
        averageRating() {
            const totalUsers = this.ratingCounts.reduce((acc, count) => acc + count, 0);
            return (
                this.ratingCounts.reduce((acc, count, index) => acc + (count / totalUsers) * (5 - index), 0).toFixed(1) || 0
            );
        },
        ratingPercentages() {
            const totalUsers = this.ratingCounts.reduce((acc, count) => acc + count, 0);
            return this.ratingCounts.map(count => ((count / totalUsers) * 100).toFixed(2));
        },

        //code below not doing anything 
        totalCars() {
            return this.carCount + this.vanCount + this.luxeCarCount;
        },
    },
    created(){
      
    },
    mounted() {
        this.bookings = 120;
        this.clients = 150;
        this.revenue = 500;
        this.renderChart();
        let agency = localStorage.getItem('name')
        this.agencyData = JSON.parse(agency)
        //console.log(this.agencyData)
        this.getVehicle()
        
        console.log(this.vehicles)
        
      
    },
    methods: {

        async getVehicle(){
        try {
            const response = await axiosClient.post("/allvehicles/"+ this.agencyData.user_id)

            console.log(response)
            localStorage.setItem('agency_vehicles',JSON.stringify(response.data))
            let agency_vehicles = localStorage.getItem('agency_vehicles')
            this.vehicles = JSON.parse(agency_vehicles)
        
            if(response){
                this.filterVehicles()
            }
           

        } catch (error) {
            console.log(error);
            this.errors = error?.response?.data?.errors
        }

    },

        filterVehicles(){
            if(this.vehicles !== null){
            for(let x = 0 ; x<= 19 ; x++){
               if(this.vehicles[x].vehicle_model == 'van'){
                this.vanCount++
               }else if(this.vehicles[x].vehicle_model == 'car'){
                this.carCount++
               }else{
                this.luxeCarCount++
               }
            }}

        },
        renderChart() {
            const ctx = this.$refs.myChart.getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['On rent', 'Available', 'In Repair'],
                    datasets: [{
                        data: [15, 7, 3],
                        backgroundColor: ['#FDC100', '#AEE6FF', '#92E3A9'],
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'right',
                            align: 'center',
                            labels: {
                                font: {
                                    size: 17
                                }
                            }
                        },
                        title: {
                            display: true,
                            text: 'Cars Status Overview',
                            font: {
                                size: 18,
                                weight: 400,
                            },
                            color: '#000',
                        },
                    },
                }
            });
        },
    },
    beforeDestroy() {
        const chart = this.$data._chart;
        if (chart) {
            chart.destroy();
        }
    },
};
</script>

<style scoped>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: mulish;
}
.column {
    border: 1px solid #E0E0E0;
    border-radius: 10px;
    color: #000;
    width: 30%;
    height: 120%;
    float: left;
    box-sizing: border-box;
    padding: 10px;
}
.star-icons {
    color: #ffd700;
    font-size: 1.5rem;
}
</style>