<!-- Student Name Field -->
<div class="col-sm-12">
    {!! Form::label('student_name', 'Student Name:') !!}
    <p>{{ $student->student_name }}</p>
</div>

<!-- Student Address Field -->
<div class="col-sm-12">
    {!! Form::label('student_address', 'Student Address:') !!}
    <p>{{ $student->student_address }}</p>
</div>

<!-- Seat No Field -->
<div class="col-sm-12">
    {!! Form::label('seat_no', 'Seat No:') !!}
    <p>{{ $student->seat_no }}</p>
</div>

<!-- Seat Position Field -->
<div class="col-sm-12">
    {!! Form::label('seat_position', 'Seat Position:') !!}
    <p>{{ $student->seat_position }}</p>
</div>

