@extends('master')

@section('title', 'Dashboard')



@section('content')
                <div class="row">
                    <link href=" {{ asset('ela/css/lib/sweetalert/sweetalert.css') }}" rel="stylesheet">
                    <div class="col-md-4">
                        <div class="card p-30" style="background: #f5f5f5">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <a href="#"><h2 style="color: #5e493a">10</h2></a>
                                    <p class="m-b-0">Jumlah Berkunjung</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-30" style="background: #f5f5f5">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-shopping-cart f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <a href="#"><h2 style="color: #5e493a">vans</h2></a>
                                    <p class="m-b-0">Pemesanan Terakhir</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-30" style="background: #f5f5f5">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-usd f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <a href="#"><h2 style="color: #5e493a">2</h2></a>
                                    <p class="m-b-0">Total Pemesanan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="{{ asset('ela/js/lib/sweetalert/sweetalert.min.js') }}"></script>
                <!-- scripit init-->
                <script type="text/javascript">
                    swal("Selamat datang di dashboard 8-Stars Restaurant", "success")
                </script>

@endsection