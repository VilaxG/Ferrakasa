class Carrito
{
    //Añadir el producto al carrito
    comprarProducto(e)
    {
        e.preventDefault();
        if(e.target.classList('agregar-carrito'))
        {
            const producto = e.target.parentElement.parentElement;
            this.leerDatosProducto(producto);
        }
    }
}