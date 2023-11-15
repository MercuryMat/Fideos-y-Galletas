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
                    <option value="colombina">colombina</option>
                    <option value="festival">festival</option>
                    <option value="ducales">ducales</option>
                    <option value="tosh">tosh</option>
                    <option value="cookies">cookies</option>
                </select>
                <input type="number" name="number" id="number" class="hidden">
            </div>
        </div>
        <div class="container-form hidden">
            <form action="" id="form-galletas">
                <div>
                    <label for="nombre">Nombre: </label>
                    <input type="text" id="nombre" name="nombre">
                </div>
                <div>
                    <label for="sabor">Sabor: </label>
                    <input type="text" id="sabor" name="sabor">
                </div>
                <div>
                    <label for="marca">Marca: </label>
                    <select id="marca" name="marca">
                        <option value="colombina">colombina</option>
                        <option value="festival">festival</option>
                        <option value="ducales">ducales</option>
                        <option value="tosh">tosh</option>
                        <option value="cookies">cookies</option>
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
        <div class="container-cookies"></div>
    </div>
@endsection

@section('scripts')
    <script src="{!! asset('js/deleteCookies.js') !!}"></script>
    <script src="{!! asset('js/getCookies.js') !!}"></script>
    <script src="{!! asset('js/addCookies.js') !!}"></script>
    <script src="{!! asset('js/editCookies.js') !!}"></script>
    <script src="{!! asset('js/form.js') !!}"></script>
    <script src="{!! asset('js/filterCookies.js') !!}"></script>
    <script>
        getCookies('');
    </script>
@endsection
