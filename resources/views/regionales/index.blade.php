@extends('Plantilla/layout')

@section('contenido')

<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    {{$title}}
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <button type="button" class="btn bg-light-green waves-effect">
                    <i class="material-icons">add_box</i>
                    <span>Nuevo</span>
                </button>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                        <tr>
                            <th>Nombre Regional</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Nombre Regional</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @forelse($regionales as $regionale)
                        <tr>
                            <td>{{$regionale-> regional}}</td>
                            @if($regionale->estado == 1)
                                <td>Activo</td>
                            @else
                                <td>Inactivo</td>
                            @endif
                            <td>
                                <button type="button" class="btn bg-blue-grey waves-effect">
                                    <i class="material-icons">create</i>
                                    <span>Modificar</span>
                                </button>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td><h3>No hay Regionales Creadas</h3></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection