<template>
    <nav class="flex flex-row justify-between align-center bg-white h-16">
        <div>
            <img class="h-10" alt="logo"/>
        </div>

        <div></div>
    </nav>
</template>

<script>
    export default{
        data () {
            return {

            }
        },
        props:{
            currentAdminUrl: {
                type: String,
                default: '',
            },
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