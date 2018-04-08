<template>
    <div>
        <div class="ui items manga">
            <search data-placeholder="Search Manga..."
                @newItem="newItem"
                @keywordChanged="search"></search>
            <div class="item" v-for="item in items" :key="item.id">
                <div class="content">
                    <a class="header">{{ item.chapter_title }}</a>
                    <div class="extra">
                        <p>Upload at : {{ item.updated_at }}</p>
                        <p>Upload by : Administrator</p>
                    </div>
                </div>
                <div class="control">
                    <div class="ui vertical large buttons">
                        <button class="ui basic icon button">
                            <i class="folder open icon"></i>
                        </button>
                        <button class="ui red icon button">
                            <i class="trash icon"></i>
                        </button>
                    </div>
                </div>
            </div>
            <pagination
                :total-item.sync="totalItem"
                :end-item.sync="endItem"
                :start-item.sync="startItem"
                @prevPage="prevPage"
                @nextPage="nextPage"></pagination>
        </div>

        <create :data-show.sync="showCreate" @save="saveConfirm" @close="closeDialog"></create>
        <create :data-show.sync="showEdit" @save="editConfirm" @close="closeDialog"></create>
        <clear></clear>
    </div>
</template>
<script>
import create from './chapter-create.vue'
import clear from './chapter-delete.vue'
import pagination from '../utils/pagination.vue'
import search from '../utils/search-box.vue'
import axios from 'axios'
export default {
    data() {
        return {
            items: [],
            startItem: 0,
            endItem: 0,
            totalItem: 0,
            currentPage: 1,
            manga: null,
            showCreate: false,
            showEdit: false,
        }
    },
    components: {
        pagination,
        search,
        create,
        clear
    },
    props: {
        dataApi: { required: true, type: String },
        dataStore: { required: true, type: String },
        dataDelete: { required: true, type: String },
        dataUpdate: { required: true, type: String },
    },
    methods: {
        closeDialog() {
            this.showCreate = false
            this.showEdit = false
        },
        newItem() {
            console.log(this.manga)
            if (this.manga != null)
                this.showCreate = true
        },
        saveConfirm(data) {
            let newData = Object.assign(
                { id: this.manga.id },
                data,
            )

            axios.post(this.dataStore, newData).then(this.apiResponse)
        },
        editConfirm(data) {
            //
        },
        search(keyword) {
            //
        },
        prevPage() {
            // TODO prev page
        },
        nextPage() {
            // TODO next page
        },
        listItem(manga) {
            this.manga = manga
            this.getData()
        },
        getData() {
            let data = {
                id: this.manga.id,
                page: this.currentPage,
            }

            axios.post(this.dataApi, data).then(this.getDataResponse)
        },
        getDataResponse(response) {
            let data = response.data

            if (data.success) {
                let items = data.data

                this.items = []

                items.forEach(x => this.items.push(x))
            }
        },
        apiResponse(response) {
            let data = response.data

            if (data.success) {
                // TODO show success message
                this.getData()
            } else {
                // TODO show error message
                console.log(data)
            }
        }
    },
    mounted() {
        this.$bus.$on('chapter-list', this.listItem)
    },
    beforeDestroy() {
        this.$bus.$off('chapter-list', this.listItem)
    }
}
</script>

