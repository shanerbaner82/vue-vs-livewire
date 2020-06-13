<template>
    <div>
        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information
                        </h3>
                        <p class="mt-1 text-sm leading-5 text-gray-600">
                            Use a permanent address where you can receive mail.
                        </p>
                    </div>
                </div>
                <div class="md:mt-0 md:col-span-2">
                    <div v-if="errors" class="bg-red-500 text-white py-2 px-4 pr-0 rounded font-bold mb-4 shadow-lg">
                        <div v-for="(v, k) in errors" :key="k">
                            <p v-for="error in v" :key="error" class="text-sm m-0 p-0">
                                {{ error }}
                            </p>
                        </div>
                    </div>
                    <form v-on:submit.prevent="save">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <p class="text-xs text-red-400 p-0 m-0 mb-4 -mt-4">* Leave blank to see validation errors</p>
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first_name"
                                               class="block text-sm font-medium leading-5 text-gray-700">First name <span class="text-red-400">*</span>
                                        </label>
                                        <input id="first_name"
                                               v-model="profile.first_name"

                                               class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last_name"
                                               class="block text-sm font-medium leading-5 text-gray-700">Last name <span class="text-red-400">*</span>
                                        </label>
                                        <input id="last_name"
                                               v-model="profile.last_name"
                                               class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="email_address"
                                               class="block text-sm font-medium leading-5 text-gray-700">Email address <span class="text-red-400">*</span>
                                        </label>
                                        <input id="email_address"
                                               v-model="profile.email"
                                               class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="country" class="block text-sm font-medium leading-5 text-gray-700">Country/ Region</label>
                                        <select id="country"
                                                v-model="profile.country"
                                                class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                            <option>United States</option>
                                            <option>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>

                                    <div class="col-span-6">
                                        <label for="street_address"
                                               class="block text-sm font-medium leading-5 text-gray-700">Street address
                                        </label>
                                        <input id="street_address"
                                               v-model="profile.street_address"
                                               class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                        <label for="city" class="block text-sm font-medium leading-5 text-gray-700">City
                                        </label>
                                        <input id="city"
                                               v-model="profile.city"
                                               class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="state" class="block text-sm font-medium leading-5 text-gray-700">State
                                            / Province
                                        </label>
                                        <input id="state"
                                               v-model="profile.state"
                                               class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="zip"
                                               class="block text-sm font-medium leading-5 text-gray-700">ZIP
                                        </label>
                                        <input id="zip"
                                               v-model="profile.zip"
                                               class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button
                                    class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-indigo-600 transition duration-150 ease-in-out">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                    <div v-if="savedData" class="bg-white p-4 mt-5 rounded-md shadow-lg">
                        This is a mock, you sent this data back to the server and now we are rendering it here.
                        <li v-for="(value, key) in savedData" :key="key">{{key}}: {{value}}</li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "FormComponent",
        data() {
            return {
                savedData: null,
                errors: null,
                profile : {
                    first_name: '',
                    last_name: '',
                    email: '',
                    country: 'United States',
                    street_address: '',
                    city: '',
                    state: '',
                    zip: ''
                }
            }
        },
        methods: {
            save() {
                console.log(this.profile);
                axios.post('/api/mock-save', {profile: this.profile})
                    .then(data => {
                        this.savedData = data.data.profile;
                        this.errors = null;
                    })
                    .catch(e => {
                        this.errors = e.response.data.errors;
                    })
            }
        }
    }
</script>

<style scoped>

</style>
