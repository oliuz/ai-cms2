<template>
    <div class="ui pagination">
        <button class="ui large icon basic button" @click="firstPage">
            <i class="fast backward icon"></i>
        </button>
        <button class="ui large icon basic button" @click="prevPage">
            <i class="step backward icon"></i>
        </button>
        <span>Showing {{ startItem }} to {{ endItem }} of {{ totalItem }} items</span>
        <button class="ui large icon basic button" @click="nextPage">
            <i class="step forward icon"></i>
        </button>
        <button class="ui large icon basic button" @click="lastPage">
            <i class="fast forward icon"></i>
        </button>
    </div>
</template>

<script>
    export default {
        data() {
            return {}
        },
        props: {
            startItem: { type: Number, required: true },
            endItem: { type: Number, required: true },
            totalItem: { type: Number, required: true },
        },
        methods: {
            prevPage() {
                this.$emit('prevPage')
            },
            nextPage() {
                this.$emit('nextPage')
            },
            firstPage() {
                this.$emit('firstPage')
            },
            lastPage() {
                this.$emit('lastPage')
            }
        }
    }
</script>
