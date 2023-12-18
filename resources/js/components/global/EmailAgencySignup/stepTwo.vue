<template>
    <div class="w-44 mb-3"><img src="/images/logo.svg" alt="logo"></div>
    <div class="flex flex-col items-center">
        <div class="flex flex-col mb-4">
            <label for="namePerson" class="text-707070 font-light">Name and Last Name</label>
            <input type="text" :value="name" @input="$emit('update:name', $event.target.value)" class="-mt-2 px-10 py-2"
                placeholder="Mahdi MENACER" style="border: 1px solid #BDBEBD; border-radius: 10px; width:350px">
            <p v-if="errors3.name" class="text-red-600 mb-2">{{ errors3.name }} </p>
        </div>

        <div class="flex flex-col mb-4">
            <label for="nameAgency" class="text-707070 font-light">Name of the agency</label>
            <input type="text" :value="agency_name" @input="$emit('update:agency_name', $event.target.value)"
                class="-mt-2 px-10 py-2" placeholder="Menacer automotive"
                style="border: 1px solid #BDBEBD; border-radius: 10px;width:350px">
            <p v-if="errors3.agency_name" class="text-red-600  mb-2">{{ errors3.agency_name }} </p>
        </div>

        <div class="flex flex-col mb-4">
            <label for="selectCar" class="text-707070 font-light">Type of Cars</label>


            <div class="car-selector relative -mt-2">
                <div class="car-select cursor-pointer px-10 pt-2 text-left overflow-hidden truncate "
                    @click.stop="toggleCarSelector"
                    :style="{ color: selectedCars.length ? 'black' : '#9ca3af', border: borderStyleCars }"
                    style="width: 350px; height: 44px; border-radius: 10px; position: relative;">
                    {{ selectedCars.length ? selectedCars.join(', ') : 'Select Cars' }}
                    <div class="absolute right-3 top-4 w-4 h-4 bg-white">
                        <img :src="showArrowYwCars ? '/images/arrow-yw.svg' : '/images/arrow-down.svg'" alt=""
                            style="width: 100%;" />
                    </div>
                </div>

                <div v-if="carSelectorOpen"
                    class="car-selector-options absolute bg-white border-2 mt-1 rounded-xl overflow-y-auto py-2 z-30"
                    style="width: 350px; max-height: 170px;" @click.stop>
                    <div class="car-options flex flex-col">
                        <div v-for="(carType, i) in carTypes" :key="i"
                            class="car-option py-1 cursor-pointer px-4 hover:bg-yellow-400 hover:text-white"
                            @click="toggleCarSelection(i, carType)"
                            >
                            <input type="checkbox"  v-model="selectedCars" :value="carType" class="mr-2">
                            {{ carType }}
                            <img v-if="carType === 'Car'" src="/images/symbole.svg" alt="symbole image"
                                class="ml-2 inline-block" />
                            <img v-if="carType === 'Luxe Car'" src="/images/porche.svg" alt="porche image"
                                class="ml-2 inline-block" />
                            <img v-if="carType === 'Van'" src="/images/master.svg" alt="master image"
                                class="ml-2 inline-block" />
                        </div>
                    </div>
                </div>
            </div>
            <p v-if="errors3.car_models2" class="text-red-600 mb-2">{{ errors3.car_models2 }} </p>
        </div>


        <div class="flex flex-col mb-4">
            <label for="selectTime" class="text-707070 font-light">Working Time</label>
            <div class="relative -mt-2">
                <div @click="toggleSelectors" class="toggle-button font-normal pl-10 py-2 text-gray-400" 
                    style="width:350px"
                    :style="{ color: selectedDays.length && openTime != null && closeTime != null  ? 'black' : '#9ca3af', border: borderStyleCars }"
                    >
                    {{ selectedDays.length  ? "Working days: "+selectedDays.join(', ')  : 'Select working time' }}
                    {{ openTime != null  ? 'Opening hour : '+openTime  : '' }}
                    {{ closeTime != null  ? 'Closing hour : '+closeTime  : '' }}
                </div>
                
                <div v-if="selectorsVisible" class="px-4 py-4 absolute flex flex-row h-[55vh] w-[80vh] ml-[-30%] -mt-52">
                    <div class="mr-2 bg-white rounded-[10px] shadow-md basis-3/4 flex flex-col items-center justify-center">
                        <div class="flex flex-row">
                            <div class="flex flex-col justify-center items-center">
                                <label for="open-time">Open</label>
                                <flat-pickr class="border-2 w-16 rounded-md px-1 block" id="open-time" v-model="openTime"
                                    :config="flatpickrConfig">
                                </flat-pickr>
                            </div>
                            <div class="bg-gray-400 w-1.5 mx-3 rounded mt-3 -mb-2"></div>
                            <div class="flex flex-col justify-center items-center">
                                <label for="close-time">Close</label>
                                <flat-pickr class="border-2 w-16 rounded-md px-1 block" id="close-time" v-model="closeTime"
                                    :config="flatpickrConfig">
                                </flat-pickr>
                            </div>
                        </div>

                        <div class="ml-3 mt-4">
                            opening hour : {{ openTime }} <br>
                            closing hour : {{ closeTime }}
                        </div>

                        <button @click='toggleConfirmSelection()'
                            class="bg-fdc100 rounded-md text-white px-3 py-1 cursor-pointer mt-4">
                            confirm your schedule</button>


                    </div>

                    <div
                        class="mr-2 bg-white rounded-[10px] shadow-md basis-2/4  flex flex-col items-center justify-center">
                        <div class="days-options flex flex-col">
                            <div class="day-option py-1 cursor-pointer hover:text-fdc100">

                                <input @click="toggleAllDays" type="checkbox" id="allDays" v-model="selectAllDays"
                                    class="mr-2 cursor-pointer">
                                <label for="allDays">All Days</label>
                            </div>
                            <hr>
                            <div v-if="hideDays" v-for="(day, i) in days" :key="i"
                                @click="toggleDaySelection(day, i)"
                                class="day-option py-1 cursor-pointer hover:text-fdc100"
                                :class="{ 'disabled': selectAllDays }">
                                <input  type="checkbox" v-model="selectedDays"
                                    :value="day" :disabled="selectAllDays" class="mr-2 cursor-pointer">
                                <label>{{ day }}</label>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <p v-if="errors3.working_days" class="text-red-600 mb-2">{{ errors3.working_days }} </p>

        </div>

    </div>
