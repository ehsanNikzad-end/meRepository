<x-layout>
    <table class='table table-bordered text-red'>
        <tr class=''>
            <th>id</th>
            <th>Class_id</th>
            <th>Student_id</th>
        </tr>
        @foreach ($registeredOnes as $registeredOne)
            <tr>
                <td>{{ $registeredOne->id }}</td>
                <td>{{ $registeredOne->class_id }}</td>
                <td>{{ $registeredOne->student_id }}</td>
            </tr>
        @endforeach
    </table>



</x-layout>
