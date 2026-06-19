<div class="mb-4">

<label>Category</label>

<select
name="category_id"
class="w-full border p-3">

@foreach($categories as $category)

<option
value="{{ $category->id }}"
@selected(
old('category_id',
$product->category_id ?? '')
==
$category->id
)>

{{ $category->name }}

</option>

@endforeach

</select>

</div>

<div class="mb-4">

<label>Name</label>

<input
type="text"
name="name"
value="{{ old('name',$product->name ?? '') }}"
class="w-full border p-3">

</div>

<div class="mb-4">

<label>Description</label>

<textarea
name="description"
class="w-full border p-3">{{ old('description',$product->description ?? '') }}</textarea>

</div>

<div class="mb-4">

<label>Price</label>

<input
type="number"
step="0.01"
name="price"
value="{{ old('price',$product->price ?? '') }}"
class="w-full border p-3">

</div>

<div class="mb-4">

<label>Color Name</label>

<input
type="text"
name="color"
value="{{ old('color',$product->color ?? '') }}"
class="w-full border p-3">

</div>

<div class="mb-4">

<label>Color Code</label>

<input
type="color"
name="color_code"
value="{{ old('color_code',$product->color_code ?? '#ffffff') }}"
class="w-full">

</div>