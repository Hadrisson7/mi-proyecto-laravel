<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads; // Importar el trait para subir archivos
use App\Models\Product;

class CreateProduct extends Component
{
    use WithFileUploads; // Habilitar la subida de archivos

    public $name;
    public $description;
    public $image; // Para manejar la subida de la imagen
    public $cost_price;
    public $sale_price;
    public $stock;
    public $isOpen = false;

    // Reglas de validación
    protected $rules = [
        'name' => 'required|string|max:20',
        'description' => 'required|string',
        'cost_price' => 'required|numeric|min:0',
        'sale_price' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'image' => 'required|image|max:2028', // Validar que sea una imagen con un tamaño máximo de 1MB
    ];


    // Abre el modal
    public function openModal()
    {
        $this->isOpen = true;
    }

    // Cierra el modal
    public function closeModal()
    {
        $this->resetInputFields();
        $this->isOpen = false;
    }

    // Restablece los campos de entrada del formulario
    public function resetInputFields()
    {
        $this->name = '';
        $this->description = '';
        $this->image = '';
        $this->cost_price = '';
        $this->sale_price = '';
        $this->stock = '';
    }

    // Método para guardar el producto
    public function saveProduct()
    {
        $this->validate();
        
        $imagePath = $this->image->store('products', 'public');

        // Crea el nuevo producto
        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->image,
            'cost_price' => $this->cost_price,
            'sale_price' => $this->sale_price,
            'stock' => $this->stock
        ]);

        // Restablecer los campos del formulario y cerrar el modal
        $this->resetInputFields();
        $this->closeModal();

        $this->dispatch('render');
         // Despachar el evento correctamente
        $this->dispatch('alert');
    }
    

    public function render()
    {
        return view('livewire.create-product');
    }
}

