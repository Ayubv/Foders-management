@extends('auth.layouts.admin_master')
@section('title')
Users
@endsection
<style>
  .mybtn{
    width:100%; 
    text-transform: capitalize !important;
    margin:0;
  }
</style>
@section('content')
<main>
    <div class="container-fluid px-4">
    <div class="card">
        <div class="card-header">
        <div>
        <h2 class="text-center">This is Users list</h2>
        </div>
       
        </div>
    </div>
    
    <table class="table table-light table-striped">
    <thead class="thead-light">
    <tr>
      <th>Name</th>
      <th>E-mail</th>
      <th>Country</th>
      <th>Division</th>
      <th>District</th>
      <th>Upazela</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->country}}</td>
        <td>{{$user->division}}</td>
        <td>{{$user->district}}</td>
        <td>{{$user->upazila}}</td>
        <td class="text-center status">
                {{-- <span class="{{$user->status ?'label rounded bg-success px-2':'label rounded bg-warning px-2' }}">{{$user->status ? "Active":"Deactive" }}</span> 
                 --}}
                  <span class="btn btn-info">Deactive</span>
                
        </td>
          
        <td>
                {{-- <button type="button" class="{{$user->status ?'btn btn-danger mybtn':'btn btn-success mybtn' }}"  value="{{$user->status}}" value2="{{$user->id}}" id="changeStatus">{{$user->status ? "Block":"Approve" }}</button>  --}}
                <button type="button" id="changeStatus" class="btn btn-danger" >Approve</button> 
   
        </td>
        </tr>
    @endforeach
   
    </tbody>
    </table>
    </div>
    </main>


@endsection

@section('footer')
@include('footer')


@section('footer-script')
<script src="{{asset('backend/js/jquery.js')}}"></script>
<script>
    $('#changeStatus').on('click',function(){
       
        // var  userStatus = $(this).val();
        // var user_id = $(this).attr('value2')
        // $.ajax({
        //       type: "get",
        //       dataType: "json",
        //       url: '/users/change-status/'+userStatus+'/'+user_id,
        //       data: {'status': userStatus, 'user_id': user_id},
        //       success: function(data){
        //         if(data.success==true){
        //           alert('Data update successfully')
        //           window.location.reload(true)
        //         }
        //       }
        //   });

$('#changeStatus').text('Block');
$('#changeStatus').parent().siblings('.status').children().text('active');


    
    });
</script>
@endsection
