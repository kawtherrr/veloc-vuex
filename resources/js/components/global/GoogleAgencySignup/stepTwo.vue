<template>
    <div class="w-44 mb-3"><img src="/images/logo.svg" alt="logo"></div>
    <div class="flex flex-col items-center">


        <div class="flex flex-col mb-3">
            <label for="stateAgency" class="text-707070 font-light">State</label>
            <div class="state-container relative -mt-2">
                <div class="state-select cursor-pointer px-10 pt-2" @click.stop="toggleStateSelector"
                    :style="{ color: selectedState ? 'black' : '#BDBEBD', border: borderStyleState }"
                    style="width: 350px; height: 44px; border-radius: 10px; position: relative;">
                    {{ selectedState?.wilaya_name || 'Select State' }}
                    <div class="absolute right-3 top-4 w-4 h-4 bg-white">
                        <img :src="showArrowYwState ? '/images/arrow-yw.svg' : '/images/arrow-down.svg'" alt=""
                            style="width: 100%;" />
                    </div>
                </div>

                <div v-if="stateSelectorOpen" class="state-selector absolute bg-white border-2 mt-1 rounded-xl  py-2 z-30"
                    style="width: 350px; height: 280px;" @click.stop>
                    <input type="text" class="queryinput" v-model="searchQuery" placeholder="search state">
                    <div class="state-options flex flex-col">
                        <div v-for="(state, index) in filterState" :key="`state-${index}`"
                            class="py-1 px-16 cursor-pointer hover:bg-fdc100 hover:text-white"
                            :class="state == selectedState ? 'state-option' : ''" @click="selectState(state)">
                            {{ state.wilaya_name }}
                        </div>
                        <span v-if="filterState.length === 0">no match found</span>
                    </div>
                </div>
            </div>
            <p v-if="errors4.wilaya" class="text-red-600  mb-2">{{ errors4.wilaya }} </p>


        </div>


        <div class="flex flex-col mb-3">
            <label for="cityAgency" class="text-707070 font-light">City</label>
            <div class="state-container relative -mt-2">
                <div class="state-select cursor-pointer px-10 pt-2" @click.stop="toggleCitySelector"
                    :style="{ color: selectedCity ? 'black' : '#BDBEBD', border: borderStyleCity }"
                    style="width: 350px; height: 44px; border-radius: 10px; position: relative;">
                    {{ selectedCity?.city_name || 'Select City' }}
                    <div class="absolute right-3 top-4 w-4 h-4 bg-white">
                        <img :src="showArrowYwCity ? '/images/arrow-yw.svg' : '/images/arrow-down.svg'" alt=""
                            style="width: 100%;" />
                    </div>
                </div>

                <div v-if="citySelectorOpen" class="city-selector absolute bg-white border-2 mt-1 rounded-xl  py-2 z-30"
                    style="width: 350px; height: 280px;" @click.stop>
                    <input type="text" class="queryinput" v-model="searchQueryCity" placeholder="search city">
                    <div class="city-options flex flex-col">
                        <div v-for="(city, index) in filterCity" :key="`city-${index}`"
                            class="py-1 px-16 cursor-pointer hover:bg-fdc100 hover:text-white"
                            :class="city == selectedCity ? 'city-option' : ''" @click="selectCity(city)">
                            {{ city.city_name }}
                        </div>
                        <span v-if="this.selectedState == ''">please select a state first</span>
                        <span v-else-if="filterCity.length === 0">no match found</span>
                    </div>
                </div>
            </div>
            <p v-if="errors4.city" class="text-red-600  mb-2">{{ errors4.city }} </p>


        </div>


        <div class="flex flex-col mb-3">
            <label for="locationAgency" class="text-707070 font-light">Location</label>
            <img src="/images/loc22.svg" class="w-4 h-auto absolute ml-2" alt="" style="margin-top: 32px;">
            <input type="text" placeholder="Add your Location" class="-mt-2 pr-10 pl-8 py-2 font-light"
                style="border: 1px solid #BDBEBD; border-radius: 10px; width: 350px;" :value="address"
                @input="$emit('update:address', $event.target.value)">
            <p v-if="errors4.agency_address" class="text-red-600 mb-2">{{ errors4.agency_address }} </p>
        </div>

        <div class="flex flex-col mb-4">
            <label for="locationAgency" class="text-707070 font-light">Phone Number</label>
            <img src="/images/ph22.svg" class="w-3 h-auto absolute ml-2" alt="" style="margin-top: 30px;">
            <input type="text" placeholder="Add your Phone number" class="-mt-2 px-9 py-2 font-light"
                style="width: 350px; border: 1px solid #BDBEBD; border-radius: 10px;" :value="phone"
                @input="$emit('update:phone', $event.target.value)">
            <p v-if="errors4.phone" class="text-red-600  mb-2">{{ errors4.phone }} </p>
        </div>




    </div>
</template>

<script>

import axiosClient from '@/axios/axiosClient.js';

