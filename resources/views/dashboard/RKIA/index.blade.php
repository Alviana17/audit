<x-app-layout>
    <div class="layout-page">
        @include('layouts.searchnavigation')
        <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="card">
                    <div class="card-header">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">RKIA </a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#">RKIA</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-body">
                        <table class="table">

                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Create Departemen -->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Tambah Departemen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('departemens.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama_departemen">Nama Departemen:</label>
                            <input type="text" class="form-control" id="nama_departemen" name="nama_departemen" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>