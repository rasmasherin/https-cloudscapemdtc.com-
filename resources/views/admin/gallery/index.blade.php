@extends('admin.layouts.app')

@section('content')

<div style="padding:30px">

    <h2 style="margin-bottom:20px;">Gallery</h2>

    <!-- Upload Form -->
    <form action="{{ route('admin.gallery.store') }}" 
          method="POST" 
          enctype="multipart/form-data"
          style="margin-bottom:30px;">
        @csrf

        <div style="margin-bottom:15px;">
            <label style="font-weight:600;">Upload Images</label><br>
            <input type="file" 
                   name="images[]" 
                   multiple 
                   required
                   style="margin-top:8px;">
            <br>
            <small style="color:gray;">
                You can select multiple images
            </small>
        </div>

        <button type="submit" 
                style="background:#6c5ce7;
                       color:white;
                       padding:8px 20px;
                       border:none;
                       border-radius:6px;
                       cursor:pointer;">
            Upload
        </button>
    </form>


    <!-- Gallery Grid -->
    <div class="gallery-grid">

        @forelse($images as $img)
            <div class="gallery-card">

                <div class="image-wrapper">
                    <img src="{{ asset('storage/'.$img->image) }}" 
                         alt="Gallery Image">
                </div>

                <form method="POST" 
                      action="{{ route('admin.gallery.destroy',$img->id) }}"
                      style="text-align:center;margin-top:10px;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="delete-btn">
                        Delete
                    </button>
                </form>

            </div>
        @empty
            <p>No images uploaded yet.</p>
        @endforelse

    </div>

</div>

@endsection


<style>

/* GRID */
.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 20px;
}

/* CARD */
.gallery-card {
    background: #fff;
    padding: 10px;
    border-radius: 12px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
    transition: 0.3s ease;
}

.gallery-card:hover {
    transform: translateY(-5px);
}

/* FIXED IMAGE SIZE */
.image-wrapper {
    width: 100%;
    height: 250px;   /* SAME HEIGHT FOR ALL */
    overflow: hidden;
    border-radius: 10px;
}

.image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;   /* Prevent stretch */
    display: block;
}

/* DELETE BUTTON */
.delete-btn {
    background: #ff4d4d;
    color: #fff;
    padding: 6px 15px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}

.delete-btn:hover {
    background: #e60000;
}

</style>
