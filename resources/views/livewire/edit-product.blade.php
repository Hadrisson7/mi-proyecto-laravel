<div>
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    editar
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <label for="name">Nombre</label>
          <input type="text" wire:model="name" class="form-control" style="border-radius: 10px" id="name">
        </div>
        <div class="modal-body">
            <label for="description">Descripcion</label>
          <input type="text" wire:model="description" class="form-control" style="border-radius: 10px" id="description">
        </div>
        <div class="modal-body">
            <label for="cost_price">Precio de costo</label>
          <input type="text" wire:model="cost_price" class="form-control" style="border-radius: 10px" id="cost_price">
        </div>
        <div class="modal-body">
            <label for="sale_price">Precio de venta</label>
          <input type="text" wire:model="sale_price" class="form-control" style="border-radius: 10px" id="sale_price">
        </div>
        <div class="modal-body">
            <label for="stock">Existencias</label>
          <input type="text" wire:model="stock" class="form-control" style="border-radius: 10px" id="stock">
        </div>
        <div class="modal-body">
            <label for="image">Imagen</label>
          <input type="file" wire:model="image" class="form-control" style="border-radius: 10px" id="image">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Actualizar</button>
        </div>
      </div>
    </div>
  </div> 




</div>
