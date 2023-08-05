<div>
    <div class="section services wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading py-5 px-1">
                        <h4>{{ __('dashboard.mainService') }}</h4>
                        <div class="seperator"></div>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="d-md-flex py-2">
                            <div class="col-md-6 d-flex justify-content-evenly">
                                <div class="col-4">
                                    <label for="location">
                                        {{ __('dashboard.location') }}
                                    </label>
                                </div>
                                <div class="col-4 ps-2">
                                    <select id="cities" name="cities" class="form-control bg-white focus-ring focus-ring-light border rounded" >
                                        <option selected>
                                            {{ __('dashboard.allCities') }}
                                        </option>
                                    </select>
                                </div>
                                <div class="col-4 ps-2">
                                    <select id="towns" name="towns" class="form-control bg-white focus-ring focus-ring-light border rounded" >
                                        <option selected>
                                            {{ __('dashboard.allTowns') }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex pt-3 pt-md-0">
                                    <div class="col-4">
                                        <label for="phone" style="font-size: 15px">{{ __('dashboard.phone') }}</label>
                                    </div>
                                    <div class="col-6 col-md-5">
                                        <input type="text" id="phone" name="phone" class="form-control bg-white focus-ring focus-ring-light border rounded">
                                    </div>
                                    <div  class="pt-2 px-2 ">
                                        <input type="checkbox" id="phoneShow"> {{ __('dashboard.show') }}
                                    </div>
                                </div>
                                <div class="d-flex pt-2">
                                    <div class="col-4">
                                        <label for="whatsapp" style="font-size: 15px">{{ __('dashboard.whatsapp') }}</label>
                                    </div>
                                    <div class="col-6 col-md-5">
                                        <input type="text" id="whatsapp" name="whatsapp" class="form-control bg-white focus-ring focus-ring-light border rounded">
                                    </div>
                                    <div  class="pt-2 px-2 ">
                                        <input type="checkbox" id="whatsappShow"> {{ __('dashboard.show') }}
                                    </div>
                                </div>
                                <div class="d-flex pt-2">
                                    <div class="col-4">
                                        <label for="email" style="font-size: 15px">{{ __('auth.email') }}</label>
                                    </div>
                                    <div class="col-6 col-md-5">
                                        <input type="email" id="email" name="email" class="form-control bg-white focus-ring focus-ring-light border rounded">
                                    </div>
                                    <div  class="pt-2 px-2 ">
                                        <input type="checkbox" id="whatsappShow"> {{ __('dashboard.show') }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="col-4 col-lg-2">
                                <label for="typeOfAccount">{{ __('dashboard.typeOfAccount') }}</label>
                            </div>
                            <div class="col-lg-3">
                                <input class="mx-2" type="radio" id="typeOfAccount" name="typeOfAccount" value="individual"> {{ __('dashboard.individual') }}
                                <input class="mx-2" type="radio" id="typeOfAccount" name="typeOfAccount" value="company"> {{ __('dashboard.company') }}
                            </div>
                        </div>

                        <div class="d-flex py-2">
                            <div class="col-4 col-lg-2">
                                <label for="vendorName">{{ __('dashboard.vendorName') }}</label>
                            </div>
                            <div class="col-8 col-lg-6">
                                <input type="text" id="vendorName" name="vendorName" class="form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>

                        <div class="justify-content-start pt-3">
                            <div class="col-3"><label for="bDate">{{ __('dashboard.description') }}</label></div>
                            <div class="pt-2 col-md-8 ">
                                <textarea class="form-control bg-white focus-ring focus-ring-light border rounded" style="min-height: 200px">

                                </textarea>
                            </div>
                        </div>
                        <div class="pt-4 d-flex">
                            <div class="text-center">
                                <label class="btn gawazy-font-gray fs-5">
                                    <span class="btn gawazy-primary gawazy-font-gray px-3 py-2 w-auto"> {{ __('dashboard.profilePic') }}</span>
                                    <input type="file" name="profileImage" id="profileImage" class="btn">
                                </label>
                                <p style="font-size: 10px;">{{ __('dashboard.preferredSize') }} 500 × 500</p>
                            </div>
                            <div class="text-center">
                                <label class="btn gawazy-font-gray fs-5">
                                    <span class="btn gawazy-primary gawazy-font-gray px-3 py-2 mx-1 mx-md-3 w-auto"> {{ __('dashboard.coverImage') }}</span>
                                    <input type="file" name="profileImage" id="profileImage" class="btn">
                                </label>
                                <p style="font-size: 10px;">{{ __('dashboard.preferredSize') }} 500 × 500</p>
                            </div>
                        </div>

                        <div class="heading pt-2 px-1">
                            <h4>{{ __('dashboard.gallery') }}</h4>
                            <div class="seperator"></div>
                        </div>

                        <div class="text-end pt-3">
                            <label class="btn gawazy-font-gray fs-5">
                                <span class="btn gawazy-primary gawazy-font-gray px-3 py-2 w-auto"> {{ __('dashboard.addGallery') }}</span>
                                <input type="file" name="profileImage" id="profileImage" class="btn">
                            </label>
                            <p class="px-4" style="font-size:12px;">{{ __('dashboard.preferredSize') }} 739 × 1920</p>
                        </div>

                        <div class="d-flex">
                            <div class="col-3 col-lg-2 py-2 px-1">
                                <label for="videoLink">{{ __('dashboard.videoLink') }}</label>
                            </div>
                            <div class="col-6 col-lg-5 py-2 px-1">
                                <input type="text" id="videoLink" name="videoLink" placeholder="//:https" class="form-control bg-white focus-ring focus-ring-light text-start border rounded">
                            </div>
                            <div class="col-3 col-lg-1 py-2 px-1">
                                <select id="cities" name="cities" class="form-control bg-white focus-ring focus-ring-light border rounded" >
                                    <option selected>
                                        {{ __('dashboard.same') }}
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="pt-4">
                            <p>{{ __('dashboard.topBar') }}</p>
                            <div class="d-flex">
                                <input class="mx-2" type="radio" id="topBar" name="topBar" value="image"> {{ __('dashboard.image') }}
                                <input class="mx-2" type="radio" id="topBar" name="topBar" value="gallery"> {{ __('dashboard.gallery') }}
                            </div>
                            <hr class="col-lg-4 mt-5 mb-4">
                        </div>

                        <div class="d-flex my-2">
                            <input class="ms-2" type="radio" id="servicePrice" name="servicePrice" value="totalPrice">
                            <div class="pt-2 col-4 col-lg-2">
                                {{ __('dashboard.servicePrice') }}
                            </div>
                            <div class="col-6 col-lg-2">
                                <input type="text" id="totalPrice" name="totalPrice" class="mx-2 form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>
                        <div class="d-flex my-2">
                            <input class="ms-2" type="radio" id="startFrom" name="servicePrice" value="startFrom">
                            <div class="pt-2 col-4 col-lg-2">
                                {{ __('dashboard.startFrom') }}
                            </div>
                            <div class="col-6 col-lg-2">
                                <input type="text" id="startFrom" name="startFrom" class="mx-2 form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>
                        <div class="d-flex my-2">
                            <input class="ms-2" type="radio" id="startFromTo" name="servicePrice" value="startFromTo">
                            <div class="pt-2 col-4 col-lg-2">
                                {{ __('dashboard.startFrom') }}
                            </div>
                            <div class="col-3 col-lg-1 px-2">
                                <input type="text" id="startFromTo" name="startFromTo" class="form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                            <p class="pt-2">{{ __('main.to') }}</p>
                            <div class="col-3 col-lg-1 px-2">
                                <input type="text" id="startFromTo" name="startFromTo" class="form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>

                        <div class="row">
                            <div class="d-flex m-5">
                                <form action="">
                                    @csrf
                                    <button type="submit" class="btn gawazy-font-gray gawazy-secondary px-3 py-2 mx-1 w-auto">{{ __('dashboard.saveInDraft') }}</button>
                                </form>
                                <button type="submit" class="btn gawazy-font-gray gawazy-primary px-3 py-2 mx-1 w-auto">{{ __('dashboard.post') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
