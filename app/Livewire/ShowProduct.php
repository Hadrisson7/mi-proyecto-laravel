<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Product;


class ShowProduct extends Component
{
    public $search;
    public $sort = 'name';
    public $direction = 'asc';
    protected $listeners = ['render' => 'render'];

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
        
    }
    
    public function render()
    {
             
            // Filtrar productos por nombre o descripción usando $search
            $products = Product::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%' . $this->search . '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate(5);    
        return view('livewire.show-product', compact('products'));
    }
}
