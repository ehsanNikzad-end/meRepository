<x-layout>
    <div class="container-fluid mt-5" style="text-align: center;">
        <form method="POST" action="AddStudent">
            @csrf
            <label>
                Name:
                <input type="text" name="name" placeholder="name">
            </label>
            <label>
                age:
                <input type="number" name="age" placeholder="age">
            </label>
            <label>
                Country:
                <input type="text" name="country" placeholder="country">
            </label>
            <label>
                Phone:
                <input type="number" name="phone" placeholder="phone">
            </label>
            <input type="submit" name="submit" value="Record" class="btn btn-success">
        </form>
    </div>
</x-layout>
