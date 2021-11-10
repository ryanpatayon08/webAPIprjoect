<!-- Plane Name Field -->
<div class="col-sm-12">
    {!! Form::label('plane_name', 'Plane Name:') !!}
    <p>{{ $airPlaneFlight->plane_name }}</p>
</div>

<!-- Destination Field -->
<div class="col-sm-12">
    {!! Form::label('destination', 'Destination:') !!}
    <p>{{ $airPlaneFlight->destination }}</p>
</div>

<!-- Date Time Of Arrival Field -->
<div class="col-sm-12">
    {!! Form::label('date_time_of_arrival', 'Date Time Of Arrival:') !!}
    <p>{{ $airPlaneFlight->date_time_of_arrival }}</p>
</div>

<!-- Date Time Of Departure Field -->
<div class="col-sm-12">
    {!! Form::label('date_time_of_departure', 'Date Time Of Departure:') !!}
    <p>{{ $airPlaneFlight->date_time_of_departure }}</p>
</div>

<!-- Ticket Price Field -->
<div class="col-sm-12">
    {!! Form::label('ticket_price', 'Ticket Price:') !!}
    <p>{{ $airPlaneFlight->ticket_price }}</p>
</div>

