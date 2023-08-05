<div>
    <div class="section services wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading pt-5 px-1">
                        <h4>{{ __('main.comments') }}</h4>
                        <div class="seperator"></div>
                    </div>

                    @php($comments = [1,2,3,4,5])
                    @for($i = 0; $i <= count($comments); $i++)
                        @include('site.widgets.shared.comment')
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
