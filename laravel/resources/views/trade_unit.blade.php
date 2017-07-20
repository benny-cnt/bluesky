@extends('layouts.app')

@section('content')


<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <<ul class="nav navbar-nav navbar-left">>
                <li>
                    <a href="layouts.html"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span></a>
                </li>
                <li>
                    <a href="index.html#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="graph_flot.html">Flot Charts</a></li>
                        <li><a href="graph_morris.html">Morris.js Charts</a></li>
                        <li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>
                        <li><a href="graph_chartjs.html">Chart.js</a></li>
                        <li><a href="graph_chartist.html">Chartist</a></li>
                        <li><a href="c3.html">c3 charts</a></li>
                        <li><a href="graph_peity.html">Peity Charts</a></li>
                        <li><a href="graph_sparkline.html">Sparkline Charts</a></li>
                    </ul>
                </li>
 
 			</ul><!--- nav navbar -->
		</div><!--- collapse -->
	</nav><!-- navbar-default--->	
	



	
			<div class="panel-body" style="padding-bottom:0px;">
				<div id="toolbar" class="btn-group">
					<button id="btn_add" type="button" class="btn btn-default" data-toggle="modal" data-target="#addUnitTable">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>新增
					</button>
					<button id="btn_edit" type="button" class="btn btn-default">
						<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>修改
					</button>
					<button id="btn_delete" type="button" class="btn btn-default">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>删除
					</button>
				</div>
				
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>

                        <th>#</th>
                        <th>交易单元代码 </th>
                        <th>主交易单元代码</th>
                        <th>托管行名称</th>
                        <th>出租人名称</th>
                        <th>股票费率</th>
                        <th>基金费率 </th>
                        <th>大宗费率</th>
                        <th>租用状态</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Project <small>This is example of project</small></td>
                        <td>Patrick Smith</td>
                        <td>0800 051213</td>
                        <td>Inceptos Hymenaeos Ltd</td>
                        <td><span class="pie">0.52/1.561</span></td>
                        <td>20%</td>
                        <td>Jul 14, 2013</td>
                        <td><a href="dashboard_4_1.html#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alpha project</td>
                        <td>Alice Jackson</td>
                        <td>0500 780909</td>
                        <td>Nec Euismod In Company</td>
                        <td><span class="pie">6,9</span></td>
                        <td>40%</td>
                        <td>Jul 16, 2013</td>
                        <td><a href="dashboard_4_1.html#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Betha project</td>
                        <td>John Smith</td>
                        <td>0800 1111</td>
                        <td>Erat Volutpat</td>
                        <td><span class="pie">3,1</span></td>
                        <td>75%</td>
                        <td>Jul 18, 2013</td>
                        <td><a href="dashboard_4_1.html#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Gamma project</td>
                        <td>Anna Jordan</td>
                        <td>(016977) 0648</td>
                        <td>Tellus Ltd</td>
                        <td><span class="pie">4,9</span></td>
                        <td>18%</td>
                        <td>Jul 22, 2013</td>
                        <td><a href="dashboard_4_1.html#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alpha project</td>
                        <td>Alice Jackson</td>
                        <td>0500 780909</td>
                        <td>Nec Euismod In Company</td>
                        <td><span class="pie">6,9</span></td>
                        <td>40%</td>
                        <td>Jul 16, 2013</td>
                        <td><a href="dashboard_4_1.html#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Project <small>This is example of project</small></td>
                        <td>Patrick Smith</td>
                        <td>0800 051213</td>
                        <td>Inceptos Hymenaeos Ltd</td>
                        <td><span class="pie">0.52/1.561</span></td>
                        <td>20%</td>
                        <td>Jul 14, 2013</td>
                        <td><a href="dashboard_4_1.html#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Gamma project</td>
                        <td>Anna Jordan</td>
                        <td>(016977) 0648</td>
                        <td>Tellus Ltd</td>
                        <td><span class="pie">4,9</span></td>
                        <td>18%</td>
                        <td>Jul 22, 2013</td>
                        <td><a href="dashboard_4_1.html#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Project <small>This is example of project</small></td>
                        <td>Patrick Smith</td>
                        <td>0800 051213</td>
                        <td>Inceptos Hymenaeos Ltd</td>
                        <td><span class="pie">0.52/1.561</span></td>
                        <td>20%</td>
                        <td>Jul 14, 2013</td>
                        <td><a href="dashboard_4_1.html#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alpha project</td>
                        <td>Alice Jackson</td>
                        <td>0500 780909</td>
                        <td>Nec Euismod In Company</td>
                        <td><span class="pie">6,9</span></td>
                        <td>40%</td>
                        <td>Jul 16, 2013</td>
                        <td><a href="dashboard_4_1.html#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Betha project</td>
                        <td>John Smith</td>
                        <td>0800 1111</td>
                        <td>Erat Volutpat</td>
                        <td><span class="pie">3,1</span></td>
                        <td>75%</td>
                        <td>Jul 18, 2013</td>
                        <td><a href="dashboard_4_1.html#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Gamma project</td>
                        <td>Anna Jordan</td>
                        <td>(016977) 0648</td>
                        <td>Tellus Ltd</td>
                        <td><span class="pie">4,9</span></td>
                        <td>18%</td>
                        <td>Jul 22, 2013</td>
                        <td><a href="dashboard_4_1.html#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Alpha project</td>
                        <td>Alice Jackson</td>
                        <td>0500 780909</td>
                        <td>Nec Euismod In Company</td>
                        <td><span class="pie">6,9</span></td>
                        <td>40%</td>
                        <td>Jul 16, 2013</td>
                        <td><a href="dashboard_4_1.html#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Project <small>This is example of project</small></td>
                        <td>Patrick Smith</td>
                        <td>0800 051213</td>
                        <td>Inceptos Hymenaeos Ltd</td>
                        <td><span class="pie">0.52/1.561</span></td>
                        <td>20%</td>
                        <td>Jul 14, 2013</td>
                        <td><a href="dashboard_4_1.html#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Gamma project</td>
                        <td>Anna Jordan</td>
                        <td>(016977) 0648</td>
                        <td>Tellus Ltd</td>
                        <td><span class="pie">4,9</span></td>
                        <td>18%</td>
                        <td>Jul 22, 2013</td>
                        <td><a href="dashboard_4_1.html#"><i class="fa fa-check text-navy"></i></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>


				

        </div><!--- sidebar-collapse -->
     </div><!--- navbar-default -->
