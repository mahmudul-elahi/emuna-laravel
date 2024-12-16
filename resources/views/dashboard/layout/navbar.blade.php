<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('dashboard') }}" aria-expanded="false"
                    class="{{ Request::is('dashboard') ? 'active' : '' }}">
                    <img src="{{ asset('assets/client/images/icon/dashboard.svg') }}" class="menu-icon"></i><span
                        class="nav-text">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('booking.index') }}" aria-expanded="false"
                    class="has-arrow {{ in_array(Route::currentRouteName(), ['booking.index', 'booking.view', 'booking.timeline', 'booking.slot', 'booking.create_slot', 'booking.current', 'booking.pending']) ? 'active' : '' }}">
                    <img src="{{ asset('assets/client/images/icon/bookng.svg') }}" class="menu-icon"> <span
                        class="nav-text">Booking</span>
                </a>
                @if (in_array(Route::currentRouteName(), [
                        'booking.index',
                        'booking.timeline',
                        'booking.slot',
                        'booking.create_slot',
                        'booking.current',
                        'booking.pending',
                        'booking.view',
                        'seller.booking.pending',
                        'seller.booking.upcomming',
                    ]))
                    <ul aria-expanded="false" class="collapse in">
                        <li><a href="{{ route('booking.timeline') }}" aria-expanded="false">Booking Timeline</a></li>
                        <li><a href="{{ route('booking.current') }}" aria-expanded="false">Current Booking</a></li>
                        <li><a href="{{ route('booking.pending') }}" aria-expanded="false">Pending Booking</a></li>
                        <li><a href="{{ route('seller.booking.pending') }}" aria-expanded="false">Seller Pending</a>
                        </li>
                        <li><a href="{{ route('seller.booking.upcomming') }}" aria-expanded="false">Seller
                                Upcomming</a></li>
                    </ul>
                @endif

            </li>

            <li>
                <a href="{{ route('vending.index') }}" aria-expanded="false"
                    class="{{ in_array(Route::currentRouteName(), ['vending.index', 'vending.dhave', 'vending.have']) ? 'active' : '' }}">
                    <img src="{{ asset('assets/client/images/icon/vending.svg') }}" class="menu-icon"><span
                        class="nav-text">Vending</span>
                </a>
            </li>


            <li>
                <a href="{{ route('product') }}" aria-expanded="false">
                    <img src="{{ asset('assets/client/images/icon/product.svg') }}" class="menu-icon"><span
                        class="nav-text">My Products</span>
                </a>
            </li>

            <li>
                <a href="{{ route('store_management.index') }}" aria-expanded="false"
                    class="has-arrow {{ in_array(Route::currentRouteName(), [
                        'store_management.offline.offline_monthly_sale',
                        'store_management.offline.offline_status',
                        'store_management.offline',
                        'store_management.index',
                        'store_management.online',
                        'store_management.online.recent',
                    ])
                        ? 'active'
                        : '' }}">
                    <img src="{{ asset('assets/client/images/icon/store.svg') }}" class="menu-icon"> <span
                        class="nav-text">Store Management</span>
                </a>
                @if (in_array(Route::currentRouteName(), [
                        'store_management.index',
                        'store_management.online',
                        'store_management.online.recent',
                        'store_management.offline',
                        'store_management.offline',
                        'store_management.offline.offline_monthly_sale',
                        'store_management.offline.offline_status',
                    ]))
                    <ul aria-expanded="false" class="collapse in">
                        <li><a href="{{ route('store_management.offline') }}"
                                class="{{ in_array(Route::currentRouteName(), [
                                    'store_management.offline.offline_monthly_sale',
                                    'store_management.offline.offline_status',
                                    'store_management.offline',
                                ])
                                    ? 'active'
                                    : '' }}">Offline
                                Store</a>
                        </li>
                        <li><a href="{{ route('store_management.online') }}"
                                class="{{ in_array(Route::currentRouteName(), ['store_management.online', 'store_management.online.recent'])
                                    ? 'active'
                                    : '' }}">Online
                                Store</a>
                        </li>
                    </ul>
                @endif

            </li>

            <li>
                <a href="{{ route('order_management.index') }}" aria-expanded="false"
                    class="{{ in_array(Route::currentRouteName(), ['order_management.index', 'order_management.order_list', 'order_management.order_list.update']) ? 'active' : '' }}">
                    <img src="{{ asset('assets/client/images/icon/order.svg') }}" class="menu-icon"><span
                        class="nav-text">Order Management</span>
                </a>
            </li>

        </ul>
    </div>
</div>
