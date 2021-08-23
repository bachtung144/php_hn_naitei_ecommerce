<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class HeaderSearchComponent extends Component
{
    public $search;
    public $product_cate;
    public $product_cate_id;

    public function mount()
    {
        $this->product_cate = 'All category';
        $this->fill(request()->only('search', 'product_cate', 'product_cate_id'));
    }

    public function render()
    {
        $categories = Category::all();

        return view('livewire.header-search-component', compact('categories'));
    }
}
