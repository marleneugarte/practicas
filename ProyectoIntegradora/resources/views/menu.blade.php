 @extends('layouts.base')

@section('contenido')
 <h2> Nuestro Menú</h2> 
        <h3>Pollo Broaster</h3> 
        <table border="1"> 
            <tr> 
                <th>Producto</th> 
                <th>Descripción</th> 
                <th>Precio</th> 
            </tr> 
            <tr> 
                <td>1/4 de Pollo</td> 
                <td>Pollo broaster + papas + ensalada</td> 
                <td>20 Bs</td> </tr> <tr> <td>1/2 Pollo</td> 
                <td>Pollo broaster + papas + ensalada</td> 
                <td>40 Bs</td> 
                </tr>
                <tr> 
                <td>Pollo Entero</td>
                <td>Pollo broaster + papas + ensalada</td> 
                <td>70Bs</td> 
            </tr> 
        </table> 
        
        <h3> Bebidas</h3> 
        <ul> 
            <li> personal - 10 Bs</li> 
            <li>Gaseosa 2L - 20 Bs</li>  
        </ul> 
    @endsection