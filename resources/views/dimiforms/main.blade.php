@extends('shared.layout')
@section('title', 'Dimiforms')
@section('User-name', Auth::user() ?? 'Invitado' )


@section('content')
<div class="container-fluid">
    <div class="card tool-container">
        <div class="card-body">
            <div class="container-fluid fixed-top" id="header-main">
                <h3 class="mr-auto pl-5">Crear nuevo formulario</h3>
            </div>
            <div class="form_builder container-fluid">
                <div class="row">
                    <div class="col-sm-3">
                        <h5><i class="fa fa-plus-circle pull-right"></i>   Agregar campo </h5>
                        <em>Arrastra y suelta el nombre del campo que desees</em>
                        <nav class="nav-sidebar text-center">
                            <ul class="nav list-group">
                                <li class="form_bal_textfield list-group-item">
                                    <a href="javascript:;">Text Field </a>
                                </li>
                                <li class="form_bal_textarea list-group-item">
                                    <a href="javascript:;">Text Area</a>
                                </li>
                                <li class="form_bal_select list-group-item">
                                    <a href="javascript:;">Select</a>
                                </li>
                                <li class="form_bal_radio list-group-item">
                                    <a href="javascript:;">Radio Button</a>
                                </li>
                                <li class="form_bal_checkbox list-group-item">
                                    <a href="javascript:;">Checkbox</a>
                                </li>
                                <li class="form_bal_email list-group-item">
                                    <a href="javascript:;">Email</a>
                                </li>
                                <li class="form_bal_number list-group-item">
                                    <a href="javascript:;">Number</a>
                                </li>
                                <li class="form_bal_date list-group-item">
                                    <a href="javascript:;">Date</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <br>
                    <div class="col-sm-4 bal_builder">
                        <div class="form_builder_area"></div>
                    </div>
                    <br>                    
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <form class="form-horizontal">
                                <div class="preview"></div>
                                <div style="display: none" class="form-group plain_html"><textarea rows="50" class="form-control"></textarea></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection