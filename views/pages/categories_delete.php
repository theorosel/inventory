<!-- $grid -->
<section class="grid-category-single card">
    <h1> <?= $title_page ?> </h1>

    <!-- $item -->
    <article class="category">
        <h2 class="category-title"> <?= $category->title ?> </h2>
        <p class="category-description"> <?= $category->description ?> </p>
    </article>

        <form action="#" method="post">
            <div class="submit validate">
                <input class="submit" type="submit" name="delete">
                <svg class="submit-icon"viewBox="0 0 13.35 9.67"><path class="cls-1" d="M4.77,9.67a1.22,1.22,0,0,1-.9-.4L.38,5.77a1.15,1.15,0,0,1,0-1.7,1.15,1.15,0,0,1,1.7,0l2.7,2.6,6.5-6.3a1.15,1.15,0,0,1,1.7,0,1.15,1.15,0,0,1,0,1.7l-7.3,7.2A1.09,1.09,0,0,1,4.77,9.67Z"/></svg>
            </div>
        </form>
    </div>
</section>
