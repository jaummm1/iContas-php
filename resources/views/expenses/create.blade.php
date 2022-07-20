@extends('layouts.app')

@section('content')
    <!--::header part start::-->

    <!-- content part start-->
    <section class="content_part">
        <div class="client_container">
            <form action="/clients/store" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title">Nome Cliente</label>
                    <input type="text" class="form-control" name="name" placeholder="Nome">
                </div>
                <div class="mb-3">
                    <label for="email">Email do cliente</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" step=".01">
                </div>
                <div class="mb-3">
                    <label for="phone">Numero de Telefone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Numero do telefone" step=".01">
                </div>
                <div class="mb-3">
                    <label for="id_number">ddd</label>
                    <input type="text" class="form-control" name="id_number" placeholder="ddd" step=".01">
                </div>
                <button type="submit" class="btn_2 mb-3" style="border: none; width: 100%;">Enviar</button>
            </form>
        </div>
    </section>
@endsection
