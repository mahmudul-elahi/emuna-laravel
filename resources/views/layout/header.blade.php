<header id="header">
    <div class="container">
        <div class="header d-flex align-items-center justify-content-end">
            <div class="search d-flex gap-2">
                <div class="language">
                    <select id="imageSelect" class="form-control" style="width: 100%;">
                        <option value="1" data-image="{{ asset('assets/client/images/flag/usa.png') }}"></option>
                        <option value="3" data-image="{{ asset('assets/client/images/flag/italy.png') }}"></option>
                        <option value="3" data-image="{{ asset('assets/client/images/flag/germany.png') }}">
                        </option>
                        <option value="2" data-image="{{ asset('assets/client/images/flag/spain.png') }}"></option>
                    </select>
                </div>

                <div class="input">
                    <div class="form-outline position-relative">
                        <input type="text" class="form-control form-control-sm ps-5"
                            placeholder="Type E-Number or a Product Name" />
                        <i class="fas fa-flask ms-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
