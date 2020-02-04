@extends('layouts.baca') @section('content')

<style type="text/css"> 
  .card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
    width: 100% !important;
}
</style>

<a href="#" onclick="printDoc()" style="float: left;">
                  <button type="submit" class="btn btn-icon btn-icon-left btn-success waves-effect waves-light"><i class="ico fa fa-print"></i>Print</button>


          <?php 
            $bukus = \App\Buku::all();
          ?>

<div class="row">
    <div class="col-20">
        <div class="card m-b-30"  id="section-to-print">
            <div class="card-body">

                <h4 class="mt-0 header-title">Default Datatable</h4>
                <p class="text-muted m-b-30 font-14">
                    Data Data
                </p>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Kategori Buku</th>
                            <th>Stok Buku</th>
                            <th>isi</th>
                            <th>gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach($bukus as $s)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$s->judulbuku}}</td>
                            <td>{{$s->kategori->nama}}</td>
                            <td>{{$s->stok}}</td>
                            <td>{{$s->isi}}</td>
                            <td><img src="{{ asset('gambar/'.$s->gambar) }}" style="width: 50px;height: 50px;"></td>
                            <td>
                                <a href="/buku/edit/{{$s->id}}" class="btn btn-outline-warning">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="/buku/hapus/{{$s->id}}" class="btn btn-outline-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- end col -->
</div>

@endsection



<style type="text/css">
    @media print {
        body * {
            visibility: hidden;
        }
        #section-to-print,
        #section-to-print * {
            visibility: visible;
        }
        #section-to-print {
            position: absolute;
            left: 0;
            top: 0;
        }
    }
</style>
<script type="text/javascript">
    function printDoc() {
        window.print()
    }
</script>


