<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;


class EditProduct extends Component
{
    use WithFileUploads; // Habilitar la subida de archivos

    public $product; 
    public $image;
    
    public $isOpen = false;

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function openModal(Product $product)
    {
        $this->product = $product;
        $this->isOpen = false;
    }
    

    public function render()
    {
        return view('livewire.edit-product');
    }
}
