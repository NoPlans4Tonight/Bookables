<template>
    <div>
        <div v-if="loading">
            Data is loading...
        </div>
        <div v-else>
            <div class="row mb-4" v-for="row in rows" :key="'row' + row">
                <div 
                class="col" 
                v-for="(bookable, column) in bookablesInRow(row)" 
                :key="'row' + row + column"
                >
                    <item  
                    :item-title="bookable.title" 
                    :item-content="bookable.content" 
                    :price="1000" 
                    ></item> <!-- we gave the call a short html tag "item"--> 
                </div>
                <div 
                class="col" 
                v-for="p in placeholdersInRow(row)" 
                :key="'placeholder' + row + p"
                ></div>
            </div>
            
        </div>
        <!-- <bookable-list-item></bookable-list-item>  kebob case even when the component is not does not work in reverse-->
        <!--<item v-if="bookable2" :item-title="bookable2.title" :item-content="bookable2.content" :price="500"></item>-->
    </div>
</template>

<script>
import BookableListItem from "./BookableListItem";

export default {
    components: {
        //HTML tag : imported vue file
        "item": BookableListItem
    },
    data() {
        return {
            bookables: null,
            loading: false,
            columns: 3,
        };
    },
    computed: {
        rows(){
            return this.bookables === null // if bookables is null
            ? 0 // return 0
            : Math.ceil(this.bookables.length / this.columns); // else show
        }
    },
    methods: {
        bookablesInRow(row){
            return this.bookables.slice((row - 1) * this.columns, row * this.columns)
        },
        placeholdersInRow(row) {
            return this.columns - this.bookablesInRow(row).length;
        }
    },

    created() {
        // '=> {}' arrow function that replaces const f = function () { }
        this.loading = true;
        setTimeout(() => {
            this.bookables = [
                {
                    title:"Cheap Villa!!!",
                    content: "A very cheap Villa",
                },
                {
                    title:"Cheap Villa 2",
                    content: "A very cheap Villa 2",
                },
                {
                    title:"Cheap Villa 2",
                    content: "A very cheap Villa 3",
                },
                {
                    title:"Cheap Villa 2",
                    content: "A very cheap Villa 4",
                },
                {
                    title:"Cheap Villa 2",
                    content: "A very cheap Villa 5",
                },
                {
                    title:"Cheap Villa 2",
                    content: "A very cheap Villa 6",
                },
                {
                    title:"Cheap Villa 2",
                    content: "A very cheap Villa 7",
                },
            ];
            this.loading = false;
        }, 2000);
    }
};
</script>