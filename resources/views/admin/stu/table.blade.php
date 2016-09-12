@extends("admin.base.base")

@section("content")

	         <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            携程用户信息系统
            <small>详细信息</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Simple</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
 
            <div class="col-md-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">携程用户管理系统</h3>

                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table">
                    <tr>
                      <th style="width: 60px">ID</th>
                      <th>Sex</th>
                      <th>Age</th>
                      <th>Agetime</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th style="width: 300px">Operate</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>叶世昌</td>
                      <td>男</td>
                      <td>12</td>
                      <td>18616511762</td>
                      <td>1318881272@qq.com</td>
                      <td><button class="btn btn-danger">删除</button>　　<button class="btn btn-primary">修改</button></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>王欣</td>
                      <td>女</td>
                      <td>11</td>
                      <td>18234567892</td>
                      <td>13245672@qq.com</td>
                      <td><button class="btn btn-danger">删除</button>　　<button class="btn btn-primary">修改</button></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>测试名字</td>
                      <td>女</td>
                      <td>10</td>
                      <td>18234522332</td>
                      <td>12345672@qq.com</td>
                      <td><button class="btn btn-danger">删除</button>　　<button class="btn btn-primary">修改</button></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>可可</td>
                      <td>女</td>
                      <td>9</td>
                      <td>14255369658</td>
                      <td>145682531@qq.com</td>
                      <td><button class="btn btn-danger">删除</button>　　<button class="btn btn-primary">修改</button></td>
                    </tr>

                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

         
            </div><!-- /.col -->
          </div><!-- /.row -->
          <div class="row">

          </div>
        </section><!-- /.content -->

@endsection