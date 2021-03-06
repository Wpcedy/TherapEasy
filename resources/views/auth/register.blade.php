@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <label class="panel-title">Selecione uma opção</label>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12" align="center">
                            <a href="{{ route('register.cliente') }}">
                                <button type="button" class="btn btn-primary">
                                    Cadastrar Paciente
                                </button>
                            </a>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-sm-12" align="center">
                            <a href="{{ route('register.psicologo') }}">
                                <button type="button" class="btn btn-primary">
                                    Cadastrar Psicólogo
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
