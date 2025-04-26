<x-layout>
    <table class='table table-bordered text-red'>
        <tr class=''>
            <th>Name</th>
            <th>Age</th>
            <th>Class</th>
            <th>Time</th>
            <th>Teacher</th>
            <th>Fee</th>
            <th>X_class</th>
            <th>X_course</th>
        </tr>
        @foreach ($registeredOnes as $registeredOne)
            <tr>
                <td>{{ $registeredOne->Student->name }}</td>
                <td>{{ $registeredOne->Student->age }}</td>
                <td>{{ $registeredOne->Classs->classId }}</td>
                <td>{{ $registeredOne->Classs->time }}</td>
                <td>{{ $registeredOne->Classs->teacher }}</td>
                <td>{{ $registeredOne->Classs->fee }}</td>
                <td>
                    <form method="POST" action="/DestroyRStudent/{{ $registeredOne->id }}">
                        @csrf
                        @method('DELETE')
                        <input style='display:none' name='id' value="{{ $registeredOne->id }}">
                        <input type='submit' value='R_F_Class' class='closing btn-danger'>
                    </form>
                </td>
                <td>
                    <form method="POST" action='/DestroyStudent/{{ $registeredOne->Student->id }}'>
                        @csrf
                        @method('DELETE')
                        <input style='display:none' name='id' value="{{ $registeredOne->Student->id }}">
                        <input type='submit' value='R_F_Course' class='closing btn-danger'>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-layout>
