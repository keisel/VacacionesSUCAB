@extends('layouts.master')

@section('title','Diseño de avion')

@section('content')
  <div class="container-fluid">
  <div class="row">
     <div class="col-lg-4 col-lg-offset-1 ">
       <h2 id="margenSubmenu">ELIGE TU MODELO</h2>
     </div>
  </div>

</div>

<div class="container margenMenu" id="margenSubmenu">
          <ul class="nav nav-tabs nav-justified ">
            <li class="active" ><a id="Amarillo" href="#modrec" role="tab" data-toggle="tab">Modelos recientes</a></li>
            <li ><a id="Azul" href="#Lista" role="tab" data-toggle="tab">Elige tu modelo</a></li>
            <li class="active" ><a id="Amarillo" href="#home" role="tab" data-toggle="tab">Crea tu solicitud</a></li>
            <li ><a id="Azul" href="#Lista" role="tab" data-toggle="tab"> Lista de solicitudes</a></li>
          </ul>
</div>
          <div class="tab-content " >
            <div class="tab-pane fade in active" id="modrec">

              <div class="row" id="margenSubmenu">
      <div class="col-md-4">
        <div onmouseover="m1();" class="thumbnail">
          <a >  <img src="ucab/2.png" >  </a>
          <div class="caption">
            <div id="m1">
              <button id="botonAmarillo" type="submit" class="btn btn-default  btn-lg"><span  class="fa fa-shopping-cart" aria-hidden="true"></span> Añadir al carrito</button>
                <button id="" type="submit" class="btn btn-default  btn-lg"><span  class="fa fa-info-circle" aria-hidden="true"></span> Info</button>
            </div>
            <h3>AIRBUS 507</h3>
            <strong><p>•Capacidad: 179 pasajeros</p></strong>
            <strong><p>•Longitud: 44,1 m.</p></strong>
            <strong><p>•Envergadura: 39,9 m.</p></strong>
            <strong><p>•Altura: 12,9 m.</p></strong>
            <strong><p>•Peso vacío: 55.580 KG</p></strong>
            <strong><p>•Peso máximo al despegue: 116570 KG</p></strong>
            <strong><p>•Planta motriz: 4× turborreactores Pratt & Whitney JT3D­1.</p></strong>
            <p>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div onmouseover="m2();" class="thumbnail">
          <a >  <img src="ucab/3.png" >  </a>
          <div class="caption">
            <div id="m2">
              <button id="botonAmarillo" type="submit" class="btn btn-default  btn-lg"><span  class="fa fa-shopping-cart" aria-hidden="true"></span> Añadir al carrito</button>
                <button id="" type="submit" class="btn btn-default  btn-lg"><span  class="fa fa-info-circle" aria-hidden="true"></span> Info</button>
            </div>
            <h3>AIRBUS 507</h3>
            <strong><p>•Capacidad: 179 pasajeros</p></strong>
            <strong><p>•Longitud: 44,1 m.</p></strong>
            <strong><p>•Envergadura: 39,9 m.</p></strong>
            <strong><p>•Altura: 12,9 m.</p></strong>
            <strong><p>•Peso vacío: 55.580 KG</p></strong>
            <strong><p>•Peso máximo al despegue: 116570 KG</p></strong>
            <strong><p>•Planta motriz: 4× turborreactores Pratt & Whitney JT3D­1.</p></strong>
            <p>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div onmouseover="m3();" class="thumbnail">
          <a >  <img src="ucab/7.jpg" >  </a>
          <div class="caption">
            <div id="m3">
              <button id="botonAmarillo" type="submit" class="btn btn-default  btn-lg"><span  class="fa fa-shopping-cart" aria-hidden="true"></span> Añadir al carrito</button>
                <button id="" type="submit" class="btn btn-default  btn-lg"><span  class="fa fa-info-circle" aria-hidden="true"></span> Info</button>
            </div>
            <h3>AIRBUS 507</h3>
            <strong><p>•Capacidad: 179 pasajeros</p></strong>
            <strong><p>•Longitud: 44,1 m.</p></strong>
            <strong><p>•Envergadura: 39,9 m.</p></strong>
            <strong><p>•Altura: 12,9 m.</p></strong>
            <strong><p>•Peso vacío: 55.580 KG</p></strong>
            <strong><p>•Peso máximo al despegue: 116570 KG</p></strong>
            <strong><p>•Planta motriz: 4× turborreactores Pratt & Whitney JT3D­1.</p></strong>
            <p>
            </p>
          </div>
        </div>
      </div>

    </div>
    <div class="row" id="margenSubmenu">
<div class="col-md-4">
<div onmouseover="m4();" class="thumbnail">
<a >  <img src="ucab/8.jpg" >  </a>
<div class="caption">
  <div id="m4">
    <button id="botonAmarillo" type="submit" class="btn btn-default  btn-lg"><span  class="fa fa-shopping-cart" aria-hidden="true"></span> Añadir al carrito</button>
      <button id="" type="submit" class="btn btn-default  btn-lg"><span  class="fa fa-info-circle" aria-hidden="true"></span> Info</button>
  </div>
  <h3>AIRBUS 507</h3>
  <strong><p>•Capacidad: 179 pasajeros</p></strong>
  <strong><p>•Longitud: 44,1 m.</p></strong>
  <strong><p>•Envergadura: 39,9 m.</p></strong>
  <strong><p>•Altura: 12,9 m.</p></strong>
  <strong><p>•Peso vacío: 55.580 KG</p></strong>
  <strong><p>•Peso máximo al despegue: 116570 KG</p></strong>
  <strong><p>•Planta motriz: 4× turborreactores Pratt & Whitney JT3D­1.</p></strong>
  <p>
  </p>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4">
