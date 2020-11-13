@push('css')
    <link href="{{ asset('/plugins/DataTable/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endpush
<table class="table table-bordered data-table">
    <thead>
        <th width="10%">Persona</th>
        <th width="60%">Nombre</th>
        <th width="10%">Vivienda</th>
        <th width="20%">Acciones</th>
    </thead>
    <tbody>
        @foreach ($datos as $dat)
            <tr>
                <td class="text-center">{{ $dat->id_usuario }}</td>
                <td>{{ $dat->name }}</td>
                <td class="text-center">{{ $dat->vivienda }}</td>
                <td class="text-center">
                    @can('vivienda.read')
                        <a href="{{ URL::action('ViviendasController@show',encrypt($dat->id_usuario)) }}">
                            {{ Form::button(
                                '<i class="fa fa-eye"></i>',
                                    [
                                        'type' => 'submit',
                                        'class' => 'btn btn-primary btn-sm',
                                        'data-toggle' => 'tooltip',
                                        'title' => 'Ver'
                                    ]
                            )}}
                        </a>
                    @endcan                    
                                
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@push('scripts')
<script src="{{ asset('/plugins/DataTable/datatables.min.js') }}"></script>
<script>
    $(document).ready(function() {
        var table = $('.data-table').DataTable( {
            fixedHeader: true
        } );
    } );
</script>
@endpush
