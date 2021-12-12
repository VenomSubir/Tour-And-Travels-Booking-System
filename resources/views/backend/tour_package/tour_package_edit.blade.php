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

                                <form action="{{ route('tour_package.update',$t_package->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $t_package->id }}">
                                    <input type="hidden" name="old_image" value="{{ $t_package->image }}">

                                    <div class="form-group">
                                        <h5>Package Name  <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="name" class="form-control" value="{{ $t_package->name }}">
                                            @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Package Price <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="price" class="form-control" value="{{ $t_package->price }}">
                                            @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Package Rating <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="number" name="rating" class="form-control" value="{{ $t_package->rating }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Package Review <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="review" class="form-control" value="{{ $t_package->review }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Package Description <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            {{--                                                    <input type="text" name="banner_title_heading" class="form-control">--}}
                                            <textarea name="description" class="form-control">{{ $t_package->description }}</textarea>
                                            @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Package Image <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="image" class="form-control">
                                            @error('image')
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
