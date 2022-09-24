@extends('auth.layouts.admin_master')
@section('title')
Foders
@endsection
@section('content')
<div class="contianer-fluid">
                        <div class="col-md-6 offset-3">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Foders Forms</h3></div>
                                    <div class="card-body">
                                       
                                            {!! Form::open(['url'=>'/foders/store','method'=>'POST']) !!}
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="mb-3 mb-md-0">
                                                        {!! Form::label('fodMOnth','মাসিক') !!}
                                                        {!! Form::text('fodMOnth','',['class'=>'form-control','placeholder'=>'মাসিক']) !!}
                                                       
                                                       
                                                    </div>
                                                    <span class="text-danger">@error('fodMOnth'){{$message}}@enderror</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        {!! Form::label('inputLastName','মালিকের নাম') !!}
                                                        {!! Form::text('ferName','',['class'=>'form-control','id'=>'inputLastName', 'placeholder'=>'মালিকের নাম']) !!}
                                                       
                                                       
                                                    </div>
                                                    <span class="text-danger">@error('ferName'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class=" mb-3 mb-md-0">
                                                        {!! Form::label('Mobile','Mobile') !!}
                                                        {!! Form::text('mob','',['class'=>'form-control','id'=>'inputLastName', 'placeholder'=>'Mobile']) !!}
                                                     
                                                    </div>
                                                    <span class="text-danger">@error('mob'){{$message}}@enderror</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        {!! Form::label('ghasName','ঘাসের নাম') !!}
                                                        {!! Form::text('ghasName','',['class'=>'form-control','id'=>'inputLastName', 'placeholder'=>'ঘাসের নাম']) !!}
                                                      
                                                    </div>
                                                    <span class="text-danger">@error('ghasName'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="">
                                                        {!! Form::label('landAmo','জমির পরিমাণ') !!}
                                                        {!! Form::text('landAmo','',['class'=>'form-control','id'=>'inputLastName', 'placeholder'=>'জমির পরিমাণ']) !!}
                                                      
                                                    </div>
                                                    <span class="text-danger">@error('landAmo'){{$message}}@enderror</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        {!! Form::label('Production','প্রতি বছর মোট উৎপাদন') !!}
                                                        {!! Form::text('Production','',['class'=>'form-control','id'=>'inputLastName', 'placeholder'=>'প্রতি বছর মোট উৎপাদন']) !!}
                                                       
                                                    </div>
                                                    <span class="text-danger">@error('Production'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="">
                                                        {!! Form::label('motFod','খাদ্যের উদ্দেশ্য') !!}
                                                        {!! Form::text('motFod','',['class'=>'form-control','id'=>'inputLastName', 'placeholder'=>'খাদ্যের উদ্দেশ্য']) !!}
                                                       
                                                    </div>
                                                    <span class="text-danger">@error('motFod'){{$message}}@enderror</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                        {!! Form::label('motSel','বাজার জাত উদ্দেশ্য') !!}
                                                        {!! Form::text('motSel','',['class'=>'form-control','id'=>'inputLastName', 'placeholder'=>'বাজার জাত উদ্দেশ্য']) !!}
                                                       
                                                    </div>
                                                    <span class="text-danger">@error('motSel'){{$message}}@enderror</span>
                                                </div>
                                            </div>
                                           
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="">
                                                        {!! Form::label('mark','মন্তব্য') !!}
                                                        {!! Form::text('mark','',['class'=>'form-control','id'=>'inputLastName', 'placeholder'=>'মন্তব্য']) !!}
                                                    </div>
                                                </div>
                                              
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary">Create</button>
                                                </div>
                                            </div>
                                            {!! Form::close() !!}
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="lg"><a class="btn btn-danger d-grid" href="{{url('foders/index')}}">Back</a></div>
                                    </div>
                                </div>
                            </div>
</div>
@endsection