<div>
    <div class="section services wow fadeInUp">
        <div class="container">
            <div class="row pt-5">

                <div class="text-end">
                    <div class="d-flex py-5 px-1">
                        <div class="col-10 heading">
                            <h4>{{ __('dashboard.myOffers') }}</h4>
                            <div class="seperator"></div>
                        </div>
                        <div class="col-2 col-md-2">
                            <input type="checkbox"> {{ __('dashboard.selectAll') }}
                        </div>
                    </div>

                    <div class="d-flex px-2 text-center">
                        <div class="col-2 pe-3"><h5>{{ __('dashboard.offerName') }}</h5></div>
                        <div class="col-1 pe-3"><h5>{{ __('dashboard.before') }}</h5></div>
                        <div class="col-1 pe-3"><h5>{{ __('dashboard.after') }}</h5></div>
                        <div class="col-1 pe-3"><h5>{{ __('main.from') }}</h5></div>
                        <div class="col-1 pe-3"><h5>{{ __('main.to') }}</h5></div>
                        <div class="col-2 pe-3"><h5>{{ __('dashboard.location') }}</h5></div>
                        <div class="col-1 pe-3"><img src="{{ url('images/icons/eye.svg') }}"></div>
                        <div class="col-1 pe-3"><img src="{{ url('images/icons/dislike.svg') }}"></div>
                        <div class="col-1 pe-3"><img src="{{ url('images/icons/like.svg') }}"></div>
                    </div>
                    <hr>

                    @php($notifications = [1,2,3])
                    @for($i = 0; $i < count($notifications); $i++)
                        @include('site.widgets.dashboard.myOffer')
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>

