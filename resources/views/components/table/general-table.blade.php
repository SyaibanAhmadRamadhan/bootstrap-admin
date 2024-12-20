<div class="card-body pt-0">
    <div class="table-responsive">
        <table class="table align-middle table-row-dashed fs-6 gy-5">
            <thead>
            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                {{$slotTheadTh ?? ''}}
            </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
            @if(!$dataTable || $dataTable->total() == 0)
                <tr>
                    <td class="no-data-row text-center">
                        <div style="display: grid;place-items: center" class="my-5">
                            <i class="bi bi-window-x mb-3" style="font-size: 48px"></i>
                            <div class="text-center fs-3">Data Not Found</div>
                            <a href="{{ url()->current() }}" class="btn btn-sm btn-secondary me-3 my-3">
                                Refresh
                            </a>
                        </div>
                    </td>
                </tr>
            @else
                {{$slotTbodyTr ?? ''}}
            @endif
            </tbody>
        </table>
    </div>
</div>

@push('script')
    <script>
        window.onload = function () {
            const theadColumns = document.querySelectorAll('table thead tr th').length;
            const noDataRow = document.querySelector('.no-data-row');

            if (noDataRow) {
                noDataRow.setAttribute('colspan', theadColumns);
            }
        }
    </script>
@endpush
