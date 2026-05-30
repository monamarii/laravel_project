<?php

use app\Models\User;

it('shows all ideas on the index page', function () {
   $this->actingAs($user = User::factory()->create());

   $user->ideas()->create([
       'description' => 'first idea',
   ]);
    $user->ideas()->create([
         'description' => 'second idea',
    ]);
    $user->ideas()->create([
         'description' => 'third idea',
    ]);
    $idea = $user->ideas()->get();
    
    visit('/ideas')
        ->assertSee($idea[0]->description)
        ->assertSee($idea[1]->description)
        ->assertSee($idea[2]->description);
});
