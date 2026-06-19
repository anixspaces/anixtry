<div class="mb-4">

<label>Title</label>

<input
type="text"
name="title"
value="{{ old('title',$gallery->title ?? '') }}"
class="w-full border p-3">

</div>

<div class="mb-4">

<label>Room Type</label>

<select
name="room_type"
class="w-full border p-3">

<option value="Bedroom">
Bedroom
</option>

<option value="Kitchen">
Kitchen
</option>

<option value="Living Room">
Living Room
</option>

<option value="Office">
Office
</option>

<option value="Bathroom">
Bathroom
</option>

</select>

</div>

<div class="mb-4">

<label>Description</label>

<textarea
name="description"
class="w-full border p-3">{{ old('description',$gallery->description ?? '') }}</textarea>

</div>

<div class="mb-4">

<label>Image</label>

<input
type="file"
name="image">

</div>