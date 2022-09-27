<!-- formulario de alta de tarea -->
<form action="add" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Articulo</label>
                <input name="descripcion" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>precio</label>
                <input name="precio" type="text" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>talle</label>
                <select name="talle" class="form-control">
                    <option value="1">Small</option>
                    <option value="2">Medium</option>
                    <option value="3">Large</option>
                    <option value="4">XLarge</option>
                    <option value="5">XXLarge</option>
                </select>
            </div>

            <div class="form-group">
                <label>Color</label>
                <select name="color" class="form-control">
                    <option value="1">rojo</option>
                    <option value="2">negro</option>
                    <option value="3">blanco</option>
                    <option value="4">azul</option>
                    <option value="5">rosa</option>
                </select>
            </div>
        
            <div class="form-group">
                <label>Marca</label>
                <input name="marca" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>stock</label>
                <input name="stock" type="text" class="form-control">
            </div>
        </div>
    </div>

    
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>