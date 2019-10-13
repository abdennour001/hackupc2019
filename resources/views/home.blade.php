@extends('layouts.app')
@section('content')
    <div class="container-fluid w-75 p-5">
        <div class="row text-center">
            <div class="col-12 mb-5">
                <img style="width: 20%" src="https://miro.medium.com/max/6580/1*m7y8V4eoihnIcGm-ZL-z0A.png" alt="logo goes here...">
            </div>
            <div class="col-12 mb-5">
                <h1 class="display-4">Our HackUPC 2019 nice App</h1>
            </div>
            <div class="col-12 mb-5">
                <p class="lead" style="font-size: 1.3rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="link-container">
                        <a href="#" class="custom-link" data-toggle="modal" data-target="#modalYT"><i class="fa fa-rocket"></i></a>
                    </div>
                </div>
            </div>
        </div>



        <!--Modal: modalYT-->
        <div class="modal fade" id="modalYT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">

                <!--Content-->
                <div class="modal-content">

                    <!--Header-->
                    <div class="modal-header d-flex justify-content-center modal-head">
                        <span class="mr-4" style="font-size: 1.6rem; color: #fff;">Please wait...</span>
                    </div>

                    <!--Body-->
                    <div class="modal-body mb-0 p-0 d-flex justify-content-center">
                        <img class="loading" src="{{ asset('assets/loading.gif') }}" alt="loeading..." style="width: 20%">
                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center flex-column flex-md-row">
                        <div class="return-container">
                            <a class="return-link" href="" data-dismiss="modal"><i class="fa fa-arrow-left"></i></a>
                        </div>
                        <span class="ml-4">We are adding more users!</span>
                    </div>

                </div>
                <!--/.Content-->

            </div>
        </div>
        <!--Modal: modalYT-->
    </div>
@endsection
