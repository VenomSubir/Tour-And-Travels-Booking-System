@extends('admin.admin_master')
@section('admin')

    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Brand</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">

                                <form action="{{ route('banner.update',$banner->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $banner->id }}">
                                    <input type="hidden" name="old_image" value="{{ $banner->banner_image }}">

                                    <div class="form-group">
                                        <h5>Banner Title  <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="banner_title" class="form-control" value="{{ $banner->banner_title }}">
                                            @error('banner_title')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Banner Title Heading H1  <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="banner_title_heading_h1" class="form-control" value="{{ $banner->banner_title_heading_h1 }}">
                                            @error('banner_title_heading_h1')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Banner Title Heading <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="banner_title_heading" class="form-control" value="{{ $banner->banner_title_heading }}">
                                            @error('banner_title_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Banner Image<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="banner_image" class="form-control">
                                            @error('banner_image')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
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
