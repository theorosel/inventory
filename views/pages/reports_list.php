<!-- $grid reports -->
<section class="grid-report list">

    <!-- $report -->
    <?php foreach ($reports as $report): ?>

    <article class="report">
        <h2 class="report-title"> <?= $report->title ?> </h2>
        <p class="report-date"> <?= $report->date ?> </p>
        <div class="report-btn">
            <a href="<?= URL ?>uploads/<?= $report->file?>" class="report-download">
                <svg viewBox="0 0 459 459">
                    <svg viewBox="0 0 13.4 13.3"><path class="cls-1" d="M12.1,8.3A1.11,1.11,0,0,0,11,9.4v1a.58.58,0,0,1-.6.6H2.8a.58.58,0,0,1-.6-.6v-1A1.11,1.11,0,0,0,1.1,8.3,1.11,1.11,0,0,0,0,9.4v1a2.9,2.9,0,0,0,2.9,2.9h7.6a2.9,2.9,0,0,0,2.9-2.9v-1A1.3,1.3,0,0,0,12.1,8.3Z"/><path class="cls-1" d="M5.9,9.6a1.22,1.22,0,0,0,1.6,0L11,6.1a1,1,0,0,0,0-1.6,1,1,0,0,0-1.6,0L7.8,6V1.1a1.1,1.1,0,1,0-2.2,0V6L4.1,4.5a1,1,0,0,0-1.6,0,1,1,0,0,0,0,1.6Z"/></svg>
                </svg>
            </a>
            <a href="<?= URL ?>reports/delete/<?= $report->id ?>" class="report-delete">
                <svg viewBox="0 0 408.483 408.483">
                      <path d="M87.748 388.784c0.461 11.01 9.521 19.699 20.539 19.699h191.911c11.018 0 20.078-8.689 20.539-19.699l13.705-289.316H74.043L87.748 388.784zM247.655 171.329c0-4.61 3.738-8.349 8.35-8.349h13.355c4.609 0 8.35 3.738 8.35 8.349v165.293c0 4.611-3.738 8.349-8.35 8.349h-13.355c-4.61 0-8.35-3.736-8.35-8.349V171.329zM189.216 171.329c0-4.61 3.738-8.349 8.349-8.349h13.355c4.609 0 8.349 3.738 8.349 8.349v165.293c0 4.611-3.737 8.349-8.349 8.349h-13.355c-4.61 0-8.349-3.736-8.349-8.349V171.329L189.216 171.329zM130.775 171.329c0-4.61 3.738-8.349 8.349-8.349h13.356c4.61 0 8.349 3.738 8.349 8.349v165.293c0 4.611-3.738 8.349-8.349 8.349h-13.356c-4.61 0-8.349-3.736-8.349-8.349V171.329z"/>
                      <path d="M343.567 21.043h-88.535V4.305c0-2.377-1.927-4.305-4.305-4.305h-92.971c-2.377 0-4.304 1.928-4.304 4.305v16.737H64.916c-7.125 0-12.9 5.776-12.9 12.901V74.47h304.451V33.944C356.467 26.819 350.692 21.043 343.567 21.043z"/>
                </svg>
            </a>
        </div>
    </article>
    <?php endforeach; ?>
</section>

<!-- $submit ui component -->
<div class="submit add">
    <a href="<?= URL ?>reports/add">
        <svg class="submit-icon"viewBox="0 0 12.5 12.5"><path d="M11.8,4.7h-4V.7A.68.68,0,0,0,7.1,0H5.4a.68.68,0,0,0-.7.7v4H.7a.68.68,0,0,0-.7.7V7.1a.68.68,0,0,0,.7.7h4v4a.68.68,0,0,0,.7.7H7.1a.68.68,0,0,0,.7-.7v-4h4a.68.68,0,0,0,.7-.7V5.4A.75.75,0,0,0,11.8,4.7Z"/></svg>
    </a>
</div>