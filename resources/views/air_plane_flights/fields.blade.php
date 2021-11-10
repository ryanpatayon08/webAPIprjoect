<!-- Plane Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plane_name', 'Plane Name:') !!}
    {!! Form::text('plane_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Destination Field -->
<div class="form-group col-sm-6">
    {!! Form::label('destination', 'Destination:') !!}
    {!! Form::text('destination', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Date Time Of Arrival Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_time_of_arrival', 'Date Time Of Arrival:') !!}
    {!! Form::text('date_time_of_arrival', null, ['class' => 'form-control','id'=>'date_time_of_arrival']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_time_of_arrival').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Date Time Of Departure Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_time_of_departure', 'Date Time Of Departure:') !!}
    {!! Form::text('date_time_of_departure', null, ['class' => 'form-control','id'=>'date_time_of_departure']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_time_of_departure').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Ticket Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ticket_price', 'Ticket Price:') !!}
    {!! Form::number('ticket_price', null, ['class' => 'form-control']) !!}
</div>