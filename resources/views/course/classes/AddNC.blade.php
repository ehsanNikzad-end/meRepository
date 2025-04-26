<x-layout>
    <div class="container-fluid mt-5" style="text-align: center;">
        <form method="POST" action="/AddClass">
            @csrf
            <label>
                Class_id:
                <input type="number" name="classId" placeholder="Class_id">
            </label>
            <label>
                Subject:
                <input type="text" name="subject" placeholder="subject">
            </label>
            <label>
            <label>
                Fee:
                <input type="number" name="fee" placeholder="fee">
            </label>
            <label>
                Time:
                <input type="time" name="time" placeholder="time">
            </label>
            <label>
                Teacher:
                <select type="" name="teacher" class="btn-lg btn-secondary">
                    <option value="Ahmad">Ahmad</option>
                    <option value="Qadir">Qadir</option>
                    <option value="Naieem">Naieem</option>
                    <option value="Abdullah">Abdullah</option>
                    <option value="Nabi">Nabi</option>
                    <option value="Qafoor">Qafoor</option>
                    <option value="Qafoor">Wali Ahmad</option>
                </select>
            </label>
            <input type="submit" name="submit" value="Record" class="btn btn-success">
        </form>
    </div>
</x-layout>
