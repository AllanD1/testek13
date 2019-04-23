@extends('adminlte::page')

@section('title', 'Posts')



@section('content')
<div class="col-md-12">
        <div class="box     ">
                <div class="box-header">
                  <h3 class="box-title">Filtros</h3>
                </div>
                <div class="box-body">
                  <!-- Date range -->
                  <div class="form-group col-md-6">
                        <label>Buscar Por</label>
                        <div class="input-group">
                                <div class="input-group-addon">
                                  <i class="fa fa-search"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="post_search" placeholder="Ex.: gols da rodada ">
                            </div>
                  </div>
                  <div class="form-group col-md-6">
                        <label>Intervalo de Datas</label>
        
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="reservation">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

    
                </div>
                <!-- /.box-body -->
              </div>
</div>
@stop
