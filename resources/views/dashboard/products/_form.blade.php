@csrf

<label>Name Product</label><span class="text-xs text-red-600">@error('name') {{$message}} @enderror</span>
<input type="text" name="name" class="rounded border-black-700 block text-black w-3/6 mb-4" value="{{ old('name', $product->name) }}">


<label>details</label><span class="text-xs text-red-600">@error('details') {{$message}} @enderror</span>
<textarea name="details" class="rounded block border-black-700 text-black w-full mb-4" id="" rows="10">{{old('details',$product->details)}}</textarea>

<label>Price</label><span class="text-xs text-red-600">@error('price') {{$message}} @enderror</span>
<input type="text" name="price" class="rounded border-black-700 block text-black w-3/6 mb-4" value="{{old('price',$product->price)}}">

<label>Upload Photo (max 450x300)</label><span class="text-xs text-red-600">@error('image') {{$message}} @enderror</span>
<input type="file" accept="image/png, image/jpeg" multiple="true" name="image" class="rounded border-black-700 block text-black w-3/6 mb-4">

<div class="flex justify-between items-center">
    <a href="{{ route('products.index') }}">Volver</a>

    <input type="submit" value="Enviar" class="bg-indigo-800 text-white rounded cursor-pointer px-4 py-2">

</div>