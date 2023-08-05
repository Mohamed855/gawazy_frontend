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
                        </div>
                    </div>
                </form>

                <div class="text-end">
                    <div class="d-flex py-5 px-1">
                        <div class="col-10 heading">
                            <h4>{{ __('dashboard.secondaryService') }}</h4>
                            <div class="seperator"></div>
                        </div>
                        <div class="col-2 col-md-2">
                            <input type="checkbox"> {{ __('dashboard.selectAll') }}
                        </div>
                    </div>

                    <div class="d-flex px-2 text-center">
                        <div class="col-2 pe-3"><h5>{{ __('dashboard.serviceName') }}</h5></div>
                        <div class="col-2 pe-3"><h5>{{ __('dashboard.status') }}</h5></div>
                        <div class="col-2 pe-3"><h5>{{ __('dashboard.price') }}</h5></div>
                        <div class="col-2 pe-3"><h5>{{ __('dashboard.location') }}</h5></div>
                        <div class="col-1 pe-3"><img src="{{ url('images/icons/eye.svg') }}"></div>
                        <div class="col-1 pe-3"><img src="{{ url('images/icons/dislike.svg') }}"></div>
                        <div class="col-1 pe-3"><img src="{{ url('images/icons/like.svg') }}"></div>
                    </div>
                    <hr>

                    @php($notifications = [1,2,3])
                    @for($i = 0; $i < count($notifications); $i++)
                        @include('site.widgets.dashboard.mySecondaryService')
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>

