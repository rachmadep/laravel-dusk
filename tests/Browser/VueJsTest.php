<?php

namespace Tests\Browser;

use Tests\DuskTestCase;

class VueJsTest extends DuskTestCase
{

    public function testAcess()
    {
        $this->browse(function ($browser) {
            $browser->visit('/vue')
                    ->assertSee('Example Component')
                    ->assertSee("I'm an example component.")
                    ->assertSee("Open Modal");
        });
    }

    public function testVueOpenAndCloseModal()
    {
        $this->browse(function ($browser) {
            $browser->visit('/vue')
                    ->press('Open Modal')
                    ->assertSee('Modal title')
                    ->press('Close')
                    ->assertMissing('Modal title');
        });
    }

    public function testVueOpenAndCloseXButtonModal()
    {
        $this->browse(function ($browser) {
            $browser->visit('/vue')
                    ->press('Open Modal')
                    ->assertSee('Modal title')
                    ->click('#closeModal')
                    ->assertMissing('Modal title');
        });
    }
}
