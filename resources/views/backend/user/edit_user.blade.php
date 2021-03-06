@extends('admin.admin_master')
@section('admin')

<div class="content-wrapper">
    <div class="container-full">
        <section class="content">

        <!-- Basic Forms -->
        <div class="box">
            <div class="box-header with-border">
            <h4 class="box-title">Update user</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="row">
                <div class="col">
                    <form method="post" action="{{ route('user.update', $editData->id) }}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>User Role <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="role" id="role" required="" class="form-control">
                                                    <option value="Admin"  {{ (($editData->role == 'Admin') ? 'selected' : '') }}>Admin</option>
                                                    <option value="Operator" {{ (($editData->role == 'Operator') ? 'selected' : '') }}>User</option>
                                                </select>
                                            </div>
                                            @error('role')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>Username <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control" required="" value="{{ $editData->name }}">
                                            </div>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h5>User Email <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="email" name="email" class="form-control" required value="{{ $editData->email }}">
                                            </div>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                            <div class="text-xs-left">
                                <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                                <a href="{{ route('user.view') }}" class="btn btn-rounded btn-secondary mb-5" >Cancel</a>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        </section>
    </div>
</div>


@endsection
