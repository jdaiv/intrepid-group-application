new Vue({
    el: '#app',
    data: {
        books: [],
        sortBy: 'year',
        sortDesc: true,
        filters: {
            rating: 'all'
        }
    },
    created: function() {
        this.books = window.__INITIAL_STATE__
    },
    methods: {
        filterRating: function(evt) {
            this.filters.rating = evt.target.value;
        },
        // Not stricly part of the requirements, but while you're at it...
        sort: function(column) {
            if (this.sortBy === column) {
                this.sortDesc = !this.sortDesc
            } else {
                this.sortBy = column
                this.sortDesc = false
            }
        }
    },
    computed: {
        // I figure if you ever expanded on this you'd want a good base for sorting.
        sortedBooks: function() {
            // We can use Array.from here for a shallow copy since were not
            // modifying object data.
            let sortedArray = Array.from(this.books);

            if (this.filters.rating !== 'all') {
                sortedArray = sortedArray.filter(x => x.rating == this.filters.rating)
            }

            switch(this.sortBy) {
                case 'year':
                    sortedArray.sort((a, b) => a.year - b.year);
                    break;
            }

            // Sorted by ascending by default.
            if (this.sortDesc) {
                sortedArray.reverse();
            }

            return sortedArray;
        }
    }
});
