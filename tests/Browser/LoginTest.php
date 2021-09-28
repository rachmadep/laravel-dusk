<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

class LoginTest extends DuskTestCase
{
    // use DatabaseMigrations;
    // use DatabaseTransactions;
    // use RefreshDatabase;

    // public function testAcess()
    // {
    //     $this->browse(function ($browser) {
    //         $browser->visit('/')
    //                 ->assertSee('Mau cari kos?');
    //     });
    // }

    public function testRegisterAndLogin()
    {

        $this->browse(function ($browser) {
            $browser->visit('/')
                    ->press('Masuk')
                    ->assertSee('Saya ingin masuk sebagai')
                    // ->click('.login-role-selection__item')
                    // ->assertSee('Login Pencari Kos')
                    ;

            // $browser->logout();
        });

    }

    /**
     * A Dusk test example.
     *
     * @return void
     */
    // public function testRegisterAndLogin()
    // {
    //     $user = factory(User::class)->make();

    //     $this->browse(function ($browser) use ($user) {
    //         $browser->visit('/register')
    //                 ->type('name', $user->name)
    //                 ->type('email', $user->email)
    //                 ->type('password', 'password')
    //                 ->type('password_confirmation', 'password')
    //                 ->press('Register')
    //                 ->assertPathIs('/home');

    //         $browser->logout();
    //     });

    //     $this->assertDatabaseHas('users',['email'=>$user->email]);

    //     $this->browse(function ($browser) use ($user) {
    //         $browser->visit('/login')
    //                 ->type('email', $user->email)
    //                 ->type('password', 'password')
    //                 ->press('Login')
    //                 ->assertPathIs('/home');

    //         $browser->logout();
    //     });

    //     User::where('email', $user->email)->first()->delete();
    // }
}
