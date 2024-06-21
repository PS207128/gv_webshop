<x-app-layout>
<div x-data="productItem({{
    json_encode([
                    'id' => $product->id,
                    'slug' => $product->slug,
                    'image' => $product->image ?: '/img/noimage.png',
                    'title' => $product->title,
                    'price' => $product->price,
                    'quantity' => $product->quantity,
                    'addToCartUrl' => route('cart.add', $product)
                ])
}})" class="container mx-auto px-4 py-4">
    <div class="grid gap-6 grid-cols-1 lg:grid-cols-5 mx-auto" style="max-width: 1000px;">
        <div class="lg:col-span-3">
            <div x-data="{
                images: ['{{$product->image}}'],
                activeImage: null,
                prev() {
                    let index = this.images.indexOf(this.activeImage);
                    if (index === 0)
                        index = this.images.length;
                    this.activeImage = this.images[index - 1];
                },
                next() {
                    let index = this.images.indexOf(this.activeImage);
                    if (index === this.images.length - 1)
                        index = -1;
                    this.activeImage = this.images[index + 1];
                },
                init() {
                    this.activeImage = this.images.length > 0 ? this.images[0] : null;
                }
            }">
                <div class="relative">
                    <template x-for="image in images">
                        <div x-show="activeImage === image" class="aspect-w-2 aspect-h-2">
                            <img :src="image" alt="" class="max-w-auto h-auto mx-auto" />
                        </div>
                    </template>
                </div>
            </div>
        </div>
        <div class="lg:col-span-2">
            <h1 class="text-lg font-semibold">{{$product->title}}</h1>
            <div class="text-xl font-bold mb-6">€{{$product->price}}</div>
            <div class="flex items-center justify-between mb-5">
                <label for="quantity" class="block font-bold mr-4">Hoeveelheid</label>
                <input type="number" name="quantity" x-ref="quantityEl" min="1" value="1" class="w-32 focus:border-green-500 focus:outline-none rounded" />
            </div>
            <button @click="addToCart($refs.quantityEl.value)" class="btn-primary py-4 text-lg flex justify-center min-w-0 w-full mb-6 bg-green-500 hover:bg-green-700 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                Toevoegen aan winkelwagen
            </button>
            <div class="mb-6" x-data="{expanded: false}">
                <div x-show="expanded" x-collapse.min.120px class="text-gray-500 wysiwyg-content">
                    {{$product->description}}
                </div>
                <p class="text-right">
                    <a @click="expanded = !expanded" href="javascript:void(0)" class="text-green-500 hover:text-green-700" x-text="expanded ? 'Lees meer' : 'Lees minder'"></a>
                </p>
            </div>
        </div>
    </div>
</div>


</x-app-layout>