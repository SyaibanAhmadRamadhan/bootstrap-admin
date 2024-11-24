@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Account Settings</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Account</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <div class="card mb-5 mb-xl-10">
                    <div class="card-body pt-9 pb-0">
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                            <div class="me-7 mb-4">
                                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                    <img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="image"/>
                                    <div
                                        class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center mb-2">
                                            <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Max
                                                Smith</a>
                                            <a href="#">
                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24px" height="24px"
                                                                             viewBox="0 0 24 24">
																			<path
                                                                                d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z"
                                                                                fill="currentColor"/>
																			<path
                                                                                d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z"
                                                                                fill="white"/>
																		</svg>
																	</span>
                                            </a>
                                        </div>
                                        <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                            <a href="#"
                                               class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                <span class="svg-icon svg-icon-4 me-1">
																	<svg width="18" height="18" viewBox="0 0 18 18"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3"
                                                                              d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z"
                                                                              fill="currentColor"/>
																		<path
                                                                            d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z"
                                                                            fill="currentColor"/>
																		<rect x="7" y="6" width="4" height="4" rx="2"
                                                                              fill="currentColor"/>
																	</svg>
																</span>
                                                <!--end::Svg Icon-->Developer</a>
                                            <a href="#"
                                               class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-4 me-1">
																	<svg width="24" height="24" viewBox="0 0 24 24"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3"
                                                                              d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                              fill="currentColor"/>
																		<path
                                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                            fill="currentColor"/>
																	</svg>
																</span>
                                                <!--end::Svg Icon-->SF, Bay Area</a>
                                            <a href="#"
                                               class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                                <span class="svg-icon svg-icon-4 me-1">
																	<svg width="24" height="24" viewBox="0 0 24 24"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3"
                                                                              d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                                              fill="currentColor"/>
																		<path
                                                                            d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                                            fill="currentColor"/>
																	</svg>
																</span>
                                                <!--end::Svg Icon-->max@kt.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5"
                                   href="{{route('account.index')}}">Overview</a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 active"
                                   href="{{route('account.setting')}}">Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-5 mb-xl-10">
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                         data-bs-target="#kt_account_profile_details" aria-expanded="true"
                         aria-controls="kt_account_profile_details">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Profile Details</h3>
                        </div>
                    </div>
                    <div id="kt_account_settings_profile_details" class="collapse show">
                        <form id="kt_account_profile_details_form" class="form">
                            <div class="card-body border-top p-9">
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                                    <div class="col-lg-8">
                                        <div class="image-input image-input-outline" data-kt-image-input="true"
                                             style="background-image: url('{{asset('assets/media/svg/avatars/blank.svg')}}')">
                                            <div class="image-input-wrapper w-125px h-125px"
                                                 style="background-image: url({{asset('assets/media/avatars/300-1.jpg')}})"></div>
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Change avatar">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg"/>
                                                <input type="hidden" name="avatar_remove"/>
                                            </label>
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="Cancel avatar">
																	<i class="bi bi-x fs-2"></i>
																</span>
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="Remove avatar">
																	<i class="bi bi-x fs-2"></i>
																</span>
                                        </div>
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full
                                        Name</label>
                                    <div class="col-lg-8">
                                        <div class="row">
                                            <div class="col-lg-6 fv-row">
                                                <input type="text" name="fname"
                                                       class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                       placeholder="First name" value="Max"/>
                                            </div>
                                            <div class="col-lg-6 fv-row">
                                                <input type="text" name="lname"
                                                       class="form-control form-control-lg form-control-solid"
                                                       placeholder="Last name" value="Smith"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Company</label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" name="company"
                                               class="form-control form-control-lg form-control-solid"
                                               placeholder="Company name" value="Keenthemes"/>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                        <span class="required">Contact Phone</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                           title="Phone number must be active"></i>
                                    </label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="tel" name="phone"
                                               class="form-control form-control-lg form-control-solid"
                                               placeholder="Phone number" value="044 3276 454 935"/>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Company Site</label>
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" name="website"
                                               class="form-control form-control-lg form-control-solid"
                                               placeholder="Company website" value="keenthemes.com"/>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">Time
                                        Zone</label>
                                    <div class="col-lg-8 fv-row">
                                        <select name="timezone" aria-label="Select a Timezone"
                                                data-control="select2" data-placeholder="Select a timezone.."
                                                class="form-select form-select-solid form-select-lg">
                                            <option value="">Select a Timezone..</option>
                                            <option data-bs-offset="-39600" value="International Date Line West">
                                                (GMT-11:00) International Date Line West
                                            </option>
                                            <option data-bs-offset="-39600" value="Midway Island">(GMT-11:00) Midway
                                                Island
                                            </option>
                                            <option data-bs-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
                                            <option data-bs-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii
                                            </option>
                                            <option data-bs-offset="-28800" value="Alaska">(GMT-08:00) Alaska
                                            </option>
                                            <option data-bs-offset="-25200" value="Pacific Time (US & Canada)">
                                                (GMT-07:00) Pacific Time (US & Canada)
                                            </option>
                                            <option data-bs-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana
                                            </option>
                                            <option data-bs-offset="-25200" value="Arizona">(GMT-07:00) Arizona
                                            </option>
                                            <option data-bs-offset="-21600" value="Mountain Time (US & Canada)">
                                                (GMT-06:00) Mountain Time (US & Canada)
                                            </option>
                                            <option data-bs-offset="-21600" value="Chihuahua">(GMT-06:00)
                                                Chihuahua
                                            </option>
                                            <option data-bs-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan
                                            </option>
                                            <option data-bs-offset="-21600" value="Saskatchewan">(GMT-06:00)
                                                Saskatchewan
                                            </option>
                                            <option data-bs-offset="-21600" value="Central America">(GMT-06:00)
                                                Central America
                                            </option>
                                            <option data-bs-offset="-18000" value="Central Time (US & Canada)">
                                                (GMT-05:00) Central Time (US & Canada)
                                            </option>
                                            <option data-bs-offset="-18000" value="Guadalajara">(GMT-05:00)
                                                Guadalajara
                                            </option>
                                            <option data-bs-offset="-18000" value="Mexico City">(GMT-05:00) Mexico
                                                City
                                            </option>
                                            <option data-bs-offset="-18000" value="Monterrey">(GMT-05:00)
                                                Monterrey
                                            </option>
                                            <option data-bs-offset="-18000" value="Bogota">(GMT-05:00) Bogota
                                            </option>
                                            <option data-bs-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
                                            <option data-bs-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
                                            <option data-bs-offset="-14400" value="Eastern Time (US & Canada)">
                                                (GMT-04:00) Eastern Time (US & Canada)
                                            </option>
                                            <option data-bs-offset="-14400" value="Indiana (East)">(GMT-04:00)
                                                Indiana (East)
                                            </option>
                                            <option data-bs-offset="-14400" value="Caracas">(GMT-04:00) Caracas
                                            </option>
                                            <option data-bs-offset="-14400" value="La Paz">(GMT-04:00) La Paz
                                            </option>
                                            <option data-bs-offset="-14400" value="Georgetown">(GMT-04:00)
                                                Georgetown
                                            </option>
                                            <option data-bs-offset="-10800" value="Atlantic Time (Canada)">
                                                (GMT-03:00) Atlantic Time (Canada)
                                            </option>
                                            <option data-bs-offset="-10800" value="Santiago">(GMT-03:00) Santiago
                                            </option>
                                            <option data-bs-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia
                                            </option>
                                            <option data-bs-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos
                                                Aires
                                            </option>
                                            <option data-bs-offset="-9000" value="Newfoundland">(GMT-02:30)
                                                Newfoundland
                                            </option>
                                            <option data-bs-offset="-7200" value="Greenland">(GMT-02:00) Greenland
                                            </option>
                                            <option data-bs-offset="-7200" value="Mid-Atlantic">(GMT-02:00)
                                                Mid-Atlantic
                                            </option>
                                            <option data-bs-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape
                                                Verde Is.
                                            </option>
                                            <option data-bs-offset="0" value="Azores">(GMT) Azores</option>
                                            <option data-bs-offset="0" value="Monrovia">(GMT) Monrovia</option>
                                            <option data-bs-offset="0" value="UTC">(GMT) UTC</option>
                                            <option data-bs-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
                                            <option data-bs-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh
                                            </option>
                                            <option data-bs-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
                                            <option data-bs-offset="3600" value="London">(GMT+01:00) London</option>
                                            <option data-bs-offset="3600" value="Casablanca">(GMT+01:00)
                                                Casablanca
                                            </option>
                                            <option data-bs-offset="3600" value="West Central Africa">(GMT+01:00)
                                                West Central Africa
                                            </option>
                                            <option data-bs-offset="7200" value="Belgrade">(GMT+02:00) Belgrade
                                            </option>
                                            <option data-bs-offset="7200" value="Bratislava">(GMT+02:00)
                                                Bratislava
                                            </option>
                                            <option data-bs-offset="7200" value="Budapest">(GMT+02:00) Budapest
                                            </option>
                                            <option data-bs-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana
                                            </option>
                                            <option data-bs-offset="7200" value="Prague">(GMT+02:00) Prague</option>
                                            <option data-bs-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo
                                            </option>
                                            <option data-bs-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
                                            <option data-bs-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
                                            <option data-bs-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
                                            <option data-bs-offset="7200" value="Brussels">(GMT+02:00) Brussels
                                            </option>
                                            <option data-bs-offset="7200" value="Copenhagen">(GMT+02:00)
                                                Copenhagen
                                            </option>
                                            <option data-bs-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
                                            <option data-bs-offset="7200" value="Paris">(GMT+02:00) Paris</option>
                                            <option data-bs-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam
                                            </option>
                                            <option data-bs-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
                                            <option data-bs-offset="7200" value="Bern">(GMT+02:00) Bern</option>
                                            <option data-bs-offset="7200" value="Rome">(GMT+02:00) Rome</option>
                                            <option data-bs-offset="7200" value="Stockholm">(GMT+02:00) Stockholm
                                            </option>
                                            <option data-bs-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
                                            <option data-bs-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
                                            <option data-bs-offset="7200" value="Harare">(GMT+02:00) Harare</option>
                                            <option data-bs-offset="7200" value="Pretoria">(GMT+02:00) Pretoria
                                            </option>
                                            <option data-bs-offset="10800" value="Bucharest">(GMT+03:00) Bucharest
                                            </option>
                                            <option data-bs-offset="10800" value="Helsinki">(GMT+03:00) Helsinki
                                            </option>
                                            <option data-bs-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
                                            <option data-bs-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
                                            <option data-bs-offset="10800" value="Riga">(GMT+03:00) Riga</option>
                                            <option data-bs-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
                                            <option data-bs-offset="10800" value="Tallinn">(GMT+03:00) Tallinn
                                            </option>
                                            <option data-bs-offset="10800" value="Vilnius">(GMT+03:00) Vilnius
                                            </option>
                                            <option data-bs-offset="10800" value="Athens">(GMT+03:00) Athens
                                            </option>
                                            <option data-bs-offset="10800" value="Istanbul">(GMT+03:00) Istanbul
                                            </option>
                                            <option data-bs-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
                                            <option data-bs-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem
                                            </option>
                                            <option data-bs-offset="10800" value="Moscow">(GMT+03:00) Moscow
                                            </option>
                                            <option data-bs-offset="10800" value="St. Petersburg">(GMT+03:00) St.
                                                Petersburg
                                            </option>
                                            <option data-bs-offset="10800" value="Volgograd">(GMT+03:00) Volgograd
                                            </option>
                                            <option data-bs-offset="10800" value="Kuwait">(GMT+03:00) Kuwait
                                            </option>
                                            <option data-bs-offset="10800" value="Riyadh">(GMT+03:00) Riyadh
                                            </option>
                                            <option data-bs-offset="10800" value="Nairobi">(GMT+03:00) Nairobi
                                            </option>
                                            <option data-bs-offset="10800" value="Baghdad">(GMT+03:00) Baghdad
                                            </option>
                                            <option data-bs-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi
                                            </option>
                                            <option data-bs-offset="14400" value="Muscat">(GMT+04:00) Muscat
                                            </option>
                                            <option data-bs-offset="14400" value="Baku">(GMT+04:00) Baku</option>
                                            <option data-bs-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi
                                            </option>
                                            <option data-bs-offset="14400" value="Yerevan">(GMT+04:00) Yerevan
                                            </option>
                                            <option data-bs-offset="16200" value="Tehran">(GMT+04:30) Tehran
                                            </option>
                                            <option data-bs-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
                                            <option data-bs-offset="18000" value="Ekaterinburg">(GMT+05:00)
                                                Ekaterinburg
                                            </option>
                                            <option data-bs-offset="18000" value="Islamabad">(GMT+05:00) Islamabad
                                            </option>
                                            <option data-bs-offset="18000" value="Karachi">(GMT+05:00) Karachi
                                            </option>
                                            <option data-bs-offset="18000" value="Tashkent">(GMT+05:00) Tashkent
                                            </option>
                                            <option data-bs-offset="19800" value="Chennai">(GMT+05:30) Chennai
                                            </option>
                                            <option data-bs-offset="19800" value="Kolkata">(GMT+05:30) Kolkata
                                            </option>
                                            <option data-bs-offset="19800" value="Mumbai">(GMT+05:30) Mumbai
                                            </option>
                                            <option data-bs-offset="19800" value="New Delhi">(GMT+05:30) New Delhi
                                            </option>
                                            <option data-bs-offset="19800" value="Sri Jayawardenepura">(GMT+05:30)
                                                Sri Jayawardenepura
                                            </option>
                                            <option data-bs-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu
                                            </option>
                                            <option data-bs-offset="21600" value="Astana">(GMT+06:00) Astana
                                            </option>
                                            <option data-bs-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
                                            <option data-bs-offset="21600" value="Almaty">(GMT+06:00) Almaty
                                            </option>
                                            <option data-bs-offset="21600" value="Urumqi">(GMT+06:00) Urumqi
                                            </option>
                                            <option data-bs-offset="23400" value="Rangoon">(GMT+06:30) Rangoon
                                            </option>
                                            <option data-bs-offset="25200" value="Novosibirsk">(GMT+07:00)
                                                Novosibirsk
                                            </option>
                                            <option data-bs-offset="25200" value="Bangkok">(GMT+07:00) Bangkok
                                            </option>
                                            <option data-bs-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
                                            <option data-bs-offset="25200" value="Jakarta">(GMT+07:00) Jakarta
                                            </option>
                                            <option data-bs-offset="25200" value="Krasnoyarsk">(GMT+07:00)
                                                Krasnoyarsk
                                            </option>
                                            <option data-bs-offset="28800" value="Beijing">(GMT+08:00) Beijing
                                            </option>
                                            <option data-bs-offset="28800" value="Chongqing">(GMT+08:00) Chongqing
                                            </option>
                                            <option data-bs-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong
                                            </option>
                                            <option data-bs-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala
                                                Lumpur
                                            </option>
                                            <option data-bs-offset="28800" value="Singapore">(GMT+08:00) Singapore
                                            </option>
                                            <option data-bs-offset="28800" value="Taipei">(GMT+08:00) Taipei
                                            </option>
                                            <option data-bs-offset="28800" value="Perth">(GMT+08:00) Perth</option>
                                            <option data-bs-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk
                                            </option>
                                            <option data-bs-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan
                                                Bataar
                                            </option>
                                            <option data-bs-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
                                            <option data-bs-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
                                            <option data-bs-offset="32400" value="Sapporo">(GMT+09:00) Sapporo
                                            </option>
                                            <option data-bs-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
                                            <option data-bs-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk
                                            </option>
                                            <option data-bs-offset="34200" value="Darwin">(GMT+09:30) Darwin
                                            </option>
                                            <option data-bs-offset="34200" value="Adelaide">(GMT+09:30) Adelaide
                                            </option>
                                            <option data-bs-offset="36000" value="Canberra">(GMT+10:00) Canberra
                                            </option>
                                            <option data-bs-offset="36000" value="Melbourne">(GMT+10:00) Melbourne
                                            </option>
                                            <option data-bs-offset="36000" value="Sydney">(GMT+10:00) Sydney
                                            </option>
                                            <option data-bs-offset="36000" value="Brisbane">(GMT+10:00) Brisbane
                                            </option>
                                            <option data-bs-offset="36000" value="Hobart">(GMT+10:00) Hobart
                                            </option>
                                            <option data-bs-offset="36000" value="Vladivostok">(GMT+10:00)
                                                Vladivostok
                                            </option>
                                            <option data-bs-offset="36000" value="Guam">(GMT+10:00) Guam</option>
                                            <option data-bs-offset="36000" value="Port Moresby">(GMT+10:00) Port
                                                Moresby
                                            </option>
                                            <option data-bs-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon
                                                Is.
                                            </option>
                                            <option data-bs-offset="39600" value="Magadan">(GMT+11:00) Magadan
                                            </option>
                                            <option data-bs-offset="39600" value="New Caledonia">(GMT+11:00) New
                                                Caledonia
                                            </option>
                                            <option data-bs-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
                                            <option data-bs-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka
                                            </option>
                                            <option data-bs-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall
                                                Is.
                                            </option>
                                            <option data-bs-offset="43200" value="Auckland">(GMT+12:00) Auckland
                                            </option>
                                            <option data-bs-offset="43200" value="Wellington">(GMT+12:00)
                                                Wellington
                                            </option>
                                            <option data-bs-offset="46800" value="Nuku'alofa">(GMT+13:00)
                                                Nuku'alofa
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">Currency</label>
                                    <div class="col-lg-8 fv-row">
                                        <select name="currnecy" aria-label="Select a Currency"
                                                data-control="select2" data-placeholder="Select a currency.."
                                                class="form-select form-select-solid form-select-lg">
                                            <option value="">Select a currency..</option>
                                            <option data-kt-flag="flags/united-states.svg" value="USD">
                                                <b>USD</b>&nbsp;-&nbsp;USA dollar
                                            </option>
                                            <option data-kt-flag="flags/united-kingdom.svg" value="GBP">
                                                <b>GBP</b>&nbsp;-&nbsp;British pound
                                            </option>
                                            <option data-kt-flag="flags/australia.svg" value="AUD">
                                                <b>AUD</b>&nbsp;-&nbsp;Australian dollar
                                            </option>
                                            <option data-kt-flag="flags/japan.svg" value="JPY">
                                                <b>JPY</b>&nbsp;-&nbsp;Japanese yen
                                            </option>
                                            <option data-kt-flag="flags/sweden.svg" value="SEK">
                                                <b>SEK</b>&nbsp;-&nbsp;Swedish krona
                                            </option>
                                            <option data-kt-flag="flags/canada.svg" value="CAD">
                                                <b>CAD</b>&nbsp;-&nbsp;Canadian dollar
                                            </option>
                                            <option data-kt-flag="flags/switzerland.svg" value="CHF">
                                                <b>CHF</b>&nbsp;-&nbsp;Swiss franc
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button type="submit" class="btn btn-primary"
                                        id="kt_account_profile_details_submit">Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mb-5 mb-xl-10">
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                         data-bs-target="#kt_account_signin_method">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Sign-in Method</h3>
                        </div>
                    </div>
                    <div id="kt_account_settings_signin_method" class="collapse show">
                        <div class="card-body border-top p-9">
                            <div class="d-flex flex-wrap align-items-center">
                                <div id="kt_signin_email">
                                    <div class="fs-6 fw-bold mb-1">Email Address</div>
                                    <div class="fw-semibold text-gray-600">support@keenthemes.com</div>
                                </div>
                                <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                                    <form id="kt_signin_change_email" class="form" novalidate="novalidate">
                                        <div class="row mb-6">
                                            <div class="col-lg-6 mb-4 mb-lg-0">
                                                <div class="fv-row mb-0">
                                                    <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter
                                                        New Email Address</label>
                                                    <input type="email"
                                                           class="form-control form-control-lg form-control-solid"
                                                           id="emailaddress" placeholder="Email Address"
                                                           name="emailaddress" value="support@keenthemes.com"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="fv-row mb-0">
                                                    <label for="confirmemailpassword"
                                                           class="form-label fs-6 fw-bold mb-3">Confirm
                                                        Password</label>
                                                    <input type="password"
                                                           class="form-control form-control-lg form-control-solid"
                                                           name="confirmemailpassword" id="confirmemailpassword"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <button id="kt_signin_submit" type="button"
                                                    class="btn btn-primary me-2 px-6">Update Email
                                            </button>
                                            <button id="kt_signin_cancel" type="button"
                                                    class="btn btn-color-gray-400 btn-active-light-primary px-6">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div id="kt_signin_email_button" class="ms-auto">
                                    <button class="btn btn-light btn-active-light-primary">Change Email</button>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-6"></div>
                            <div class="d-flex flex-wrap align-items-center mb-10">
                                <div id="kt_signin_password">
                                    <div class="fs-6 fw-bold mb-1">Password</div>
                                    <div class="fw-semibold text-gray-600">************</div>
                                </div>
                                <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                                    <form id="kt_signin_change_password" class="form" novalidate="novalidate">
                                        <div class="row mb-1">
                                            <div class="col-lg-4">
                                                <div class="fv-row mb-0">
                                                    <label for="currentpassword"
                                                           class="form-label fs-6 fw-bold mb-3">Current
                                                        Password</label>
                                                    <input type="password"
                                                           class="form-control form-control-lg form-control-solid"
                                                           name="currentpassword" id="currentpassword"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="fv-row mb-0">
                                                    <label for="newpassword" class="form-label fs-6 fw-bold mb-3">New
                                                        Password</label>
                                                    <input type="password"
                                                           class="form-control form-control-lg form-control-solid"
                                                           name="newpassword" id="newpassword"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="fv-row mb-0">
                                                    <label for="confirmpassword"
                                                           class="form-label fs-6 fw-bold mb-3">Confirm New
                                                        Password</label>
                                                    <input type="password"
                                                           class="form-control form-control-lg form-control-solid"
                                                           name="confirmpassword" id="confirmpassword"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-text mb-5">Password must be at least 8 character and
                                            contain symbols
                                        </div>
                                        <div class="d-flex">
                                            <button id="kt_password_submit" type="button"
                                                    class="btn btn-primary me-2 px-6">Update Password
                                            </button>
                                            <button id="kt_password_cancel" type="button"
                                                    class="btn btn-color-gray-400 btn-active-light-primary px-6">
                                                Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div id="kt_signin_password_button" class="ms-auto">
                                    <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                                </div>
                            </div>
                            <div
                                class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                                    <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3"
                                                                  d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                                                  fill="currentColor"/>
															<path
                                                                d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                                                fill="currentColor"/>
														</svg>
													</span>
                                <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                    <div class="mb-3 mb-md-0 fw-semibold">
                                        <h4 class="text-gray-900 fw-bold">Secure Your Account</h4>
                                        <div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an extra
                                            layer of security to your account. To log in, in addition you'll need to
                                            provide a 6 digit code
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap"
                                       data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication">Enable</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-5 mb-xl-10">
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                         data-bs-target="#kt_account_connected_accounts" aria-expanded="true"
                         aria-controls="kt_account_connected_accounts">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Connected Accounts</h3>
                        </div>
                    </div>
                    <div id="kt_account_settings_connected_accounts" class="collapse show">
                        <div class="card-body border-top p-9">
                            <div
                                class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                                    <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3"
                                                                  d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z"
                                                                  fill="currentColor"/>
															<path
                                                                d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z"
                                                                fill="currentColor"/>
														</svg>
													</span>
                                <div class="d-flex flex-stack flex-grow-1">
                                    <div class="fw-semibold">
                                        <div class="fs-6 text-gray-700">Two-factor authentication adds an extra
                                            layer of security to your account. To log in, in you'll need to provide
                                            a 4 digit amazing code.
                                            <a href="#" class="fw-bold">Learn More</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <div class="d-flex flex-stack">
                                    <div class="d-flex">
                                        <img src="{{asset('assets/media/svg/brand-logos/google-icon.svg')}}"
                                             class="w-30px me-6" alt=""/>
                                        <div class="d-flex flex-column">
                                            <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Google</a>
                                            <div class="fs-6 fw-semibold text-gray-400">Plan properly your
                                                workflow
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <div class="form-check form-check-solid form-check-custom form-switch">
                                            <input class="form-check-input w-45px h-30px" type="checkbox"
                                                   id="googleswitch" checked="checked"/>
                                            <label class="form-check-label" for="googleswitch"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="separator separator-dashed my-5"></div>
                                <div class="d-flex flex-stack">
                                    <div class="d-flex">
                                        <img src="{{asset('assets/media/svg/brand-logos/github.svg')}}"
                                             class="w-30px me-6" alt=""/>
                                        <div class="d-flex flex-column">
                                            <a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Github</a>
                                            <div class="fs-6 fw-semibold text-gray-400">Keep eye on on your
                                                Repositories
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <div class="form-check form-check-solid form-check-custom form-switch">
                                            <input class="form-check-input w-45px h-30px" type="checkbox"
                                                   id="githubswitch" checked="checked"/>
                                            <label class="form-check-label" for="githubswitch"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button class="btn btn-light btn-active-light-primary me-2">Discard</button>
                            <button class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                         data-bs-target="#kt_account_deactivate" aria-expanded="true"
                         aria-controls="kt_account_deactivate">
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Deactivate Account</h3>
                        </div>
                    </div>
                    <div id="kt_account_settings_deactivate" class="collapse show">
                        <form id="kt_account_deactivate_form" class="form">
                            <div class="card-body border-top p-9">
                                <div
                                    class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                                        <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                                      rx="10" fill="currentColor"/>
																<rect x="11" y="14" width="7" height="2" rx="1"
                                                                      transform="rotate(-90 11 14)"
                                                                      fill="currentColor"/>
																<rect x="11" y="17" width="2" height="2" rx="1"
                                                                      transform="rotate(-90 11 17)"
                                                                      fill="currentColor"/>
															</svg>
														</span>
                                    <div class="d-flex flex-stack flex-grow-1">
                                        <div class="fw-semibold">
                                            <h4 class="text-gray-900 fw-bold">You Are Deactivating Your Account</h4>
                                            <div class="fs-6 text-gray-700">For extra security, this requires you to
                                                confirm your email or phone number when you reset yousignr password.
                                                <br/>
                                                <a class="fw-bold" href="#">Learn more</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check form-check-solid fv-row">
                                    <input name="deactivate" class="form-check-input" type="checkbox" value=""
                                           id="deactivate"/>
                                    <label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">I confirm
                                        my account deactivation</label>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button id="kt_account_deactivate_account_submit" type="submit"
                                        class="btn btn-danger fw-semibold">Deactivate Account
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
