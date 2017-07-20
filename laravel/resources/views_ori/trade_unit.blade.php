@extends('layouts.app')

@section('content')

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="dashboard_4_1.html#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
             </ul>

        </div>
    </nav>
  	
	
	


 <div class="panel-body" style="padding-bottom:0px;">
        <div class="panel panel-default">
            <div class="panel-heading">查询条件</div>
            <div class="panel-body">
                <form id="formSearch" class="form-horizontal">
                    <div class="form-group" style="margin-top:15px">
                        <label class="control-label col-sm-1" for="txt_search_departmentname">部门名称</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="txt_search_departmentname">
                        </div>
                        <label class="control-label col-sm-1" for="txt_search_statu">状态</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="txt_search_statu">
                        </div>
                        <div class="col-sm-4" style="text-align:left;">
                            <button type="button" style="margin-left:50px" id="btn_query" class="btn btn-primary">查询</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>       

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
												

			</div><!--- body -->
					
					
					
					
			<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
						<button type="button" class="btn btn-primary">保存</button>
					</div><!--modal-footer-->					

				</div><!-- /.modal-content -->
			</div><!-- /.modal -->
		</div>		
		
		
    </div>
@endsection