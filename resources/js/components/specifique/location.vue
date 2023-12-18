<template>
    <div class="custom-select relative border-2 border-BDBEBD" :class="{ 'background-fdc100': isCustomSelectClicked }"
        @click="toggleDropdown" style="width: 500px;">
        <div class="selected-value cursor-pointer pl-6" style="width: 500px;" @click="toggleLocColor">{{ selectedText }}
        </div>
        <img v-if="!isLocWhite" src="/images/loc-yw.svg" alt="location img" class="absolute left-2 top-2 w-5 h-5"
            @click="toggleLocColor" />
        <img v-else src="/images/loc-wh.svg" alt="location img" class="absolute left-2 top-2  w-5 h-5"
            @click="toggleLocColor" />
        <ul class="options mt-1 m-0 p-0 h-44 w-full z-10" v-show="isOpen">
            <li v-for="(location, index) in locations" :key="index" @click="selectOption(location)">
                {{ location.text }}
            </li>
        </ul>

        <div v-if="selectedValue" class="additional-info bg-white border-2 border-BDBEBD rounded-md p-4 mt-2 relative z-20"
            style="width: 560px; height: 480px; margin-left: -13px;" @click.stop>
            <h2 class="text-xl text-black">The State of {{ selectedValue }}</h2>
            <p v-show="!isCompanyOpen" class="text-s text-707070 mt-2 ml-2">Lorem Ipsum is simply dummy text of the printing
                and typesetting
                industry.
            </p>
            <div class="selectors flex mt-2">
                <div class="custom-select relative border-2 hover:border-fdc100" style="width: 200px;"
                    @click="toggleNameDropdown">
                    <div class="selected-value cursor-pointer pl-6" style="width: 500px;">{{ selectedNameText }}</div>
                    <div class="absolute right-2 top-3 w-4 h-4 bg-white" @click="toggleOptions">
                        <img v-if="!showArrowYw" src="/images/arrow-down.svg" alt="" style="width: 100%;" />
                        <img v-else src="/images/arrow-yw.svg" alt="" style="width: 100%;" />
                    </div>
                    <ul class="options mt-2  h-72 border-2 border-BDBEBD rounded-xl shadow-md w-full z-10"
                        v-show="isNameOpen">
                        <li v-for="(name, index) in names" :key="index" @click="selectName(name)" class="pl-3 mr-4">
                            {{ name.text }}
                        </li>
                    </ul>
                    <ul class="options mt-4 h-60 w-52 z-20" v-show="isCompanyOpen || isCompanyInfoVisible" @click.stop>
                        <li v-for="(company, index) in companies" :key="index" @click="selectCompany(company)"
                            class=" py-0 my-1 mr-4">
                            <div class="inline-block  mr-1 w-3">
                                <img v-if="company.selected" src="/images/cmp-yw.svg" alt="" style="width: 100%;" />
                                <img v-else src="/images/cmp-gr.svg" alt="" style="width: 100%;" />
                            </div>
                            {{ company.text }}
                        </li>
                    </ul>
                </div>
                <div>
                    <div v-show="isFilterVisible" class="ml-28">
                        <div class="text-BDBEBD text-l border-2 px-4 py-1 mb-2 flex rounded-md" style="float: left;"
                            @click.stop>
                            <p class="mr-2">Filters</p>
                            <img src="/images/filter.svg" style="float: right; margin-left: 10px;">
                        </div>
                        <div class="text-xs"><input type="checkbox">Active filtres</div>
                    </div>
                    <div class="flex flex-row">
                        <img src="/images/khat.svg" class="ml-3" v-show="isCompanyOpen || isCompanyInfoVisible">
                        <div v-show="isCompanyInfoVisible" class="ml-8">
                            <h1 class="text-xl font-bold text-black">{{ selectedCompany.name }}</h1>
                            <p class="text-BDBEBD text-s font-normal">{{ selectedCompany.address }}</p>
                            <ul>
                                <li v-if="selectedCompany.openForPickup" class="text-gray-800 py-2 font-light italic"><img
                                        src="/images/nike.svg" class="inline-block w-4"> Open all week for Pick up <span
                                        class="text-fdc100 font-bold not-italic">24/7</span></li>
                                <li v-if="selectedCompany.openForReturn" class="text-gray-800 py-2 font-light italic"><img
                                        src="/images/nike.svg" class="inline-block w-4"> Open all week for Return <span
                                        class="text-fdc100 font-bold not-italic">24/7</span></li>
                                <li v-if="selectedCompany.hasBabyCarSeat" class="text-gray-800 py-2 font-light italic"><img
                                        src="/images/nike.svg" class="inline-block w-4"> Baby car seat</li>
                                <li v-if="selectedCompany.hasLuggageRack" class="text-gray-800 py-2 font-light italic"><img
                                        src="/images/nike.svg" class="inline-block w-4"> Luggage car rack</li>
                            </ul>
                            <div class="flex flex-row text-black text-s font-normal underline justify-between py-2">
                                <p><img src="/images/phone.svg" class="inline-block w-5 mr-2"> {{
                                    selectedCompany.phoneNumber }}</p>
                                <a class="cursor-pointer"><img src="/images/gps.svg" class="inline-block w-5 mr-2">
                                    Itinerary</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="flex  absolute  bottom-2  ml-28 items-center">
                <button class="rounded-xl bg-BDBEBD text-white px-4 py-1" style="margin-right: 100px;">Cancel</button>
                <button :class="isCompanySelected ? 'bg-fdc100 text-white' : 'bg-white border-2 border-BDBEBD text-BDBEBD'"
                    class="rounded-xl px-4 py-1" style="margin-right: 100px;" @click="confirmCompany">
                    Confirm
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            locations: [],
            isOpen: false,
            selectedValue: null,
            names: [],
            isNameOpen: false,
            selectedNameValue: null,
            isCustomSelectClicked: false,
            isLocWhite: false,
            companies: [],
            isCompanyOpen: false,
            selectedCompany: null,
            selectedCompanies: [],
            showArrowYw: false,
            nameSelected: false,
            showCmpYw: false,
            isFilterVisible: true,
            isCompanyInfoVisible: false,

        };
    },
    computed: {
        selectedText() {
            if (this.selectedValue) {
                return this.locations.find((location) => location.value === this.selectedValue).text;
            } else {
                return 'Find the location that you need';
            }
        },
        selectedNameText() {
            if (this.selectedNameValue) {
                return this.names.find((name) => name.value === this.selectedNameValue).text;
            } else {
                return 'Choose the city';
            }
        },
    },
    mounted() {
        this.fetchLocations();
        this.fetchNames();
        this.fetchCompanies();
        document.addEventListener('click', this.closeDropdownOnClickOutside);
    },
    beforeDestroy() {
        document.removeEventListener('click', this.closeDropdownOnClickOutside);
    },
    methods: {
        fetchLocations() {
            setTimeout(() => {
                this.locations = [
                    { value: 'Blida', text: 'Blida' },
                    { value: 'Algiers', text: 'Algiers' },
                    { value: 'Oran', text: 'Oran' },
                    { value: 'Constantine', text: 'Constantine' },
                    { value: 'Tipaza', text: 'Tipaza' },
                    { value: 'Medea', text: 'Medea' },
                    { value: 'Batna', text: 'Batna' },
                    { value: 'Djelfa', text: 'Djelfa' },
                    { value: 'Sétif', text: 'Sétif' },
                    { value: 'Sidi-bel-abbès', text: 'Sidi Bel Abbès' },
                    { value: 'Bishkek', text: 'Biskra' },
                    { value: 'Tébessa', text: 'Tébessa' },
                ];
            }, 1000);
        },
        fetchNames() {
            setTimeout(() => {
                this.names = [
                    { value: 'Blida', text: 'Blida' },
                    { value: 'Ouled Yaïch', text: 'Ouled Yaïch' },
                    { value: 'Boufarik', text: 'Boufarik' },
                    { value: 'Beni Tamou', text: 'Beni Tamou' },
                    { value: 'Bougara ', text: 'Bougara ' },
                    { value: 'Oued Alleug', text: 'Oued Alleug' },
                    { value: 'El Affroun', text: 'El Affroun' },
                    { value: 'Beni Mered', text: 'Beni Mered' },
                    { value: 'Bouinan', text: 'Bouinan' },
                    { value: 'Bishkek', text: 'Biskra' },
                    { value: 'Soumaa', text: 'Soumaa' },
                ];
            }, 1000);
        },
        fetchCompanies() {
            setTimeout(() => {
                this.companies = [
                    { value: 'cmp1', text: 'Menacer cars' ,selected: false},
                    { value: 'cmp2', text: 'Yahiaoui Auto' ,selected: false},
                    { value: 'cmp3', text: 'Houari cars' ,selected: false},
                    { value: 'cmp4', text: 'Sellam' ,selected: false},
                    { value: 'cmp5', text: 'Allane' ,selected: false},
                    { value: 'cmp6', text: 'Boufarik cars' ,selected: false},
                    { value: 'cmp7', text: 'Zammouchi ' ,selected: false},
                    { value: 'cmp8', text: 'Cnep cars' ,selected: false},
                    { value: 'cmp9', text: 'Merahba' ,selected: false},
                    { value: 'cmp9', text: 'Merahba' ,selected: false},
                    { value: 'cmp9', text: 'Merahba' ,selected: false},
                    { value: 'cmp9', text: 'Merahba' ,selected: false},
                    { value: 'cmp9', text: 'Merahba' ,selected: false},
                ];
                // After fetching the companies, set the selectedCompany to the first company in the list (you can customize this based on your needs)
                if (this.companies.length > 0) {
                    this.selectedCompany = {
                        name: this.companies[0].text,
                        address: 'STREET NUMBER 14 LOCAL 5. BOUFARIK .BLIDA',
                        openForPickup: true,
                        openForReturn: true,
                        hasBabyCarSeat: true,
                        hasLuggageRack: true,
                        phoneNumber: '0770123456',
                    };
                }
            }, 1000);
        },
        toggleDropdown() {
            this.isOpen = !this.isOpen;
            this.isCustomSelectClicked = !this.isCustomSelectClicked;
        },
        selectOption(location) {
            this.selectedValue = location.value;
            this.isLocWhite = !this.isLocWhite;

        },
        toggleLocColor() {
            this.isLocWhite = !this.isLocWhite;
        },
        closeDropdownOnClickOutside(event) {
            const dropdownContainer = this.$el;
            if (dropdownContainer && !dropdownContainer.contains(event.target)) {
                this.isOpen = false;
            }
        },
        toggleNameDropdown() {
            if (!this.nameSelected) {
                this.isNameOpen = !this.isNameOpen;

            }
            this.showArrowYw = !this.showArrowYw;
        },
        selectName(name) {
            this.selectedNameValue = name.value;
            this.selectedNameText = name.text;
            this.isNameOpen = false;
            this.isCompanyOpen = true;
            this.nameSelected = true;
        },
        selectCompany(company) {
    this.selectedCompany = {
        name: company.text,
        address: 'STREET NUMBER 14 LOCAL 5. BOUFARIK .BLIDA',
        openForPickup: true,
        openForReturn: true,
        hasBabyCarSeat: true,
        hasLuggageRack: true,
        phoneNumber: '0770123456',
    };

    this.companies.forEach((c) => {
        c.selected = c === company;
    });

    this.isCompanyOpen = false; 
    this.isFilterVisible = false;
    this.isCompanyInfoVisible = true;
    this.isCompanySelected = true;
    this.showCmpYw = true;
}


    },
};
</script>

<style scoped>
.background-fdc100 {
    background-color: #fdc100;
}

.options {
    position: absolute;
    left: 0;
    list-style: none;
    background-color: white;
    overflow-y: auto;

}

.options li {
    padding: 10px 2px;
    cursor: pointer;
    transition: background-color 0.2s;
}

.options li:hover {
    background-color: rgba(253, 193, 0, 0.18);
}

.custom-select .options {
    display: block;
}

.custom-select {
    ::-webkit-scrollbar {
        width: 5px;

    }

    ::-webkit-scrollbar-thumb {
        background: #fdc100;
    }
}</style>
