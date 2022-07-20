@extends('layouts.app')

@section('content')
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light align-items-center justify-content-between pt-3">
                <a class="navbar-brand" href="/dashboard"> <img src="{{ asset('img/landing/logo.png') }}" width="34"
                        alt="logo"> iConta$
                </a>

                <div style="display: flex; gap: 10px;">
                    <a class="btn_2 d-lg-block" href="/expenses/create">Criar Usuario</a>
                    <a class="btn_2 bg-red" href="/logout" style="padding: 16px;"><i class="ti-power-off"></i></a>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header part end-->
@endsection
