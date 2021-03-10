@extends('admin_layout')
@section('admin_content')

    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Quản lý thông tin dự án
    </div>
    <!-- @if(count($errors) > 0)
        <div class="alert alert-danger">
        Upload Validation Error<br><br>
        <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
    @endif -->

   <!--@if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div> 
   @endif-->
   <?php
        $message = Session::get('message');
        if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
        }
    ?>
   <form method="post" enctype="multipart/form-data" action="{{ url('/import_excel/import') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <table class="table">
      <tr>
       <td width="40%" align="right"><label>Select File for Upload</label></td>
       <td width="30">
        <input type="file" name="select_file" />
       </td>
       <td width="30%" align="left">
        <input type="submit" name="upload" class="btn btn-primary" value="Upload">
       </td>
      </tr>
      <tr>
       <td width="40%" align="right"></td>
       <td width="30"><span class="text-muted">.xls, .xslx</span></td>
       <td width="30%" align="left"></td>
      </tr>
     </table>
    </div>
   </form>
    <!-- <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Project</th>
            <th>Key</th>
            <th>Summary</th>
            <th>Issue Tye</th>
            <th>Status</th>
            <th>Priority</th>
            <th>Resolution</th>
            <th>Assignee</th>
            <th>Reporter</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_project_jira as $key => $project_jira)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $project_jira->Project }}</td>
            <td>{{ $project_jira->Key }}</td>
            <td>{{ $project_jira->Summary }}</td>
            <td>{{ $project_jira->IssueTye }}</td>
            <td>{{ $project_jira->Status }}</td>
            <td>{{ $project_jira->Priority }}</td>
            <td>{{ $project_jira->Resolution }}</td>
            <td>{{ $project_jira->Assignee }}</td>
            <td>{{ $project_jira->Reporter }}</td>
            <td>
              <a href="{{URL::to('/edit-project_jira/'.$project_jira->id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a onclick="return confirm('Bạn có chắc là muốn xóa danh mục này ko?')" href="{{URL::to('/delete-project_jira/'.$project_jira->id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer> -->
  </div>
</div>
@endsection