</template>

<script>
import VueFlatpickr from "vue-flatpickr-component";
import "flatpickr/dist/flatpickr.css";

export default {

    components: {

        flatPickr: VueFlatpickr,
    },


    props: {
        name: {
            type: String
        },
        agency_name: {
            type: String
        },

        errors3: {
            type: Object
        },


        carTypes: {
            required: true
        },

        working_days: {
            default: null,
        },
        openHour: {
            default: null,
        },
        closeHour: {
            default: null,
        },

        car_models: {
            default: null,
        }
    },


    data() {

        return {
            openTime: null,
            closeTime: null,
            inputDisabled: false,
            flatpickrConfig: {
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
                time_24hr: true,
                defaultHour: 12,
                minuteIncrement: 30,
                wrap: true,
                defaultDate: "12:00"
            },
            days: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],




            hideDays: true,
            selectedDays: [],
            selectAllDays: false,
            selectorsVisible: false,


            inputDisabled: true,

            selectedCars: [],
            daysSelectorOpen: false,
            carSelectorOpen: false,
            showArrowYwCars: false,
            borderStyleCars: '1px solid #BDBEBD',
        }

    },

    emits: ['update:car_models', 'update:agency_name', 'update:name', 'update:working_days', 'update:openHour', 'update:closeHour'],

    methods: {
        toggleCarSelector() {
            this.carSelectorOpen = !this.carSelectorOpen;
            this.showArrowYwCars = !this.showArrowYwCars;
            this.borderStyleCars = this.carSelectorOpen ? '2px solid #fdc100' : '1px solid #BDBEBD';

            if (this.carSelectorOpen) {
                document.addEventListener("click", this.handleDocumentClick);
            } else {
                document.removeEventListener("click", this.handleDocumentClick);
            }
        },
        
        toggleCarSelection(i, carType) {
            const index = this.selectedCars.indexOf(carType);

            //console.log(index)

            let clicked = this.carTypes[i]
            let newval = [...this.car_models]

            if (index === -1) {
                this.selectedCars.push(carType);
                newval.push(carType);
                this.$emit('update:car_models', newval)
            } else {
                this.selectedCars.splice(index, 1);
                newval.splice(index, 1);
                this.$emit('update:car_models', newval)
            }
        },

        handleDocumentClick(event) {
            if (this.$el && !this.$el.contains(event.target)) {
                this.carSelectorOpen = false;
                document.removeEventListener("click", this.handleDocumentClick);
            }
        },

        toggleConfirmSelection() {
            this.selectorsVisible = !this.selectorsVisible;
            this.$emit('update:openHour', this.openTime)
            this.$emit('update:closeHour', this.closeTime)
        },

        toggleAllDays() {
            this.selectedDays = [];
            this.selectAllDays = !this.selectAllDays;

            if (allDays.checked) {
                this.$emit('update:working_days', this.days)
                this.hideDays = !this.hideDays
                this.selectedDays = this.days;
            } else {
                this.$emit('update:working_days', []);
                this.selectedDays = [];
                this.hideDays = !this.hideDays
            }
        },
        toggleDaySelection(day, i) {
            const index = this.selectedDays.indexOf(day);
            console.log(i)

            let clicked = this.days[i]
            let newval = [...this.working_days]
            if (index === -1) {
                this.selectedDays.push(day);
                newval.push(day);
                this.$emit('update:working_days', newval)
            } else {
                this.selectedDays.splice(index, 1);
                newval.splice(index, 1);
                this.$emit('update:working_days', newval)
            }
        },
        toggleSelectors() {
            this.selectorsVisible = !this.selectorsVisible;
            
        },
    }

}


</script>
<style>
.toggle-button {
    cursor: pointer;
    border: 1px solid #bdbebd;
    border-radius: 10px;
}
</style>