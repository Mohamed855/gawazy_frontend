<div class="service-card pb-4 bg-white rounded">
    <div class="love-icon">
        <a class="px-3" href="">
            <img src="{{ url('images/icons/love.svg') }}" alt="add to favorites">
        </a>
    </div>
    <div class="offer-details text-start position-relative">
        <div class="discount px-3 py-2 start-0 rounded">
            <span>خصم 20%</span>
        </div>
        <div class="discount-date px-3 py-2 start-0 rounded">
            <span>من 10 أشهر</span>
        </div>
    </div>
    <div>
        <a href="{{ route('offerPage', $id) }}">
            <img src="{{ url('images/defaults/default.jpg') }}" class="service-image mw-100" alt="">
        </a>
    </div>
    <div class="service-box pt-5">
        <div class="title-price d-flex justify-content-between">
            <div>
                <div style="color: black;">
                    <h4 class="service-title">
                        {{ __('main.service-title') }}
                    </h4>
                </div>
                <small>
                    {{ __('main.service-address') }}
                </small>
            </div>
            <div class="price-rate">
                <div>
                    <div class="price"><strong>2000</strong> {{ __('main.eg') }}</div>
                    <div class="price"><del>5000</del> {{ __('main.eg') }}</div>
                </div>
                <div class="rate">
                    <label></label>
                    <label></label>
                    <label></label>
                    <label></label>
                    <label></label>
                </div>
            </div>
        </div>
        <div class="">
            <div class="vendor-name ">
                <span>{{ __('auth.vendorName') }}</span>
            </div>
        </div>
        <div class="d-flex justify-content-between pt-3">
            <div class="pt-2 ">
                <a href="{{ route('offerPage', $id) }}" class="more-btn px-4 py-2 text-white rounded">{{ __('main.more') }}</a>
            </div>
            <div class="service-actions">
                <div class="actions">
                    <div class="action"><img src="{{ url('images/icons/eye.svg') }}" class="" alt=""></div>
                    <div class="action"><img src="{{ url('images/icons/dislike.svg') }}" class="" alt=""></div>
                    <div class="action"><img src="{{ url('images/icons/like.svg') }}" alt=""></div>
                    <div class="action"><img src="{{ url('images/icons/share.svg') }}" alt=""></div>
                </div>
                <div class="actions">
                    <div class="action"><small class=" ">133</small></div>
                    <div class="action"><small class=" ">-</small></div>
                    <div class="action"><small class=" ">-</small></div>
                    <div class="action"><small class=" ">-</small></div>
                </div>
            </div>
        </div>
    </div>
</div>
