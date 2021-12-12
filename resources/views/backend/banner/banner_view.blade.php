@extends('admin.admin_master')
@section('admin')

    <div class="container-full">
        <!-- Main content -->
            <section class="content">
                <div class="row">

                    <div class="col-8">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Brand List</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>Banner Title </th>
                                            <th>Banner Title Heading H1</th>
                                            <th>Banner Title Heading </th>
                                            <th>Banner Image </th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($banners as $item)
                                        <tr>
                                            <td>{{ $item->banner_title }}</td>
                                            <td>{{ $item->banner_title_heading_h1 }}</td>
                                            <td>{{ $item->banner_title_heading }}</td>
                                            <td>
                                                <img src="{{ asset($item->banner_image) }}" style="width: 70px; height: 40px;">
                                            </td>
                                            <td>
                                                <a href="{{ route('banner.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                                <a href="{{ route('banner.delete',$item->id) }}" class="btn btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->


                        <!-- /.box -->
                    </div>
                    <!-- /.col -->

                    <div class="col-4">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Add Brand</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">

                                    <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                            <div class="form-group">
                                                <h5>Banner Title  <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="banner_title" class="form-control">
                                                    @error('banner_title')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                        <div class="form-group">
                                            <h5>Banner Title Heading H1 <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="banner_title_heading_h1" class="form-control">
                                                @error('banner_title_heading_h1')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                            <div class="form-group">
                                                <h5>Banner Title Heading <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="banner_title_heading" class="form-control">
                                                    @error('banner_title_heading')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Banner Image <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="banner_image" class="form-control">
                                                    @error('banner_image')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>


                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Insert">
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->


                        <!-- /.box -->
                    </div>

                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->

        </div>


@endsection
