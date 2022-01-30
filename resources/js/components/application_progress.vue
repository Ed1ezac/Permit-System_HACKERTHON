<template>
    <div>
        
        <div class="progress-background"></div>
        <div class="flex flex-col">
            <div v-for="(step) in steps"
                v-bind:key="step.label">
                <div class="">
                    <div class="flex space-x-4">
                        <div class="h-5 w-5 rounded-full"></div>
                        <div class="supporting-text">{{ step.label }}</div>
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
                currentStep: 2,
                isOpen: false,
                steps: [
                    {"label": "Basic Information"},
                    {"label": "Business Details"},
                    {"label": "Upload Documents"},
                    {"label": "Payment"},
                    {"label": "Completion"}
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
                let result = 'progress '
                if (this.currentStep && this.currentStep.label === 'complete') {
                    return result += 'progress--complete'
                }
                return result += `progress--${this.steps.indexOf(this.currentStep) + 1}`
            }
        },
        methods:{
            nextStep(next=true) {
                const steps = this.steps
                const currentStep = this.currentStep
                const currentIndex = steps.indexOf(currentStep)
                
                // handle back
                if (!next) {
                    if (currentStep && currentStep.label === 'complete') {
                    return this.currentStep = steps[steps.length - 1]           
                    }

                    if (steps[currentIndex - 1]) {
                    return this.currentStep = steps[currentIndex - 1] 
                    }

                    return this.currentStep = { "label": "start" }   
                }
                
                // handle next
                if (this.currentStep && this.currentStep.label === 'complete') {
                    return this.currentStep = { "label": "start" }
                }
                
                if (steps[currentIndex + 1]) {
                    return this.currentStep = steps[currentIndex + 1]
                }

                this.currentStep = { "label": "complete" }   
            },
            stepClasses(index) {
                let result = `progress__step progress__step--${index + 1} `
                if (this.currentStep && this.currentStep.label === 'Completion' ||
                    index < this.steps.indexOf(this.currentStep)) {
                    return result += 'progress__step--complete'
                }
                if (index === this.steps.indexOf(this.currentStep)) {
                    return result += 'progress__step--active'
                }
                return result
            }
        },
    }
</script>

<style> 

</style>