</div>


	<table id="tb_departments"></table>
		<div class="modal fade" id="addUnitTable" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">新增交易单元</h4>
					</div>

					
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label" for="unit_id">交易单元代码</label>
									<input type="text" id="unit_id" name="unit_id" value="" placeholder="" class="form-control">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label" for="main_unit_id">主交易单元代码</label>
									<input type="text" id="main_unit_id" name="main_unit_id" value="" placeholder="" class="form-control">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label" for="bank_name">托管行名称</label>
									<input type="text" id="bank_name" name="bank_name" value="" placeholder="" class="form-control">
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label" for="stock_fee">股票费率</label>
									<input type="text" id="stock_fee" name="stock_fee" value="" placeholder="" class="form-control">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label" for="fund_fee">基金费率</label>
									<input type="text" id="fund_fee" name="fund_fee" value="" placeholder="" class="form-control">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label" for="block_fee">大宗费率</label>
									<input type="text" id="block_fee" name="bank_name" value="" placeholder="" class="form-control">
								</div>
							</div>
						</div>		

						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label" for="lessor_name">出租人名称</label>
									<input type="text" id="lessor_name" name="lessor_name" value="" placeholder="" class="form-control">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="control-label" for="rent_status">租用状态</label>
									<select class="form-control" >
                                                        <option>已承租</option>
                                                        <option>承租流程中</option>
														<option>已退租</option>
														<option>退租流程中</option>
                                    </select>
								</div>
							</div>
						</div>		
			<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
						<button type="button" class="btn btn-primary">保存</button>
			</div><!--modal-footer-->					

				</div><!-- /.modal body -->
			</div><!-- /.modal content-->
		</div><!-- /.modal dialog-->		
		
		
    </div><!-- /.modal fade-->
@endsection