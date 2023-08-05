<div>
    <div class="section services wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading pt-5 px-1">
                        <h4>{{ __('dashboard.addNewOffer') }}</h4>
                        <div class="seperator"></div>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data" class="py-5">
                        @csrf
                        <div class="d-flex py-2">
                            <div class="col-4 col-lg-2">
                                <label for="offerName">{{ __('dashboard.offerName') }}</label>
                            </div>
                            <div class="col-8 col-lg-6">
                                <input type="text" id="offerName" name="offerName" class="form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>
                        <div class="d-flex pt-3">
                            <div class="col-4 pt-2">
                                <input class="mx-2" type="radio" id="typeOfOffer" name="typeOfOffer" value="mainService"> {{ __('dashboard.mainService') }}
                                <input class="mx-2" type="radio" id="typeOfOffer" name="typeOfOffer" value="secondaryService"> {{ __('dashboard.secondaryService') }}
                            </div>
                            <div class="col-4">
                                <select id="cities" name="cities" class="form-control bg-white focus-ring focus-ring-light border rounded" >
                                    <option selected>
                                        {{ __('dashboard.selectSecondaryService') }}
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="d-flex pt-3">
                            <div class="col-4 col-lg-2">
                                <label for="attribute">{{ __('dashboard.attribute') }}</label>
                            </div>
                            <div class="col-8 col-lg-6">
                                <input type="text" id="attribute" name="attribute" class="form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>

                        <div class="d-flex pt-3">
                            <div class="col-4 col-lg-2">
                                <label for="offerTimeFrom">{{ __('dashboard.startFrom') }}</label>
                            </div>
                            <div class="col-3 col-lg-2 ps-2">
                                <input type="date" id="startDate" name="startDate" class="form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                            <p class="pt-2">{{ __('main.to') }}</p>
                            <div class="col-3 col-lg-2 pe-2">
                                <input type="date" id="endDate" name="endDate" class="form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>

                        <div class="d-flex pt-3">
                            <div class="col-4 col-lg-2">
                                <label for="location">
                                    {{ __('dashboard.location') }}
                                </label>
                            </div>
                            <div class="col-4 col-lg-3 ps-2">
                                <select id="cities" name="cities" class="form-control bg-white focus-ring focus-ring-light border rounded" >
                                    <option selected>
                                        {{ __('dashboard.allCities') }}
                                    </option>
                                </select>
                            </div>
                            <div class="col-4 col-lg-3 pe-2">
                                <select id="towns" name="towns" class="form-control bg-white focus-ring focus-ring-light border rounded" >
                                    <option selected>
                                        {{ __('dashboard.allTowns') }}
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="pt-3">
                            <div class="col-2"><label for="bDate">{{ __('dashboard.description') }}</label></div>
                            <div class="pt-2 col-lg-8">
                                <textarea class="form-control bg-white focus-ring focus-ring-light border rounded" style="min-height: 200px">
                                </textarea>
                            </div>
                        </div>

                        <div class="text-end pt-3">
                            <label class="btn gawazy-font-gray fs-5">
                                <span class="btn gawazy-primary gawazy-font-gray py-2 w-auto"> {{ __('dashboard.mainImage') }}</span>
                                <input type="file" name="galleryImages" id="galleryImages" class="btn">
                            </label>
                            <p class="px-3" style="font-size:12px;">{{ __('dashboard.preferredSize') }} 739 × 1920</p>
                        </div>

                        <div class="text-end pt-3">
                            <label class="btn gawazy-font-gray fs-5">
                                <span class="btn gawazy-primary gawazy-font-gray py-2 w-auto"> {{ __('dashboard.addGallery') }}</span>
                                <input type="file" name="galleryImages" id="galleryImages" class="btn">
                            </label>
                            <p class="px-3" style="font-size:12px;">{{ __('dashboard.preferredSize') }} 739 × 1920</p>
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

                        <hr class="col-lg-4 mb-4">

                        <div class="d-flex my-2">
                            <div class="pt-2 col-4 col-lg-2">
                                {{ __('dashboard.offerPrice') }}
                            </div>
                            <div class="col-6 col-lg-2">
                                <input type="text" id="offerPrice" name="offerPrice" class="mx-2 form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>

                        <div class="d-flex my-2">
                            <div class="pt-2 col-4 col-lg-2">
                                {{ __('dashboard.insteadOf') }}
                            </div>
                            <div class="col-6 col-lg-2">
                                <input type="text" id="mainPrice" name="mainPrice" class="mx-2 form-control bg-white focus-ring focus-ring-light border rounded">
                            </div>
                        </div>

                        <div class="d-flex my-2">
                            <div class="pt-2 col-4 col-lg-2">
                                {{ __('dashboard.discount') }}
                            </div>
                            <div class="col-6 col-lg-2">
                                <input type="text" id="mainPrice" name="mainPrice" class="mx-2 form-control bg-white focus-ring focus-ring-light border rounded">
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
