<template>
    <div class="flex mt-10">
        <div class="serch basis-1/3 ml-8">
            <div class="flex place-items-baseline  flex-col text-center items-center">
                <img src="/images/line.svg" class="mb-4">
                <h1 class="text-5xl font-black leading-tight">
                    THE BEST CHOICE <br>
                    FOR <span class="text-fdc100">RENT A CAR</span>
                </h1>
                <p class="text-xl font-bold mt-2 text-center tracking-widest">MAKE YOUR RIDE BETTER</p>
                <img src="/images/line.svg" class="mt-4">
            </div>

            <form action="" method="get">
                <div class="flex flex-col">
                    <label class="text-xl mt-2 text-707070">Location</label>
                    <div class="relative">
                        <location-component></location-component>
                    </div>


                    <label class="text-xl mt-2 text-707070">Type of Car</label>
                    <div class="relative">
                        <selcars-component></selcars-component>
                    </div>

                </div>

                <div class="date flex mt-2 justify-between">
                    <div>
                        <label for="calendar" class="text-xl text-707070">Pick Up Date</label>
                        <div class="flex">
                            <calendar-component></calendar-component>
                            <timer-component></timer-component>
                        </div>
                    </div>
                    <div>
                        <label for="calendar" class="text-xl text-707070">Return Date</label>
                        <div class="flex">
                            <calendar-component></calendar-component>
                            <timer-component></timer-component>
                        </div>
                    </div>
                </div>



                <div class="last flex justify-between mt-8">
                    <div class="flex-1">
                        <div class="relative">
                            <select id="ageSelect"
                                class="px-10 py-2 border-2 border-BDBEBD hover:border-fdc100 rounded w-90">
                                <option disabled selected value="">Age</option>
                                <option value="young">Young</option>
                                <option value="adult">Adult</option>
                                <option value="women">Women</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex-1">
                        <button type="submit"
                            class="duration-300 font-sm rounded  px-10 py-2 border-2 w-90 bg-fdc100 text-white  border-fdc100 text-l ml-6">
                            Search
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="mt-10 golf basis-2/3 hidden md:block">
            <img src="/images/golf8.svg" alt="golf8" class="" style="margin-top: 120px; margin-left: 140px;">
        </div>

    </div>
</template>
<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,300&family=Poppins:wght@200;300;400&family=Sometype+Mono:wght@400;600&display=swap');
* {
    font-family: 'Mulish', sans-serif;
}
@media (max-width: 576px) {
    .relative {
        padding-right: 0;
        display: block;
        width: 100%;
    }

    .date {
        display: block;
    }


}

@media (max-width: 768px) {
    .date {
        display: block;
    }
}
</style>
