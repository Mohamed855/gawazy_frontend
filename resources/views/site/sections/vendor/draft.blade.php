<div>
    <div class="section services wow fadeInUp">
        <div class="container">
            <div class="row pt-5">
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="w-100 text-center">
                        <img src="{{ url('images/icons/camera.png') }}" style="width: 50px">
                        <h5>{{ __('dashboard.mainServiceName') }}</h5>
                        <div>
                            <label class="btn gawazy-font-secondary fs-5">
                                <img id="dashboard-edit" src="{{ url('images/icons/edit_secondary.png') }}"> {{ __('dashboard.edit') }}
                                <input type="file" name="profileImage" id="profileImage" class="btn">
                            </label>
                            <button class="btn gawazy-font-secondary fs-5">
                                <img id="dashboard-edit" src="{{ url('images/icons/upload.png') }}"> {{ __('dashboard.post') }}
                            </button>
                        </div>
                    </div>
                </form>

                <div class="text-end">
                    <div class="heading py-5 px-1">
                        <h4>{{ __('dashboard.secondaryService') }}</h4>
                        <div class="seperator"></div>
                    </div>

                    <div class="d-flex pe-5">
                        <div class="col-9 col-md-10"><h5>{{ __('dashboard.serviceName') }}</h5></div>
                        <div class="col-3 col-md-2">
                            <input type="checkbox"> {{ __('dashboard.selectAll') }}
                        </div>
                    </div>
                    <hr>

                    @php($notifications = [1,2,3])
                    @for($i = 0; $i < count($notifications); $i++)
                        @include('site.widgets.dashboard.draftService')
                    @endfor

                    <div class="text-end">
                        <div class="heading py-5 px-1">
                            <h4>{{ __('dashboard.myOffers') }}</h4>
                            <div class="seperator"></div>
                        </div>

                        <div class="d-flex pe-5">
                            <div class="col-9 col-md-10"><h5>{{ __('dashboard.offerName') }}</h5></div>
                            <div class="col-3 col-md-2">
                                <input type="checkbox"> {{ __('dashboard.selectAll') }}
                            </div>
                        </div>
                        <hr>

                        @for($i = 0; $i < count($notifications); $i++)
                            @include('site.widgets.dashboard.draftOffer')
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
