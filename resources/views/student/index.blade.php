@extends('layouts.template')

@section('own_style')
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/range-slider.css') }}">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-4">
                    <h4>Students</h4>
                </div>
                <div class="col-8 d-flex justify-content-end">
                    <button class="btn btn-primary" id="tambah-data" style="margin-right: 5px">
                        <i class="fa fa-plus-circle me-2"></i> Add Student
                    </button>

                    <button class="btn btn-primary" id="filter">
                        <i class="fa fa-filter me-2"></i> Filter
                    </button>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid product-wrapper sidebaron">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @else
            <div class="card d-none" id="filter-section">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" id="filter-status">
                                    <option value="">-- All --</option>
                                    <option value="1">Active</option>
                                    <option value="0">Nonactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" id="apply-filter">
                                <i class="fa fa-check me-2"></i> Apply Filter
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-grid">
                <div class="feature-products">
                    <div class="row">
                        <div class="col-12">
                            <form>
                                <div class="form-group m-0">
                                    <input class="form-control" type="search" id="search" placeholder="Search.."
                                        data-original-title="" title=""><i class="fa fa-search"></i>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="product-wrapper-grid" style="opacity: 1;">
                    <div class="row data-ctr">
                        @foreach ($data as $d)
                            <div class="col-6 col-xl-3 col-sm-3 detail-user" style="cursor: pointer"
                                data-id="{{ $d->id }}" data-status="{{ $d->status }}">
                                <div class="card">
                                    <div class="product-box">
                                        <div class="product-img">
                                            @if ($d->foto)
                                                <img class="img-fluid" src="{{ asset('storage') . '/' . $d->foto }}"
                                                    alt="Profile Picture">
                                            @else
                                                <img class="img-fluid" src="{{ asset('own_assets/images/avatar.png') }}"
                                                    alt="Profile Picture">
                                            @endif
                                            @if ($d->status == 1)
                                                <div class="ribbon ribbon-success">Active</div>
                                            @else
                                                <div class="ribbon ribbon-danger">Nonactive</div>
                                            @endif
                                        </div>
                                        <div class="product-details">
                                            <span class="badge rounded-pill badge-primary text-white mb-2 kursus">{{ $d->kursus }}</span>
                                            <h5>{{ $d->name }}</h5>
                                            <p><i class="fab fa-whatsapp text-success"></i> {{ $d->wa }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="text-center mt-3">
                        <button id="load-more" class="btn btn-primary">
                            <i class="fa fa-plus-circle me-2"></i> Load More
                        </button>
                    </div>
                </div>

            </div>
        @endif
    </div>

    <div class="modal fade bd-example-modal-lg" id="tambah-data-modal" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myExtraLargeModal">Add Student</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal">
                    <div class="card">
                        <form class="form theme-form dark-inputs">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="foto">Upload Student Photo</label>
                                            <input type="file" class="form-control input-air-primary" id="foto"
                                                accept="image/*">
                                            <div class="mt-3">
                                                <img id="preview-foto" src="#" alt="Photo Preview"
                                                    class="img-thumbnail d-none" style="max-width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="nama">Enter Student Name</label>
                                            <input type="text" class="form-control input-air-primary" id="nama"
                                                placeholder="Enter Student Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="wa">Enter Student Whatsapp Number</label>
                                            <input type="text" class="form-control input-air-primary" id="wa"
                                                placeholder="Enter Student Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="kursus">Select Student Course</label>
                                            <select class="form-control input-air-primary" id="kursus">
                                                <option value="English Regular">English Regular</option>
                                                <option value="Conversation Class">Conversation Class</option>
                                                <option value="TOEFL Preparation">TOEFL Preparation</option>
                                                <option value="IELTS Preparation">IELTS Preparation</option>
                                                <option value="Legal English">Legal English</option>
                                                <option value="Mandarin Class">Mandarin Class</option>
                                                <option value="Microsoft Office">Microsoft Office</option>
                                                <option value="Fundamental Programming">Fundamental Programming</option>
                                                <option value="Web Development">Web Development</option>
                                                <option value="Mobile Development">Mobile Development</option>
                                                <option value="Design Grafis">Design Grafis</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <input class="btn btn-light" type="button" id="cancel-add" value="Cancel">
                                <button class="btn btn-primary me-3" type="button" id="store">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="edit-data-modal" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myExtraLargeModal">Edit Data</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body dark-modal">
                    <div class="card">
                        <form class="form theme-form dark-inputs">
                            <input type="hidden" name="" id="id">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="edit_foto">Upload Student Photo</label>
                                            <input type="file" class="form-control input-air-primary" id="edit_foto"
                                                accept="image/*">
                                            <div class="mt-3">
                                                <img id="preview-edit_foto" src="#" alt="Photo Preview"
                                                    class="img-thumbnail d-none" style="max-width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="edit_nama">Enter Student Name</label>
                                            <input type="text" class="form-control input-air-primary" id="edit_nama"
                                                placeholder="Enter Student Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="edit_wa">Enter Student Whatsapp Number</label>
                                            <input type="text" class="form-control input-air-primary" id="edit_wa"
                                                placeholder="Enter Student Whatsapp Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="edit_kursus">Select Student Course</label>
                                            <select class="form-control input-air-primary" id="edit_kursus">
                                                <option value="English Regular">English Regular</option>
                                                <option value="Conversation Class">Conversation Class</option>
                                                <option value="TOEFL Preparation">TOEFL Preparation</option>
                                                <option value="IELTS Preparation">IELTS Preparation</option>
                                                <option value="Legal English">Legal English</option>
                                                <option value="Mandarin Class">Mandarin Class</option>
                                                <option value="Microsoft Office">Microsoft Office</option>
                                                <option value="Fundamental Programming">Fundamental Programming</option>
                                                <option value="Web Development">Web Development</option>
                                                <option value="Mobile Development">Mobile Development</option>
                                                <option value="Design Grafis">Design Grafis</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row bukti-bayar" style="display: none">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="bukti_bayar">Bukti Pembayaran</label>
                                            <img src="" id="bukti_bayar" width="100%" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end" style="width: 100%">
                                <div class="d-flex flex-wrap gap-1 justify-content-end">
                                    <input class="btn btn-light flex-fill flex-md-grow-0" type="button" id="cancel-edit" value="Cancel">
                                    <button class="btn btn-primary flex-fill flex-md-grow-0" type="button" id="update">Update</button>
                                    <button class="btn btn-warning flex-fill flex-md-grow-0" type="button" id="reset">Certificate</button>
                                    <button class="btn btn-danger flex-fill flex-md-grow-0" type="button" id="delete">Deactivate</button>
                                    <button class="btn btn-info flex-fill flex-md-grow-0" type="button" id="activate">Activate</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-alert" id="alert" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenter1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-toggle-wrapper">
                        <ul class="modal-img">
                            <li> <img id="alert-image"></li>
                        </ul>
                        <h4 class="text-center pb-2" id="alert-title"></h4>
                        <p class="text-center" id="alert-message"></p>
                        <button class="btn btn-secondary d-flex m-auto" id="is-error" type="button"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-toggle-wrapper">
                        <ul class="modal-img">
                            <li> <img id="alert-image" src="{{ asset('own_assets/icon/confirm.gif') }}" width="300px">
                            </li>
                        </ul>
                        <h4 class="text-center pb-2" id="alert-title">Hapus Data</h4>
                        <p class="text-center" id="alert-message">Apakah anda yakin ingin menghapus data?</p>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-end">
                                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                            </div>
                            <div class="col-md-6 d-flex justify-content-start">
                                <button class="btn btn-danger" id="delete-confirmed" type="button"
                                    data-bs-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('own_script')
    <script src="{{ asset('own_assets/scripts/student.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/range-slider/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/range-slider/rangeslider-script.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/touchspin/vendors.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/touchspin/touchspin.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/touchspin/input-groups.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/owlcarousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/select2/select2-custom.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/product-tab.js') }}"></script>
    <script>
        document.getElementById('foto').addEventListener('change', function(event) {
            const [file] = event.target.files;
            if (file) {
                const preview = document.getElementById('preview-foto');
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('d-none');
            }
        });
    </script>
@endsection
