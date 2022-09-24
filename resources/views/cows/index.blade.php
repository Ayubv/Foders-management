@extends('auth.layouts.admin_master')
@section('title')
Good Quality Cow
@endsection

@section('content')
<div class="foders-section">
    <div class="contianer-fluid">
        @include('flash-message')
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div>
                    <h3 class="text-success">Good Quality Cows Register</h3>
                </div>
                <div>
                    <a class="btn btn-secondary" href="{{url('cows/create')}}">Add Data</a>
                </div>
            </div>
        </div>
        
        <table class="table table-xs-responsive table-hover table-striped mt-4" summary="An example of a responsive table using Bootstrap breakpoints." aria-role="table">
          
            <thead class="bg-primary text-white">
                <tr>
                   
                    <th></th>
                    <th></th>
                    <th colspan="4">মালিকের পরিচয়</th>
                    <th colspan="7">উন্নতমানেরগাভীর</th>
                    <th></th>
                    <th></th>
    
    
    
                </tr>
            </thead>
    
          
             <thead class="bg-primary text-white">
                <tr>
                   
                    <th>ক্রমিক</th>
                    <th>তারিখ</th>
                    <th>নাম</th>
                    <th>পিতারনাম </th>
                    <th>গ্রাম</th>
                    <th>মোবাইলনং </th>
                    <th>জাত</th>
                    <th>বয়স</th>
                    <th>গায়ের রং</th>
                    <th>বাচ্চার সংখ্যা</th>
                    <th>দৈনিক দুধের পরিমাণ</th>
                    <th>দুধ দেয়ারসময়কাল</th>
                    <th>মোট দুধের পরিমাণ</th>
                    <th>মন্তব্য</th>
                    <th>মডিফাই</th>
    
    
    
                </tr>
            </thead> 
     
              
              <tbody>
              @foreach ($showcows as $showcow)
                  
             
                <tr>
                    <td data-bs-toggle="tooltip" title="ক্রমিক">{{$showcow->serial_coedeve}}</td>
                    <td data-bs-toggle="tooltip" title="তারিখ">{{$showcow->cowTarik}}</td>
                    <td data-bs-toggle="tooltip" title="নাম">{{$showcow->farmers_name}}</td>
                    <td data-bs-toggle="tooltip" title="পিতারনাম">{{$showcow->fat_name}}</td>
                    <td data-bs-toggle="tooltip" title="গ্রাম">{{$showcow->vill}}</td>
                    <td data-bs-toggle="tooltip" title="মোবাইলনং">{{$showcow->mobile}}</td>
                    <td data-bs-toggle="tooltip" title="জাত">{{$showcow->gat}}</td>
                    <td data-bs-toggle="tooltip" title="বয়স">{{$showcow->old_cow}}</td>
                    <td data-bs-toggle="tooltip" title="গায়ের রং">{{$showcow->color_ofbody}}</td>
                    <td data-bs-toggle="tooltip" title="বাচ্চার সংখ্যা">{{$showcow->num_culf}}</td>
                    <td data-bs-toggle="tooltip" title="দৈনিক দুধের পরিমাণ">{{$showcow->amount_milk}}</td>
                    <td data-bs-toggle="tooltip" title="দুধ দেয়ারসময়কাল">{{$showcow->period_milk}}</td>
                    <td data-bs-toggle="tooltip" title="মোট দুধের পরিমাণ">{{$showcow->total_milk}}</td>
                    <td data-bs-toggle="tooltip" title="মন্তব্য">{{$showcow->remark}}</td>
                  
                    <td class="d-flex justify-content-between">
    
                        <a class="btn btn-success" href="{{url('/cows/edit/'.$showcow->id)}}" data-bs-toggle="tooltip" title="Edit"><i class="fa fa-pen"></i></a>
                        <a class="btn btn-warning cowdelete" href="{{url('/cows/delete/'.$showcow->id)}}" data-mdb-toggle="modal" data-mdb-target="#ModalDelete{{$showcow->id}}" data-bs-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  @include('cows.delete')
                  @endforeach
                
             
               
    
              </tbody>
            </table>
            {!! $showcows->links() !!}

    
       
    </div>
    </div>
    
@endsection