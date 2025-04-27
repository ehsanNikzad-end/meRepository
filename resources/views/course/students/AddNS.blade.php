<x-layout>
    <div class="container-fluid mt-5" style="text-align: center;">
        <form method="POST" action="AddStudent" enctype="multipart/form-data">
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
            <label>
                Student picture:
                <input type="file" name="picture">
            </label>
            <input type="submit" name="submit" value="Record" class="btn btn-success">
        </form>
    </div>
</x-layout>
