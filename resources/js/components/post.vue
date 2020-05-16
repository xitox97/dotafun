<template>

<div >
  <div v-for="post in posts" :key="post.title" class="columns">
        <div class="column is-half is-offset-one-quarter content">
            <div>
                <h1 class="is-white" v-text="post.title"></h1>
            </div>
            <div>
                <figure class="image is-square" v-if="post.media_type == 'image'">
                <img v-bind:src="post.media_path">
                </figure>
                <video controls muted v-else>
                    <source v-bind:src="post.media_path">
                    Your browser does not support HTML video.
                    </video>
                <div class="flex justify-between items-center">
                    <div>
                        <span class="inline-flex items-center px-2 py-1 rounded text-md font-medium leading-4 bg-purple-100 text-purple-800">{{ post.vote }} points</span>
                    </div>
                    <div>
                        <span class="relative z-0 inline-flex shadow-sm">
                            <button type="button" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150">
                                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>

                            </button>
                            <button type="button" class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150">
                                <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
                                </svg>

                            </button>
                        </span>
                    </div>

                </div>
                <div>
                    <span v-for="category in post.categories" :key="category.id">
                    <span class="mt-2 text-base leading-6 text-gray-500 mx-2" v-text="category.name"></span>
                    </span>
                </div>
                <div>
                    <p v-text="post.description" class="has-text-white has-text-justified"></p>
                </div>
            </div>
            <div>
            </div>
        </div>
  </div>
</div>



</template>

<script>
/**
 * Stat component -- specify the widget icon, title and value.
 */
export default {
  props: {
    posts: {
      type: Array,
      default: ""
    }
  }
};
</script>
