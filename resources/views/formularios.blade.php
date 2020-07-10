@extends('shared.layout')
@section('title', 'formularios')
@section('dashboard-button', 'active')

@section('content')
<main>
    <div class="col-lg-8">
        <div class="container-fluid">
            <div class="row pt-5">
                <div class="accordion col-lg-8" id="myAccordion">
                    <?php foreach($formulario as $formulario) {?>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"><?php $formulario.titulo ?></button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#myAccordion">
                                <div class="card-body">
                                    <ul class="list-group">
                                    <li class="list-group-item">
                                        <h3>Titulo: <?php $formulario.titulo ?></h3>
                                    </li>
                                    <li class="list-group-item">
                                        <h3>Programa: <?php $formulario.programa ?></h3>
                                    </li>
                                    <li class="list-group-item">
                                        <h3>Creador: <?php $formulario.IDcreador ?></h3>
                                    </li>
                                    <?php if($publicado = true){ ?>
                                    <li class="list-group-item">
                                        <h3>FechaPublicacion: <?php $formulario.fechapublicacion ?></h3>
                                    </li> <?php } else { ?>
                                    <li class="list-group-item">
                                        <h3>No publicado</h3>
                                    </li> <?php } } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection