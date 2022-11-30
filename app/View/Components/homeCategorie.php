<?php

namespace App\View\Components;

use Illuminate\View\Component;

class homeCategorie extends Component
{
    public $article;
    public $categorie;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($categorie, $article)
    {
        $this->categorie = $categorie;
        $this->article = $article;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home-categorie');
    }
}


