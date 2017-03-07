<!-- $grid -->
<section class="grid card">

    <article class="item">
        <span class="item-id"> <?= $item->id ?> </span>
        <div class="item-shot">
            <div class="item-shot-container">
                <img src="<?= URL ?>uploads/<?= $item->image ?>" alt="<?= $item->title ?>">
            </div>
        </div>
        <h2 class="item-title"> <?= $item->title ?> </h2>

        <p class="item-description"> <?= $item->description ?></p>

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
    </article>
        <form action="#" method="post">
            <div class="submit validate">
                <input class="submit" type="submit" name="delete">
                <svg class="submit-icon"viewBox="0 0 13.35 9.67"><path class="cls-1" d="M4.77,9.67a1.22,1.22,0,0,1-.9-.4L.38,5.77a1.15,1.15,0,0,1,0-1.7,1.15,1.15,0,0,1,1.7,0l2.7,2.6,6.5-6.3a1.15,1.15,0,0,1,1.7,0,1.15,1.15,0,0,1,0,1.7l-7.3,7.2A1.09,1.09,0,0,1,4.77,9.67Z"/></svg>
            </div>
        </form>
    </div>
</section>
