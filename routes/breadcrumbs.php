<?php

Breadcrumbs::for('sitetronic-exam-admin-index', function ($trail) {
    $trail->parent('sitetronic-core-admin-index');
    $trail->push('Exams', route('admin.exam.index'));
});

Breadcrumbs::for('sitetronic-exam-section-index', function ($trail) {
    $trail->parent('sitetronic-exam-admin-index');
    $trail->push('Sections', route('admin.exam-section.index'));
});

Breadcrumbs::for('sitetronic-exam-answer-admin-edit', function ($trail) {
     $trail->push('Exam Answer Edit', route('admin.exam-answer.edit'));
});
