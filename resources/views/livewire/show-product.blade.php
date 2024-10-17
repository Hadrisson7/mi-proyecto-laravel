<div class="container mt-4">
    <div class="table-responsive">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <input type="search" wire:model.live="search" 
                   class="form-control me-2" 
                   style="border-radius: 10px; width: 800px;" 
                   placeholder="Buscar por nombre o descripción">
            @livewire('create-product')
        </div>
        @if($products->count())
            <table class="table table-bordered" style=" border-radius: 10px, width: 100%">                                                    
                <thead class="table-light" style="border-radius: 10px">             
                    <tr>
                        <th scope="col" class="cursor-pointer text-nowrap" wire:click="order('id')">
                            Id
                            @if ($sort == 'id')
                                @if ($direction == 'asc')
                                    <i class="bi bi-arrow-up px-2"></i>
                                @else
                                    <i class="bi bi-arrow-down px-2"></i>
                                @endif
                            @else
                                <i class="bi bi-arrow-down-up px-2"></i>
                            @endif                        
                        </th>
                        <th scope="col" class="cursor-pointer text-nowrap" wire:click="order('name')">
                            Nombre
                            @if ($sort == 'name')
                                @if ($direction == 'asc')
                                    <i class="bi bi-arrow-up px-2"></i>
                                @else
                                    <i class="bi bi-arrow-down px-2"></i>
                                @endif
                            @else
                                <i class="bi bi-arrow-down-up px-2"></i>
                            @endif  
                        </th>
                        <th scope="col" class="cursor-pointer text-nowrap" wire:click="order('description')">
                            Descripción
                            @if ($sort == 'description')
                                @if ($direction == 'asc')
                                    <i class="bi bi-arrow-up px-2"></i>
                                @else
                                    <i class="bi bi-arrow-down px-2"></i>
                                @endif
                            @else
                                <i class="bi bi-arrow-down-up px-2"></i>
                            @endif                         
                        </th>
                        <th scope="col" class="cursor-pointer text-nowrap" wire:click="order('image')">
                            Imagen
                            @if ($sort == 'image')
                                @if ($direction == 'asc')
                                    <i class="bi bi-arrow-up px-2"></i>
                                @else
                                    <i class="bi bi-arrow-down px-2"></i>
                                @endif
                            @else
                                <i class="bi bi-arrow-down-up px-2"></i>
                            @endif  
                        </th>
                        <th scope="col" class="cursor-pointer text-nowrap" wire:click="order('cost_price')">
                            Precio de Costo
                            @if ($sort == 'cost_price')
                                @if ($direction == 'asc')
                                    <i class="bi bi-arrow-up px-2"></i>
                                @else
                                    <i class="bi bi-arrow-down px-2"></i>
                                @endif
                            @else
                                <i class="bi bi-arrow-down-up px-2"></i>
                            @endif  
                        </th>
                        <th scope="col" class="cursor-pointer text-nowrap" wire:click="order('sale_price')">
                            Precio de Venta
                            @if ($sort == 'sale_price')
                                @if ($direction == 'asc')
                                    <i class="bi bi-arrow-up px-2"></i>
                                @else
                                    <i class="bi bi-arrow-down px-2"></i>
                                @endif
                            @else
                                <i class="bi bi-arrow-down-up px-2"></i>
                            @endif  
                        </th>
                        <th scope="col" class="cursor-pointer text-nowrap" wire:click="order('stock')">
                            Existencias
                            @if ($sort == 'stock')
                                @if ($direction == 'asc')
                                    <i class="bi bi-arrow-up px-2"></i>
                                @else
                                    <i class="bi bi-arrow-down px-2"></i>
                                @endif
                            @else
                                <i class="bi bi-arrow-down-up px-2"></i>
                            @endif  
                        </th>
                        <th scope="col" class="text-nowrap">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td class="text-truncate" style="max-width: 150px;">{{$product->id}}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{$product->name}}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{$product->description}}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{$product->image}}</td>
                            <td>{{$product->cost_price}}</td>
                            <td>{{$product->sale_price}}</td>
                            <td>{{$product->stock}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @livewire('edit-product', ['product' => $product], key($product->id))   
                            </td>
                        </tr>
                    
                    @endforeach                  
                </tbody>
            </table>
        @else
            <div>
                <p>No existe ningun registro coincidente</p>
            </div>
        @endif
    </div>

    <style>
        .text-truncate {
            overflow: hidden; /* Oculta el desbordamiento */
            white-space: nowrap; /* Evita que el texto se divida en múltiples líneas */
            text-overflow: ellipsis; /* Agrega puntos suspensivos si el texto es demasiado largo */
        }
        
        th {
            white-space: nowrap; /* Evita que el texto de la cabecera se divida en varias líneas */
        }
    </style>
</div>

