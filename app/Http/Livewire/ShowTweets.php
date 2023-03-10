<?php

namespace App\Http\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{

    public $message = 'Apenas um teste 2';

    public function render()
    {
        $tweets = Tweet::with('user')->get();

        // dd($tweets);

        return view('livewire.show-tweets', [
            'tweets' => $tweets
        ]);
    }
}
