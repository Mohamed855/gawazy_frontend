<div>
    <div class="section services wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading pt-5 px-1">
                        <h3>{{ __('main.services') }}</h3>
                        <div class="seperator"></div>
                    </div>
                </div>
                <div class="row">
                    @php($notifications = [1,2,3])
                    @for($i = 0; $i < count($notifications); $i++)
                        <div class="col-xl-4 col-md-6 col-12 pt-3">
                            @include('site.widgets.home.service')
                        </div>
                    @endfor
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="heading pt-5 px-1">
                        <h3>{{ __('main.offers') }}</h3>
                        <div class="seperator"></div>
                    </div>
                </div>
                <div class="row">
                    @php($notifications = [1,2,3])
                    @for($i = 0; $i < count($notifications); $i++)
                        <div class="col-xl-4 col-md-6 col-12 pt-3">
                            @include('site.widgets.home.offer')
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
