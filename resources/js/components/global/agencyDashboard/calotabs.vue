<template>

    <div class="w-35 flex flex-col justify-center items-center border-[1px] border-neutral-200 rounded-[32px] bg-white" style="margin-left: auto; margin-right: 2%;">
        <div class="tab-buttons flex flex-row">
            <button @click="selectTab('tab1')" :class="{ activeTab: activeTab === 'tab1' }">Pickup</button>
            <button @click="selectTab('tab2')" :class="{ activeTab: activeTab === 'tab2' }">Return</button>
            <div class="underline"
                :style="{ left: activeTab === 'tab1' ? '0%' : '50%', backgroundColor: activeTab === 'tab1' ? '#fdc100' : '#aee7ff' }">
            </div>
        </div>

        <div v-show="activeTab === 'tab1'">
            <CaloPickup></CaloPickup>
        </div>
        <div v-show="activeTab === 'tab2'">
            <CaloReturn></CaloReturn>
        </div>
    </div>
</template>

<script>
import CaloPickup from '@/components/global/agencyDashboard/caloPickup.vue';
import CaloReturn from '@/components/global/agencyDashboard/caloReturn.vue';
export default {
    components: {
        CaloPickup,
        CaloReturn,
    },
    data() {
        return {
            activeTab: 'tab1',
            selectedDate: null,
        };
    },
    methods: {
        selectTab(tab) {
            this.activeTab = tab;
        },
    },
};
</script>

<style scoped>
.tab-buttons {
    margin-top: 15%;
    position: relative;
}
button {
    cursor: pointer;
    padding: 10px;
    margin: 5px;
}
.activeTab {
    font-weight: bold;
}
.underline {
    position: absolute;
    bottom: 0;
    height: 3px;
    width: 50%;
    transition: left 0.3s ease;
}
</style>