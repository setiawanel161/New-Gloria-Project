<x-app-layout>
    <x-slot name="header">

    <section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List Produk</h4>
                    </div>
                    <div class="card-content">
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Nama Produk</th>
                                        <th>Jenis Kayu</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($products as $product)
                                        <tr>
                                            <td class="text-bold-500">{{ $product->name }}</td>
                                            <td>{{ $product->wood_type }}</td>
                                            <td>Rp. {{ number_format($product->price, 0, ',', '.') }}</td>
                                            <td>
                                                <a href="{{ route('updateProduct', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                                <form method="POST" action="{{ route('delete-product', $product->id) }}" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                                                </form>
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-{{ $product->id }}">
                                                    Description
                                                </button>
                                                <div class="modal fade" id="modal-{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="modalTitle-{{ $product->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modalTitle-{{ $product->id }}">Description</h5>
                                                            </div>
                                                            <div class="modal-body text-start">
                                                                <p>{{ $product->details }}</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada produk tersedia.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Product</h4>
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

                <form action="{{ route('store-product') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="namaproduk">Nama Produk</label>
                                <input type="text" class="form-control" id="namaproduk" name="namaproduk" placeholder="Peti Sultan Dubai" required>
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
                                <input type="number" class="form-control" id="hargaproduk" name="hargaproduk" placeholder="10000000" required>
                            </div>

                            <div class="mb-3">
                                <label for="gambarproduk" class="form-label">Tambahkan Gambar</label>
                                <input class="form-control" type="file" id="gambarproduk" name="gambarproduk" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="detailproduk">Detail Product</label>
                                <textarea class="form-control" id="detailproduk" name="detailproduk" rows="11" required></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>
    </section>

</x-app-layout>
