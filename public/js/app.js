new Vue({
    el: '#app',
    data: {
        books: [],
    },
    created: function() {
        this.books = window.__INITIAL_STATE__
    },
    methods: {

    },
    computed: {

    }
});
