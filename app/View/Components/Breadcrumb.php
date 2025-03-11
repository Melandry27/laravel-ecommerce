<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $items; // Tableau des éléments du fil d'ariane

    /**
     * Crée une nouvelle instance du composant.
     *
     * @param array $items Tableau des éléments du fil d'ariane (name et url)
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
        return view('components.breadcrumb');
    }
}
