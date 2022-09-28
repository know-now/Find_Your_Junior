<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;

class Contest extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        {   $contests=Http::get('https://kontests.net/api/v1/all')->json();
            return view('components.contest', ['contests'=>$contests]);
            }
        }
    public function timeChange()
    {
        {   $contests=Http::get('https://kontests.net/api/v1/all')->json();
            return view('components.contest', ['contests'=>$contests]);
            }
        }

    }

