<div class="table-responsive">
    <table class="table" id="airPlaneFlights-table">
        <thead>
            <tr>
                <th>Plane Name</th>
        <th>Destination</th>
        <th>Date Time Of Arrival</th>
        <th>Date Time Of Departure</th>
        <th>Ticket Price</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($airPlaneFlights as $airPlaneFlight)
            <tr>
                <td>{{ $airPlaneFlight->plane_name }}</td>
            <td>{{ $airPlaneFlight->destination }}</td>
            <td>{{ $airPlaneFlight->date_time_of_arrival }}</td>
            <td>{{ $airPlaneFlight->date_time_of_departure }}</td>
            <td>{{ $airPlaneFlight->ticket_price }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['airPlaneFlights.destroy', $airPlaneFlight->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('airPlaneFlights.show', [$airPlaneFlight->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('airPlaneFlights.edit', [$airPlaneFlight->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
