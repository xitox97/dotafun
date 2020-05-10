<template>
    <div class="w-1/2 bg-gray-200 p-4">
        <form @submit="formSubmit" enctype="multipart/form-data">
            <p class="text-green-300 font-semibold text-lg">{{success}}</p>
            <div class="grid grid-cols-5 row-gap-4">
                <div class="col-span-2">
                    <label for="" class="font-medium text-lg">
                        Title
                    </label>
                </div>
                <div class="col-span-3">
                     <input v-model="title" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" type="text">
                </div>
                <div class="col-span-2">
                    <label for="" class="font-medium text-lg">
                        Description
                    </label>
                </div>
                <div class="col-span-3">
                     <textarea v-model="description" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"></textarea>
                </div>
                <div class="col-span-2">
                    <label for="" class="font-medium text-lg">
                        Image / Video
                    </label>
                </div>
                <div class="col-span-3">
                     <input v-on:change="onImageChange" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" type="file">
                </div>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Submit
            </button>
        </form>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
         data() {
            return {
              title: null,
              media: null,
              description: null,
              success: null
            };
        },
        methods: {
            onImageChange(e){
                console.log(e.target.files[0]);
                this.media = e.target.files[0];
            },
            formSubmit(e) {
                e.preventDefault();
                let currentObj = this;

                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }

                let formData = new FormData();
                formData.append('title', this.title)
                formData.append('description', this.description)
                formData.append('media', this.media);

                axios.post('/api/posts', formData, config)
                .then(function (response) {
                    console.log(response.data.success);
                    currentObj.success = response.data.success;
                })
                .catch(function (error) {
                    console.log(error.response.data);
                    currentObj.output = error;
                });
            }
        }
    }

</script>
