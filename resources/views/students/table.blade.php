<div class="table-responsive">
    <table class="table" id="students-table">
        <thead>
            <tr>
                <th>Student Name</th>
        <th>Student Address</th>
        <th>Seat No</th>
        <th>Seat Position</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->student_name }}</td>
            <td>{{ $student->student_address }}</td>
            <td>{{ $student->seat_no }}</td>
            <td>{{ $student->seat_position }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['students.destroy', $student->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('students.show', [$student->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('students.edit', [$student->id]) }}" class='btn btn-default btn-xs'>
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
