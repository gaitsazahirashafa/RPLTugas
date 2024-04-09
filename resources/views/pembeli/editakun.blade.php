<!-- resources/views/profiles/edit.blade.php -->
<h1>Edit Profil</h1>
<form action="{{ route('profile.update', $profile->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Nama:</label>
    <input type="text" name="name" id="name" value="{{ $profile->name }}" required>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ $profile->email }}" required>
    <label for="bio">Bio:</label>
    <textarea name="bio" id="bio">{{ $profile->bio }}</textarea>
    <button type="submit">Simpan</button>
</form>
