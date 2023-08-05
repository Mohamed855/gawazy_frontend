<div class="text-center pt-5 pt-md-0">
    <img class="dashboard-profile-img " src="{{ url('images/defaults/profile.jpg') }}">
    <h4 class="pt-2">{{ __('dashboard.userName') }}</h4>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <p class="fs-5">{{ __('dashboard.mainServiceName') }}</p>
        <label class="btn gawazy-font-gray fs-5" style="margin-top: -20px">
            <img id="dashboard-edit" src="{{ url('images/icons/edit.png') }}"> {{ __('dashboard.edit') }}
            <input type="file" name="profileImage" id="profileImage" class="btn">
        </label>
    </form>
</div>
<div>
    <div class="pt-4">
        <div class="sidebar-btn text-end">
            <a href="{{ route('vendorFavorites') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/love.png') }}">
                {{ __('dashboard.myFavorites') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn text-end">
            <a href="{{ route('main_service') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/services.png') }}">
                {{ __('dashboard.services') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn text-end">
            <a href="{{ route('my_secondary_services') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/secondary_service.png') }}">
                {{ __('dashboard.secondaryService') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn text-end">
            <a href="{{ route('add_secondary_service') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/add.png') }}">
                {{ __('dashboard.addSecondaryService') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn text-end">
            <a href="{{ route('draft') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/draft.png') }}">
                {{ __('dashboard.draft') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn text-end">
            <a href="{{ route('latest_work') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/latestWork.png') }}">
                {{ __('dashboard.latestWork') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn text-end">
            <a href="{{ route('my_offers') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/offers.png') }}">
                {{ __('dashboard.myOffers') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn text-end">
            <a href="{{ route('add_new_offer') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/add.png') }}">
                {{ __('dashboard.addNewOffer') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>


        <div class="sidebar-btn text-end">
            <a href="{{ route('vendorNotifications') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/notifications.png') }}">
                {{ __('dashboard.notifications') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn text-end">
            <a href="{{ route('editVendorProfile') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/settings.png') }}">
                {{ __('dashboard.settings') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
       <!-- <div class="sidebar-btn text-end">
            <a href="{{ route('vendorMessages') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/chat.png') }}">
                {{ __('dashboard.messages') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div> *-->
        <div class="sidebar-btn text-end">
            <a href="{{ route('vendorSupport') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/support.png') }}">
                {{ __('main.support') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
        <div class="sidebar-btn text-end">
            <a href="{{ route('logout') }}" class="btn gawazy-font-gray fs-4">
                <img class="dashboard-icon pb-1" src="{{ url('images/icons/logout.png') }}">
                {{ __('dashboard.logout') }}
            </a>
            <hr class="mx-2 sidebar-saparator">
        </div>
    </div>
</div>
