<template>
    <sui-modal v-model="open">
        <sui-modal-header>Create/Edit Chapter</sui-modal-header>
        <sui-modal-content>
            <sui-modal-description>
                <sui-form>
                    <sui-form-field>
                        <label>Chapter Title</label>
                        <input type="text" placeholder="Chapter Title" v-model="title">
                    </sui-form-field>
                </sui-form>
            </sui-modal-description>
        </sui-modal-content>
        <sui-modal-actions>
            <sui-button color="red" floated="right" @click.native="hideModal">
                Cancel
            </sui-button>
            <sui-button floated="right" positive @click.native="saveData">
                OK
            </sui-button>
        </sui-modal-actions>
    </sui-modal>
</template>
<script>
export default {
    data() {
        return {
            open: false,
            title: null,
        }
    },
    props: {
        dataShow: { type: Boolean, dafault: false },
        dataItem: { type: Object, default() { return {} }}
    },
    methods: {
        hideModal() {
            this.open = false
            this.$emit('close')
        },
        showModal() {
            this.title = ''
            this.open = this.dataShow
        },
        saveData() {
            let data = {
                title: this.title
            }

            this.$emit('save', data)
            this.hideModal()
        }
    },
    watch: {
        dataShow: {
            handler(val) {
                this.showModal()
            }
        },
        dataItem: {
            handler(val) {
                if ('title' in this.dataItem)
                {
                    this.title = this.dataItem.title
                }
            }
        }
    }
}
</script>
