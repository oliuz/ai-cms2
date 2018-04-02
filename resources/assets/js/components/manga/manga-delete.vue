<template>
    <sui-modal v-model="show" basic>
        <div class="ui icon header">
            <i class="archive icon"></i>
            Delete Manga
        </div>
        <div class="content">
            <p style="text-align: center;">Are you sure want to delete this manga?</p>
        </div>
        <div class="actions">
            <button class="ui red basic cancel inverted button" @click="no">
                <i class="remove icon"></i>
                No
            </button>
            <button class="ui green ok inverted button" @click="yes">
                <i class="checkmark icon"></i>
                Yes
            </button>
        </div>
    </sui-modal>
</template>

<script>
export default {
    data() {
        return {
            show: false,
        }
    },
    props: {
        dataShow: { type: Boolean, dafault: false }
    },
    methods: {
        yes() {
            this.$emit('onok');
            this.hide()
        },
        no() {
            this.$emit('oncancel');
            this.hide()
        },
        hide() {
            this.show = false
        }
    },
    watch: {
        dataShow: {
            handler(val) {
                this.show = this.dataShow
            }
        }
    }
}
</script>
