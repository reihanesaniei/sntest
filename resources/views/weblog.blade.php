
@extends('layouts.master')
@section('content')
   <main id="main" class="weblog">
       <div class="container">
           <div class="row">
               <div class="col-xs-12">
                   <p class="h2">مقاله های پست شده:</p>
                   <hr class="hr"/>
               </div>
           </div>

           @foreach($weblog as $w)

               <div class="row">
                  <article>
                       <div class="col-xs-12 title-weblog h3">
                           {{$w->title}}
                       </div>
                       <div class="col-xs-12 author-weblog">
                           ارسال شده توسط:
                           <span>{{$w->author}}</span>
                       </div>
                       <div class="col-xs-12 date-weblog">
                           ارسال شده در تاریخ:
                           <span>
                               {{$w->created_at->toJalali()->format('%d %B %Y')}}

                               </span>
                       </div>
                       <hr class="hr"/>
                       <div class="col-xs-12 content-weblog-parent">
                           <div class="content-weblog">
                               {{Str::limit($w->content, 100)}}

                           </div>
                       </div>
                      <div class="col-xs-12 weblog-edit">
                         {{-- <a href="/weblog/edit/{{$w->id}}"> ویرایش </a> |--}} <a href="/weblog/delete/{{$w->id}}"> حذف </a>
                      </div>
                       <div class="col-xs-12 continue-weblog">
                           <a href="{{route('weblog.detail',['id'=>$w->id,'weblogSlug'=>$w->slug])}}" class="btn btn-info">ادامه مطالب</a>
                       </div>
                      <hr class="hr"/>
                  </article>
               </div>
           @endforeach
           <div class="row">
               <article>
                   <div class="col-xs-12 title-weblog-post h5">
                       مطالب خواندنی خود را به اشتراک بگذارید.
                   </div>
                   <hr class="hr" />
                   <div class="col-xs-12">
                       @if(count($errors))
                           <div class="col-xs-12 alert alert-danger form-group">
                               <ul>
                                   @foreach($errors->all() as $error)
                                       <li> {{$error}}</li>
                                   @endforeach
                               </ul>
                           </div>
                       @endif
                   </div>
                   <div class="col-xs-12 form-weblog">
                       <form method="post" action="{{route('weblog.send')}}">
                           {!! csrf_field() !!}
                           <div class="row form-parent">
                               <div class="col-xs-12 form-group">
                                   <span class="red-star">*</span>
                                   <label class="form-label">نام و نام خانوادگی:</label>
                                   <input  name="author" class="form-control" type="text" alt="author" placeholder="نام شما">
                               </div>
                               <div class="col-xs-12 form-group">
                                   <span class="red-star">*</span>
                                   <label class="form-label">ایمیل:</label>
                                   <input  name="email" class="form-control" type="email" alt="email" placeholder="ایمیل">
                               </div>
                               <div class="col-xs-12 form-group">
                                   <span class="red-star">*</span>
                                   <label class="form-label">عنوان:</label>
                                   <input  name="title" class="form-control" type="text" alt="title" placeholder="عنوان">
                               </div>
                               <div class="col-xs-12 form-group">
                                   <span class="red-star">*</span>
                                   <label class="form-label"> متن:</label>
                                   <textarea  class="form-control" name="content" rows="5" placeholder="متن" ></textarea>

                               </div>
                               <div class="col-xs-12 form-group">
                                   <button type="submit" class="btn btn-primary">ارسال</button>
                               </div>
                           </div>
                       </form>
                   </div>
               </article>
           </div>

       </div>
   </main>
@endsection
