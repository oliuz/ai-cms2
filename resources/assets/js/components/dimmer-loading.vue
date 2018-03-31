<template>
    <div :class="currentClass">
        <slot></slot>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isActive: false,
            }
        },
        computed: {
            currentClass() {
                let defaultClass = ['ui', 'dimmer']

                if (this.isActive) defaultClass.push('active')

                return defaultClass
            }
        },
        props: {
            dataName: { required: true, type: String }
        },
        methods: {
            showLoading(param) {
                if (param.name == this.dataName) this.isActive = true
            },
            hideLoading(param) {
                if (param.name == this.dataName) this.isActive = false
            }
        },
        mounted() {
            this.$bus.$on('show-loading', this.showLoading)
            this.$bus.$on('hide-loading', this.hideLoading)
        },
        beforeDestroy() {
            this.$bus.$off('show-loading', this.showLoading)
            this.$bus.$off('hide-loading', this.hideLoading)
        }
    }
</script>

