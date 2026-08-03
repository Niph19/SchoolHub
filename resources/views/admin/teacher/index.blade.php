@extends('layouts.dashboard')
@section('adminContent')

    <div class="card-style">
        <div class="d-flex justify-content-between align-items-center mb-20">
            <h3 class="mb-0">Tabel Guru</h3>
            <a href="{{ route('admin.teacher.create') }}">
                <button class="btn btn-primary text-base">
                    <i class="fa-solid fa-plus"></i> Tambahkan Guru
                </button>
            </a>
        </div>

        <div class="table-wrapper table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="lead-nama"><h6>Nama Lengkap</h6></th>
                        <th class="lead-posisi"><h6>Posisi</h6></th>
                        <th class="lead-mapel"><h6>Mata Pelajaran</h6></th>
                        <th class="lead-bio"><h6>Bio</h6></th>
                        <th class="text-center"><h6>Action</h6></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataTeacher as $data)
                    <tr>
                        <td class="min-width">
                            <div class="lead">
                                <div class="lead-image">
                                    <img src="{{ asset('images/teachers/' . $data->photo) }}" alt="{{ $data->name }}" />
                                </div>
                                <div class="lead-text">
                                    <p>{{ $data->name }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="min-width">
                            <p>{{ $data->position }}</p>
                        </td>
                        <td class="min-width">
                            <p>{{ $data->subject }}</p>
                        </td>
                        <td class="min-width" style="max-width: 320px;">
                            <p class="text-truncate-2">{{ $data->bio }}</p>
                        </td>
                        <td>
                            <div class="action justify-content-center">
                                <a href="" class="edit">
                                    <button type="button" class="edit">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                </a>
                                <form action="" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection