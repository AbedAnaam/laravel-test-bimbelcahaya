@extends('layouts.backend.main')

@section('content')
    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Kelas</h6>
        </div>

        <div>
            <form
                enctype="multipart/form-data"
                class="bg-white shadow-sm p-3"
                action="{{route('kelas.update', $kelas->id)}}"
                method="POST">

                @csrf

                <input
                    type="hidden"
                    value="PUT"
                    name="_method">

                <label>Nama Kelas <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('nama_kelas') ? "is-invalid" : ""}}"
                    value="{{old('nama_kelas') ? old('nama_kelas') : $kelas->nama_kelas}}"
                    name="nama_kelas"
                    placeholder="Masukkan Nama Mapel">
                    <div class="invalid-feedback">
                        {{$errors->first('nama_kelas')}}
                    </div>
                <br>

                <label>Gambar<font style="inline-block" color="red">(*)</font></label><br>
                @if($kelas->gambar_kelas)
                    <span>Current image</span><br>
                    <img src="{{asset('storage/'. $kelas->gambar_kelas)}}" width="120px">
                    <br><br>
                @endif
                <input
                    type="file"
                    class="form-control {{$errors->first('gambar_kelas') ? "is-invalid" : ""}}"
                    name="gambar_kelas">
                    <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                    <div class="invalid-feedback">
                        {{$errors->first('gambar_kelas')}}
                    </div>
                <br>
                <br>

                {{-- <div class="row">
                    <div class="col-md-12">
                        <div class="form-group @if($errors->has('jenjang_id')) has-error @endif">
                            <label>Pilih Jenjang</label>
                            <select class="form-control border-input" name="jenjang_id">
                                <option value="kosong">- Silakan Pilih Jenjang -</option>
                                @foreach($jenjang as $jdK => $jdV)
                                <option value="{{$jdK}}" {{old('jenjang_id') == $jdK ? 'selected' : ''}}>{{$jdV}}</option>
                                @endforeach
                            </select>
                            <span id="helpBlock2" class="help-block">{{$errors->first('jenjang_id')}}</span>
                        </div>
                    </div>
                </div> --}}

                <label>Deskripsi Kelas <font style="inline-block" color="red">(*)</font></label>
                <textarea
                    class="form-control {{$errors->first('deskripsi_kelas') ? "is-invalid" : ""}}" 
                    name="deskripsi_kelas" id="deskripsi_kelas">
                    {{old('deskripsi_kelas') ? old('deskripsi_kelas') : $kelas->deskripsi_kelas}}
                </textarea>
                    <div class="invalid-feedback">
                        {{$errors->first('deskripsi_kelas')}}
                    </div>
                <br>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <input
                            type="submit"
                            class="btn btn-primary"
                            value="Update">

                        <a
                            href="{{route('kelas.index')}}"
                            type="button"
                            class="btn btn-warning"
                            value="Kembali"> Kembali
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    @include('belakang.kelas._scripts')
@endsection