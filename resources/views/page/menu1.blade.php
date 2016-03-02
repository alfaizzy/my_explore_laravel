@extends('layouts.app')

@section('content')
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Horizontal Form</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/menu1/insert1') }}">
                  {!! csrf_field() !!}
                  <div class="box-body">
                    <div class="form-group{{ $errors->has('nama_coba') ? ' has-error' : '' }}">
                      <label for="inputEmail3" class="col-sm-2 control-label">Nama Barang</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_coba" placeholder="Nama Barang">
                        @if (count($errors) > 0)
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_coba') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group{{ $errors->has('jumlah_coba') ? ' has-error' : '' }}">
                      <label for="inputPassword3" class="col-sm-2 control-label">Jumlah</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="jumlah_coba" placeholder="Password">
                        @if (count($errors) > 0)
                            <span class="help-block">
                                <strong>{{ $errors->first('jumlah_coba') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">

                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
@endsection
