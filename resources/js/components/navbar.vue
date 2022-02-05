<template>
    <header class="fixed w-full z-50 shadow-md bg-white px-8 mb-10">
        <nav class="flex flex-row h-16 items-center justify-between">   
            <div class="">
                <a href="/">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-7 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                    </svg>
                    <div class="text-headnings font-semibold text-gray-900 ml-1">Alpha</div>
                </div>
                </a>
            </div>
            <div class="flex flex-row space-x-3">
                <!---&& isModerator" ,  && isAdmin--->
                <a v-if="isAuth" class="hover:text-gray-500" href="/administrator">Admin</a>
                <a v-if="isAuth"  class="hover:text-gray-500" href="/Officer/Panel">Officer</a>
                <a v-if="isAuth" class="hover:text-gray-500" href="/home">Home</a>
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