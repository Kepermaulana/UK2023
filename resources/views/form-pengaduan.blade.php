@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-12 col-md-12 col-xl-6 ">
            <div class="card shadow">
                <div class="card-body">
                    @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                    @endif
                    <div class="card-header">
                        <h3 class="text-center mb-3">Tambah Pengaduan </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('masyarakat.pengaduan') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="tanggal_pengaduan">Tanggal Pengaduan</label>
                                <input type="date" name="tanggal_pengaduan" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="masyarakat_nik">Masyarakat NIK</label>
                                <input type="text" name="masyarakat_nik" value="{{Auth()->guard('masyarakat')->user()->nama}}" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="isi_laporan">Isi Laporan</label>
                                <textarea name="isi_laporan" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group mt-4">
                                <label for="foto">Foto</label>
                                <input type="file" name="foto" id="" class="form-control">
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary form-control">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection