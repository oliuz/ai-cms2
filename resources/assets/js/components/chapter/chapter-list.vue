<template>
    <div>
        <div class="ui items manga">
            <search data-placeholder="Search Manga..."
                @newItem="newItem"
                @keywordChanged="search"></search>
            <div class="item">
                <div class="content">
                    <a class="header">Chapter 1</a>
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
            <div class="ui pagination">
                <button class="ui large icon basic button">
                    <i class="fast backward icon"></i>
                </button>
                <button class="ui large icon basic button">
                    <i class="step backward icon"></i>
                </button>
                <span>Showing 2 to 10 of 100 items</span>
                <button class="ui large icon basic button">
                    <i class="step forward icon"></i>
                </button>
                <button class="ui large icon basic button">
                    <i class="fast forward icon"></i>
                </button>
            </div>
        </div>
    </div>
</template>
<script>
import pagination from '../utils/pagination.vue'
import search from '../utils/search-box.vue'
import axios from 'axios'
export default {
    data() {
        return {
            items: [],
            manga: null,
        }
    },
    components: {
        pagination,
        search,
    },
    props: {
        dataApi: { required: true, type: String },
        dataStore: { required: true, type: String },
        dataDelete: { required: true, type: String },
        dataUpdate: { required: true, type: String },
    },
    methods: {
        newItem() {
            //
        },
        search(keyword) {
            //
        },
        listItem(manga) {
            this.manga = manga
            this.getData()
        },
        getData() {
            console.log(this.manga)
        },
        getDataResponse(response) {
            //
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

