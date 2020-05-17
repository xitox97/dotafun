<template>

    <b-navbar fixed-top="true" type='is-black'>
        <template slot="brand">
            <b-navbar-item tag="router-link" :to="{ path: '/' }">
                <p class="has-text-primary">DotaFun</p>
                <img src="/images/dotafun.png">
            </b-navbar-item>
        </template>
        <template slot="start">
            <b-navbar-item tag="router-link" to="/posts/create">
                    <button class="button is-primary">
                        + POST
                    </button>
            </b-navbar-item>

        </template>

        <template slot="end">

               <b-navbar-item tag="div">
              <b-field>
            <b-input placeholder="Search..."
                type="search"
                icon="magnify"
                icon-clickable
                @icon-click="searchIconClick">
            </b-input>
        </b-field>
               </b-navbar-item>
                  <b-navbar-item tag="div">
                <div class="buttons">
                    <a class="button is-primary">
                        Log in
                    </a>
                </div>
            </b-navbar-item>
        </template>
    </b-navbar>


</template>
<script>

export default {

};
</script>