<div onmouseover="m5();" class="thumbnail">
<a >  <img src="ucab/9.jpg" >  </a>
<div class="caption">
  <div id="m5">
    <button id="botonAmarillo" type="submit" class="btn btn-default  btn-lg"><span  class="fa fa-shopping-cart" aria-hidden="true"></span> Añadir al carrito</button>
      <button id="" type="submit" class="btn btn-default  btn-lg"><span  class="fa fa-info-circle" aria-hidden="true"></span> Info</button>
  </div>
  <h3>AIRBUS 507</h3>
  <strong><p>•Capacidad: 179 pasajeros</p></strong>
  <strong><p>•Longitud: 44,1 m.</p></strong>
  <strong><p>•Envergadura: 39,9 m.</p></strong>
  <strong><p>•Altura: 12,9 m.</p></strong>
  <strong><p>•Peso vacío: 55.580 KG</p></strong>
  <strong><p>•Peso máximo al despegue: 116570 KG</p></strong>
  <strong><p>•Planta motriz: 4× turborreactores Pratt & Whitney JT3D­1.</p></strong>
  <p>
  </p>
</div>
</div>
</div>
<div class="col-sm-6 col-md-4">
<div onmouseover="m6();" class="thumbnail">
<a >  <img src="ucab/11.jpg" >  </a>
<div class="caption">
  <div id="m6">
    <button id="botonAmarillo" type="submit" class="btn btn-default  btn-lg"><span  class="fa fa-shopping-cart" aria-hidden="true"></span> Añadir al carrito</button>
      <button id="" type="submit" class="btn btn-default  btn-lg"><span  class="fa fa-info-circle" aria-hidden="true"></span> Info</button>
  </div>
  <h3>AIRBUS 507</h3>
  <strong><p>•Capacidad: 179 pasajeros</p></strong>
  <strong><p>•Longitud: 44,1 m.</p></strong>
  <strong><p>•Envergadura: 39,9 m.</p></strong>
  <strong><p>•Altura: 12,9 m.</p></strong>
  <strong><p>•Peso vacío: 55.580 KG</p></strong>
  <strong><p>•Peso máximo al despegue: 116570 KG</p></strong>
  <strong><p>•Planta motriz: 4× turborreactores Pratt & Whitney JT3D­1.</p></strong>
  <p>
  </p>
</div>
</div>
</div>

</div>
            </div>
              </div>

            </div>

            <div class="tab-pane fade " id="Lista">
            <div class="container" id="margenSubmenu" >

<div class="row" >
  <div class="col-lg-4 col-lg-offset-8 col-xs-10 col-xs-offset-1">
    <div class="input-group" >
      <input type="text" class="form-control" placeholder="Buscar por nombre">
      <span class="input-group-btn ">
        <button class="btn btn-info" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar</button>

      </span>
    </div>
  </div>
</div>
             <div class="table-responsive" id="margenSubmenu">
  <div id="height">
  <table class="table table-fixed">
    <thead id="textColor">
        <th class="col-xs-3">NOMBRE</th>
        <th class="col-xs-2 center">CULMINACIÓN</th>
        <th class="col-xs-3 center">MATERIALES</th>
         <th class="col-xs-2 center">ESTADO</th>
        <th class="col-xs-2 center">SEDE</th>
    </thead>

    <tbody id="margenPregunta">
    <td class="col-xs-3">Prueba 1</td>
      <td class="col-xs-2 center">10/11/2017</td>
      <td class="col-xs-3 center">Tornillos </td>
      <td class="col-xs-2 center">En proceso </td>
      <td class="col-xs-2 center">Maracay </td>


    </tbody>
  </table>
  </div>
</div>





            </div>
            </div>

            <div class="tab-pane fade" id="Proveedores">
              <div class="container-fluid" id="margenSubmenu">
                <div class="row">
    <div class="col-lg-4 col-lg-offset-2 col-xs-12 ">


      <div class="form-group">
         <label for="formGroup">Nombre</label>
          <input class="form-control"  type="text" placeholder="Ingrese el nombre*">
      </div>

      <div class="form-group">
         <label for="formGroup">Dirección</label>
          <input class="form-control"  type="text" placeholder="Ingrese el monto acreditado*">
      </div>
      <div class="form-group">
         <label for="formGroup">Monto acreditado</label>
          <input class="form-control"  type="text" placeholder="Ingrese el apellido*">
      </div>
      <div class="form-group">
         <label for="formGroup">Telefono 1</label>
          <input class="form-control"  type="text" placeholder="Ingrese el telefono 1*">
      </div>

  </div>

  <div class="col-lg-4">

 <div class="form-group">
         <label for="formGroup">Telefono 2</label>
          <input class="form-control"  type="text" placeholder="Ingrese el telefono 2*">
      </div>


<div class="form-group">
         <label for="formGroup">Correo electronico</label>
          <input class="form-control"  type="text" placeholder="Ingrese su correo*">
      </div>

<div class="form-group">
         <label for="formGroup">Pagina web</label>
          <input class="form-control"  type="text" placeholder="Ingrese su pagina web*">
      </div>

        <div class="form-group">
                 <label for="formGroup">Fecha de incio</label>
                <input type="date" class="form-control" step="1" min="1940-01-01" max="2017-30-06" name="fecha_ini" id="fecha_ini" placeholder="Ingresa la fecha de inicio" >
            </div>


</div>
</div>



<div class="row">
    <div class="col-xs-12 col-lg-offset-4 col-lg-4" id="fondo">
      <div id="margenbotonAgregar">
        <center><button id="botonVerde" type="submit" class="btn btn-default btn-block btn-lg"><span  class="fa fa-upload" aria-hidden="true"></span> Agregar Proveedor</button></center>

      </div>
    </div>
</div>



            </div>
            </div>



        </div>

 @endsection