@extends('layouts.master')
@section('content')
   <main id="main" class="weblog">
       <div class="container">
           <div class="row">
               <article>
                   <div class="col-xs-12 title-weblog h3">
                       {{$weblog->title}}
                   </div>
                   <div class="col-xs-12 author-weblog">
                       ارسال شده توسط:
                       <span>{{$weblog->author}}</span>
                   </div>
                   <div class="col-xs-12 date-weblog">
                       ارسال شده در تاریخ:
                       <span>{{$weblog->created_at}}</span>
                   </div>
                   <hr class="hr"/>
                   <div class="col-xs-12 content-weblog-parent">
                       <div class="content-weblog">
                           {{$weblog->content}}

                       </div>
                   </div>
               </article>
           </div>
       </div>
   </main>
@endsection
