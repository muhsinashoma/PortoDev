  @extends('admin.layouts.app')

  @section('main-content')

  @include('admin.layouts.header')

  @include('admin.layouts.leftmenu')



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0 <b>{{Auth::user()->name}}</b> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->


      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">CPU Traffic</span>
              <span class="info-box-number">90<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sales</span>
              <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">New Members</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->



      <div class="row">
        <div class="col-md-12">

          <a class="btn btn-sm btn-warning" data-toggle="modal" href="#post_category">Add New Category</a>
           <br>
           <br>

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th>SL</th>
                  <th>Category</th>
                  <th>Sub Category</th>
                  <th>Slug</th>
                  <th>User Role </th>
                  <th>Category Image</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($all_data  as $data)

                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$data -> cate_name}}</td>
                  <td>
                         @foreach ( $data->subcategories as $subcate)
                          <ul>
                             <li> {{ $subcate ->sub_cate_name }} </li>
                          </ul>
                           @endforeach
                    </td>
                  <td>{{$data -> cate_slug}}</td>
                  <td>{{$data ->user_role_id}}</td>

                  {{--{{'To show single image'}}--}}
                  {{--<img src="photos/{{$data -> image ->path}}" alt="" style="width: 50px; height: 50px">--}}


                  <td>

                    {{--{{'To show first postion value of array'}}--}}

                    {{--<img src="photos/{{ $data ->image[0] ->path}}" style="width:50px; height: 50px;">--}}

                    @foreach($data -> image as $item)
                        <img src="photos/{{$item ->path}}" alt="" style="width: 50px; height: 50px">
                      @endforeach
                  </td>

                  <td>{{$data->created_at}}</td>
                   <td style="display: inline-block">
                     <a class="btn btn-sm btn-info" href="#">View</a>

                     <a edit_id="{{$data ->id }}"  class="btn btn-sm btn-warning edit_category" href="#">Edit</a>

                     <form  action="{{route('post_category.destroy', $data->id)}}" method="POST">
                       @csrf
                       @method('DELETE')
                       <button class="btn btn-sm btn-danger" href="#">Delete</button>
                     </form>
                    </td>
                </tr>

                  @endforeach

                </tbody>
                <tfoot>
                <tr>
                  <th>SL</th>
                  <th>Category</th>
                  <th>Slug</th>
                  <th>User Role </th>
                  <th>Category Image</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->



      <!-- Modal for Create -->
      <div class="modal fade" id="post_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
               <form action="{{route('post_category.store')}}" method="POST" enctype="multipart/form-data">
                 @csrf

                 <div class="form-group">
                   <h5>Category Name</h5>
                    <input type="text" name="cate_name" class="form-control" placeholder="Category Name" required>
                 </div>


                 <div class="form-group">
                   <h5>Sub Category</h5>
                   @foreach($sub_categories as $sub_cate)
                     <input type="checkbox" name="sub_category_id[]" value="{{$sub_cate->id}}">{{$sub_cate -> sub_cate_name}}
                     @endforeach
                 </div>

                 <div class="form-group">
                   <h5>Upload File</h5>
                   <input type="file" name="cate_image[]" required multiple >
                 </div>


                 <div class="form-group">
                   <input type="hidden" name="user_role_id" value="{{Auth::user()->role_id}}">
                 </div>
                 <div class="form-group">
                   <input type="submit" class="btn btn-primary" value="Submit">
                 </div>
               </form>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>

          </div>
        </div>
      </div>


      <!-- Modal for Edit -->
      <div class="modal fade" id="edit_post_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form action="{{route('post_category.update', 3)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <h5>Category Name</h5>
                  <input type="text" name="cate_name" class="form-control" placeholder="Category Name" required>
                </div>


                <div class="form-group">
                  <h5>Sub Category</h5>
                  @foreach($sub_categories as $sub_cate)
                    <input type="checkbox" id="sub_category_id" name="sub_category_id[]" value="{{$sub_cate->id}}">{{$sub_cate -> sub_cate_name}}
                  @endforeach
                </div>

                <div class="form-group">
                  <h5>Upload File</h5>
                  <input type="file" name="cate_image[]" multiple >
                </div>


                <div class="form-group">
                  <input type="hidden" name="user_role_id" value="{{Auth::user()->role_id}}">
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="Submit">
                </div>
              </form>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>

          </div>
        </div>
      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  @include('admin.layouts.footer')



  </div>
  <!-- ./wrapper -->

  @endsection



