<template>
    <div>
        <navbar></navbar>
        <post :posts="posts"></post>
    </div>

</template>

<script>
    import post from "../components/post";
    import navbar from "./layouts/navbar";
    export default {
        components: {
            post,
            navbar
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
