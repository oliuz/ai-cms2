<template>
    <div class="ui fluid right icon left action input search">
        <button class="ui icon green large button" @click="addClick">
            <i class="plus icon"></i>
        </button>
        <i class="search icon"></i>
        <input type="text" :placeholder="dataPlaceholder" v-model="keyword">
    </div>
</template>

<script>
export default {
    data() {
        return {
            keyword: ''
        }
    },
    props: {
        dataPlaceholder: { type: String, required: true }
    },
    methods: {
        addClick() {
            this.$emit('newItem')
        },
        onChange() {
            this.$emit('keywordChanged', this.keyword)
        }
    },
    watch: {
        keyword: {
            handler() {
                this.onChange()
            }
        }
    }
}
</script>
