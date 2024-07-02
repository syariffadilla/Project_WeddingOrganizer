{{-- @dd($booking); --}}
@extends('layouts.landing')
@section('content')
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-page-head">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="page-title">
                                <h1>My Payment <small>Create your wedding to do and start planning.</small></h1>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="action-block"> <a href="#" class="btn btn-default" id="show">Checkout</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white pinside40 todo-form mb30">
                    <h2 class="form-title">Create New Category</h2>
                    <div class="close-sign"><a href="#" id="hide"><i class="fa fa-close"></i></a></div>
                    <form class="row">
                        <div class="col-md-6">
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="categoryname">Category Name</label>
                                <input id="categoryname" name="categoryname" type="text" placeholder="Category Name" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <div class="text-right">
                                    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Add Category</button>
                                </div>
                            </div>
                        </div>
                        <!-- Text input-->
                    </form>
                </div>
            </div>
        </div>

        <div class="budget-board">
            <div class="list-group">
                <div href="#" class="list-group-item active">
                    <div class="row">
                        <div class="col-md-4"> Nama Paket </div>
                        <div class="col-md-2">catatan</div>
                        <div class="col-md-2">catatan (admin)</div>
                        <div class="col-md-1">Harga</div>
                        <div class="col-md-1">Status</div>
                        <div class="col-md-2">Delete</div>
                    </div>
                </div>



                <div class="list-group-item">
                    <div class="row">
                        <div class="col-md-4"><a class="#" data-toggle="collapse" href="#Ceremony" aria-expanded="false" aria-controls="Ceremony"> {{ $data->paket ? $data->paket->nama_paket : 'Paket not found' }} </a> </div>
                        <div class="col-md-2">{{ $request->catatan }}</div>
                        <div class="col-md-2">-</div>
                        <div class="col-md-1">  {{ $data->paket ? $data->paket->harga : 'N/A' }}</div>
                        <div class="col-md-1"> @if($data->status == 1)
                            BELUM KONFIRMAI
                        @else

                        @endif</div>
                        <div class="col-md-2"><a href="#" class="btn-delete"><i class="fa fa-trash"></i></a></div>

                        <div class="collapse col-md-12 item-title" id="Ceremony">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table ceremony">
                                        <thead>
                                            <tr>
                                                <th class="col-md-4">Ceremony Item</th>
                                                <th class="col-md-2">Estimated</th>
                                                <th class="col-md-2">Actual</th>
                                                <th class="col-md-1">Paid</th>
                                                <th class="col-md-1">Due</th>
                                                <th class="col-md-2">Edit / Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"> Officiate Fee / Donation</th>
                                                <td>1200</td>
                                                <td>1000</td>
                                                <td>800</td>
                                                <td>400</td>
                                                <td><a href="#" class="btn-edit"><i class="fa fa-edit"></i></a><a href="#" class="btn-delete"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Bridesmaid Dresses</th>
                                                <td>1200</td>
                                                <td>1000</td>
                                                <td>800</td>
                                                <td>400</td>
                                                <td><a href="#" class="btn-edit"><i class="fa fa-edit"></i></a><a href="#" class="btn-delete"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Program for Church</th>
                                                <td>1200</td>
                                                <td>1000</td>
                                                <td>800</td>
                                                <td>400</td>
                                                <td><a href="#" class="btn-edit"><i class="fa fa-edit"></i></a><a href="#" class="btn-delete"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Ceremony Location Fee</th>
                                                <td>1200</td>
                                                <td>1000</td>
                                                <td>800</td>
                                                <td>400</td>
                                                <td><a href="#" class="btn-edit"><i class="fa fa-edit"></i></a><a href="#" class="btn-delete"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Wedding Directory</th>
                                                <td>1200</td>
                                                <td>1000</td>
                                                <td>800</td>
                                                <td>400</td>
                                                <td><a href="#" class="btn-edit"><i class="fa fa-edit"></i></a><a href="#" class="btn-delete"><i class="fa fa-trash"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="#" title="add new item" class="btn btn-primary add-item">+ Add New</a> </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

            <div class="col-md-12 profile-dashboard">
                <div class="row">
                    <div class="col-md-12 dashboard-form calender">
                        <form class="form-horizontal" action="{{ route('user.Checkout', ['id' => $booking->booking_id ?? 0]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="bg-white pinside40 mb30">
                                <!-- Form Name -->
                                <h2 class="form-title">Upload Profile Pembayaran</h2>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <div class="photo-upload"><img src="images/profile-dashbaord.png" alt=""></div>
                                    </div>
                                    <div class="col-md-8 upload-file">
                                        <input id="filebutton" name="gambar" class="input-file" type="file">
                                    </div>
                                </div>
                                <!-- Text input-->
                                <h2 class="form-title">Bank Infomations</h2>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="name">Name Bank<span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <input id="name" name="name" type="text" value="BCA (BANK CENTRAL ASIA)" class="form-control input-md" readonly required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="name">Norek<span class="required">*</span></label>
                                    <div class="col-md-8">
                                        <input id="name" name="name" type="text" value="87899787 (AN. UDIN)" class="form-control input-md" readonly required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="name">Pelunasan Bayar </label>
                                    <div class="col-md-8">
                                        <input id="name" name="name" type="text" value=" Rp. {{ number_format($data->paket->harga, 0 ,'.',',') }}" class="form-control input-md" readonly required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="name">Bayar DP </label>
                                    <div class="col-md-8">
                                        <?php
                                        // Calculate 40% of the price
                                        $discountedPrice = $data->paket->harga * 0.4;
                                        ?>
                                        <input id="name" name="name" type="text" value=" Rp. {{ number_format($discountedPrice, 0, '.', ',') }}" class="form-control input-md" readonly required="">
                                    </div>

                                </div>



                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="submit"></label>
                                    <div class="col-md-4">
                                        <button id="submit" name="submit" class="btn btn-primary">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
