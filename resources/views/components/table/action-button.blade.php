<td class="text-end">
    <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
       data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
        <span class="svg-icon svg-icon-5 m-0">
            <svg width="24"
                 height="24"
                 viewBox="0 0 24 24"
                 fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                    fill="currentColor"/>
            </svg>
        </span>
    </a>
    <div
        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
        data-kt-menu="true">
        @if($viewRoute)
            <div class="menu-item px-3">
                <a href="{{$viewRoute}}"
                   class="menu-link px-3">View</a>
            </div>
        @endif
        @if($deleteRoute && $deletePreview)
            <form action="{{ $deleteRoute }}" method="POST" id="delete-form-{{ $deletePreview }}">
                @csrf
                @method('DELETE')
                <div class="menu-item px-3">
                    <a class="menu-link px-3" href="javascript:void(0);"
                       onclick="confirmDelete(event, '{{ $deletePreview }}')"
                       data-kt-customer-table-filter="delete_row">Delete</a>
                </div>
            </form>
        @endif
        {{$slotMenutItem ?? ''}}
    </div>
</td>

@push('script')
    <script>
        function confirmDelete(event, formId) {
            event.preventDefault();
            Swal.fire({
                title: `are you sure you deleted the data ${formId}!?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + formId).submit();
                }
            });
        }
    </script>
@endpush
