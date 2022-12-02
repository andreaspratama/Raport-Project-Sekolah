@extends('layouts.admin.admin')

@section('title')
    Edit Nilai
@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Nilai Project Siswa {{$item->nama}}</h1>

        <div class="card shadow">
            <div class="card-body">
              <form action="/siswa/{{$item->id}}/{{$project->id}}/editnilaiupdateprojectbaru" method="POST">
                @csrf
                <div class="form-group" hidden>
                  <label for="siswa_id">Siswa_Id</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="siswa_id"><i class="fas fa-book-reader"></i></span>
                    </div>
                    <input type="text" class="form-control @error('siswa_id') is-invalid @enderror" placeholder="Nama Siswa_Id" name="siswa_id" value="{{$item->id}}">
                    @error('siswa_id')
                      <div class="invalid-feedback">
                          {{$message}}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="project">Project</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="project"><i class="fas fa-book-reader"></i></span>
                    </div>
                    <input type="text" class="form-control @error('project') is-invalid @enderror" placeholder="Nama Project" name="project" value="{{$project->project}}">
                    @error('project')
                      <div class="invalid-feedback">
                          {{$message}}
                      </div>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                    <label for="nilai">Nilai</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="nilai"><i class="fas fa-award"></i></span>
                      </div>
                      <input type="text" class="form-control @error('nilai') is-invalid @enderror" placeholder="Nilai" name="nilai" value="{{$project->nilai}}">
                      @error('nilai')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                      @enderror
                    </div>
                </div>
                <label for="mapel">Pengerjaan</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="mapel"><i class="fas fa-book-reader"></i></span>
                  </div>                    
                  <select class="custom-select" name="pengerjaan">
                      <option>-- Pilih --</option>
                      <option value="Individu" @if($project->pengerjaan == 'Individu') selected @endif>Individu</option>
                      <option value="Kelompok" @if($project->pengerjaan == 'Kelompok') selected @endif>Kelompok</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="hasil">Hasil</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="hasil"><i class="fas fa-award"></i></span>
                    </div>
                    <input type="text" class="form-control @error('hasil') is-invalid @enderror" placeholder="Hasil" name="hasil" value="{{$project->hasil}}">
                    @error('hasil')
                      <div class="invalid-feedback">
                          {{$message}}
                      </div>
                    @enderror
                  </div>
                </div>
                <button class="btn btn-primary btn-sm" type="submit">Simpan Nilai</button>
              </form>
            </div>
        </div>

    </div>
@endsection


@push('prepend-style')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
@endpush

@push('addon-script')
      {{-- <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script> --}}
      <script>
        @if (Session::has('status'))
          toastr.success("{{Session::get('status')}}", "Trimakasih")
        @endif

        $.fn.editable.defaults.mode = 'inline';

        $(document).ready(function() {
            $('.nilai_uh1').editable();
        });
        $(document).ready(function() {
            $('.nilai_uh2').editable();
        });
        $(document).ready(function() {
            $('.uts').editable();
        });
        $(document).ready(function() {
            $('.uas').editable();
        });
        $(document).ready(function() {
            $('.status').editable();
        });
      </script>
@endpush