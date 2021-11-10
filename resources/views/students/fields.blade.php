<!-- Student Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student_name', 'Student Name:') !!}
    {!! Form::text('student_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Student Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student_address', 'Student Address:') !!}
    {!! Form::text('student_address', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Seat No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seat_no', 'Seat No:') !!}
    {!! Form::text('seat_no', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Seat Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seat_position', 'Seat Position:') !!}
    {!! Form::text('seat_position', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>