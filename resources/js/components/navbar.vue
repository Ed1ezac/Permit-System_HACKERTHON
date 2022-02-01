<template>
    <header class="fixed w-full z-50 shadow-md bg-white px-8 mb-10">
        <nav class="flex flex-row h-16 items-center justify-between">   
            <div class="">
                <a href="/">
                    <img class="h-10 bg-gray-200 text-white rounded-full" alt="logo"/>
                </a>
            </div>
            <div class="flex flex-row space-x-3">
                <a v-if="isAuth && isAdmin" class="hover:underline hover:text-gray-500" href="/MyApplications">Users</a>
                <a v-if="isAuth && isModerator" class="hover:underline hover:text-gray-500" href="/MyApplications">Approval Area</a>
                <a v-if="isAuth" class="hover:underline hover:text-gray-500" href="/MyApplications">My Permits</a>
                <a v-if="isAuth" v-on:click.prevent="logout" href="logout" class="hover:underline hover:text-gray-500">Logout</a>
                <!----->
                <a v-if=!isAuth class="hover:underline hover:text-gray-500" href="/login">Login</a>
                <a v-if=!isAuth class="hover:underline hover:text-gray-500" href="/register">Register</a>
            </div>
        </nav>
        <!--logout form-->
        <form ref="mform" action="/logout" method="POST" class="hidden">
            <input type="hidden" name="_token" :value="csrf">
        </form>
    </header>
</template>

<script>
    export default{
        data () {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },
        props:{
            isAuth: Boolean,
            isAdmin: Boolean,
            logoUri: String,
            isModerator: Boolean,
        },
        computed: {
            isOnAdmin(){
                return true;//this.currentUrl === 'admin';
            }
        },
        methods:{  
            logout: function(){
                this.$refs.mform.submit();
            },
        }
    }
</script>