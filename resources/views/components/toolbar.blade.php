<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{$name}}
                List</h1>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            @if($routeName)
                <a href="{{route($routeName)}}" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                   data-bs-target="#kt_modal_create_app">Create {{$name}}</a>
            @endif
        </div>
    </div>
</div>
