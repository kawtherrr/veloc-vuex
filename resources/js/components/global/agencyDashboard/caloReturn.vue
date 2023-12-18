<template>
    <div class="whole">
        <div class="calendar mx-2">
            <div class="header flex justify-center">
                <div class="btns flex flex-row items-center text-707070 my-4">
                    <span @click="prevBtn" class="bi bi-chevron-left text-2xl"></span>
                    <div class="month text-707070 font-normal lg:text-2xl">{{ this.months[this.currentMonth] }}</div>
                    <span @click="nextBtn" class="bi bi-chevron-right text-2xl"></span>
                </div>
            </div>
            <div class="weekdays">
                <div class="day">Sun</div>
                <div class="day">Mon</div>
                <div class="day">Tue</div>
                <div class="day">Wed</div>
                <div class="day">Thu</div>
                <div class="day">Fri</div>
                <div class="day">Sat</div>

            </div>
            <div class="days cursor-pointer">
                <div class="day prev" v-for="day in prevDays">{{ day }}</div>
                <div class="day" v-for="(day, i) in days" :key="i"
                    @click="(this.currentYear + ':' + this.currentMonth + ':' + day) && pickupDate.includes(this.currentYear + ':' + this.currentMonth + ':' + day) ? showRendezvousInNotes(this.currentYear + ':' + this.currentMonth + ':' + day) : null"
                    :style="(this.currentYear + ':' + this.currentMonth + ':' + day) && pickupDate.includes(this.currentYear + ':' + this.currentMonth + ':' + day) ? 'background-color:#aee7ff; color:white' : ''">
                    {{ day }}
                </div>

                <div class="day next" v-for="day in nextDays">{{ day }}</div>
            </div>
            <div class="m-2 max-h-36 overflow-y-auto">
                <h1 class="text-lg underline">Appoitments Of the Today:</h1>
                <div v-if="showTodayRendezvous">
                    {{ rendezvous.some(({ day }) => day === currentDate) ? showRendezvous == true : currentDate + ': no rendezvous today' }}
                </div>
                <div v-if="showRendezvous">
                    <div class="flex flex-row py-3 justify-center items-center" @click="showRenterDetails(day)"
                        v-for="day in todayRendezvous">
                        <span class="font-medium mr-1">{{ day.time }}</span>
                        <div class="text-white bg-aee7ff py-2 w-80 flex justify-center cursor-pointer">
                            {{ day.renter }}
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div v-if="showRendezvousDetails" class="popup" align="center">
            <div class="popup-content flex flex-col justify-center items-center rounded-[21px] shadow-lg">
                <div class="flex flex-col">
                    <h1 class="text-black text-xl font-semibold">Return Time</h1>
                    <div class="flex flex-col items-start my-4">
                        <div class="py-1 text-lg">
                            <img src="/images/person-icon-bl.svg" class="inline-block mr-2 w-6">
                            {{ rendezvousDetails.renter }}
                        </div>
                        <div class="py-2 text-lg">
                            <img src="/images/coche-bl.svg" class="inline-block mr-2 w-6">
                            {{ rendezvousDetails.car }}
                        </div>
                        <div class="py-2 text-lg">
                            <img src="/images/clock-bl.svg" class="inline-block mr-2 w-6">
                            {{ rendezvousDetails.time }}
                        </div>
                    </div>
                </div>
                <button class="bg-aee7ff text-white px-4 py-2 rounded-xl text-lg" @click="closeDetailsPopup">Done</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
    },
    data() {
        return {
            currentDate: new Date(),
            months: [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
            ],
            events: [
                '2023:11:1', '2023:11:25', '2023:10:2', '2023:11:5', '2023:11:6', '2023:11:4',
            ],
            rendezvous: [{
                day: '2023:11:1',
                time: '9:00 AM',
                event: 'Pick up',
                renter: 'kawther houari',
                car: 'BMW'
            },
            {
                day: '2023:11:6',
                time: '11:00 AM',
                event: 'Pick up',
                renter: 'fella yahiaoui',
                car: 'Symbol'
            },
            {
                day: '2023:11:1',
                time: '11:00 AM',
                event: 'Pick up',
                renter: 'fella yahiaoui',
                car: 'Ferrari'
            },
            {
                day: '2023:11:4',
                time: '11:00 AM',
                event: 'Pick up',
                renter: 'fella yahiaoui',
                car: 'Hyundai'
            },
            {
                day: '2023:11:5',
                time: '11:00 AM',
                event: 'Pick up',
                renter: 'kawther yahiaoui',
                car: 'Mercedes'
            },
            {
                day: '2023:10:2',
                time: '8:00 AM',
                event: 'Pick up',
                renter: 'kawther yahiaoui',
                car: 'BMW'
            },
            {
                day: '2023:11:25',
                time: '10:00 AM',
                event: 'Pick up',
                renter: 'fella houari',
                car: 'Jeep'
            },
            {
                day: '2023:11:25',
                time: '10:00 AM',
                event: 'Pick up',
                renter: 'fella houari 2',
                car: 'Honda'
            },
            ],
            todayRendezvous: [],
            pickupDate: [],
            info: [],
            showRendezvous: false,
            showTodayRendezvous: true,
            date: new Date(),
            month: '',
            currentYear: '',
            currentMonth: '',
            days: [],
            prevDays: [],
            nextDays: [],
            firstDay1: '',
            lastDay1: '',
            lastDayIndex1: '',
            lastDayDate1: '',
            prevLastDay1: '',
            prevLastDayDate1: '',
            nextDays1: '',
            rendezvousDetails: '',
            showRendezvousDetails: false,
        }
    },
    mounted() {
        const date2 = new Date();
        let currentDay = String(date2.getDate());
        let currentMonth = String(date2.getMonth());
        let currentYear = date2.getFullYear();
        this.currentDate = currentYear + ':' + currentMonth + ':' + currentDay
        this.renderCalendar()
        this.hih()
        this.displayTodayRendezvous()
    },
    created() {
        let currentMonth1 = this.date.getMonth();
        this.currentMonth = currentMonth1
        let currentYear1 = this.date.getFullYear();
        this.currentYear = currentYear1
        const firstDay = new Date(this.currentYear, this.currentMonth, 1);
        this.firstDay1 = firstDay
        const lastDay = new Date(this.currentYear, this.currentMonth + 1, 0);
        this.lastDay1 = lastDay
        const lastDayIndex = lastDay.getDay();
        this.lastDayIndex1 = lastDayIndex
        const lastDayDate = lastDay.getDate();
        this.lastDayDate1 = lastDayDate
        const prevLastDay = new Date(this.currentYear, this.currentMonth, 0);
        this.prevLastDay1 = prevLastDay
        const prevLastDayDate = prevLastDay.getDate();
        this.prevLastDayDate1 = prevLastDayDate
        const nextDays = 7 - lastDayIndex - 1;
        this.nextDays1 = nextDays
        this.nextDays = [
            '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16',
            '17', '18', ' 19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'
        ];
    },
    methods: {
        displayTodayRendezvous() {
            let j = 0;
            this.todayRendezvous = {}
            let date = this.currentDate
            for (let x = 0; x <= 7; x++) {
                if (this.rendezvous[x].day == date) {
                    this.todayRendezvous[j] = this.rendezvous[x]
                    j++
                }
            }
            if (j > 0) {
                this.showRendezvousInNotes(date)
            }
        },
        showRenterDetails(day) {
            this.showRendezvousDetails = true,
                this.rendezvousDetails = day
        },
        closeDetailsPopup() {
            this.showRendezvousDetails = false,
                this.rendezvousDetails = ''
        },
        showRendezvousInNotes(date) {
            //alert(date)
            let j = 0;
            this.todayRendezvous = {}
            for (let x = 0; x <= 7; x++) {
                if (this.rendezvous[x].day == date) {
                    this.todayRendezvous[j] = this.rendezvous[x]
                    j++
                }
            }
            if (this.todayRendezvous == null) {
                this.showRendezvous = false
                this.showTodayRendezvous = true
            } else {
                this.showRendezvous = true
                this.showTodayRendezvous = false
            }
        },
        hih() {
            let daysLength = (this.days).length - 1;
            let eventsLength = (this.events).length;
            let v = 0
            this.pickupDate = []
            for (let i = 0; i <= daysLength; ++i) {
                for (let j = 0; j <= eventsLength; ++j) {
                    if ((this.currentYear + ':' + (this.currentMonth) + ':' + this.days[i]) == (this.events[j])) {
                        this.pickupDate[v] = this.events[j]
                        v++
                    }
                }
            }
        },
        timeChanges() {
            const firstDay = new Date(this.currentYear, this.currentMonth, 1);
            this.firstDay1 = firstDay
            const lastDay = new Date(this.currentYear, this.currentMonth + 1, 0);
            this.lastDay1 = lastDay
            const lastDayIndex = lastDay.getDay();
            this.lastDayIndex1 = lastDayIndex
            const lastDayDate = lastDay.getDate();
            this.lastDayDate1 = lastDayDate
            const prevLastDay = new Date(this.currentYear, this.currentMonth, 0);
            this.prevLastDay1 = prevLastDay
            const prevLastDayDate = prevLastDay.getDate();
            this.prevLastDayDate1 = prevLastDayDate
            const nextDays = 7 - lastDayIndex - 1;
            this.nextDays1 = nextDays
            this.nextDays = [
                '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16',
                '17', '18', ' 19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'
            ];
        },
        renderCalendar() {
            let checkPrevMonth = new Date(this.currentYear, this.currentMonth, 0).getDate()
            let checkThisMonth = new Date(this.currentYear, this.currentMonth + 1, 0).getDate()
            if (checkPrevMonth == 31) {
                this.prevDays = [
                    '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16',
                    '17', '18', ' 19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'
                ]
                let x = this.prevLastDayDate1 - this.firstDay1.getDay()
                this.prevDays = this.prevDays.splice(x, x);
            } else if (checkPrevMonth == 30) {
                this.prevDays = [
                    '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16',
                    '17', '18', ' 19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30'
                ]
                let x = this.prevLastDayDate1 - this.firstDay1.getDay()
                this.prevDays = this.prevDays.splice(x, x);
            } else if (checkPrevMonth == 29) {
                this.prevDays = [
                    '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16',
                    '17', '18', ' 19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29'
                ]
                let x = this.prevLastDayDate1 - this.firstDay1.getDay()
                this.prevDays = this.prevDays.splice(x, x);
            } else {
                this.prevDays = [
                    '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16',
                    '17', '18', ' 19', '20', '21', '22', '23', '24', '25', '26', '27', '28'
                ]
                let x = this.prevLastDayDate1 - this.firstDay1.getDay()
                this.prevDays = this.prevDays.splice(x, x);
            }
            if (checkThisMonth == 31) {
                this.days = [
                    '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16',
                    '17', '18', ' 19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'
                ]
            } else if (checkThisMonth == 30) {
                this.days = [
                    '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16',
                    '17', '18', ' 19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30'
                ]
            } else if (checkThisMonth == 29) {
                this.days = [
                    '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16',
                    '17', '18', ' 19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29'
                ]
            } else {
                this.days = [
                    '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16',
                    '17', '18', ' 19', '20', '21', '22', '23', '24', '25', '26', '27', '28'
                ]
            }
            for (let j = 30; j >= this.nextDays1; j--) {
                this.nextDays.pop()
            }
        },
        nextBtn() {
            this.currentMonth++;
            if (this.currentMonth > 11) {
                this.currentMonth = 0;
                this.currentYear++;
            }
            this.timeChanges()
            this.renderCalendar()
            this.hih()
        },
        prevBtn() {
            this.currentMonth--;
            if (this.currentMonth < 0) {
                this.currentMonth = 11;
                this.currentYear--;
            }
            this.timeChanges()
            this.renderCalendar()
            this.hih()
        },
    },
}
</script>

