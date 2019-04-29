@extends('adminlte::page')

@section('title', 'Posts')



@section('content')
<div class="col-md-12">
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Filtros</h3>
                </div>
                <div class="box-body">
                  <!-- Date range -->
                <form action="{{route('news')}}" method="post">
                      {!! csrf_field() !!}
                        
                    <div class="form-group col-md-6">
                        <label>Buscar Por</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-search"></i>
                            </div>
                            <input type="text" class="form-control pull-right" name="search" id="post_search" placeholder="Ex.: gols da rodada ">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Intervalo de Datas</label>
                        
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="datas" class="form-control pull-right" id="reservation">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class="input-group">
                        <button class="btn btn-success" type="submit"> BUSCAR</button>
                    </div>
                    
                </form>
                </div>
                <!-- /.box-body -->
              </div>

            </div>

                    @foreach ($items as $item) 
                        <div class="col-md-12">
                            <div class="box" style="margin:5px 0;">
                                <div class="col-md-5">
                                    <div class="row">
                                        <img style="display:block; width:100%;" src="{{$item->urlToImage}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">

                                    <h3>
                                        {{$item->title}}
                                    </h3>
                                    <h4>
                                        {{$item->author}}
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                        <div class="col-md-12">
                            <div>
                                {{ $items->links() }}
                            </div>
                        </div>
                
                

@stop
