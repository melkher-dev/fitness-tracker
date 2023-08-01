<template>
    <WelcomeLayout>
        <div class="flex justify-center">
            <div class="card w-1/2 bg-white shadow-xl m-5">
                <div class="card-body">
                    <div>
                        <h2 class="card-title">Вельком Ту аур Пахудатор!!!</h2>
                    </div>
                    <div>
                        <input
                            v-model="form.height"
                            type="number"
                            placeholder="Height"
                            class="input input-bordered input-primary bg-white w-full m-2"
                        />
                        <input
                            v-model="form.weight"
                            type="number"
                            placeholder="Weight"
                            class="input input-bordered input-primary bg-white w-full m-2"
                        />
                        <input
                            v-model="form.sport_per_week"
                            type="number"
                            placeholder="Sport per week"
                            class="input input-bordered input-primary bg-white w-full m-2"
                        />
                        <input
                            v-model="form.activity"
                            type="number"
                            placeholder="Activity"
                            class="input input-bordered input-primary bg-white w-full m-2"
                        />
                        <input
                            v-model="form.food"
                            type="text"
                            placeholder="Food"
                            class="input input-bordered input-primary bg-white w-full m-2"
                        />
                        <input
                            v-model="form.goal"
                            type="text"
                            placeholder="Goal"
                            class="input input-bordered input-primary bg-white w-full m-2"
                        />
                        <input
                            v-model="form.allergy"
                            type="text"
                            placeholder="Allergy"
                            class="input input-bordered input-primary bg-white w-full m-2"
                        />
                        <select
                            v-model="form.plan"
                            class="select select-primary bg-white w-full m-2"
                        >
                            <option value="" disabled selected hidden>
                                Select your plan
                            </option>
                            <option
                                v-for="(plan, index) in plans"
                                :key="index"
                                :value="plan.name"
                                :disabled="plan.type === 'pro'"
                            >
                                {{ plan.name }}
                            </option>
                        </select>
                    </div>
                    <div @click="submit" class="card-actions justify-center">
                        <button class="btn btn-primary">Пахудєть</button>
                    </div>
                    <div @click="getCookie" class="card-actions justify-center">
                        <button class="btn btn-primary">Оддавай кукі</button>
                    </div>
                </div>
            </div>
        </div>
    </WelcomeLayout>
</template>

<script setup>
import { router } from "@inertiajs/vue3";
import WelcomeLayout from "@/Layouts/WelcomeLayout.vue";
import { reactive, ref } from "vue";
import axios from "axios";

const props = defineProps({
    plans: Object,
});

const form = reactive({
    height: "",
    weight: "",
    sport_per_week: "",
    activity: "",
    food: "",
    goal: "",
    allergy: "",
    plan: "",
});

const plans = ref(props.plans);

const cookie = ref({});

const getCookie = () => {
    axios.get(route("user_data.cookie.get")).then((response) => {
        cookie.value = response.data;
        console.log("cookie", cookie.value);
    });
};

const submit = () => {
    axios.post(route("user_data.cookie.store"), form);
};
</script>
