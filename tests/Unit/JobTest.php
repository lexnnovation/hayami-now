<?php

use App\Models\Employer;
use App\Models\Job;

use function PHPSTORM_META\expectedReturnValues;

test('it belongs to an employer', function () {
    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,

    ]);

    // Act
    $checkEmployer = $job->employer;

    // Assert
    expect(($checkEmployer)->is($employer))->toBeTrue();
});


it('can have tags', function () {
    // Arrange
    $job = Job::factory()->create();

    // Act
    $job->tag('Backend');

    // Assert
    expect($job->tags)->toHaveCount(1);
});
