<template>
    <div class="ui items manga">
        <search data-placeholder="Search Manga..."
            @newItem="newItem"
            @keywordChanged="searchKey"></search>
        <div class="item">
            <div class="content">
                <a class="header">Shannon Garcia</a>
                <div class="extra">
                    <p>Upload at : 28-03-2018 02:00</p>
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
        <div class="item">
            <div class="content">
                <a class="header">Shannon Garcia</a>
                <div class="extra">
                    <p>Upload at : 28-03-2018 02:00</p>
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
            @prevPage="prevPage"></pagination>
    </div>
</template>

<script>
    import pagination from '../utils/pagination.vue'
    import search from '../utils/search-box.vue'
    import axios from 'axios'
    export default {
        components: {
            pagination,
            search
        },
        data() {
            return {
                currentPage: 0,
                startItem: 0,
                endItem: 0,
                totalItem: 0,
                items: [],
            }
        },
        props: {
            dataApi: { required: true, type: String },
        },
        methods: {
            newItem() {
                // Open modal dialog
            },
            searchKey(keyword) {
                console.log(keyword)
            },
            prevPage() {
                console.log('nextPage')
            },
            getData() {
                axios.get(this.dataApi).then(this.getDataResponse)
            },
            getDataResponse(response) {
                let data = response.data

                console.log(data)
            }
        },
        mounted() {
            this.getData()
        }
    }
</script>