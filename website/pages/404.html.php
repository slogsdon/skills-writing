<?php
/**
 * G · Recovery: an error state offers one route back. No canonical, always noindex.
 */
$this->layout('partials::layout', [
    'title' => 'Page not found · Writing Skills',
    'description' => 'This address is not part of the Writing Skills microsite.',
    'notFound' => true,
]);
?>
<section class="not-found">
    <p class="t-smallcaps">404 · page not found</p>
    <h1>This page isn’t here.</h1>
    <p class="t-lead">The microsite has an introduction, an installation guide, and a page on
        choosing a pass. Start from the introduction to find what you need.</p>
    <a class="btn-arrow" href="/writing-skills/">Back to the introduction</a>
</section>
