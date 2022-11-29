<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LiveArticles extends Component
{
    public $article;
    public $categorie;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($article, $categorie)
    {
        $this->article = $article;
        $this->categorie = $categorie;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.live-articles');
    }
}
