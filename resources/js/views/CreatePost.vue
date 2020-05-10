<template>
    <div class="w-1/2 bg-gray-200 p-4">
        <form action="#" method="POST">
            <div class="grid grid-cols-5 row-gap-4">
                <div class="col-span-2">
                    <label for="" class="font-medium text-lg">
                        Title
                    </label>
                </div>
                <div class="col-span-3">
                     <input class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" type="text">
                </div>
                <div class="col-span-2">
                    <label for="" class="font-medium text-lg">
                        Description
                    </label>
                </div>
                <div class="col-span-3">
                     <textarea class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"></textarea>
                </div>
                <div class="col-span-2">
                    <label for="" class="font-medium text-lg">
                        Title
                    </label>
                </div>
                <div class="col-span-3">
                     <input class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" type="file">
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
        }
    }

</script>
