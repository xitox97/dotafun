<template>
    <div>
        <post :posts="posts"></post>
    </div>

</template>

<script>
    import post from "../components/post";

    export default {
        components: {
            post
        },
        data() {
            return {
                posts: [],
            };
        },
         mounted() {
            axios.get('/api/posts').then(response => this.posts = response.data);
        }
    }

</script>
