<!-- $products control -->
<section class="products-controls">
    <div class="products-controls-container">
        <div class="products-controls-left">
            <p class="item-number">123 items</p>
            <input type="search" id="search" name="search" placeholder="Search any product">
        </div>

        <div class="products-controls-right">
            <a href="#" class="products-controls-list">
                <svg  class="products-controls-icon" viewBox="0 0 16 13"><path d="M0 0h3v3H0V0zm0 5h3v3H0V5zm0 5h3v3H0v-3zM5 0h11v3H5V0zm0 5h11v3H5V5zm0 5h11v3H5v-3z"/></svg>
            </a>
            <a href="#" class="products-controls-card">
                <svg class="products-controls-icon" viewBox="0 0 26.995 26.995"><path d="M0 11.808h11.81V0H0V11.81zM15.184 0V11.81h11.81V0h-11.81zm0 26.993h11.81V15.185h-11.81v11.808zM0 26.993h11.81V15.185H0v11.808z"/></svg>
            </a>
        </div>
    </div>
</section>

<!-- $grid items -->
<section class="grid card">

    <!-- $item -->
    <?php foreach ($items as $item): ?>
    <article class="item">
        <span class="item-id"> <?= $item->id ?> </span>
        <div class="item-shot">
            <div class="item-shot-container">
                <img src="<?= URL ?>uploads/<?= $item->image ?>" alt="<?= $item->title ?>">
            </div>
        </div>
        <h2 class="item-title"> <?= $item->title ?> </h2>

        <p class="item-category">
            <span class="text">Category</span>
            <span class="data"> <?= $item->category ?> </span>
        </p>
        <p class="item-price">
            <span class="text">Price</span>
            <span class="data"> $ <?= $item->price ?> </span>
        </p>
        <p class="item-quantity">
            <span class="text">Quantity</span>
            <span class="data"> <?= $item->quantity ?> </span>
        </p>
        <div class="item-btn">
            <a href="<?= URL ?>products/edit/<?= $item->id ?>" class="item-edit">
                <svg class="item-btn-icon" viewBox="0 0 459 459">
                    <path d="M0 362.1V459h96.9l280.5-283.05 -96.9-96.9L0 362.1zM451.35 102c10.2-10.2 10.2-25.5 0-35.7L392.7 7.649c-10.2-10.2-25.5-10.2-35.7 0l-45.9 45.9 96.9 96.9L451.35 102z"/>
                </svg>
            </a>
            <a href="<?= URL ?>products/delete/<?= $item->id ?>" class="item-delete">
                <svg  class="item-btn-icon" viewBox="0 0 408.483 408.483">
                      <path d="M87.748 388.784c0.461 11.01 9.521 19.699 20.539 19.699h191.911c11.018 0 20.078-8.689 20.539-19.699l13.705-289.316H74.043L87.748 388.784zM247.655 171.329c0-4.61 3.738-8.349 8.35-8.349h13.355c4.609 0 8.35 3.738 8.35 8.349v165.293c0 4.611-3.738 8.349-8.35 8.349h-13.355c-4.61 0-8.35-3.736-8.35-8.349V171.329zM189.216 171.329c0-4.61 3.738-8.349 8.349-8.349h13.355c4.609 0 8.349 3.738 8.349 8.349v165.293c0 4.611-3.737 8.349-8.349 8.349h-13.355c-4.61 0-8.349-3.736-8.349-8.349V171.329L189.216 171.329zM130.775 171.329c0-4.61 3.738-8.349 8.349-8.349h13.356c4.61 0 8.349 3.738 8.349 8.349v165.293c0 4.611-3.738 8.349-8.349 8.349h-13.356c-4.61 0-8.349-3.736-8.349-8.349V171.329z"/>
                      <path d="M343.567 21.043h-88.535V4.305c0-2.377-1.927-4.305-4.305-4.305h-92.971c-2.377 0-4.304 1.928-4.304 4.305v16.737H64.916c-7.125 0-12.9 5.776-12.9 12.901V74.47h304.451V33.944C356.467 26.819 350.692 21.043 343.567 21.043z"/>
                </svg>
            </a>
        </div>
    </article>
    <?php endforeach; ?>

</section>
<div class="submit add">
    <a href="<?= URL ?>products/add">
        <svg class="submit-icon"viewBox="0 0 12.5 12.5"><path d="M11.8,4.7h-4V.7A.68.68,0,0,0,7.1,0H5.4a.68.68,0,0,0-.7.7v4H.7a.68.68,0,0,0-.7.7V7.1a.68.68,0,0,0,.7.7h4v4a.68.68,0,0,0,.7.7H7.1a.68.68,0,0,0,.7-.7v-4h4a.68.68,0,0,0,.7-.7V5.4A.75.75,0,0,0,11.8,4.7Z"/></svg>
    </a>
</div>
