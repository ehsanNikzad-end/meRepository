<x-layout>
    <form class="" method="POST" action="/RegisterStudent">
        @csrf
        <label class="">Name:
            <select type="" name="student_id" class="form-select btn-lg btn-secondary  mr-3">
                @foreach ($students as $student)
                <option value="{{ $student->id }}">{{ $student->name}}____{{ $student->phone }}</option>
                @endforeach
            </select>
        </label>
        <label>Subject:
            <select type="" name="class_id" class="form-select btn-lg btn-secondary mr-3">
                @foreach ($classes as $class)
                <option value="{{ $class->id }}">{{ $class->subject}}____{{ $class->teacher }}</option>
                @endforeach
            </select>
        </label>
        <input type='submit' name='submit' class='btn btn-success'>
    </form>

</x-layout>
