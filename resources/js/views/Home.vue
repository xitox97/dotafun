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
            posts: [{
                    title: "Easy Rampage",
                    image: "https://i.imgur.com/F8tNiCS.jpg",
                    description: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.",
                    vote: 4
                },
                {
                    title: "No Rampage",
                    image: "https://i.imgur.com/WxpJ48N.jpg",
                    description: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.",
                    vote: 100
                }
            ],
        };
    }
    }

</script>
