@push('css')
    <link href="{{ asset('/plugins/DataTable/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endpush
<table class="table table-bordered data-table display nowrap" style="width:100%">
    <thead>
        <th>Fecha Emi.</th>
        <th>Fecha Ven.</th>
        <th>Fecha Pago</th>
        <th>Cuota</th>
        <th>Mora</th>
        <th>Saldo</th>
        <th>Tipo</th>
        <th>Status</th>
    </thead>
    <tbody>
        @foreach ($ctacon as $cc)
            <tr>
                <td>{{ $cc->fe_emision }}</td>
                <td>{{ $cc->fe_vencimiento }}</td>
                <td>{{ $cc->fe_pago }}</td>
                <td>{{ $cc->mo_cuota }}</td>
                <td>{{ $cc->mora_cuota }}</td>
                <td>{{ $cc->saldo_cuota }}</td>
                <td>{{ $cc->tipo }}</td>
                <td>{{ $cc->status }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@push('scripts')
<script src="{{ asset('/plugins/DataTable/datatables.min.js') }}"></script>
<script>
    $(document).ready(function() {
        var table = $('.data-table').DataTable({
                fixedHeader: true,
                //responsive: true
                responsive:{
                    details:{
                        display: $.fn.dataTable.Responsive.display.modal( {
                            header: function ( row ) {
                                var data = row.data();
                                return 'Details for '+data[0]+' '+data[1];
                            }
                        } ),
                        renderer: $.fn.dataTable.Responsive.renderer.tableAll()
                    }
                }
            });
    });
</script>
@endpush
