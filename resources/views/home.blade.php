@extends('layouts.app')
@section('content')
    <div class="container-fluid w-75 p-5">
        <div class="row text-center">
            <div class="col-12 mb-5">
                <img style="width: 20%" src="https://files.slack.com/files-pri/TN4R611DW-FNYDPGWE6/elearning__1_.png" alt="logo goes here...">
            </div>
            <div class="col-12 mb-5 tohide">
                <h1 class="display-4">Visi</h1>
            </div>
            <div class="col-12 mb-5 tohide">
                <p class="lead" style="font-size: 1.3rem">Bringing back the connection to social media with real-time video-chatting while streaming videos with a group of strangers..</p>
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="link-container tohide">
                        <a id="ajaxSubmit" href="#" class="custom-link"><i class="fa fa-rocket"></i></a>
                    </div>
                    <div id="video_container" style="display:none;">
                            <!--YouTube Embed VideoPlayer-->
                        <div id="player1" class="video"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal: modalYT-->
        <div class="modal fade" id="modalYT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div id="myModal" class="modal-dialog modal-dialog-centered" role="document">

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
    <div class="live-chat-room">
        <div class="d-flex justify-content-between px-5" style="color: #F44463;">
            <div class="d-flex chat-container justify-content-center align-items-center flex-column">
                <i class="fa fa-user" style="font-size: 4rem"></i>
            </div>
            <div class="d-flex chat-container justify-content-center align-items-center flex-column">
                <i class="fa fa-user" style="font-size: 4rem"></i>
            </div>
            <div class="d-flex chat-container justify-content-center align-items-center flex-column">
                <i class="fa fa-user" style="font-size: 4rem"></i>
            </div>
            <div class="d-flex chat-container justify-content-center align-items-center flex-column">
                <i class="fa fa-user" style="font-size: 4rem"></i>
            </div>
        </div>
    </div>
@endsection
