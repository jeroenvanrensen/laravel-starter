<?php

namespace Tests\Feature\Profile;

use App\Http\Livewire\Profile\DeleteAccount;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

/** @group profile */
class DeleteAccountTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_delete_their_account()
    {
        $this->withoutExceptionHandling();
        
        $user = User::factory()->create();
        $this->actingAs($user);

        $this->assertTrue($user->exists());

        Livewire::test(DeleteAccount::class)
            ->set('password', 'password')
            ->call('destroy')
            ->assertRedirect(url('/'));

        $this->assertFalse($user->exists());
    }

    /** @test */
    public function the_user_has_to_enter_the_correct_password()
    {
        $this->withoutExceptionHandling();
        
        $user = User::factory()->create();
        $this->actingAs($user);

        Livewire::test(DeleteAccount::class)
            ->set('password', 'wrong-password')
            ->call('destroy')
            ->assertHasErrors('password');

        $this->assertTrue($user->exists());
    }
}
