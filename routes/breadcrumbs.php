<?php

Breadcrumbs::for('sitetronic-exam-admin-index', function ($trail) {
    $trail->parent('sitetronic-core-admin-index');
    $trail->push('Exams', route('admin.exam.index'));
});

Breadcrumbs::for('sitetronic-exam-section-index', function ($trail) {
    $trail->parent('sitetronic-exam-admin-index');
    $trail->push('Sections', route('admin.exam-section.index'));
});

Breadcrumbs::for('sitetronic-exam-admin-topic-index', function ($trail, $section) {
    $trail->parent('sitetronic-exam-section-index');
    $trail->push('Topics', route('admin.exam-topic.index', $section->id));
});

Breadcrumbs::for('sitetronic-exam-admin-question-index', function ($trail, $topic, $section) {
    $trail->parent('sitetronic-exam-admin-topic-index', $section);
    $trail->push('Questions', route('admin.exam-question.index', $topic->id));
});

Breadcrumbs::for('sitetronic-exam-admin-question-edit', function ($trail, $topic, $section) {
    $trail->parent('sitetronic-exam-admin-question-index', $topic, $section);
    $trail->push('Question', route('admin.exam-question.edit', $topic->id));
});


Breadcrumbs::for('sitetronic-exam-admin-answer-index', function ($trail, $question, $topic, $section) {
    $trail->parent('sitetronic-exam-admin-question-index', $topic, $section);
    $trail->push('Answers', route('admin.exam-answer.index', $question->id));
});


Breadcrumbs::for('sitetronic-exam-answer-admin-edit', function ($trail, $answer, $question, $topic, $section) {
    $trail->parent('sitetronic-exam-admin-answer-index', $question, $topic, $section);
    $trail->push('Answer Edit', route('admin.exam-answer.edit', $answer->id));
});
