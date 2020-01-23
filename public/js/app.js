new Vue({
    el: '#app',
    data: {
        books: [],
        sortBy: 'year',
        sort: 'desc'
    },
    created: function() {
        this.books = window.__INITIAL_STATE__
    },
    methods: {

    },
    computed: {
        // I figure if you ever expanded on this you'd want a good base for sorting.
        sortedBooks: function() {
            // We can use Array.from here for a shallow copy since were not
            // modifying object data.
            const sortedArray = Array.from(this.books);

            switch(this.sortBy) {
                case 'year':
                    sortedArray.sort((a, b) => a.year - b.year);
                    break;
            }

            // Sorted by ascending by default.
            if (this.sort == 'desc') {
                sortedArray.reverse()
            }

            return sortedArray;
        }
    }
});
