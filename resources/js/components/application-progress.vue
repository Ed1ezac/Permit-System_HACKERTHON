<template>
    <div class="h-full">
        <div class="font-semibold text-gray-900 tracking-wide">STEP {{step}} OF 4</div>
        <div class="flex flex-col mt-3">
            <div v-for="(item, index) in steps"
                v-bind:key="index">
                <div class="">
                    <div class="flex items-center space-x-2 mt-2">               
                        <svg v-if="index+1 < step" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 rounded-sm bg-gray-600 text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        <svg v-else-if="index+1 == step" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 rounded-sm bg-gray-300 text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                        <svg v-else-if="index+1 > step" xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 rounded-sm border-2 border-gray-300 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                        <div class="font-medium text-gray-800">{{ item.label }}</div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</template>

<script>
    export default{
        data () {
            return {
                currentStep: 1,
                isOpen: false,
                steps: [
                    {"label": "Basic Information"},
                    {"label": "Business Details"},
                    {"label": "Upload Documents"},
                    {"label": "Pay & Submit"},
                ]
                //csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        },
        props:{
            step:{
                type: Number,
                default: 1,
            },
         },
        computed: {
            progressClasses() {
                
            }
        },
        methods:{
        },
    }
</script>