<style scoped>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "mulish", sans-serif;
}
.whole {
    height: 100vh;
    overflow: auto;
}
.calendar .header {
    border-top: 2px solid #ccc;
}
.calendar .header .btns .btn {
    width: 50px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
    color: #fff;
    background-color: #aee7ff;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s;
}
.calendar .header .btns .btn:hover {
    background-color: #aee7ff;
    transform: scale(1.05);
}
.weekdays {
    display: flex;
    gap: 10px;
    margin-bottom: 10px;
}
.weekdays .day {
    width: calc(100% / 7 - 10px);
    text-align: center;
    font-size: 16px;
    font-weight: 600;
}
.days {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}
.days .day {
    width: calc(100% / 7 - 10px);
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 100%;
    font-size: 16px;
    font-weight: 400;
    color: #1d1d1d;
    background-color: #fff;
    transition: all 0.3s;
}
.days .day:not(.next):not(.prev):hover {
    color: #fff;
    background-color: #aee7ff;
    transform: scale(1.05);
}
.days .day.next,
.days .day.prev {
    color: #ccc;
}
.popup {
    display: flex;
    align-items: center;
    position: fixed;
    z-index: 999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
}
.popup-content {
    background-color: #fff;
    margin: 10% auto;
    padding: 20px;
    width: 35%;
    height: 50%;
}
</style>