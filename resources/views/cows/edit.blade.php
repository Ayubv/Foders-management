@extends('auth.layouts.admin_master')
@section('title')
Good Quality Cows
@endsection
@section('content')
<div class="contianer-fluid">
    <div class="col-md-6 offset-3">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Good Quality Cows</h3></div>
                <div class="card-body">
                    
                        {!! Form::open(['url'=>'/cows/update/'.$editcow->id,'method'=>'POST']) !!}
                        <div class="row mb-3">
                            
                            <div class="col-md-6">
                                <div class="">
                                    {!! Form::label('ক্রমিক','ক্রমিক') !!}
                                    {!! Form::number('serial_coedeve',$editcow->serial_coedeve,['class'=>'form-control','id'=>'serial_coedeve', 'placeholder'=>'ক্রমিক']) !!}
                                    
                                    
                                </div>
                                <span class="text-danger">@error('serial_coedeve'){{$message}}@enderror</span>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 mb-md-0">
                                    {!! Form::label('তারিখ','তারিখ') !!}
                                    {!! Form::date('cowTarik',$editcow->cowTarik,['class'=>'form-control','placeholder'=>'তারিখ']) !!}
                                    
                                    
                                </div>
                                <span class="text-danger">@error('cowTarik'){{$message}}@enderror</span>
                            </div>


                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class=" mb-3 mb-md-0">
                                    {!! Form::label('farmers_name','মালিকেরনাম') !!}
                                    {!! Form::text('farmers_name',$editcow->farmers_name,['class'=>'form-control','id'=>'farmers_name', 'placeholder'=>'মালিকেরনাম']) !!}
                                    
                                </div>
                                <span class="text-danger">@error('farmers_name'){{$message}}@enderror</span>
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    {!! Form::label('fat_name','পিতারনাম') !!}
                                    {!! Form::text('fat_name',$editcow->fat_name,['class'=>'form-control','id'=>'fat_name', 'placeholder'=>'পিতারনাম']) !!}
                                    
                                </div>
                                <span class="text-danger">@error('fat_name'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="">
                                    {!! Form::label('vill','গ্রাম') !!}
                                    {!! Form::text('vill',$editcow->vill,['class'=>'form-control','id'=>'vill', 'placeholder'=>'গ্রাম']) !!}
                                    
                                </div>
                                <span class="text-danger">@error('vill'){{$message}}@enderror</span>
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    {!! Form::label('mobile','মোবাইলনং') !!}
                                    {!! Form::text('mobile',$editcow->mobile,['class'=>'form-control','id'=>'mobile', 'placeholder'=>'মোবাইলনং']) !!}
                                    
                                </div>
                                <span class="text-danger">@error('mobile'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="">
                                    {!! Form::label('gat','জাত') !!}
                                    {!! Form::text('gat',$editcow->gat,['class'=>'form-control','id'=>'gat', 'placeholder'=>'জাত']) !!}
                                    
                                </div>
                                <span class="text-danger">@error('gat'){{$message}}@enderror</span>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="">
                                    {!! Form::label('old_cow','বয়স') !!}
                                    {!! Form::text('old_cow',$editcow->old_cow,['class'=>'form-control','id'=>'old_cow', 'placeholder'=>'বয়স']) !!}
                                    
                                </div>
                                <span class="text-danger">@error('old_cow'){{$message}}@enderror</span>
                            </div>

                            <div class="col-md-6">
                                <div class="">
                                    {!! Form::label('color_ofbody','Color') !!}
                                    {!! Form::text('color_ofbody',$editcow->color_ofbody,['class'=>'form-control','id'=>'color_ofbody', 'placeholder'=>'Color']) !!}
                                    
                                </div>
                                <span class="text-danger">@error('color_ofbody'){{$message}}@enderror</span>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="">
                                    {!! Form::label('num_culf','বাচ্চার সংখ্যা') !!}
                                    {!! Form::text('num_culf',$editcow->num_culf,['class'=>'form-control','id'=>'num_culf', 'placeholder'=>'বাচ্চার সংখ্যা']) !!}
                                    
                                </div>
                                <span class="text-danger">@error('num_culf'){{$message}}@enderror</span>
                            </div>  <div class="col-md-6">
                                <div class="">
                                    {!! Form::label('amount_milk','দৈনিক দুধের পরিমাণ(লিটার)') !!}
                                    {!! Form::text('amount_milk',$editcow->amount_milk,['class'=>'form-control','id'=>'amount_milk', 'placeholder'=>'দৈনিক দুধের পরিমাণ']) !!}
                                    
                                </div>
                                <span class="text-danger">@error('amount_milk'){{$message}}@enderror</span>
                            </div> 
                                <div class="col-md-6">
                                <div class="">
                                    {!! Form::label('period_milk','দুধ দেয়ারসময়কাল') !!}
                                    {!! Form::text('period_milk',$editcow->period_milk,['class'=>'form-control','id'=>'period_milk', 'placeholder'=>'দুধ দেয়ারসময়কাল']) !!}
                                    
                                </div>
                                <span class="text-danger">@error('period_milk'){{$message}}@enderror</span>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="">
                                    {!! Form::label('total_milk','মোট দুধের পরিমাণ') !!}
                                    {!! Form::text('total_milk',$editcow->total_milk,['class'=>'form-control','id'=>'total_milk', 'placeholder'=>'মোট দুধের পরিমাণ']) !!}
                                    
                                </div>
                                <span class="text-danger">@error('total_milk'){{$message}}@enderror</span>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="">
                                    {!! Form::label('remark','মন্তব্য') !!}
                                    {!! Form::text('remark',$editcow->remark,['class'=>'form-control','id'=>'remark', 'placeholder'=>'মন্তব্য']) !!}
                                </div>
                            </div>
                            
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="lg"><a class="btn btn-danger d-grid" href="{{url('cows/index')}}">Back</a></div>
                </div>
            </div>
                            </div>
</div>
@endsection