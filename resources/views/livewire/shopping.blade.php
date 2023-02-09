<div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">    
                        Keranjang
                    </div>
                    <div class="card-body">
                        Rp. {{ $jumlah }}
                    </div>
                </div>
                <div class="card">
                <div class="card-header">    
                    Belanja
                </div>
                <div class="card-body">
                    @foreach ($datas as $item)
                    <p>{{ $item->nama_barang }}<button class="float-end btn btn-danger" wire:click="destroy({{ $item->id }})">hapus</button></p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="card">
            <div class="card-header">    
                Produk
            </div>
            <div class="card-body">    
                <div class="row">
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ asset('Gambar/anime 2.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Kaguya-Sama</h5>
                                <p class="card-text">Perempuan yang cerdas dan berwibawa.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">10.000.00</li>
                            </ul>
                            <div class="card-body">
                                <button class="btn btn-primary" wire:click="simpan('Kaguya-Sama', '100000')">Beli</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ asset('Gambar/anime 3.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Maid</h5>
                                <p class="card-text">Bisa membersihkan rumah dan bisa menjadi sahabat hidup.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">25.000.00</li>
                            </ul>
                            <div class="card-body">
                                <button class="btn btn-primary" wire:click="simpan('Maid', '2500000')">Beli</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ asset('Gambar/anime 4.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Marin Kitagawa</h5>
                                <p class="card-text">Anak SMA yang imut dan suka cosplay.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">15.000.00</li>
                            </ul>
                            <div class="card-body">
                                <button class="btn btn-primary" wire:click="simpan('Marin Kitagawa', '1500000')">Beli</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
