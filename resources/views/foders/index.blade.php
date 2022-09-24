@extends('auth.layouts.admin_master')
@section('title')
Foders
@endsection

@section('content')
<div class="foders-section">
<div class="contianer-fluid">
    @include('flash-message');
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div>
                <h3 class="text-success">Foders Register</h3>
            </div>
            <div>
                <a class="btn btn-secondary" href="{{url('foders/create')}}">Add Data</a>
            </div>
        </div>
    </div>
    
    <table class="table table-xs-responsive table-hover table-striped mt-4" summary="An example of a responsive table using Bootstrap breakpoints." aria-role="table">
      
        <thead class="bg-primary text-white">
			<tr>
                {{-- <th></th> --}}
				<th></th>
				<th colspan="2">মালিকের পরিচয়</th>
                <th colspan="5" class="text-center">উৎপাদন বর্ণনা</th>
                <th></th>
               
				<th></th>
			</tr>
		</thead>

			<thead class="bg-primary text-white">
			<tr>
                {{-- <th>ID</th> --}}
				<th>ক্রমিক</th>
				<th>মালিকের নাম</th>
                <th>মোবাইলনং</th>
				<th>ঘাসের নাম</th>
				<th>জমির পরিমাণ</th>
				<th> প্রতি বছর মোট উৎপাদন</th>
				<th>খাদ্যের উদ্দেশ্য</th>
				<th>বাজার জাত উদ্দেশ্য</th>
				<th>মন্তব্য</th>
				<th>মডিফাই</th>
			</tr>
		</thead>
		

          
          <tbody>
            @foreach ($showFoders as $showFoder)
            <tr>
                {{-- <td data-bs-toggle="tooltip" title="ID">{{$showFoder->id}}</td> --}}
                <td data-bs-toggle="tooltip" title="ক্রমিক">{{$showFoder->fodMOnth}}</td>
                <td data-bs-toggle="tooltip" title="মালিকের নাম">{{$showFoder->ferName}}</td>
                <td data-bs-toggle="tooltip" title="Mobile">{{$showFoder->mob}}</td>
                <td data-bs-toggle="tooltip" title="ঘাসের নাম">{{$showFoder->ghasName}}</td>
                <td data-bs-toggle="tooltip" title="জমির পরিমাণ">{{$showFoder->landAmo}}</td>
                <td data-bs-toggle="tooltip" title="প্রতি বছর মোট উৎপাদন">{{$showFoder->Production}}</td>
                <td data-bs-toggle="tooltip" title="খাদ্যের উদ্দেশ্য">{{$showFoder->motFod}}</td>
                <td data-bs-toggle="tooltip" title="বাজার জাত উদ্দেশ্য">{{$showFoder->motSel}}</td>
                <td data-bs-toggle="tooltip" title="মন্তব্য">{{$showFoder->mark}}</td>
                <td class="d-flex justify-content-between">

                    <a class="btn btn-success" href="{{url('/foders/edit/'.$showFoder->id)}}" data-bs-toggle="tooltip" title="Edit"><i class="fa fa-pen"></i></a>
                    <a class="btn btn-warning cowdelete" href="{{url('/foders/delete/'.$showFoder->id)}}" data-mdb-toggle="modal" data-mdb-target="#foderModal{{$showFoder->id}}" data-bs-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                </td>
              </tr>

         @include('foders.delete')
            @endforeach

         
        


          </tbody>
        </table>
   
  
   
</div>
</div>


@endsection

