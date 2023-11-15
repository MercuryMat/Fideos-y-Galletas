@extends('layout')

@section('content')
    <div class="container">
        <div class="form-filter">
            <button onclick="showForm()">CREAR</button>
            <div class="filters-options">
                <h2>Filtros: </h2>
                <select id="filter" name="filter">
                    <option value="seleccione">Seleccione</option>
                    <option value="marca">Marca</option>
                    <option value="precio">Precio</option>
                    <option value="stock">Productos en stock</option>
                </select>
                <select id="branch" class="hidden" name="branch">
                    <option value="doria">doria</option>
                    <option value="pastas sas">pastas sas</option>
                    <option value="ricota">ricota</option>
                    <option value="fideos">fideos</option>
                    <option value="ramen">ramen</option>
                </select>
                <input type="number" name="number" id="number" class="hidden">
            </div>
        </div>
        <div class="container-form hidden">
            <form action="" id="form-fideos">
                <div>
                    <label for="tipo">Tipo: </label>
                    <input type="text" id="tipo" name="tipo">
                </div>
                <div>
                    <label for="marca">Marca: </label>
                    <select id="marca" name="marca">
                        <option value="doria">doria</option>
                        <option value="pastas sas">pastas sas</option>
                        <option value="ricota">ricota</option>
                        <option value="fideos">fideos</option>
                        <option value="ramen">ramen</option>
                    </select>
                </div>
                <div>
                    <label for="precio">Precio: </label>
                    <input type="text" id="precio" name="precio">
                </div>
                <div>
                    <label for="peso">Peso: </label>
                    <input type="text" id="peso" name="peso">
                </div>
                <div>
                    <label for="stock">Stock: </label>
                    <input type="text" id="stock" name="stock">
                </div>
                <input type="submit" value="Crear" id="btn-submit">
                <input type="button" value="Cerrar" id="btn-close">
                <input id="idEdit" value="" class="hidden" />
            </form>
        </div>
        <div class="container-fideos"></div>
    </div>
@endsection

@section('scripts')
    <script src="{!! asset('js/deleteFideos.js') !!}"></script>
    <script src="{!! asset('js/getFideos.js') !!}"></script>
    <script src="{!! asset('js/addFideos.js') !!}"></script>
    <script src="{!! asset('js/editFideos.js') !!}"></script>
    <script src="{!! asset('js/form.js') !!}"></script>
    <script src="{!! asset('js/filterFideos.js') !!}"></script>
    <script>
        getFideos('');
    </script>
@endsection
