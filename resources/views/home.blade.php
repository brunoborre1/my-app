@extends('layouts.plantilla')
@extends('layouts.slider')

@section('contenido')
<div class="slider">
    <div class="row">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="http://placehold.it/91x91" alt="image">
                        <div class="s-content">	
                            <p>Masa unica de hecha de tres colores, dando nuestro sello distintivo</p>
                            <h4>Titulo H4</h4>
                        </div>
                    </div>
                    
                    <div class="item">
                        <img src="http://placehold.it/91x91" alt="image">
                        <div class="s-content">
                            <p>Not only is the restaurant filled with a fantastic atmosphere, with friendly staff and beautiful decor, the food is the restaurant filled with a fantastic atmosphere, with friendly absolut...</p>
                            <h4>- - - Scarlett Johansson - - -</h4>
                        </div>
                    </div>
                    
                    <div class="item">
                        <img src="http://placehold.it/91x91" alt="image">
                        <div class="s-content">
                            <p>Not only is the restaurant filled with a fantastic atmosphere, with friendly staff and beautiful decor, the food is the restaurant filled with a fantastic atmosphere, with friendly absolut...</p>
                            <h4>- - - Scarlett Johansson - - -</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--.row-->
</div><!--.slider-->
@endsection
