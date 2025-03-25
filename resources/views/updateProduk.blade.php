<x-app-layout>
    <x-slot name="header">
        
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Update Product</h4>
            </div>

            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('edit-product', $products->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="namaproduk">Nama Produk</label>
                                <input type="text" class="form-control" id="namaproduk" name="namaproduk" placeholder="{{ $products->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="jeniskayu">Jenis Kayu</label>
                                <select class="form-select" id="jeniskayu" name="jeniskayu" required>
                                    <option value="Kayu Jati">Kayu Jati</option>
                                    <option value="Kayu Durian">Kayu Durian</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="hargaproduk">Harga Produk (dalam Rp.)</label>
                                <input type="number" class="form-control" id="hargaproduk" name="hargaproduk" placeholder="{{ $products->price }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="gambarproduk" class="form-label">Tambahkan Gambar</label>
                                <input class="form-control" type="file" id="gambarproduk" name="gambarproduk" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="detailproduk">Detail Product</label>
                                <textarea class="form-control" id="detailproduk" name="detailproduk" rows="11" placeholder="{{ $products->details }}" required></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Produk</button>
                </form>

            </div>
        </div>
    </section>
</x-app-layout>
