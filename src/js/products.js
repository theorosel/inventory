function Controls (element) {

    this.$el             = {};
    this.$el.container   = element;
    this.$el.search      = this.$el.container.querySelector('#search');
    this.$el.toggle_list = this.$el.container.querySelector('.products-controls-list');
    this.$el.toggle_card = this.$el.container.querySelector('.products-controls-card');
    this.$el.grid        = this.$el.container.querySelector('.grid');

    var self = this;


    /*
     * $toggle list and card click listener
     */
    this.$el.toggle_list.addEventListener('click', function(event) {
        self.toggle_list();
    });

    this.$el.toggle_card.addEventListener('click', function(event) {
        self.toggle_card();
    });


    /*
     * $search keyup listener for ajax request
     */
    this.$el.search.addEventListener('keyup', function() {
        self.search();
    });


    /*
     * toggle_list()
     * Called when DOM is fully loaded
     */
    this.toggle_list = function() {

        if (this.$el.grid.classList.contains('card')) {
            this.$el.grid.classList.remove('card');
            this.$el.grid.classList.add('list');
        }
        else {
            return false;
        }
    }


    /*
     * toggle_card()
     * Called when DOM is fully loaded
     */
    this.toggle_card = function() {

        if (this.$el.grid.classList.contains('list')) {
            this.$el.grid.classList.remove('list');
            this.$el.grid.classList.add('card');
        }
        else {
            return false;
        }
    }


    /*
     * search()
     * Called when user type in search input
     */
    this.search = function() {

        var search =this.$el.search,
            value  = encodeURIComponent(search.value),
            xhttp  = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {

                if (this.readyState == 4 && this.status == 200) {

                    var results_array  = (JSON.parse(this.responseText));

                }
            };

        console.log(value);
    }
}

var controls = new Controls(document.querySelector('.app'));
