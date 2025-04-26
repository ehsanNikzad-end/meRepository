<x-layout>
    <table class='table table-bordered text-red'>
        <tr class=''>
            <th>id</th>
            <th>class_id</th>
            <th>subject</th>
            <th>fee</th>
            <th>time</th>
            <th>teacher</th>
            <th>X</th>
        </tr>
        @foreach ($classes as $class)
            <tr>
                <td>{{ $class->id }}</td>
                <td>{{ $class->classId }}</td>
                <td>{{ $class->subject }}</td>
                <td>{{ $class->fee }}</td>
                <td>{{ $class->time }}</td>
                <td>{{ $class->teacher }}</td>
                <td>
                    <form method="POST" action="/DestroyClass/{{ $class->id }}">
                        @csrf
                        @method('DELETE')
                        <input style='display:none' name='id' value="{{ $class->id }}">
                        <input type='submit' value='delete' class='closing btn-danger'>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-layout>
