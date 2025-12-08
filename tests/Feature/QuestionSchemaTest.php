<?php

// use App\Filament\Resources\Questions\Pages\CreateQuestion;

use App\Filament\Resources\Questions\Pages\CreateQuestion;
use App\Models\Chapter;
use App\Models\User;
use Database\Seeders\ChaptersSeeder;
use Database\Seeders\LearningObjectivesSeeder;
use Filament\Forms\Components\Repeater;

use function Pest\Laravel\actingAs;
use function Pest\Livewire\livewire;

uses(Illuminate\Foundation\Testing\RefreshDatabase::class);

beforeEach(function () {
    $user = User::factory()->create(['role' => User::ROLE_ADMIN]);
    actingAs($user);

});

test('can load the question create form', function () {

    livewire(CreateQuestion::class)
        ->assertOk();
});

test('form has errors', function () {
    livewire(CreateQuestion::class)
        ->fillForm([
            'chapter' => '50',
        ])
        ->call('create')
        ->assertHasFormErrors();
});

test('form can create question', function () {
    // ATTENTION will break when the custom exception about LO-chapter matching in Question Model will be implemented
    for ($i = 0; $i <= 4; $i++) {
        $LOArray[$i] = fake()->numberBetween(0, 4000);
    }

    $undoRepeaterFake = Repeater::fake();
    $this->seed([
        ChaptersSeeder::class,
        LearningObjectivesSeeder::class,
    ]);
    livewire(CreateQuestion::class)
        ->fillForm([
            'chapter_id' => Chapter::inRandomOrder()->first()->id,
            'learning_objectives' => $LOArray,
            'type' => 0,
            'status' => 0,
            'body' => fake()->sentence(),
            'proposed_count' => 1,
            'expected_answer' => [
                [
                    'proposition' => fake()->sentence(),
                    'correction' => fake()->sentence(),
                    'vrai' => 1,
                ],
                [
                    'proposition' => fake()->sentence(),
                    'correction' => fake()->sentence(),
                    'vrai' => 1,
                ],
                [
                    'proposition' => fake()->sentence(),
                    'correction' => fake()->sentence(),
                    'vrai' => 1,
                ],
                [
                    'proposition' => fake()->sentence(),
                    'correction' => fake()->sentence(),
                    'vrai' => 1,
                ],
                [
                    'proposition' => fake()->sentence(),
                    'correction' => fake()->sentence(),
                    'vrai' => 1,
                ],
            ],
        ])
        ->call('create')
        ->assertHasNoFormErrors();
    $undoRepeaterFake();
});

test('form has 20 max items error', function () {

    $propositionsArray = [];
    for ($i = 0; $i <= 20; $i++) {
        $propositionsArray[$i] = [
            'proposition' => fake()->sentence(),
            'correction' => fake()->sentence(),
            'vrai' => 1,
        ];
    }

    $undoRepeaterFake = Repeater::fake();
    $this->seed(ChaptersSeeder::class);

    livewire(CreateQuestion::class)
        ->fillForm([
            'chapter_id' => Chapter::inRandomOrder()->first()->id,
            'type' => 0,
            'status' => 0,
            'body' => fake()->sentence(),
            'proposed_count' => 1,
            'expected_answer' => $propositionsArray,
        ])
        ->call('create')
        ->assertHasFormErrors();

    $undoRepeaterFake();
});

test('at least 4 propositions required', function () {
    $undoRepeaterFake = Repeater::fake();
    $this->seed(ChaptersSeeder::class);
    livewire(CreateQuestion::class)
        ->fillForm([
            'chapter_id' => Chapter::inRandomOrder()->first()->id,
            'type' => 0,
            'status' => 0,
            'body' => fake()->sentence(),
            'proposed_count' => 1,
            'expected_answer' => [
                [
                    'proposition' => fake()->sentence(),
                    'correction' => fake()->sentence(),
                    'vrai' => 1,
                ],
                [
                    'proposition' => fake()->sentence(),
                    'correction' => fake()->sentence(),
                    'vrai' => 1,
                ],
                [
                    'proposition' => fake()->sentence(),
                    'correction' => fake()->sentence(),
                    'vrai' => 1,
                ],
            ],
        ])
        ->call('create')
        ->assertHasFormErrors(['expected_answer']);
    $undoRepeaterFake();
});

test('at least one true answer required', function () {
    $undoRepeaterFake = Repeater::fake();
    $this->seed(ChaptersSeeder::class);
    livewire(CreateQuestion::class)
        ->fillForm([
            'chapter_id' => Chapter::inRandomOrder()->first()->id,
            'type' => 0,
            'status' => 0,
            'body' => fake()->sentence(),
            'proposed_count' => 1,
            'expected_answer' => [
                [
                    'proposition' => fake()->sentence(),
                    'correction' => fake()->sentence(),
                    'vrai' => 0,
                ],
                [
                    'proposition' => fake()->sentence(),
                    'correction' => fake()->sentence(),
                    'vrai' => 0,
                ],
                [
                    'proposition' => fake()->sentence(),
                    'correction' => fake()->sentence(),
                    'vrai' => 0,
                ],
                [
                    'proposition' => fake()->sentence(),
                    'correction' => fake()->sentence(),
                    'vrai' => 0,
                ],
                [
                    'proposition' => fake()->sentence(),
                    'correction' => fake()->sentence(),
                    'vrai' => 0,
                ],
            ],
        ])
        ->call('create')
        ->assertHasFormErrors();
    $undoRepeaterFake();
});

test('form has required errors', function () {
    $undoRepeaterFake = Repeater::fake();
    $this->seed(ChaptersSeeder::class);
    livewire(CreateQuestion::class)
        ->fillForm([
            'type' => null,
            'proposed_count' => 1,
            'expected_answer' => [
                [
                    'proposition' => fake()->sentence(),
                    'correction' => fake()->sentence(),
                    'vrai' => 1,
                ],
                [
                    'proposition' => fake()->sentence(),
                    'correction' => fake()->sentence(),
                    'vrai' => 1,
                ],
                [
                    'proposition' => fake()->sentence(),
                    'correction' => fake()->sentence(),
                    'vrai' => 1,
                ],
                [
                    'proposition' => fake()->sentence(),
                    'correction' => fake()->sentence(),
                    'vrai' => 1,
                ],
                [
                    'proposition' => fake()->sentence(),
                    'correction' => fake()->sentence(),
                    'vrai' => 1,
                ],
            ],
        ])
        ->call('create')
        ->assertHasFormErrors([
            'chapter_id' => 'required',
            'type' => 'required',
            'status' => 'required',
            'body' => 'required',
        ]);
    $undoRepeaterFake();

});
