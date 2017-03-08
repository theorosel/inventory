function Controls (element) {

    this.$el              = {};
    this.$el.container    = element;
    this.$el.items_count  = this.$el.container.querySelector('.items-number');
    this.$el.search       = this.$el.container.querySelector('#search');
    this.$el.toggle_list  = this.$el.container.querySelector('.products-controls-list');
    this.$el.toggle_card  = this.$el.container.querySelector('.products-controls-card');
    this.$el.grid         = this.$el.container.querySelector('.grid');
    this.$el.order        = this.$el.container.querySelector('.order');

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
        self.search(
            self.$el.search.value,
            self.$el.order.value
        );
    });


    /*
     * $order select listener for ajax request
     */
    this.$el.order.addEventListener('change', function() {
        self.search(
            self.$el.search.value,
            self.$el.order.value
        );
    });


    /*
     * toggle_list()
     * Called when user click on list link
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
     * Called when user click on card link
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
     * search(value : string, order : string)
     * Called when user type in search input and/or select a classification
     * Ajax request to 'includes/api' according to value and order parameters
     */
    this.search = function(value, order) {

        var xhttp  = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {

                if (this.readyState == 4 && this.status == 200) {
                    self.print(this.responseText);
                }
            };

            xhttp.open("GET", "/api/search?value="+ value +"&order=" + order, true);
            xhttp.send();
    }


    /*
     * print(responseText : string)
     * Called in search()
     * Display items according to ajax request
     */
    this.print = function(responseText) {

        var url  = JSON.parse(responseText).url
            item = JSON.parse(responseText).result;

        // empty grid and items counter
        this.$el.grid.innerHTML = '';
        this.$el.items_count .innerHTML = '';

        // Create article for each item is call
        for (var i = 0; i < item.length; i++) {

            // construct template
            this.$el.grid.innerHTML +=
                '<article class="item">' +
                    '<span class="item-id">' + item[i].id + '</span>' +
                    '<div class="item-shot">' +
                        '<div class="item-shot-container">' +
                            '<img src="'+ url + 'uploads/' + item[i].image +'" alt="' + item[i].title + '">' +
                        '</div>' +
                    '</div>' +
                    '<h2 class="item-title">' + item[i].title + '</h2>' +

                    '<p class="item-category">' +
                        '<span class="text">Category</span>' +
                        '<span class="data">' + item[i].category+ '</span>' +
                    '</p>' +
                    '<p class="item-price">' +
                        '<span class="text">Price</span>' +
                        '<span class="data"> $ ' + item[i].price + '</span>' +
                    '</p>' +
                    '<p class="item-quantity">' +
                        '<span class="text">Quantity</span>' +
                        '<span class="data">' + item[i].quantity + '</span>' +
                    '</p>' +
                    '<div class="item-btn">' +
                        '<a href="' + url + 'products/edit/' + item[i].id + '" class="item-edit">' +
                            '<svg class="item-btn-icon" viewBox="0 0 459 459">' +
                                '<path d="M0 362.1V459h96.9l280.5-283.05 -96.9-96.9L0 362.1zM451.35 102c10.2-10.2 10.2-25.5 0-35.7L392.7 7.649c-10.2-10.2-25.5-10.2-35.7 0l-45.9 45.9 96.9 96.9L451.35 102z"/>' +
                            '</svg>' +
                        '</a>' +
                        '<a href="' + url + 'products/delete/' + item[i].id + '" class="item-delete">' +
                            '<svg  class="item-btn-icon" viewBox="0 0 408.483 408.483">' +
                                  '<path d="M87.748 388.784c0.461 11.01 9.521 19.699 20.539 19.699h191.911c11.018 0 20.078-8.689 20.539-19.699l13.705-289.316H74.043L87.748 388.784zM247.655 171.329c0-4.61 3.738-8.349 8.35-8.349h13.355c4.609 0 8.35 3.738 8.35 8.349v165.293c0 4.611-3.738 8.349-8.35 8.349h-13.355c-4.61 0-8.35-3.736-8.35-8.349V171.329zM189.216 171.329c0-4.61 3.738-8.349 8.349-8.349h13.355c4.609 0 8.349 3.738 8.349 8.349v165.293c0 4.611-3.737 8.349-8.349 8.349h-13.355c-4.61 0-8.349-3.736-8.349-8.349V171.329L189.216 171.329zM130.775 171.329c0-4.61 3.738-8.349 8.349-8.349h13.356c4.61 0 8.349 3.738 8.349 8.349v165.293c0 4.611-3.738 8.349-8.349 8.349h-13.356c-4.61 0-8.349-3.736-8.349-8.349V171.329z"/>' +
                                  '<path d="M343.567 21.043h-88.535V4.305c0-2.377-1.927-4.305-4.305-4.305h-92.971c-2.377 0-4.304 1.928-4.304 4.305v16.737H64.916c-7.125 0-12.9 5.776-12.9 12.901V74.47h304.451V33.944C356.467 26.819 350.692 21.043 343.567 21.043z"/>' +
                            '</svg>' +
                        '</a>' +
                    '</div>' +
                '</article>'
            ;
        };

        // render the number of items according to response
        if (item.length > 1) {
            this.$el.items_count .innerHTML = item.length + ' items';
        }

        else {
            this.$el.items_count .innerHTML = item.length + ' item';
        }

        // console.log(JSON.parse(responseText));
        // console.log(typeof item.length);
    }
}

var controls = new Controls(document.querySelector('.app'));
