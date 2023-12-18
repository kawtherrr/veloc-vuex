<template>
    <div class="select-box flex flex-col relative">
        <div class="options-container bg-white border-BDBEBD" :class="{ active: optionsActive }">
            <div class="option py-1 text-center" v-for="category in categories" :key="category.id"
                @click="selectCategory(category)">
                <input type="radio" class="radio" :id="category.id" :name="category.id" />
                <label :for="category.id">
                    <img :src="category.image" alt="">
                    {{ category.name }}
                </label>
            </div>
        </div>
        <div>
            <div class="selected px-10 py-2 border-2 border-BDBEBD rounded relative hover:border-fdc100"
                :class="{ 'fdc100': optionsActive }" @click="toggleAllActions">
                <span class="selected-text truncate-text">{{ selectedCategory.name }}</span>
            </div>
            <div class="absolute left-2 top-2.5 w-6 h-6">
                <img v-if="!showVolantWh" src="/images/volant-yw.svg" alt="" style="width: 90px;" />
                <img v-else src="/images/volant-wh.svg" alt="" style="width: 90px;" />
            </div>
            <div class="absolute right-4 top-4 w-4 h-4" @click="toggleOptions">
                <img v-if="!showVolantWh" src="/images/arrow-down.svg" alt="" style="width: 100%;" />
                <img v-else src="/images/arrow-up.svg" alt="" style="width: 100%;" />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            categories: [
                { id: 'car', name: 'Car', image: '/images/symbole.svg' },
                { id: 'van', name: 'Van', image: '/images/master.svg' },
                { id: 'luxe', name: 'Luxe Car', image: '/images/porche.svg' },
            ],
            selectedCategory: { id: 'default', name: 'Choose your type of car, Simple car, Va or Luxe car' },
            optionsActive: false,
            showVolantWh: false,
        };
    },

    methods: {
        toggleAllActions() {
            this.toggleOptions();
            this.toggleVolantImage();
            this.toggleBackgroundColor();
        },
        toggleOptions() {
            this.optionsActive = !this.optionsActive;
            this.showVolantWh = !this.showVolantWh;
            if (this.optionsActive) {
                document.addEventListener('click', this.handleDocumentClick);
            } else {
                document.removeEventListener('click', this.handleDocumentClick);
            }
        },
        selectCategory(category) {
            this.selectedCategory = category;
            this.optionsActive = false;
            this.showVolantWh = false;
        },
        toggleVolantImage() {
            if (!this.showVolantWh) {
                this.showVolantWh = true;
            }
        },
        toggleBackgroundColor() {
            if (!this.optionsActive) {
                this.optionsActive = true;
            }
        },
        handleDocumentClick(event) {
            if (this.$el && !this.$el.contains(event.target)) {
                this.optionsActive = false;
                this.showVolantWh = false;
                document.removeEventListener('click', this.handleDocumentClick);
            }
        },

    },
};
</script>

<style scoped>
.select-box .options-container {
    max-height: 0;
    width: 100%;
    margin-top: 45px;
    opacity: 0;
    transition: all 0.4s;
    border-radius: 8px;
    overflow: hidden;
    order: 1;
    position: absolute;
    z-index: 1;
}

.selected {
    background: white;
    border-radius: 8px;
    margin-bottom: 8px;
    width: 500px;
    color: black;
    position: relative;
    order: 1;
}

.select-box .options-container.active {
    max-height: 240px;
    opacity: 1;
}

.select-box .option,
.selected {
    cursor: pointer;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;

}

.select-box .option:hover {
    background: #fdc2005a;
}

.select-box label {
    cursor: pointer;
}

.select-box .option .radio {
    display: none;
}


label img {
    float: inline-start;
    margin-right: 27px;
}

.fdc100 {
    background-color: #fdc100;
}
</style>
