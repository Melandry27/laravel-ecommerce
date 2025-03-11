<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    public $items; // Tableau des liens de la navbar

    /**
     * Crée une nouvelle instance du composant.
     *
     * @param array $items Tableau des éléments de la navbar (name et url)
     */
    public function __construct($items = [])
    {
        $this->items = $items;
    }

    /**
     * Retourne la vue du composant.
     */
    public function render()
    {
        return view('components.navbar');
    }
}
