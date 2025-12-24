<?php

use App\Filament\Resources\Matieres\Pages\CreateMatiere;
use App\Filament\Resources\Matieres\Pages\EditMatiere;
use App\Filament\Resources\Matieres\RelationManagers\ChaptersRelationManager;
use App\Models\Matiere;
use App\Models\User;
use Database\Seeders\ChaptersSeeder;

use function Pest\Laravel\actingAs;
use function Pest\Livewire\livewire;

uses(Illuminate\Foundation\Testing\RefreshDatabase::class);

beforeEach(function () {
    $user = User::factory()->create(['role' => User::ROLE_ADMIN]);
    actingAs($user);

});

test('can load the matiere create form', function () {

    livewire(CreateMatiere::class)
        ->assertOk();
});

test('matiere form has errors', function () {
    livewire(CreateMatiere::class)
        ->fillForm([
            'description' => fake()->word(),
        ])
        ->call('create')
        ->assertHasFormErrors();
});

test('matiere form can create', function () {
    livewire(CreateMatiere::class)
        ->fillForm([
            'name' => fake()->word(),
            'description' => fake()->sentences(3, true),
        ])
        ->call('create')
        ->assertHasNoFormErrors();
});

test('matiere form has required errors', function () {
    livewire(CreateMatiere::class)
        ->fillForm([
            'intitule' => fake()->word(),
        ])
        ->call('create')
        ->assertHasFormErrors(['name' => 'required']);
});

it('can load the chapter Matiere relation manager', function () {
    $this->seed(ChaptersSeeder::class);
    $matiere = Matiere::factory()->create();
    livewire(EditMatiere::class, ['record' => $matiere->id])
        ->assertSeeLivewire(ChaptersRelationManager::class);
});

// it('can attach chapters to matieres', function () {
//     $this->seed(ChaptersSeeder::class);
//     $matiere = Matiere::factory()->create();
//     livewire(EditMatiere::class, ["record"=>$matiere->id])
//         ->assertSeeLivewire(ChaptersRelationManager::class);
// });
