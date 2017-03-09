<!-- $grid -->
<div class="form-container">
    <h1> <?= $title_page ?> </h1>
    <div class="error-box <?= !empty($error_messages) ? 'active' : '' ?>">
        <?php foreach ($error_messages as $error_message): ?>
            <p class="error-message"> <?= $error_message ?></p>
        <?php endforeach; ?>

    </div>

    <!-- $form -->
    <form class="form-category" action="#" method="post" enctype="multipart/form-data">

        <div class="form-control <?= array_key_exists('title', $error_messages) ? 'error' : '' ?>">
            <label for="title">Title :</label>
            <input type="text" name="title" value="<?= $title ?> ">
        </div>

        <div class="form-control <?= array_key_exists('description', $error_messages) ? 'error' : '' ?>">
            <label for="description">Description :</label>
            <textarea name="description"><?= $description ?></textarea>
        </div>

        <div class="submit validate">
            <input class="submit" type="submit" name="submit">
            <svg class="submit-icon"viewBox="0 0 13.35 9.67"><path class="cls-1" d="M4.77,9.67a1.22,1.22,0,0,1-.9-.4L.38,5.77a1.15,1.15,0,0,1,0-1.7,1.15,1.15,0,0,1,1.7,0l2.7,2.6,6.5-6.3a1.15,1.15,0,0,1,1.7,0,1.15,1.15,0,0,1,0,1.7l-7.3,7.2A1.09,1.09,0,0,1,4.77,9.67Z"/></svg>
        </div>

        <div class="submit delete">
            <a href="<?= URL ?>categories/delete/<?= $id ?>">
                <svg  class="submit-icon" viewBox="0 0 408.483 408.483">
                      <path d="M87.748 388.784c0.461 11.01 9.521 19.699 20.539 19.699h191.911c11.018 0 20.078-8.689 20.539-19.699l13.705-289.316H74.043L87.748 388.784zM247.655 171.329c0-4.61 3.738-8.349 8.35-8.349h13.355c4.609 0 8.35 3.738 8.35 8.349v165.293c0 4.611-3.738 8.349-8.35 8.349h-13.355c-4.61 0-8.35-3.736-8.35-8.349V171.329zM189.216 171.329c0-4.61 3.738-8.349 8.349-8.349h13.355c4.609 0 8.349 3.738 8.349 8.349v165.293c0 4.611-3.737 8.349-8.349 8.349h-13.355c-4.61 0-8.349-3.736-8.349-8.349V171.329L189.216 171.329zM130.775 171.329c0-4.61 3.738-8.349 8.349-8.349h13.356c4.61 0 8.349 3.738 8.349 8.349v165.293c0 4.611-3.738 8.349-8.349 8.349h-13.356c-4.61 0-8.349-3.736-8.349-8.349V171.329z"/>
                      <path d="M343.567 21.043h-88.535V4.305c0-2.377-1.927-4.305-4.305-4.305h-92.971c-2.377 0-4.304 1.928-4.304 4.305v16.737H64.916c-7.125 0-12.9 5.776-12.9 12.901V74.47h304.451V33.944C356.467 26.819 350.692 21.043 343.567 21.043z"/>
                </svg>
            </a>
        </div>

    </form>
</div>
