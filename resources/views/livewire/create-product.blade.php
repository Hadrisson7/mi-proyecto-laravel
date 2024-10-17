<div>
    <div>
        <!-- Botón para abrir el modal -->
        <button wire:click="openModal" class="btn btn-primary" style="border-radius: 10px">Agregar producto</button>
    
        <!-- Modal -->
        @if($isOpen)
            <div class="modal fade show d-block" style="background-color: rgba(0,0,0,0.5);" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Agregar Nuevo Producto</h5>
                            <button type="button" class="close" wire:click="closeModal">
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div wire:loading wire:target="image" class="mb-4 alert alert-danger">
                                    <strong class="text-danger">Cargando imagen...</strong>
                                    <span class="spinner-border spinner-border-sm">Espereun momento</span>

                                </div>
                                @if($image)
                                    <img src="{{ $image->temporaryUrl() }}" class="img-fluid mb-4">                                
                                @endif
                                <div class="form-group mb-4">
                                    <label for="name">Nombre del producto</label>
                                    <input type="text" wire:model.defer="name" class="form-control" style="border-radius: 10px" id="name">
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="description">Descripción del Producto</label>
                                    <textarea wire:model.defer="description" class="form-control" style="border-radius: 10px" id="description"></textarea>                                   
                                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>                               
                                <div class="form-group mb-4">
                                    <label for="cost_price">Precio de costo</label>
                                    <input type="number" wire:model.defer="cost_price" class="form-control" style="border-radius: 10px" id="cost_price">
                                    @error('cost_price') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="sale_price">Precio de venta</label>
                                    <input type="number" wire:model.defer="sale_price" class="form-control" style="border-radius: 10px" id="sale_price">
                                    @error('sale_price') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="stock">Existencias</label>
                                    <input type="number" wire:model.defer="stock" class="form-control" style="border-radius: 10px" id="stock">
                                    @error('stock') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="image">Imagen del Producto</label>
                                    <input type="file" wire:model.defer="image" class="form-control" style="border-radius: 10px" id="image">                                 
                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" style="border-radius: 10px" wire:click="closeModal">Cerrar</button>
                            <button type="button" class="btn btn-primary" style="border-radius: 10px" wire:click="saveProduct" wire:loading.attr="disabled" wire:target="saveProduct, image " class="disabled:opacity-25">Guardar Producto</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    
  
</div>
