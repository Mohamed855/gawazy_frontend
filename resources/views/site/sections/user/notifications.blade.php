<div>
    <div class="section services wow fadeInUp">
        <div class="container">
            <div class="row col-lg-7 m-auto pt-5">
                <div class="row pt-5">
                    @php($notifications = [1,2,3,4,5])
                    @for($i = 0; $i <= count($notifications); $i++)
                        @include('site.widgets.dashboard.notification')
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
