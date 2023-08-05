<div>
    <div class="section services wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading pt-5 px-1">
                        <h4>{{ __('dashboard.profile') }}</h4>
                        <div class="seperator"></div>
                    </div>
                    <form action="" method="post">
                        <div class="d-md-flex justify-content-start py-5">
                            <div class="col-md-8">
                                @csrf
                                <div class="d-flex justify-content-start">
                                    <div class="col-4"><label for="userName">{{ __('dashboard.userName') }}</label></div>
                                    <div class="col-lg-5 col-6">
                                            <input type="text" id="userName" name="userName" class="form-control bg-white focus-ring focus-ring-light border rounded" >
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start pt-3">
                                    <div class="col-4"><label for="email">{{ __('auth.email') }}</label></div>
                                    <div class="col-lg-5 col-6">
                                        <input type="email" id="email" name="email" class="form-control bg-white focus-ring focus-ring-light border rounded">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start pt-3">
                                    <div class="col-4"><label for="phone">{{ __('auth.phone') }}</label></div>
                                    <div class="col-lg-5 col-6">
                                        <input type="text" maxlength="11" id="phone" name="phone" class="form-control bg-white focus-ring focus-ring-light border rounded">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start pt-3">
                                    <div class=col-4"><label for="gender">{{ __('dashboard.gender') }}</label></div>
                                    <div class="col-lg-5 col-6">
                                        <input class="mx-2" type="radio" id="gender" name="gender" value="female"> {{ __('dashboard.female') }}
                                        <input class="mx-2" type="radio" id="gender" name="gender" value="male"> {{ __('dashboard.male') }}
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start pt-3">
                                    <div class="col-4"><label for="bDate">{{ __('dashboard.birthDate') }}</label></div>
                                    <div class="col-lg-5 col-6 d-flex">
                                        <input type="number" min="1" max="31" maxlength="2" id="day" name="day" placeholder="{{ __('dashboard.day') }}" class="form-control bg-white focus-ring focus-ring-light border ms-2 rounded">
                                        <input type="number" min="1" max="12" maxlength="2" id="month" name="month" placeholder="{{ __('dashboard.month') }}" class="form-control bg-white focus-ring focus-ring-light border ms-2 rounded">
                                        <input type="number" min="1900" max="2023"  maxlength="4" id="year" name="year" placeholder="{{ __('dashboard.year') }}" class="form-control bg-white focus-ring focus-ring-light border ms-2 rounded">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" id="gawazy-btn" class="btn mt-3 w-auto px-3">{{ __('dashboard.updateInfo') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="heading pt-5 px-1">
                        <h4>{{ __('dashboard.settings') }}</h4>
                        <div class="seperator"></div>
                    </div>
                    <div class="d-md-flex justify-content-start py-5">
                        <div class="col-md-8">
                            <form action="">
                                @csrf
                                <div class="d-flex justify-content-start">
                                    <div class="col-4"><label for="oldPass">{{ __('dashboard.oldPass') }}</label></div>
                                    <div class="col-lg-5 col-6">
                                        <input type="password" id="oldPass" name="oldPass" class="form-control bg-white focus-ring focus-ring-light border rounded" >
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start pt-3">
                                    <div class="col-4"><label for="email">{{ __('dashboard.newPass') }}</label></div>
                                    <div class="col-lg-5 col-6">
                                        <input type="password" id="newPass" name="newPass" class="form-control bg-white focus-ring focus-ring-light border rounded">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start pt-3">
                                    <div class="col-4"><label for="email">{{ __('dashboard.confirmPass') }}</label></div>
                                    <div class="col-lg-5 col-6">
                                        <input type="password" id="newPass" name="newPass" class="form-control bg-white focus-ring focus-ring-light border rounded">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" id="gawazy-btn" class="btn mt-3 w-auto px-3">{{ __('dashboard.updatePass') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="d-flex m-5">
                    <div class=" d-flex col-6">
                        <a href="" class="btn gawazy-font-primary px-3 py-2 mx-1 mx-md-3 w-auto close-btn">{{ __('dashboard.close') }}</a>
                        <a href="" class="btn gawazy-font-primary px-3 py-2 mx-1 mx-md-3 w-auto close-btn">{{ __('dashboard.delete') }}</a>
                    </div>
                    <div class="col-6">
                        <a href="" class="btn gawazy-primary px-5 py-2 gawazy-font-gray fs-5">{{ __('dashboard.save') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
