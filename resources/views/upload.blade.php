<form action ="upload" method="POST" enctype="multipart/form-data" }}>
     @csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="surname" placeholder="surname">
    <input type="text" name="email" placeholder="email">
    <input type="file" name="image" placeholder="image">
    <button type="submit">Upload</button>
    </form>