export default {
    props: {
        state: {
            type: String
        },
        city: {
            type: String
        },
        address: {
            type: String
        },
        phone: {
            type: String
        },

        state: {
            default: null
        },

        city: {
            default: null
        },
        errors4: Object,
    },

    data() {

        return {
            stateSelectorOpen: false,
            isStateSelectorClicked: false,
            showArrowYwState: false,
            borderStyleState: '1px solid #BDBEBD',
            selectedState: '',
            searchQuery: '',
            states: [],
            citySelectorOpen: false,
            isCitySelectorClicked: false,
            showArrowYwCity: false,
            borderStyleCity: '1px solid #BDBEBD',
            selectedCity: '',
            searchQueryCity: '',
            cities: [],
        }
    },

    mounted() {
        this.allStates();
    },

    emits: ['update:state', 'update:city', 'update:address', 'update:phone'],

    computed: {
        filterState() {
            const query = this.searchQuery.toLowerCase();
            if (this.searchQuery === "") {
                return this.states
            }
            return this.states.filter((state) => {
                return Object.values(state).some((word) =>
                    String(word).toLowerCase().includes(query))
            })
        },
        filterCity() {
            const query = this.searchQueryCity.toLowerCase();
            if (this.searchQueryCity === "") {
                return this.cities
            }
            return this.cities.filter((city) => {
                return Object.values(city).some((word) =>
                    String(word).toLowerCase().includes(query))
            })
        },

    },

    methods: {
        async allStates() {

            const res = await axiosClient.get("/states")
            console.log(res)
            this.states = res.data;
        },

        toggleStateSelector() {
            this.stateSelectorOpen = !this.stateSelectorOpen;
            this.citySelectorOpen = false
            this.isStateSelectorClicked = !this.isStateSelectorClicked;
            this.showArrowYwState = !this.showArrowYwState;
            this.borderStyleState = this.stateSelectorOpen ? '2px solid #fdc100' : '1px solid #BDBEBD';
            if (this.stateSelectorOpen) {
                document.addEventListener("click", this.handleDocumentClick);
            } else {
                document.removeEventListener("click", this.handleDocumentClick);
            }
        },
        async selectState(state) {
            this.selectedState = state;
            this.$emit('update:state', state.wilaya_name)
            this.stateSelectorOpen = false;
            this.searchQuery = '';
            this.selectedCity = '';
            this.isStateSelectorClicked = false;
            this.showArrowYwState = !this.showArrowYwState;
            this.borderStyleState = this.stateSelectorOpen ? '1px solid #fdc100' : '1px solid #BDBEBD';
            document.removeEventListener("click", this.handleDocumentClick);


            try {
                const res2 = await axiosClient.get("/cities/" + state.wilaya_name)
                console.log(res2)
                this.cities = res2.data;
                // this.inputDisabled= false

            } catch (error) {
                console.log(error)
            }
        },
        handleDocumentClick(event) {
            if (this.$el && !this.$el.contains(event.target)) {
                this.stateSelectorOpen = false;
                document.removeEventListener("click", this.handleDocumentClick);
            }
        },

        toggleCitySelector() {
            this.citySelectorOpen = !this.citySelectorOpen;
            this.isCitySelectorClicked = !this.isCitySelectorClicked;
            this.showArrowYwCity = !this.showArrowYwCity;
            this.borderStyleCity = this.citySelectorOpen ? '2px solid #fdc100' : '1px solid #BDBEBD';
            if (this.citySelectorOpen) {
                document.addEventListener("click", this.handleDocumentClick2);
            } else {
                document.removeEventListener("click", this.handleDocumentClick2);
            }
        },
        selectCity(city) {
            this.selectedCity = city;
            this.$emit('update:city', city.city_name)
            this.citySelectorOpen = false;
            this.searchQuery2 = '';
            this.isCitySelectorClicked = false;
            this.showArrowYwCity = !this.showArrowYwCity;
            this.borderStyleCity = this.citySelectorOpen ? '1px solid #fdc100' : '1px solid #BDBEBD';
            document.removeEventListener("click", this.handleDocumentClick2);
        },
        handleDocumentClick2(event) {
            if (this.$el && !this.$el.contains(event.target)) {
                this.citySelectorOpen = false;
                document.removeEventListener("click", this.handleDocumentClick2);
            }
        },


    }

}


</script>



<style>
.custom {
    border: 1px solid #BDBEBD;
    border-radius: 10px;
    transition: border-color 0.1s, box-shadow 0.1s;
}

.custom:hover {
    border-color: #fdc100;
    box-shadow: 0 4px 4px 0 rgba(253, 193, 0, 0.25);
}

.loc-infoe {
    border-bottom-right-radius: 30px;
    border-top-right-radius: 30px;
    width: 46%;
    margin-left: 7%;
}

.state-selector .state-options {
    height: 225px;
    overflow-y: scroll;
}

.state-option {
    background-color: #fdc200a2;
}

.city-selector .city-options {
    height: 225px;
    overflow-y: scroll;
}

.city-option {
    background-color: #fdc200a2;
}


.queryinput {
    width: 95%;
    height: 40px;
    border: solid 1px gray;
    font-size: 16px;
    padding-left: 10px;
    margin-left: 8px;
    border-radius: 10px;


}
</style>

