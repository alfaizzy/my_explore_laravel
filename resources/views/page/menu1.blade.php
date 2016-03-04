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
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">TOKEN</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="_token" value="{{ csrf_token() }}">
                      </div>
                    </div>

                  </div><!-- /.box-body -->
                  <div class="box-footer">

                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                  </div><!-- /.box-footer -->
                </form>




              </div><!-- /.box -->

              <div class="row">
                <div class="col-md-12">
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Coba Tombol POST JSON</h3>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/menu1/viewUser1') }}">
                      {!! csrf_field() !!}
                      <button type="submit" class="btn btn-primary pull-right">lihat user methode POST</button>
                    </form>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
                </div>
              </div>




              <div class="row">
              <div class="col-md-6">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Bordered Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <th>Nama</th>
                        <th>Email</th>
                      </tr>
                      @foreach ($users as $user)
                          <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    {!! $users->render() !!}
                  </ul>
                </div>
              </div><!-- /.box -->
            </div>

            <div class="col-md-6">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Bordered Table</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <th>Nama</th>
                      <th>Jumlah</th>
                    </tr>
                    @foreach ($tabel_coba as $cb)
                        <tr>
                          <td>{{ $cb->nama_coba }}</td>
                          <td>{{ $cb->jumlah_coba }}</td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>

              </div><!-- /.box-body -->
              <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                  {!! $tabel_coba->render() !!}
                </ul>
              </div>
            </div><!-- /.box -->
          </div>
          </div>
@endsection
