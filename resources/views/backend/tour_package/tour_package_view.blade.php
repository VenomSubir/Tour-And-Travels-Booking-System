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
                                            <th>Tour Place Name</th>
                                            <th>Package Price</th>
                                            <th>Package Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($t_package as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>
                                                <img src="{{ asset($item->image) }}" style="width: 70px; height: 40px;">
                                            </td>
                                            <td>
                                                <a href="{{ route('tour_package.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                                <a href="{{ route('tour_package.delete',$item->id) }}" class="btn btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i></a>
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
                                <h3 class="box-title">Add Package</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">

                                    <form action="{{ route('tour_package.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                            <div class="form-group">
                                                <h5>Package Name  <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Package Price <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="price" class="form-control">
                                                    @error('price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Package Rating <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="number" name="rating" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Package Review <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="review" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>Package Description <span class="text-danger">*</span></h5>
                                                <div class="controls">
{{--                                                    <input type="text" name="banner_title_heading" class="form-control">--}}
                                                    <textarea name="description" class="form-control"></textarea>
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
