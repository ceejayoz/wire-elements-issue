<?php

namespace App\Http\Livewire;

use WireElements\Pro\Components\Modal\Modal;

class TestModal extends Modal
{
    public function render()
    {
        return view('livewire.test-modal');
    }
}
