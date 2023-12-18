<template>
    <div class="timer-container relative">
        <img v-if="!isTimerWhite" src="/images/clock-wh.svg" alt="clock" class="absolute left-2 top-3 w-5 h-5"
            @click="toggleTimeColor">
        <img v-else src="/images/clock-yw.svg" alt="clock" class="absolute left-2 top-3 w-5 h-5" @click="toggleTimeColor">

        <div class="custom-select cursor-pointer pl-8 pt-2 border-2 border-BDBEBD rounded-r-lg"
            :style="{ backgroundColor: isSelectorClicked ? '#fdc100' : 'white', color: isSelectorClicked ? 'white' : '#BDBEBD' }"
            @click="toggleTimeSelector" style="width: 95px; height: 44px;">
            {{ selectedTime || '8:00' }}
        </div>

        <div v-if="timeSelectorOpen" class="time-selector absolute bg-white border-2 rounded-xl overflow-y-auto py-2"
            :style="{ backgroundColor: isSelectorClicked ? '#fdc100' : 'white', }"
            style="width: 250px; height: 120px; margin-left: -141px;" @click.stop>
            <div class="time-options flex flex-col items-center" @scroll="handleScroll">
                <div v-for="option in times" :key="option.time" class="time-option px-3 border-2 my-1 cursor-pointer"
                    @click="option.disabled ? null : selectTime(option.time)"
                    :class="{ 'bg-fdc100': clicked, 'text-white': clicked, 'disabled-option': option.disabled, 'label': option.label }">
                    <span v-if="!option.disabled">{{ option.label }}</span> {{ option.time }}
                </div>
            </div>
        </div>
    </div>
</template>



<script>
export default {
    data() {
        return {
            timeSelectorOpen: false,
            selectedTime: null,
            times: [
                { label: "---Close---" },
                { time: "07:00", disabled: true },
                { time: "07:15", disabled: true },
                { time: "07:30", disabled: true },
                { time: "07:45", disabled: true },
                { label: "---Open---" },
                { time: "8:00", disabled: false },
                { time: "8:15", disabled: false },
                { time: "8:30", disabled: false },
                { time: "8:45", disabled: false },
                { time: "9:00", disabled: false },
                { time: "9:15", disabled: false },
                { time: "9:30", disabled: false },
                { time: "9:45", disabled: false },
                { time: "10:15", disabled: false },
                { time: "18:15", disabled: false },
                { label: "---Close---" },
                { time: "22:45", disabled: true },
                { time: "00:00", disabled: true },
            ],
            isTimerWhite: true,
            isSelectorClicked: false,
        };
    },
    computed: {
        clockIconSrc() {
            return this.isTimerWhite ? "/images/clock-wh.svg" : "/images/clock-yw.svg";
        },
    },
    methods: {
        toggleTimeSelector() {
            this.timeSelectorOpen = !this.timeSelectorOpen;
            this.isTimerWhite = !this.isTimerWhite;
            this.isSelectorClicked = !this.isSelectorClicked;
            if (this.timeSelectorOpen) {
                document.addEventListener("click", this.handleDocumentClick);
            } else {
                document.removeEventListener("click", this.handleDocumentClick);
            }
        },
        openTimeSelector() {
            this.timeSelectorOpen = true;
            document.addEventListener("click", this.handleDocumentClick);
        },
        selectTime(time) {
            this.selectedTime = time;
            this.timeSelectorOpen = false;
            this.isSelectorClicked = false;
            this.isTimerWhite = true;
            document.removeEventListener("click", this.handleDocumentClick);
        },
        handleDocumentClick(event) {
            if (this.$el && !this.$el.contains(event.target)) {
                this.timeSelectorOpen = false;
                document.removeEventListener("click", this.handleDocumentClick);
            }
        },
    },
};
</script>

<style scoped>
.time-selector::-webkit-scrollbar {
    width: 8px;
}

.time-selector::-webkit-scrollbar-thumb {
    background-color: #fdc100;
}

.time-selector::-webkit-scrollbar-track {
    background-color: white;
    border: #ccc 1px solid;
}

.time-selector {
    z-index: 2;
}

.disabled-option {
    color: #707070;
    background: #ECECEC;
}

span {
    border: none;
    font-weight: bold;
    color: #222;

}
</style>