@extends('layouts.index')
@section('title')
    Order
@endsection
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="btn-group" role="group" aria-label="Basic example">
                    {{-- <a href="/my/order" class="btn btn-warning text-dark px-5">Order <i
                            class="fa-solid fa-bag-shopping"></i></a>
                    <a href="/my/finish" class="btn btn-dark px-5">Finish <i class="fa-regular fa-circle-check"></i></a> --}}
                    <button type="button" onclick="read_order()" class="btn btn-warning text-dark px-5">Order <i
                            class="fa-solid fa-bag-shopping"></i></button>
                    <button type="button" onclick="read_finish()" class="btn btn-dark px-5">Finish <i class="fa-regular fa-circle-check"></i></button>
                </div>
            </div>
        </div>
        <div class="row mt-2 mb-5">
            <div class="col" id="data_order">
            </div>
            <div class="col" id="data_finish" style="display:none;">
            </div>
        </div>
    </div>

    <script>

    </script>

    @include('script_ajax.user.order_ajax')
    @include('script_ajax.user.finish_ajax')
@endsection
