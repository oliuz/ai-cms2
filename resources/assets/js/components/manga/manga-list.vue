<template>
    <div>
        <div class="ui items manga">
            <search data-placeholder="Search Manga..."
                @newItem="newItem"
                @keywordChanged="searchKey"></search>
            
            <div class="item" v-for="item in items" :key="item.id">
                <div class="content">
                    <a class="header">{{ item.title }}</a>
                    <div class="extra">
                        <p>Upload at : {{ item.updated_at }}</p>
                        <p>Upload by : {{ item.id_uploader }}</p>
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
                @prevPage="prevPage"></pagination>
        </div>
        <create :data-show.sync="showCreate" @save="saveItem" @close="closeDialog"></create>
    </div>
</template>

<script>
    import create from './manga-create.vue'
    import pagination from '../utils/pagination.vue'
    import search from '../utils/search-box.vue'
    import axios from 'axios'
    export default {
        components: {
            pagination,
            search,
            create,
        },
        data() {
            return {
                currentPage: 1,
                maxPage: 0,
                startItem: 0,
                endItem: 0,
                totalItem: 0,
                items: [],
                showCreate: false,
            }
        },
        props: {
            dataApi: { required: true, type: String },
            dataStore: { required: true, type: String },
        },
        methods: {
            saveItem(data) {
                axios.post(this.dataStore, data).then(this.saveResponse)
            },
            saveResponse(response) {
                let data = response.data

                if (data.success) {
                    //show success message
                    this.getData()
                } else {
                    //show error message
                    console.log(data)
                }
            },
            closeDialog() {
                this.showCreate = false
            },
            newItem() {
                this.showCreate = true
            },
            searchKey(keyword) {
            },
            prevPage() {
            },
            getData() {
                let query = {
                    page: this.currentPage
                }

                this.$bus.$emit('show-loading', {name: 'loading-manga'})

                axios.get(this.dataApi, {params: query}).then(this.getDataResponse)
            },
            getDataResponse(response) {
                let data = response.data

                if (data.success) {
                    let item = data.data

                    this.startItem = item.from
                    this.endItem = item.to
                    this.totalItem = item.total
                    this.maxPage = item.last_page
                    this.items = []

                    item.data.forEach(x => this.items.push(x))
                    this.$bus.$emit('hide-loading', {name: 'loading-manga'})
                }
            }
        },
        mounted() {
            this.getData()
        }
    }
</script>