<template>
        <div class="relative flex items-center ">
            <div class="relative">
                <img v-if="!isCalendarWhite" src="/images/calendar-yw.svg" alt="calendar"
                    class="absolute left-2 top-3 w-5 h-5" @click="toggleCalendarColor">
                <img v-else src="/images/calendar-wh.svg" alt="calendar" class="absolute left-2 top-3 w-5 h-5"
                    @click="toggleCalendarColor">
                <input id="calendarDate" type="text" style="width: 130px;"
                    class="pl-8 pr-0 py-2 border-2 border-BDBEBD rounded-l-lg hover:border-fdc100" @click="showDatePicker"
                    @blur="toggleCalendarColor(false)"
                    :class="{ 'bg-fdc100': clicked, 'text-white': clicked, 'bg-white': !clicked }" v-model="selectedDate"
                    :placeholder="currentDatePlaceholder">
            </div>


            <!-- the custom calendar as veloc needs -->
            <div v-if="showDatePickerFlag" class="absolute top-14 bg-white rounded shadow-md px-2 py-4"
                style="z-index: 999; left: 0; width: 300px; height: auto;" @click.stop>
                <div class="mb-2 text-center text-xl">
                    <button @click.prevent="previousMonth">&lt;</button>
                    {{ selectedMonthName }} {{ selectedYear }}
                    <button @click.prevent="nextMonth">&gt;</button>
                </div>

                <div class="grid grid-cols-7 gap-2">
                    <div class="text-center text-gray-500">Su</div>
                    <div class="text-center text-gray-500">Mo</div>
                    <div class="text-center text-gray-500">Tu</div>
                    <div class="text-center text-gray-500">We</div>
                    <div class="text-center text-gray-500">Th</div>
                    <div class="text-center text-gray-500">Fr</div>
                    <div class="text-center text-gray-500">Sa</div>

                    <div v-for="day in daysInMonth" :key="day" class="text-center cursor-pointer rounded-full py-1"
                        @click="selectDate(day)" @mouseover="hoverDay" @mouseout="unhoverDay">
                        {{ day }}
                    </div>
                </div>
            </div>
        </div>
</template>


<style>
@import url('https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css');

.bg-fdc100 {
    background-color: #fdc100;
}

.text-white {
    color: #ffffff;
}
</style>

<script>
export default {
    created() {
        document.addEventListener("click", this.handleDocumentClick);
    },
    data() {
        return {
            calendarDate: new Date().toISOString().split('T')[0],
            showDatePickerFlag: false,
            selectedDate: '',
            selectedMonth: new Date().getMonth(),
            selectedYear: new Date().getFullYear(),
            isCalendarWhite: false,
            clicked: false,
        };
    },
    computed: {
        selectedMonthName() {
            const options = { month: 'long' };
            const locale = 'en-US';
            return new Date(this.selectedYear, this.selectedMonth, 1).toLocaleDateString(locale, options);
        },
        daysInMonth() {
            const lastDay = new Date(this.selectedYear, this.selectedMonth + 1, 0).getDate();
            return Array.from({ length: lastDay }, (_, i) => i + 1);
        },
        currentDatePlaceholder() {
            const today = new Date();
            const day = today.getDate();
            const month = today.getMonth() + 1;
            const year = today.getFullYear();
            return `${year}-${month.toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;
        },
    },
    methods: {
        showDatePicker() {
            this.showDatePickerFlag = true;
            this.toggleCalendarColor(true);
            this.clicked = true;
        },
        closeCalendar() {
            this.showDatePickerFlag = false;
            this.clicked = false;
        },
        hoverDay(event) {
            event.target.classList.add('bg-fdc100', 'text-white');
        },
        unhoverDay(event) {
            event.target.classList.remove('bg-fdc100', 'text-white');
        },
        previousMonth() {
            this.selectedMonth -= 1;
            if (this.selectedMonth < 0) {
                this.selectedMonth = 11;
                this.selectedYear -= 1;
            }
        },
        nextMonth() {
            this.selectedMonth += 1;
            if (this.selectedMonth > 11) {
                this.selectedMonth = 0;
                this.selectedYear += 1;
            }
        },
        selectDate(day) {
            const selectedDate = `${this.selectedYear}-${(this.selectedMonth + 1)
                .toString()
                .padStart(2, "0")}-${day.toString().padStart(2, "0")}`;

            const currentDate = new Date();
            const selectedDateObj = new Date(selectedDate);

            const currentDateMinusOneDay = new Date();
            currentDateMinusOneDay.setDate(currentDate.getDate() - 1);

            if (selectedDateObj >= currentDateMinusOneDay) {
                this.selectedDate = selectedDate;
                this.showDatePickerFlag = false;
                this.clicked = false;
            } else {
                console.log("Selected date is in the past.");
            }

        },
        toggleCalendarColor() {
            this.isCalendarWhite = !this.isCalendarWhite;
        },
        handleDocumentClick(event) {
            if (
                !this.$el.contains(event.target)
            ) {
                this.closeCalendar();
            }
        },
        saveSelectedDate() {
            const selectedDate = this.selectedDate;
            console.log("Selected Date: ", selectedDate);
        },
        isPastDay(day) {
            const today = new Date();
            const selectedDate = new Date(this.selectedYear, this.selectedMonth, day);
            return selectedDate < today;
        },
    },
};
</script>