<div class="collapse navbar-collapse">
    <ul class="navbar-nav ms-auto navbar-list col-4 col-xl-3 position-relative">
        <li class="nav-item px-lg-2">
            <a class="btn border-0 fs-4" href="{{ route('home') }}">{{ __('main.home') }}</a></li>
        <li class="nav-item px-lg-2">
            <button class="categories-btn fs-4 px-1 btn border-0" style="cursor: pointer" onclick="on()">
                {{ __('main.categories') }}
            </button>
            <ul class="nav-categories gawazy-bg-white bg-white m-0 p-2 position-absolute row">
                <div class="col-2 pt-2 px-3 text-break">
                    <a class="text-decoration-none text-black" href="{{ route('categories') }}">
                        <img class="category-image p-2" src="{{ url('images/categories/beauty.png') }}">
                        <div class="text-center">
                            {{ __('categories.beauty') }}
                        </div>
                    </a>
                </div>
                <div class="col-2 pt-2 px-3 text-break">
                    <a class="text-decoration-none text-black" href="{{ route('categories') }}">
                        <img class="category-image p-2" src="{{ url('images/categories/weddingInvitations.png') }}">
                        <div class="text-center">
                            {{ __('categories.weddingInvitations') }}
                        </div>
                    </a>
                </div>
                <div class="col-2 pt-2 px-3 text-break">
                    <a class="text-decoration-none text-black" href="{{ route('categories') }}">
                        <img class="category-image p-2" src="{{ url('images/categories/dresses.png') }}">
                        <div class="text-center">
                            {{ __('categories.dresses') }}
                        </div>
                    </a>
                </div>
                <div class="col-2 pt-2 px-3 text-break">
                    <a class="text-decoration-none text-black" href="{{ route('categories') }}">
                        <img class="category-image p-2" src="{{ url('images/categories/halls.png') }}">
                        <div class="text-center">
                            {{ __('categories.halls') }}
                        </div>
                    </a>
                </div>
                <div class="col-2 pt-2 px-3 text-break">
                    <a class="text-decoration-none text-black" href="{{ route('categories') }}">
                        <img class="category-image p-2" src="{{ url('images/categories/events.png') }}">
                        <div class="text-center">
                            {{ __('categories.events') }}
                        </div>
                    </a>
                </div>
                <div class="col-2 pt-2 px-3 text-break">
                    <a class="text-decoration-none text-black" href="{{ route('categories') }}">
                        <img class="category-image p-2" src="{{ url('images/categories/scenery.png') }}">
                        <div class="text-center">
                            {{ __('categories.scenery') }}
                        </div>
                    </a>
                </div>
                <div class="col-2 pt-2 px-3 text-break">
                    <a class="text-decoration-none text-black" href="{{ route('categories') }}">
                        <img class="category-image p-2" src="{{ url('images/categories/accessories.png') }}">
                        <div class="text-center">
                            {{ __('categories.accessories') }}
                        </div>
                    </a>
                </div>
                <div class="col-2 pt-2 px-3 text-break">
                    <a class="text-decoration-none text-black" href="{{ route('categories') }}">
                        <img class="category-image p-2" src="{{ url('images/categories/travel.png') }}">
                        <div class="text-center">
                            {{ __('categories.travel') }}
                        </div>
                    </a>
                </div>
                <div class="col-2 pt-2 px-3 text-break">
                    <a class="text-decoration-none text-black" href="{{ route('categories') }}">
                        <img class="category-image p-2" src="{{ url('images/categories/photography.png') }}">
                        <div class="text-center">
                            {{ __('categories.photography') }}
                        </div>
                    </a>
                </div>
                <div class="col-2 pt-2 px-3 text-break">
                    <a class="text-decoration-none text-black" href="{{ route('categories') }}">
                        <img class="category-image p-2" src="{{ url('images/categories/buffet.png') }}">
                        <div class="text-center">
                            {{ __('categories.buffet') }}
                        </div>
                    </a>
                </div>
                <div class="col-2 pt-2 px-3 text-break">
                    <a class="text-decoration-none text-black" href="{{ route('categories') }}">
                        <img class="category-image p-2" src="{{ url('images/categories/cars.png') }}">
                        <div class="text-center">
                            {{ __('categories.cars') }}
                        </div>
                    </a>
                </div>
                <div class="col-2 pt-2 px-3 text-break">
                    <a class="text-decoration-none text-black" href="{{ route('categories') }}">
                        <img class="category-image p-2" src="{{ url('images/categories/other.png') }}">
                        <div class="text-center">
                            {{ __('categories.other') }}
                        </div>
                    </a>
                </div>
            </ul>
        </li>
        <li class="nav-item px-lg-2">
            <a class="btn border-0 fs-4" href="{{ route('help') }}">{{ __('main.help') }}</a></li>
    </ul>
</div>
