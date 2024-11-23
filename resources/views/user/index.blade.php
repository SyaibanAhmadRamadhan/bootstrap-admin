@extends('layouts.app')

@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <x-toolbar name="User"></x-toolbar>
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card header-->
                        <x-table.basic-filter-and-export export-route="" name="User">
                            @slot('slotFilterForm')
                                <x-form.select-box-geographic province-i-d="{{request()->province_id}}"
                                                              form-method="GET"
                                                              type="filter-table"></x-form.select-box-geographic>
                            @endslot
                            @slot('slotFilterExport')
                                <x-form.select-box-geographic
                                    type="filter-table"></x-form.select-box-geographic>
                            @endslot
                        </x-table.basic-filter-and-export>

                        <x-table.general-table :data-table="$users">
                            @slot('slotTheadTh')
                                <th class="min-w-125px">Full Name</th>
                                <th class="min-w-125px">Phone Number</th>
                                <th class="min-w-125px">Email</th>
                                <th class="min-w-125px">Time zone</th>
                                <th class="min-w-125px">Gender</th>
                                <th class="min-w-125px">Role</th>
                                <th class="text-end min-w-70px">Actions</th>
                            @endslot
                            @slot('slotTbodyTr')
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->phone_number}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->timezone}}</td>
                                        <td>{{$user->gender}}</td>
                                        <td>{{$user->getRoleNames()->join(", ")}}</td>
                                        <x-table.action-button view-route="#" delete-route="#"
                                                               delete-preview="{{$user->full_name}}"></x-table.action-button>
                                    </tr>
                                @endforeach
                            @endslot
                        </x-table.general-table>
                    </div>
                    <div class="d-flex p-5 justify-content-end">
                        {!! $users->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
