<html>

<head>
  <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="虎鲸智能微信质检平台">
  <meta name="keywords" content="虎鲸 质检平台 微信质检平台 虎鲸智能微信质检平台">
  <meta name="author" content="虎鲸跳跃">
   <link rel="icon" href="{{asset('img/ico1.ico')}}" type="image/x-icon">
  <title>火种教育</title>
  <link href="{{asset('wechat/css/index.css')}}" rel="stylesheet">
  <script src="{{asset('wechat/js/echarts.js')}}"></script>
  <script src="{{asset('wechat/js/jquery-1.11.3.min.js')}}"></script>
  <script src="{{asset('wechat/js/vue.min.js')}}"></script>
  <script src="{{asset('wechat/js/xlcx.js')}}"></script>

  <script src="{{asset('wechat/js/index.js')}}"></script>
  <style type="text/css">
    .ant-calendar .ant-calendar-year-panel[data-v-73e88992],
    .ant-calendar .ant-calendar-month-panel[data-v-73e88992] {
      top: 34px;
    }
.el-cascader {
    width: 232px;
}
    .el-scrollbar__wrap {
      overflow-x: hidden;
      padding-bottom: 17px;
    }
    .se2 {
      width: 100px;
      height: 36px;
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1;
      opacity: 0;
    }
.addTable{
    width: 100%;
    border-collapse: collapse;
  }
  .addTable td{
    width: 25%;
    border: 1px solid rgb(210,210,210);
    height: 40px;
    text-align: center;
  }
    .se1 {
      width: 100px;
      height: 36px;
      font-size: 14px;
      color: #fff;
      background: rgb(67, 148, 247);
      border-radius: 5px;
      position: absolute;
      top: 0;
      left: 0;
    }

    .se1:hover {
      cursor: pointer;
    }
    .el-select {
      display: inline-block;
      position: relative;
      width: 232px;
      height: 38px;
      line-height: 38px;
    }

    .el-table .cell {
      box-sizing: border-box;
      white-space: normal;
      word-break: break-word;
      line-height: 23px;
    }

    .el-tcl {
      position: fixed;
      overflow: auto;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      z-index: 1000;
      background: rgba(55, 55, 55, .6);
    }

    .el-transfer {
      font-size: 14px;
      width: 900px;
      margin: 5% auto;
      background: white;
      padding: 100px;
      position: relative;
    }

    .el-transfer-panel {
      width: 300px
    }

    .el-pagination {
      margin-top: 20px;
      float: right
    }

    .ant-calendar .ant-calendar-month-panel-table[data-v-73e88992] {
      height: 208px;
    }

    .ant-calendar-range.ant-calendar-time .ant-calendar-time-picker[data-v-73e88992] {
      top: 34px;
    }

    .ant-calendar-top[data-v-73e88992] {
      color: #616161;
      padding: 8px;
      border-bottom: 1px solid #f3f3f3;
    }

    .el-table__body,
    .el-table__footer,
    .el-table__header {
      font-size: 12px;
      table-layout: fixed;
      border-collapse: separate;
    }

    .ant-calendar-top a[data-v-73e88992] {
      display: inline-block;
      vertical-align: middle;
      height: 16px;
      cursor: pointer;
    }

    .ant-calendar-top a[data-v-73e88992]:hover {
      color: #77BDFB;
    }

    .ant-calendar-top a.on[data-v-73e88992] {
      font-weight: bold;
      color: #1284e7;
    }

    .ant-calendar-top i[data-v-73e88992] {
      content: '|';
      display: inline-block;
      width: 1px;
      margin: 0 10px;
      height: 16px;
      background: #616161;
      vertical-align: middle;
    }

    .ant-calendar-year-panel-prev[data-v-73e88992],
    .ant-calendar-year-panel-next[data-v-73e88992] {
      display: block;
      height: 20px;
      text-align: center;
    }

    .ant-calendar-year-panel-prev a[data-v-73e88992],
    .ant-calendar-year-panel-next a[data-v-73e88992] {
      color: #666;
    }

    .ant-calendar-year-panel-prev[data-v-73e88992]:hover,
    .ant-calendar-year-panel-next[data-v-73e88992]:hover {
      background-color: #eaf8fe;
      cursor: pointer;
    }

    .ant-table-content {
      font-size: 12px
    }

    .xiangying {
      margin: 10px 0;
      font-weight: 700;
      color: rgba(0, 0, 0, .65);
    }

    /* .el-input__inner{
      height: 32px;
    } */
  </style>
</head>

<body>
  <div id="app">
    <div data-v-2713df1d="" style="min-width: 1200px;">
      <div data-v-2713df1d="" class="ant-layout ant-layout-has-sider">
        <div data-v-2713df1d="" class="ant-layout-sider long-silder"
          style="flex: 0 0 200px; width: 200px; height: 100%;">
          <div data-v-2713df1d="" class="logo">火种教育</div>
          <div data-v-2713df1d="" class="line"></div>
          <ul data-v-2713df1d="" class="v-ul active" style="overflow: auto; height: 595px;">
            <div data-v-2713df1d="" class="el-scrollbar">
              <div class="el-scrollbar__wrap" style="overflow: hidden;margin-bottom: -17px; margin-right: -17px;">
                <div class="el-scrollbar__view">
                  <li data-v-2713df1d="" class="v-li" onclick="window.location.href = '{{Url("wechat/indexWX")}}'"><span data-v-2713df1d="" style="margin-right: 5px;"><span
                        data-v-2713df1d="" style=""><img data-v-2713df1d="" src="{{asset('wechat/insight.png')}}" alt="跟进洞察"
                          class="v-icon"  style="display: none;"> <img data-v-2713df1d="" src="{{asset('wechat/insight1.png')}}" alt="跟进洞察"
                          class="v-icon" style=""></span> <img data-v-2713df1d="" src="{{asset('wechat/insight.png')}}"
                        alt="跟进洞察" class="v-icon" style="display: none;"></span> <span data-v-2713df1d=""
                      class="nav-text">
                      跟进洞察
                      <!----></span></li>
                  <li data-v-2713df1d="" class="v-li" onclick="window.location.href = '{{Url("wechat/qualityWX")}}'"><span data-v-2713df1d="" style="margin-right: 5px;"><span
                        data-v-2713df1d="" style=""><img data-v-2713df1d="" src="{{asset('wechat/home.png')}}" alt="质检"
                          class="v-icon" style="display: none;"> <img data-v-2713df1d="" src="{{asset('wechat/home1.png')}}" alt="质检"
                          class="v-icon" style=""></span> <img data-v-2713df1d="" src="{{asset('wechat/home.png')}}" alt="质检"
                        class="v-icon" style="display: none;"></span> <span data-v-2713df1d="" class="nav-text">
                      质检
                      <!----></span></li>
                  <li data-v-2713df1d="" class="v-li"  onclick="window.location.href = '{{Url("wechat/callsWX")}}'"><span data-v-2713df1d="" style="margin-right: 5px;"><span
                        data-v-2713df1d=""><img data-v-2713df1d="" src="{{asset('wechat/phoneCall.png')}}" alt="手机通话" class="v-icon"
                          style="display: none;"> <img data-v-2713df1d="" src="{{asset('wechat/phoneCall1.png')}}" alt="手机通话"
                          class="v-icon"></span> <img data-v-2713df1d="" src="{{asset('wechat/phoneCall.png')}}" alt="手机通话"
                        class="v-icon" style="display: none;"></span> <span data-v-2713df1d="" class="nav-text">
                      手机通话
                      <!----></span></li>
                  <li data-v-2713df1d="" class="v-li"  onclick="window.location.href = '{{Url("wechat/salesWX")}}'"><span data-v-2713df1d="" style="margin-right: 5px;"><span
                        data-v-2713df1d=""><img data-v-2713df1d="" src="{{asset('wechat/sale.png')}}" alt="销售用户" class="v-icon"
                          style=""> <img data-v-2713df1d="" src="{{asset('wechat/sale1.png')}}" alt="销售用户"
                          class="v-icon" style="display: none;"></span> <img data-v-2713df1d="" src="{{asset('wechat/sale.png')}}" alt="销售用户" class="v-icon"
                        style="display: none;"></span> <span data-v-2713df1d="" class="nav-text nav-text1">
                      销售用户
                      <!----></span></li>
                </div>
              </div>
              <div class="el-scrollbar__bar is-horizontal">
                <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
              </div>
              <div class="el-scrollbar__bar is-vertical">
                <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
              </div>
            </div>
          </ul>
          <!-- <div data-v-2713df1d="" class="clearfix sider-footer">
            <div data-v-2713df1d=""
              style="width: 80%; border-top: 1px solid rgba(255, 255, 255, 0.3); margin-left: 10%;"></div>
            <div data-v-2713df1d="" style="float: left; margin-left: 40px;">
              <div data-v-2713df1d="" title="用户管理" class="sider-footer-div"><i data-v-2713df1d=""
                  class="anticon anticon-user"></i></div>
              <div data-v-2713df1d="" title="查看帮助文档" class="sider-footer-div1" style="margin-left: 24px;"><i
                  data-v-2713df1d="" class="anticon anticon-question"></i></div>
              <div data-v-2713df1d="" title="收起" class="sider-footer-div2" style="margin-left: 24px;"><i
                  data-v-2713df1d="" class="anticon anticon-menu-fold"></i></div>
            </div>
          </div> -->
          <!-- <div data-v-2713df1d="" class="logo"
            style="height: 84px; margin: 0px auto; line-height: 116px; display: none;"><img data-v-2713df1d=""
              src="./wechat/img/logo.23f2859.png" width="42px" height="42px"></div> -->
          <div data-v-2713df1d="" class="line" style="display: none;"></div>
          <ul data-v-2713df1d="" class="v-ul active" style="overflow: auto; height: 595px; display: none;">
           
          </ul>
          <div data-v-2713df1d="" class="clearfix sider-footer" style="display: none;">
            <div data-v-2713df1d=""
              style="width: 80%; border-top: 1px solid rgba(255, 255, 255, 0.3); margin-left: 10%;"></div>
            <div data-v-2713df1d="" style="float: left;">
              <div data-v-2713df1d="" title="展开" class="sider-footer-div2" style="margin-left: 16px;"><i
                  data-v-2713df1d="" class="anticon anticon-menu-unfold"></i></div>
            </div>
          </div>

        </div>
        <div data-v-2713df1d="" class="ant-layout-content" style="padding: 10px; overflow: auto; height: 100%;">
          <div data-v-4f1d1395="" data-v-2713df1d="" class="v-container yhq-sale-page">
            <div data-v-4f1d1395="" class="header">
              <div data-v-4f1d1395="" class="common-title">销售用户管理</div>
              <div data-v-4f1d1395="" class="clearfix" style="margin-top: 23px;">
                <div data-v-4f1d1395="" class="panel-box genggai" style="display: none;float: left; padding-left: 21%;">
                  已选择<span class="sPan"></span>条
                  <button data-v-4f1d1395="" type="button" class="ant-btn"
                    style="margin-left: 10px; padding: 0px 27px; height: 33px;"
                    onclick="$('.mnn').css('display','block')">
                    <span>更改部门</span></button> <button data-v-4f1d1395="" onclick="$('.mn').css('display','block')"
                    type="button" class="ant-btn" style="padding: 0px 27px; height: 33px; margin-left: 10px;">
                    <span>删除</span></button></div>
                <div data-v-4f1d1395="" class="panel-box" style="float: right;">
                  <button data-v-4f1d1395="" @click="addname" type="button" class="ant-btn ant-btn-primary" style="margin-right: 10px;"
                    title="请选中叶子部门，然后添加">

                    <span>添加</span></button>
                    <label for="f_file" data-v-4f1d1395="" type="button" class="ant-btn"
                    style="margin-right: 10px; padding: 0px 27px; height: 33px;width:100px;border:none;vertical-align: bottom">
                    <input class="se2" id="f_file" type="file" name="image" onchange="importf(this)" />
                    <!-- <button data-v-4f1d1395=""  type="button" class="ant-btn"
                    style="margin-right: 10px; padding: 0px 27px; height: 33px;"><span>导入</span></button> -->
                    <button data-v-4f1d1395="" type="button" class="se1 ant-btn"
                      style="    border: none;margin-right: 10px;height: 33px;">导入</button>
                  </label> 
                    <button data-v-4f1d1395=""  @click="exportt" type="button" class="ant-btn"
                    style="margin-right: 10px; padding: 0px 27px; height: 33px;">

                    <span>导出</span></button> <input data-v-4f1d1395="" type="text" placeholder="销售姓名/销售ID/部门名称"
                    autocomplete="off" class="input-box ant-input" v-model="sousuocon" style="width: 200px;"> <button @click="sousuo" data-v-4f1d1395=""
                    type="button" class="ant-btn" style="padding: 0px 27px; height: 33px;">

                    <span>搜索</span></button></div>
              </div>

            </div>
            <div data-v-4f1d1395="" class="v-content" style="padding: 0px;">
              <div data-v-4f1d1395="" class="ztree" style="height: 347px; width: 20%; float: left;">
                <div data-v-4f1d1395="" class="el-scrollbar">
                  <div class="el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                    <div class="el-scrollbar__view">

                      <el-tree :data="data" node-key="id" :default-expanded-keys="[1]" :props="defaultProps"
                        @node-click="">
                        <span class="custom-tree-node" slot-scope="{ node, data }">
                          <span @click="handleNodeClick(data.id)">
                            [[ node.label ]]</span> <span style="position: relative" class="button setting"
                            @click.stop="hid(node,data)">
                            <div class="setting-container" :data-id="node.id"
                              style="top:10px;position:absolute;display: none;z-index: 999">
                              <div class="setting_1" @click.stop="addbm(data)"
                                style="border-bottom: 1px solid #E4E4E4;height: 40px;line-height: 40px;">新建下级部门</div>
                              <div class="setting_1"  @click.stop="removename(data)">修改名称</div>
                              <div v-if="node.label!='火种教育'" class="setting_1" style="height: 40px;line-height: 40px;"   @click.stop="removesector(data)">删除部门</div>
                            </div>
                          </span>
                        </span>
                      </el-tree>
                    </div>
                  </div>
                  <div class="el-scrollbar__bar is-horizontal">
                    <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                  </div>
                  <div class="el-scrollbar__bar is-vertical">
                    <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
                  </div>
                </div>
              </div>
              <div data-v-4f1d1395=""
                style="height: 100%; width: 5px; float: left; background-color: rgb(236, 236, 236);"></div>
              <div data-v-4f1d1395=""
                style="height: 100%; width: 79%; float: right; padding-top: 10px; padding-bottom: 10px;">
                <div data-v-4f1d1395="" class="el-scrollbar">
                  <div class="el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                    <div class="el-scrollbar__view">
                      <template>
                        <el-table ref="multipleTable"
                          :data="userList1.slice((currentPage1-1)*pagesize1,currentPage1*pagesize1)" border
                          style="width: 100%" height="550" tooltip-effect="dark"
                          @selection-change="handleSelectionChange">
                          <el-table-column type="selection" width="55">
                          </el-table-column>
                          <el-table-column fixed prop="name" label="销售姓名" width="160">
                          </el-table-column>
                          <el-table-column prop="mobile" label="销售ID" width="260">
                          </el-table-column>
                          <el-table-column prop="group" label="部门" width="160">
                          </el-table-column>
                          <el-table-column prop="wx_id" label="微信号" width="200">
                          </el-table-column>
                          <el-table-column label="操作" width="200">
                            <template slot-scope="scope">
                              <el-button type="text" size="small" @click="tablexq(scope.row)">编辑</el-button>
                              <el-button type="text" size="small" @click="tablexq1(scope.row)">微信</el-button>
                              <el-button type="text" size="small" @click="tablexq2(scope.row)">删除</el-button>
                            </template>
                          </el-table-column>

                        </el-table>
                        <el-pagination @size-change="handleSizeChange" @current-change="handleCurrentChange1"
                          :current-page="currentPage1" :page-sizes="[5, 10, 20, 40]" :page-size="pagesize1"
                          layout="total, sizes, prev, pager, next, jumper" :total="userList1.length">
                        </el-pagination>
                      </template>
                    </div>
                  </div>
                  <div class="el-scrollbar__bar is-horizontal">
                    <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                  </div>
                  <div class="el-scrollbar__bar is-vertical">
                    <div class="el-scrollbar__thumb" style="transform: translateY(0%); height: 83.6289%;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
            <div data-v-4f1d1395="" v-show="model1 == 9" style="display:none">
        <div class="ant-modal-mask"></div>
        <div role="dialog" aria-labelledby="vDialogTitle31" tabindex="-1" class="ant-modal-wrap"
          style="transform-origin: 1444px 221px;">
          <div role="document" class="ant-modal" style="width: 520px;">
            <div class="ant-modal-content"><button aria-label="Close" class="ant-modal-close" @click="model1 = 0"><span
                  class="ant-modal-close-x"></span></button>
              <div class="ant-modal-header">
                <div id="vDialogTitle31" class="ant-modal-title">添加</div>
              </div>
              <div class="ant-modal-body">
                <div data-v-4f1d1395="" style="text-align: center;">
                  <div data-v-4f1d1395="" class="modal-container"><span data-v-4f1d1395=""
                      class="modal-span">销售ID</span> <input v-model="addID" data-v-4f1d1395="" type="text"
                      placeholder="销售ID" autocomplete="off" maxlength="20"
                      class="modal-input ant-input "></div>
                  <div data-v-4f1d1395="" class="modal-container"><span data-v-4f1d1395=""
                      class="modal-span">销售姓名</span> <input v-model="addcon" data-v-4f1d1395="" type="text"
                      placeholder="销售姓名,不超过20个字符" autocomplete="off" maxlength="20" class="modal-input ant-input" v-model="bianjicon"></div>
                  <div data-v-4f1d1395="" class="modal-container"><span data-v-4f1d1395=""
                      class="modal-span">销售部门</span> <el-cascader :options="options" ref="judh" placeholder="组织架构" :show-all-levels="false" change-on-select v-model="selectedOptions" >
                    </el-cascader></div>
                </div>
              </div>
              <div class="ant-modal-footer"><button @click="model1 = 0" type="button"
                  class="ant-btn ant-btn-ghost ant-btn-lg"> <span>
                    取消
                  </span></button> <button type="button" @click="tianjia" class="ant-btn ant-btn-primary ant-btn-lg"> <span>
                    确定
                  </span></button></div>
            </div>
            <div tabindex="0" style="width: 0px; height: 0px; overflow: hidden;">
              sentinel
            </div>
          </div>
        </div>
      </div>
      <div data-v-4f1d1395="" v-show="model1 == 2" style="display:none">
        <div class="ant-modal-mask"></div>
        <div role="dialog" aria-labelledby="vDialogTitle31" tabindex="-1" class="ant-modal-wrap"
          style="transform-origin: 1444px 221px;">
          <div role="document" class="ant-modal" style="width: 520px;">
            <div class="ant-modal-content"><button aria-label="Close" class="ant-modal-close" @click="model1 = 0"><span
                  class="ant-modal-close-x"></span></button>
              <div class="ant-modal-header">
                <div id="vDialogTitle31" class="ant-modal-title">编辑</div>
              </div>
              <div class="ant-modal-body">
                <div data-v-4f1d1395="" style="text-align: center;">
                  <div data-v-4f1d1395="" class="modal-container"><span data-v-4f1d1395=""
                      class="modal-span">销售ID</span> <input v-model="xsID" data-v-4f1d1395="" type="text"
                      placeholder="销售ID" disabled="disabled" autocomplete="off" maxlength="20"
                      class="modal-input ant-input ant-input-disabled"></div>
                  <div data-v-4f1d1395="" class="modal-container"><span data-v-4f1d1395=""
                      class="modal-span">销售姓名</span> <input v-model="bianjicon" data-v-4f1d1395="" type="text"
                      placeholder="销售姓名,不超过20个字符" autocomplete="off" maxlength="20" class="modal-input ant-input" v-model="bianjicon"></div>
                  <div data-v-4f1d1395="" class="modal-container"><span data-v-4f1d1395=""
                      class="modal-span">销售部门</span> <el-cascader :options="options" ref="judh" placeholder="组织架构" :show-all-levels="false" change-on-select v-model="selectedOptions" >
                    </el-cascader></div>
                </div>
              </div>
              <div class="ant-modal-footer"><button @click="model1 = 0" type="button"
                  class="ant-btn ant-btn-ghost ant-btn-lg"> <span>
                    取消
                  </span></button> <button type="button" @click="bianji" class="ant-btn ant-btn-primary ant-btn-lg"> <span>
                    确定
                  </span></button></div>
            </div>
            <div tabindex="0" style="width: 0px; height: 0px; overflow: hidden;">
              sentinel
            </div>
          </div>
        </div>
      </div>
      <div data-v-4f1d1395="" v-show="model1 == 4" style="display:none">
        <div class="ant-modal-mask"></div>
        <div role="dialog" aria-labelledby="vDialogTitle7" tabindex="-1" class="ant-modal-wrap"
          style="transform-origin: 349px 155px;">
          <div role="document" class="ant-modal" style="width: 520px;">
            <div class="ant-modal-content"><button aria-label="Close" @click="model1 = 0" class="ant-modal-close"><span
                  class="ant-modal-close-x"></span></button>
              <div class="ant-modal-header">
                <div id="vDialogTitle7" class="ant-modal-title">添加部门</div>
              </div>
              <div class="ant-modal-body">
                <div data-v-4f1d1395="" style="text-align: center;"><input data-v-4f1d1395="" type="text"
                    placeholder="请在此输入部门" autocomplete="off" maxlength="30" class="modal-input ant-input"v-model="savecon"></div>
              </div>
              <div class="ant-modal-footer"><button @click="model1 = 0" type="button" class="ant-btn ant-btn-ghost ant-btn-lg"> <span>
                    取消
                  </span></button> <button type="button" class="ant-btn ant-btn-primary ant-btn-lg" @click="saveCon"> <span>
                    确定
                  </span></button></div>
            </div>
          </div>
        </div>
      </div>
      <div data-v-4f1d1395="" v-show="model1 == 5" style="display:none">
        <div class="ant-modal-mask"></div>
        <div role="dialog" aria-labelledby="vDialogTitle7" tabindex="-1" class="ant-modal-wrap"
          style="transform-origin: 349px 155px;">
          <div role="document" class="ant-modal" style="width: 520px;">
            <div class="ant-modal-content"><button aria-label="Close" @click="model1 = 0" class="ant-modal-close"><span
                  class="ant-modal-close-x"></span></button>
              <div class="ant-modal-header">
                <div id="vDialogTitle7" class="ant-modal-title">修改名称</div>
              </div>
              <div class="ant-modal-body">
                <div data-v-4f1d1395="" style="text-align: center;"><input data-v-4f1d1395="" dclass="removenm" type="text"
                    placeholder="请在此输入名称" autocomplete="off" maxlength="30" class="modal-input ant-input"></div>
              </div>
              <div class="ant-modal-footer"><button @click="model1 = 0" type="button" class="ant-btn ant-btn-ghost ant-btn-lg"> <span>
                    取消
                  </span></button> <button type="button" class="ant-btn ant-btn-primary ant-btn-lg" @click="xiugaimc"> <span>
                    确定
                  </span></button></div>
            </div>
          </div>
        </div>
      </div>
      <div data-v-4f1d1395="" v-show="model1 == 1" style="display:none">
        <div class="ant-modal-mask"></div>
        <div role="dialog" aria-labelledby="vDialogTitle13" tabindex="-1"
          class="ant-modal-wrap v-no-modal-footer v-no-modal-padding" style="transform-origin: 1493px 219px;">
          <div role="document" class="ant-modal" style="width: 1200px;">
            <div class="ant-modal-content"><button aria-label="Close" class="ant-modal-close" @click="model1 = 0"><span
                  class="ant-modal-close-x"></span></button>
              <div class="ant-modal-header">
                <div id="vDialogTitle13" class="ant-modal-title">微信</div>
              </div>
              <div class="ant-modal-body">
                <div data-v-4f1d1395="" class="v-content" style="height: 291px;">
                  <div data-v-4f1d1395="" class="el-scrollbar">
                    <div class="el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                      <div class="el-scrollbar__view">
                        <div data-v-4f1d1395="" class="modal-container"><span data-v-4f1d1395="" class="modal-span"
                            style="text-align: right;">添加&nbsp;&nbsp;&nbsp;</span> <input data-v-4f1d1395="" type="text"
                            placeholder="搜索微信号/微信昵称" autocomplete="off" @keyup.13="show($event)" v-model="allWxVal"
                            maxlength="50" class="modal-input ant-input"> <span data-v-4f1d1395=""
                            style="position: relative; left: -24px; cursor: pointer;"><i data-v-4f1d1395=""
                              class="anticon anticon-close"></i></span></div>
                        <div data-v-4f1d1395="" class="ul-container"
                          style="width: 100%; padding-left: 75px; padding-top: 15px; padding-right: 15px;">
                          <ul v-if="allWx.length>0" data-v-4f1d1395="" class="wx-no-ul clearfix">
                            <li data-v-4f1d1395="" style="width: 10%;">头像</li>
                              <li data-v-4f1d1395="" style="width: 23%;">微信号</li>
                              <li data-v-4f1d1395="" style="width: 22%;">微信昵称</li>
                              <li data-v-4f1d1395="" style="width: 20%;">绑定对象</li>
                              <li data-v-4f1d1395="" style="width: 15%;">绑定状态</li>
                              <li data-v-4f1d1395="" style="width: 10%;">操作</li>
                          </ul>
                          <ul v-for="(item,index) in allWx" data-v-4f1d1395="" class="wx-no-ul-data clearfix">
                           <li data-v-4f1d1395="" style="width: 10%;"><img data-v-4f1d1395="" :src="item.small_url"
                                style="width: 36px; height: 36px; margin-top: 2px;"></li>
                            <li data-v-4f1d1395="" style="width: 23%;">[[item.wx_id]]</li>
                            <li data-v-4f1d1395="" style="width: 22%;">[[item.nickname]]</li>
                            <li data-v-4f1d1395="" style="width: 20%;">[[item.username]]</li>
                            <li data-v-4f1d1395="" style="width: 15%;">[[item.type]]</li>
                            <li data-v-4f1d1395="" class="lzp-operation-color" style="width: 10%;" @click="bangding(item)">绑定</li>
                          </ul>
                        </div>
                        <div data-v-4f1d1395="" class="ul-container"
                          style="width: 100%; padding-left: 75px; padding-top: 15px; padding-right: 15px; position: relative; margin-top: 15px;">
                          <span data-v-4f1d1395=""
                            style="position: absolute; left: 24px; top: 15px;">已绑定&nbsp;&nbsp;&nbsp;</span>
                          <ul data-v-4f1d1395="" class="wx-no-ul clearfix">
                            <li data-v-4f1d1395="" style="width: 10%;">头像</li>
                            <li data-v-4f1d1395="" style="width: 23%;">微信号</li>
                            <li data-v-4f1d1395="" style="width: 22%;">微信昵称</li>
                            <li data-v-4f1d1395="" style="width: 20%;">绑定对象</li>
                            <li data-v-4f1d1395="" style="width: 15%;">绑定状态</li>
                            <li data-v-4f1d1395="" style="width: 10%;">操作</li>
                          </ul>
                          <ul v-for="(item,index) in wxInfos" data-v-4f1d1395="" class="wx-no-ul-data clearfix">
                            <li data-v-4f1d1395="" style="width: 10%;"><img data-v-4f1d1395="" :src="item.small_url"
                                style="width: 36px; height: 36px; margin-top: 2px;"></li>
                            <li data-v-4f1d1395="" style="width: 23%;">[[item.wx_id]]</li>
                            <li data-v-4f1d1395="" style="width: 22%;">[[item.nickname]]</li>
                            <li data-v-4f1d1395="" style="width: 20%;">[[item.username]]</li>
                            <li data-v-4f1d1395="" style="width: 15%;">[[item.type]]</li>
                            <li data-v-4f1d1395="" class="lzp-operation-color" @click="jiebang(item)" style="width: 10%;">
                              解绑/绑定
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="el-scrollbar__bar is-horizontal">
                      <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                    </div>
                    <div class="el-scrollbar__bar is-vertical">
                      <div class="el-scrollbar__thumb" style="transform: translateY(88.1919%); height: 53.1373%;"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ant-modal-footer"><button type="button" class="ant-btn ant-btn-ghost ant-btn-lg"> <span>
                    取消
                  </span></button> <button type="button" class="ant-btn ant-btn-primary ant-btn-lg"> <span>
                    确定
                  </span></button></div>
            </div>
            <div tabindex="0" style="width: 0px; height: 0px; overflow: hidden;">
              sentinel
            </div>
          </div>
        </div>
      </div>
      <div data-v-4f1d1395="" v-show="model1 == 6" style="display:none">
        <div class="ant-modal-mask"></div>
        <div role="dialog" aria-labelledby="vDialogTitle13" tabindex="-1"
          class="ant-modal-wrap v-no-modal-footer v-no-modal-padding" style="transform-origin: 1493px 219px;">
          <div role="document" class="ant-modal" style="width: 1200px;">
            <div class="ant-modal-content"><button aria-label="Close" class="ant-modal-close" @click="model1 = 0"><span
                  class="ant-modal-close-x"></span></button>
              <div class="ant-modal-header">
                <div id="vDialogTitle13" class="ant-modal-title">微信</div>
              </div>
              <div class="ant-modal-body">
                <div data-v-4f1d1395="" class="v-content" style="height: 291px;">
                  <div data-v-4f1d1395="" class="el-scrollbar">
                    <div class="el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                      <div class="el-scrollbar__view">
                        <div data-v-4f1d1395="" class="modal-container"><span data-v-4f1d1395="" class="modal-span"
                            style="text-align: right;">添加&nbsp;&nbsp;&nbsp;</span> <input data-v-4f1d1395="" type="text"
                            placeholder="搜索微信号/微信昵称" autocomplete="off" @keyup.13="show($event)" v-model="allWxVal"
                            maxlength="50" class="modal-input ant-input"> <span data-v-4f1d1395=""
                            style="position: relative; left: -24px; cursor: pointer;"><i data-v-4f1d1395=""
                              class="anticon anticon-close"></i></span></div>
                        <div data-v-4f1d1395="" class="ul-container"
                          style="width: 100%; padding-left: 75px; padding-top: 15px; padding-right: 15px;">
                          <ul v-if="allWx.length>0" data-v-4f1d1395="" class="wx-no-ul clearfix">
                            <li data-v-4f1d1395="" style="width: 34%;">手机号</li>
                            <li data-v-4f1d1395="" style="width: 33%;">绑定对象</li>
                            <li data-v-4f1d1395="" style="width: 33%;">操作</li>
                          </ul>
                          <ul v-for="(item,index) in allWx" data-v-4f1d1395="" class="wx-no-ul-data clearfix">
                            <li data-v-4f1d1395="" style="width: 34%;">[[item.wxId]]</li>
                            <li data-v-4f1d1395="" style="width: 33%;">[[item.userName]]</li>
                            <li data-v-4f1d1395="" class="lzp-operation-color" style="width: 33%;">绑定</li>
                          </ul>
                        </div>
                        <div data-v-4f1d1395="" class="ul-container"
                          style="width: 100%; padding-left: 75px; padding-top: 15px; padding-right: 15px; position: relative; margin-top: 15px;">
                          <span data-v-4f1d1395=""
                            style="position: absolute; left: 24px; top: 15px;">已绑定&nbsp;&nbsp;&nbsp;</span>
                          <ul data-v-4f1d1395="" class="wx-no-ul clearfix">
                            <li data-v-4f1d1395="" style="width: 25%;">手机号</li>
                            <li data-v-4f1d1395="" style="width: 25%;">绑定对象</li>
                            <li data-v-4f1d1395="" style="width: 25%;">绑定状态</li>
                            <li data-v-4f1d1395="" style="width: 25%;">操作</li>
                          </ul>
                          <ul v-for="(item,index) in telInfos" data-v-4f1d1395="" class="wx-no-ul-data clearfix">
                            <li data-v-4f1d1395="" style="width: 25%;">[[item.wxId]]</li>
                            <li data-v-4f1d1395="" style="width: 25%;">[[item.username]]</li>
                            <li data-v-4f1d1395="" style="width: 25%;">[[item.status]]</li>
                            <li data-v-4f1d1395="" class="lzp-operation-color" style="width: 25%;">
                              解绑
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="el-scrollbar__bar is-horizontal">
                      <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                    </div>
                    <div class="el-scrollbar__bar is-vertical">
                      <div class="el-scrollbar__thumb" style="transform: translateY(88.1919%); height: 53.1373%;"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ant-modal-footer"><button type="button" class="ant-btn ant-btn-ghost ant-btn-lg"> <span>
                    取消
                  </span></button> <button type="button" class="ant-btn ant-btn-primary ant-btn-lg"> <span>
                    确定
                  </span></button></div>
            </div>
            <div tabindex="0" style="width: 0px; height: 0px; overflow: hidden;">
              sentinel
            </div>
          </div>
        </div>
      </div>
      <div data-v-4f1d1395="" v-show="model1 == 3" style="display:none">
        <div class="ant-modal-mask"></div>
        <div role="dialog" aria-labelledby="vDialogTitle46" tabindex="-1" class="ant-modal-wrap"
          style="transform-origin: 1529px 216px;">
          <div role="document" class="ant-modal" style="width: 520px;">
            <div class="ant-modal-content"><button @click="model1 = 0" aria-label="Close" class="ant-modal-close"><span
                  class="ant-modal-close-x"></span></button>
              <div class="ant-modal-header">
                <div id="vDialogTitle46" class="ant-modal-title">删除销售</div>
              </div>
              <div class="ant-modal-body">
                <div data-v-4f1d1395="" style="text-align: center; height: 120px; line-height: 120px;">
                  确认删除销售吗？
                </div>
              </div>
              <div class="ant-modal-footer"><button @click="model1 = 0" type="button"
                  class="ant-btn ant-btn-ghost ant-btn-lg"><span>
                    取消
                  </span></button> <button type="button" class="ant-btn ant-btn-primary ant-btn-lg"
                  @click="deleteGo()"><span>
                    确定
                  </span></button></div>
            </div>
            <div tabindex="0" style="width: 0px; height: 0px; overflow: hidden;">
              sentinel
            </div>
          </div>
        </div>
      </div>
            <div data-v-4f1d1395="" v-show="model1 == 7" style="display:none">
        <div class="ant-modal-mask"></div>
        <div role="dialog" aria-labelledby="vDialogTitle46" tabindex="-1" class="ant-modal-wrap"
          style="transform-origin: 1529px 216px;">
          <div role="document" class="ant-modal" style="width: 520px;">
            <div class="ant-modal-content"><button @click="model1 = 0" aria-label="Close" class="ant-modal-close"><span
                  class="ant-modal-close-x"></span></button>
              <div class="ant-modal-header">
                <div id="vDialogTitle46" class="ant-modal-title">删除部门</div>
              </div>
              <div class="ant-modal-body">
                <div data-v-4f1d1395="" style="text-align: center; height: 120px; line-height: 120px;">
                  确认删除部门吗？
                </div>
              </div>
              <div class="ant-modal-footer"><button @click="model1 = 0" type="button"
                  class="ant-btn ant-btn-ghost ant-btn-lg"><span>
                    取消
                  </span></button> <button type="button" class="ant-btn ant-btn-primary ant-btn-lg"
                  @click="removeSeGo()"><span>
                    确定
                  </span></button></div>
            </div>
            <div tabindex="0" style="width: 0px; height: 0px; overflow: hidden;">
              sentinel
            </div>
          </div>
        </div>
      </div>
      <div data-v-4f1d1395="" class="mn" style="display:none">
        <div class="ant-modal-mask"></div>
        <div role="dialog" aria-labelledby="vDialogTitle46" tabindex="-1" class="ant-modal-wrap"
          style="transform-origin: 1529px 216px;">
          <div role="document" class="ant-modal" style="width: 520px;">
            <div class="ant-modal-content"><button onclick="$('.mn').css('display','none')" aria-label="Close"
                class="ant-modal-close"><span class="ant-modal-close-x"></span></button>
              <div class="ant-modal-header">
                <div id="vDialogTitle46" class="ant-modal-title">删除销售</div>
              </div>
              <div class="ant-modal-body">
                <div data-v-4f1d1395="" style="text-align: center; height: 120px; line-height: 120px;">
                  确认删除销售吗？
                </div>
              </div>
              <div class="ant-modal-footer"><button onclick="$('.mn').css('display','none')" type="button"
                  class="ant-btn ant-btn-ghost ant-btn-lg"><span>
                    取消
                  </span></button> <button type="button" class="ant-btn ant-btn-primary ant-btn-lg"
                  @click="deleteGoo()"><span>
                    确定
                  </span></button></div>
            </div>
            <div tabindex="0" style="width: 0px; height: 0px; overflow: hidden;">
              sentinel
            </div>
          </div>
        </div>
      </div>
      <div class="addModel"  style="font-size:14px;display:none;position:absolute;left:0;top:0;width: 100%;height: 100%;background: rgb(210,210,210,0.5);z-index: 100000">
    <div style="overflow: auto;border:1px solid rgb(210,210,210);padding: 10px;position:absolute;left:20%;top:10%;width: 60%;height: 60%;background: white;z-index: 100000">
<table class="addTable" style="font-size: 14px;">
      <tr>
        <td>姓名</td>
        <td>手机号</td>
        <td>组别</td>
        <td>状态</td>
      </tr>
    </table>
    </div>
    <div style="text-align:center;padding: 10px;position:absolute;left:20%;top:70%;width: 60%;height: 40px;background: white;z-index: 3">
      <button class="submitAdd" @click="submitAdd" style="cursor:pointer;border:none;background:royalblue;color:white;padding:5px 10px">提交</button>
      <button class="" @click="submitqx" style="cursor:pointer;border:none;background:royalblue;color:white;padding:5px 10px">取消</button>
    </div>
  </div>
      <div data-v-4f1d1395="" class="mnn" style="display:none">
        <div class="ant-modal-mask"></div>
        <div role="dialog" aria-labelledby="vDialogTitle45" tabindex="-1" class="ant-modal-wrap"
          style="transform-origin: 640px 70px;">
          <div role="document" class="ant-modal" style="width: 520px;">
            <div class="ant-modal-content"><button aria-label="Close" onclick="$('.mnn').css('display','none')"
                class="ant-modal-close"><span class="ant-modal-close-x"></span></button>
              <div class="ant-modal-header">
                <div id="vDialogTitle45" class="ant-modal-title">编辑</div>
              </div>
              <div class="ant-modal-body">
                <div data-v-4f1d1395="" style="text-align: center;">
                  <div data-v-4f1d1395="" class="modal-container"><span data-v-4f1d1395="" class="modal-span">部门</span>
                    <div data-v-4f1d1395="" class="modal-input ant-select ant-select-enabled"
                      style="width: 232px; text-align: left;">
                      <select name="" id="" style="position: relative;
                      font-size: 14px;
                      display: inline-block;
                      width: 100%;display: inline-block;
    position: relative;
    width: 232px;
    height: 38px;
    line-height: 38px;">
                        <option value="1">1</option>
                      </select>
                    </div>

                  </div>
                </div>
              </div>
              <div class="ant-modal-footer"><button type="button" class="ant-btn ant-btn-ghost ant-btn-lg"
                  onclick="$('.mnn').css('display','none')"> <span>
                    取消
                  </span></button> <button type="button" class="ant-btn ant-btn-primary ant-btn-lg" @click="genggaisub">
                  <span>
                    确定
                  </span></button></div>
            </div>
            <div tabindex="0" style="width: 0px; height: 0px; overflow: hidden;">
              sentinel
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="el-tcl" style="display:none">
      <!-- style="display:none" -->

      <template>

        <el-transfer v-model="value2" :data="data2">
        </el-transfer>
      </template>
    </div>

  </div>

  <div class="ant-tooltip ant-tooltip-placement-lefttop"
    style="display:none;left: 1129px; top: 127px; position: absolute; display: none;">
    <div class="ant-tooltip-content">
      <div class="ant-tooltip-arrow"></div>
      <div class="ant-tooltip-inner"><span>
          <p style="font-size: 16px;">字段说明</p>
          <p style="line-height: 24px;">新增客户: 主动添加好友成功数+被加成为好友数</p>
          <p style="line-height: 24px;">主动申请：主动申请添加好友数，同一好友进行排重</p>
          <p style="line-height: 24px;">申请通过率：主动申请好友通过数/主动申请</p>
          <p style="line-height: 24px;">被加通过：设置了验证通过的+未设置验证被加为好友的，单向好友也算&nbsp;&nbsp;</p>
          <p style="line-height: 24px;">跟进率：新增客户中微信跟进数/新增客户</p>
          <p style="line-height: 24px;">有效沟通率：新增客户中微信有效沟通数/新增客户</p>
          <p style="line-height: 24px;">跟进客户-老：微信跟进的老客户数</p>
          <p style="line-height: 24px;">有效沟通-老：微信有效沟通的老客户数</p>
          <p style="line-height: 24px;">总有效沟通：微信有效沟通的新增客户加老客户数</p>
          <p style="line-height: 24px;">总通话数：新客户和老客户中，呼出接通和呼入接通的通话个数</p>
          <p style="line-height: 24px;">总时长：新客户和老客户中，呼出时长和呼入时长的总和</p>
          <p style="line-height: 24px;">总平均时长：新客户和老客户中，(通话时长总和)/(通话总个数)</p>
          <p style="line-height: 24px;">回复时间：微信回复客户信息的平均时间</p>
        </span></div>
    </div>

  </div>

</body>
<script>
	 $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
  var jdata = ""
  var wb; //读取完成的数据
  var rABS = false; //是否将文件读取为二进制字符串
 var zz = [];
  var jsonCon = [];
  //开始导入
  function importf(obj) {

    if (!obj.files) {
      return;
    }
    var f = obj.files[0];
    var reader = new FileReader();
    reader.onload = function (e) {
      console.log(e)
      var data = e.target.result;
      if (rABS) {
        wb = XLSX.read(btoa(fixdata(data)), { //手动转化
          type: 'base64'
        });
      } else {
        wb = XLSX.read(data, {
          type: 'binary'
        });
      }
      /**
       * wb.SheetNames[0]是获取Sheets中第一个Sheet的名字
       * wb.Sheets[Sheet名]获取第一个Sheet的数据
       */
      console.log(wb.Sheets[wb.SheetNames[0]])
      wb.Sheets[wb.SheetNames[0]].A1.w = "name"
      wb.Sheets[wb.SheetNames[0]].B1.w = "mobile"
      wb.Sheets[wb.SheetNames[0]].C1.w = "sector"
      var excelJson = XLSX.utils.sheet_to_json(wb.Sheets[wb.SheetNames[0]]);
      console.log(JSON.stringify(excelJson),excelJson,zz);
      // if()
      jsonCon = excelJson;
      for (let i = 0; i < jsonCon.length; i++) {
        jsonCon[i].status = "不正常"
        // console.log(jsonCon[i].sector)
        for (let k = 0; k < zz.length; k++) {
          if(jsonCon[i].sector == zz[k].name){
            jsonCon[i].sid = zz[k].sid
            jsonCon[i].tissue_str = zz[k].tissue_str+zz[k].sid+'>'
            jsonCon[i].status = "正常"
          }
        }
      }
      console.log(jsonCon)
      for (let i = 0; i < jsonCon.length; i++) {
        if(jsonCon[i].status == "不正常"){
          $('.submitAdd').attr('disabled',true)
          $('.submitAdd').css('background','rgb(210,210,210)')
          $('.addTable')[0].innerHTML += `
          <tr>
            <td>`+jsonCon[i].name+`</td>
            <td>`+jsonCon[i].mobile+`</td>
            <td>`+jsonCon[i].sector+`</td>
            <td>`+jsonCon[i].status+`</td>
          </tr>
        `
        }
      }
      for (let i = 0; i < jsonCon.length; i++) {
        if(jsonCon[i].status == "正常"){
          $('.addTable')[0].innerHTML += `
          <tr>
            <td>`+jsonCon[i].name+`</td>
            <td>`+jsonCon[i].mobile+`</td>
            <td>`+jsonCon[i].sector+`</td>
            <td>`+jsonCon[i].status+`</td>
          </tr>
        `
        }
      }
      $('.addModel').css('display','block')
    };
    if (rABS) {
      reader.readAsArrayBuffer(f);
    } else {
      reader.readAsBinaryString(f);
    }
  }
  //文件流转BinaryString
  function fixdata(data) {
    var o = "",
      l = 0,
      w = 10240;
    for (; l < data.byteLength / w; ++l) o += String.fromCharCode.apply(null, new Uint8Array(data.slice(l * w, l * w +
      w)));
    o += String.fromCharCode.apply(null, new Uint8Array(data.slice(l * w)));
    return o;
  }

  //文件流转BinaryString
  function fixdata(data) {
    var o = "",
      l = 0,
      w = 10240;
    for (; l < data.byteLength / w; ++l) o += String.fromCharCode.apply(null, new Uint8Array(data.slice(l * w, l * w +
      w)));
    o += String.fromCharCode.apply(null, new Uint8Array(data.slice(l * w)));
    return o;
  }
  new Vue({
    el: '#app',
    delimiters : ['[[', ']]'],
      data: function () {
      function generateData2() {
        const data = [];
        const cities = ['上海', '北京', '广州', '深圳', '南京', '西安', '成都'];
        cities.forEach((city, index) => {
          data.push({
            label: city,
            key: index
          });
        });
        return data;
      };
      return {
        data2: generateData2(),
        value2: [],
        wxInfos: [],
        telInfos: [],
        activeIndexb: 1,
        activeIndexa: 0,
        tableData4: [],
        saveItem:'',
        savecon:'',
        userList1: [],
        mid:'1',
        showZZ:[],
        sousuocon:'',
        pickerOptions2: {
          shortcuts: [{
            text: '最近一周',
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 7);
              picker.$emit('pick', [start, end]);
            }
          }, {
            text: '最近一个月',
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 30);
              picker.$emit('pick', [start, end]);
            }
          }, {
            text: '最近三个月',
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 90);
              picker.$emit('pick', [start, end]);
            }
          }]
        },
        pickerOptions: {
          shortcuts: [{
            text: '最近一周',
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 7);
              picker.$emit('pick', [start, end]);
            }
          }, {
            text: '最近一个月',
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 30);
              picker.$emit('pick', [start, end]);
            }
          }, {
            text: '最近三个月',
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 90);
              picker.$emit('pick', [start, end]);
            }
          }]
        },
        value6: '',
        addID:'',
        addcon:'',
        value7: [new Date(new Date().getTime() - 24 * 60 * 60 * 1000), new Date()],
        options: [{
          value: 'zhinan',
          label: '指南',
          children: [{
            value: 'shejiyuanze',
            label: '设计原则',
            children: [{
              value: 'yizhi',
              label: '一致'
            }, {
              value: 'fankui',
              label: '反馈'
            }, {
              value: 'xiaolv',
              label: '效率'
            }, {
              value: 'kekong',
              label: '可控'
            }]
          }, {
            value: 'daohang',
            label: '导航',
            children: [{
              value: 'cexiangdaohang',
              label: '侧向导航'
            }, {
              value: 'dingbudaohang',
              label: '顶部导航'
            }]
          }]
        }],
        data: [{
          id: 1,
          label: '一级 1',
          children: [{
            id: 4,
            label: '二级 1-1',
            children: [{
              id: 9,
              label: '三级 1-1-1'
            }, {
              id: 10,
              label: '三级 1-1-2'
            }]
          }]
        }, {
          id: 2,
          label: '一级 2',
          children: [{
            id: 5,
            label: '二级 2-1'
          }, {
            id: 6,
            label: '二级 2-2'
          }]
        }, {
          id: 3,
          label: '一级 3',
          children: [{
            id: 7,
            label: '二级 3-1'
          }, {
            id: 8,
            label: '二级 3-2'
          }]
        }],
        defaultProps: {
          children: 'children',
          label: 'label'
        },
        selectedOptions: [],
        xiugaiId:'',
        selectedOptions2: [],
        currentPage1: 1, //初始页
        pagesize1: 10, //    每页的数据
        userList: [],
        multipleSelection1: [],
        model1: 0,
        allWx: [],
        removeSectorID:'',
        allWxVal: '',
        xsID: '',
        xsName: '',
        bianjicon:'',
        options23: [{
          value: '黄金糕',
          label: '黄金糕'
        }, {
          value: '双皮奶',
          label: '双皮奶'
        }, {
          value: '蚵仔煎',
          label: '蚵仔煎'
        }, {
          value: '龙须面',
          label: '龙须面'
        }, {
          value: '北京烤鸭',
          label: '北京烤鸭'
        }],
        value: '',
        deletego: '',
      }
    },
    created() {
      // this.handleUserList()
      let _this = this
$.ajax({
        url: '{{Url("wechat/getUserSid")}}',
        type: 'get',
        data:{sid:'1'},
        dataType:'json',
        success: function (data) {
          jdata = data
//        for (let i = 0; i < jdata.length; i++) {
//          str = ""
//          for (let j = 0; j < jdata[i].wx_id.length; j++) {
//            str += (jdata[i].wxInfos[j].wx_id + '\n\n')
//          }
//          jdata.data.result[i]['WXID'] = str
//        }
          _this.userList1 = jdata
        },
        error: function () {

        }
      })
data = '{!!json_encode($tissues)!!}'
zz = JSON.parse(data);
data = JSON.parse(data)
console.log(data)
data.sort(function(a,b){
  return a.grade-b.grade
})
console.log(data)
_this.labelAll = data
var max = data[data.length-1].grade;
var option = []
for (let k = 0; k < max+1; k++) {
  option[k] = [];
  for (let j = 0; j < data.length; j++) {
    // data[j].children =[]
    data[j].label =data[j].name
    data[j].id =data[j].sid
    data[j].value =data[j]
    if(data[j].grade == k){
      option[k].push(data[j])
    }
  }
}
 
for (let k = max; k > 0; k--) {
  // option[k+1]
   for (let i = 0; i < option[k-1].length; i++) {
     option[k-1][i].children =[]
     for (let j = 0; j < option[k].length; j++) {
     if(option[k][j].fid == option[k-1][i].sid){
        option[k-1][i].children.push(option[k][j])
     }
   }
   if(option[k-1][i].children.length == 0){
     delete option[k-1][i].children
   }
  }
}
console.log(option)
_this.data = option[0]
_this.options = option[0]
    },
    mounted() {
      console.log($('.el-tree-node__label'))
      $('.el-transfer').append(
        `<p style="position:absolute;top:5%;right: 5%;"><span style="font-size:25px;display:inline-block;width:40px;height:40px;line-height:40px;text-align:center;cursor:pointer" onclick=" $('.el-tcl').css('display','none')">x</span></p>`
      )
      // this.userList = jdata.data['user']
    },
    methods: {
    	addname(){
          this.model1 = 9;
      },
      submitqx(){
    $('.addModel').css('display','none')
$('.addtable').html(`<tr>
        <td>姓名</td>
        <td>手机号</td>
        <td>组别</td>
        <td>状态</td>
      </tr>`)
  },
  submitAdd(){
    _this = this
    for (let i = 0; i < jsonCon.length; i++) {
        delete jsonCon[i].status
        delete jsonCon[i].sector
        delete jsonCon[i].__rowNum__
      }
      console.log(jsonCon)
      $.ajax({
      url: '{{Url("wechat/importUser")}}',
      type: 'post',
      data:{users:jsonCon},
      // dataType:'json',
      success: function (data) {
        if(data > 0){
          _this.$message({
            message: "编辑成功",
            type: 'warning'
          });
        }else{
          _this.$message({
            message: "编辑失败",
            type: 'warning'
          });
        }
        
      },
      error: function () {
        _this.$message({
            message: "编辑失败",
            type: 'warning'
          });
      }
    })
  },
      tianjia(){
        console.log(this.addcon,this.addID,this.selectedOptions)
        _this = this;
        console.log(_this.removeSectorID)
        $.ajax({
                  url: '{{Url("wechat/saveUser")}}',
                  type: 'post',
                  data:{
                    name:_this.addcon,
                    sip:_this.addID,
                    fid:_this.selectedOptions[_this.selectedOptions.length-1].sid,
                    tissure_str:_this.selectedOptions[_this.selectedOptions.length-1].tissue_str+_this.selectedOptions[_this.selectedOptions.length-1].sid+'>'
                    },
                  dataType:'json',
                  success: function (data) {
                    if(data == 1){
                      _this.$message({
                        message: "添加成功",
                        type: 'warning'
                      });
                    } else{
                      _this.$message({
                        message: "添加失败",
                        type: 'warning'
                      });
                    }
                   
                  },
                  error: function () {
                    _this.$message({
                        message: "添加失败",
                        type: 'warning'
                      });
                  }
                })
      },
      removeSeGo(){
      	_this = this;
      	console.log(_this.removeSectorID)
      	$.ajax({
					        url: '{{Url("wechat/deltTissue")}}',
					        type: 'post',
					        data:{
					        	sid:_this.removeSectorID,
					        	},
					        dataType:'json',
					        success: function (data) {
					        	if(data == 1){
					        		_this.$message({
						            message: "删除成功",
						            type: 'warning'
						          });
					        	}else if(data == 3){
					        		_this.$message({
						            message: "当前部门有在职人员 , 删除失败",
						            type: 'warning'
						          });
					        	}	else{
					        		_this.$message({
						            message: "删除失败",
						            type: 'warning'
						          });
					        	}
					         
					        },
					        error: function () {
										
					        }
					      })
      },
      xiugaimc(){
      	_this = this;
      	$.ajax({
					        url: '{{Url("wechat/editTissue")}}',
					        type: 'post',
					        data:{
					        	sid:_this.xiugaiId,
					        	name : $('input[dclass=removenm ]').val()
					        	},
					        dataType:'json',
					        success: function (data) {
					        	if(data == 1){
					        		_this.$message({
						            message: "修改成功",
						            type: 'warning'
						          });
					        	}else{
					        		_this.$message({
						            message: "修改失败",
						            type: 'warning'
						          });
					        	}
					         
					        },
					        error: function () {
										
					        }
					      })
      },
    	saveCon(){
    		console.log(this.savecon,this.saveItem);
    		_this = this
    		console.log(_this.saveItem.tissure_str)
    		    		$.ajax({
					        url: '{{Url("wechat/saveTissue")}}',
					        type: 'post',
					        data:{
					        	name:_this.savecon,
					        		fid:_this.saveItem.sid,
					        		grade:_this.saveItem.grade+1,
					        		tissue_str:_this.saveItem.tissue_str+_this.saveItem.sid+'>',
					        	},
					        dataType:'json',
					        success: function (data) {
					        	if(data == 1){
					        		_this.$message({
						            message: "新增成功",
						            type: 'warning'
						          });
					        	}else{
					        		_this.$message({
						            message: "新增失败",
						            type: 'warning'
						          });
					        	}
					         
					        },
					        error: function () {
										_this.$message({
						            message: "新增失败",
						            type: 'warning'
						          });
					        }
					      })
    	},
    	bianji(){
    		console.log(this.bianjicon,this.selectedOptions);
    		_this = this;
    		$.ajax({
					        url: '{{Url("wechat/editUser")}}',
					        type: 'post',
					        data:{
					        	name:_this.bianjicon,
					        		fid:_this.selectedOptions[_this.selectedOptions.length-1].sid,
					        		tissue_str:_this.selectedOptions[_this.selectedOptions.length-1].tissue_str+_this.selectedOptions[_this.selectedOptions.length-1].sid+'>',
					        		mid:_this.mid,
					        	},
					        dataType:'json',
					        success: function (data) {
					        	if(data == 1){
					        		_this.$message({
						            message: "编辑成功",
						            type: 'warning'
						          });
					        	}else{
					        		_this.$message({
						            message: "编辑失败",
						            type: 'warning'
						          });
					        	}
					         
					        },
					        error: function () {
					
					        }
					      })
    	},
    	sousuo(){
    		console.log(this.sousuocon)
    		    let _this = this
					$.ajax({
					        url: '{{Url("wechat/getUser")}}',
					        type: 'get',
					        data:{name:_this.sousuocon},
					        dataType:'json',
					        success: function (data) {
					           jdata = data
 						         _this.userList1 = jdata
					        },
					        error: function () {
					
					        }
					      })
    	},
      bangding(item){
        _this = this
        console.log(item)
        $.ajax({
              url: '{{Url('wechat/bind_wechat')}}',
              type: 'get',
              data: {
                mid: _this.mid,
                wx_id: item.wx_id
              },
              dataType:'json',
              success: function (data) {
                if(data.code ==  200){
                      $.ajax({
                        url:'{{Url('wechat/get_bind_wx_id')}}',
                        type:'get',
                        data:{mid:_this.mid},
                        dataType:'json',
                        success:function(data){
                          _this.wxInfos = data
                          _this.model1 = 1;
                        },
                        error:function(){

                        }
                      })
                    }
                _this.$message({
            message: data.message,
            type: 'warning'
          });
              },
              error: function () {

              }
            })
      },
      jiebang(item){
        _this = this
        console.log(item)
        if(item.type == "绑定中"){
    $.ajax({
                  url: '{{Url('wechat/unbind_wechat')}}',
                  type: 'get',
                  data: {
                    mid: _this.mid,
                    wx_id: item.wx_id
                  },
                  dataType:'json',
                  success: function (data) {
                    if(data.code ==  200){
                      $.ajax({
                        url:'{{Url('wechat/get_bind_wx_id')}}',
                        type:'get',
                        data:{mid:_this.mid},
                        dataType:'json',
                        success:function(data){
                          _this.wxInfos = data
                          _this.model1 = 1;
                        },
                        error:function(){

                        }
                      })
                    }
                    _this.$message({
                      message: data.message,
                      type: 'warning'
                    });
                  },
                  error: function () {

                  }
                })
        }else{
              $.ajax({
                  url: '{{Url('wechat/bind_wechat')}}',
                  type: 'get',
                  data: {
                    mid: _this.mid,
                    wx_id: item.wx_id
                  },
                  dataType:'json',
                  success: function (data) {
                    if(data.code ==  200){
                      $.ajax({
                        url:'{{Url('wechat/get_bind_wx_id')}}',
                        type:'get',
                        data:{mid:_this.mid},
                        dataType:'json',
                        success:function(data){
                          _this.wxInfos = data
                          _this.model1 = 1;
                        },
                        error:function(){

                        }
                      })
                    }
                    _this.$message({
                message: data.message,
                type: 'warning'
              });
                  },
                  error: function () {

                  }
                })
        }
        
      },
      hid(data,node) {
        console.log(data,data.id)
        str = `div[data-id =` + data.id + `]`;
        $('.setting-container').each(function (index, el) {
          if ($(el).attr('data-id') != data.id) {
            $(el).css('display', 'none')
          }
        })
        console.log(str)
        if ($(str)[0].style.display == "none") {
          $(str)[0].style.display = "block"
          console.log($(str)[0].style.display)
        } else {
          $(str)[0].style.display = "none"
        }
      },
      openTcl() {
        $('.el-tcl').css('display', 'block')
      },
      deleteGo() {
       _this = this
        console.log(data);
        sid = data
        $.ajax({
        url: '{{Url("wechat/deltUser")}}',
        type: 'post',
        data:{mid:_this.mid},
        dataType:'json',
        success: function (data) {
          if(data == 1){
					        		_this.$message({
						            message: "删除成功",
						            type: 'warning'
						          });
					        	}else{
					        		_this.$message({
						            message: "删除失败",
						            type: 'warning'
						          });
					        	}
					        	_this.model1 = 0
        },
        error: function () {

        }
      })
      },
      deleteGoo() {
        console.log(this.multipleSelection1)
      },
      handleNodeClick(data) {
      	_this = this
        console.log(data);
        sid = data
        $.ajax({
        url: '{{Url("wechat/getUserSid")}}',
        type: 'get',
        data:{sid},
        dataType:'json',
        success: function (data) {
          jdata = data
//        for (let i = 0; i < jdata.length; i++) {
//          str = ""
//          for (let j = 0; j < jdata[i].wx_id.length; j++) {
//            str += (jdata[i].wxInfos[j].wx_id + '\n\n')
//          }
//          jdata.data.result[i]['WXID'] = str
//        }
          _this.userList1 = jdata
        },
        error: function () {

        }
      })
      },
      handleChange(value, direction, movedKeys) {
        console.log(value, direction, movedKeys);
        $.ajax({
              url: 'app1.json',
              type: 'get',
              data: {
                belong: str,
                time1: $('.el-range-input')[0].value,
                time2: $('.el-range-input')[1].value
              },
              success: function (data) {
                console.log(data)
                jdata = data
                _this.init('allFollowCount')
                _this.userList = jdata.data['user']
                _this.tableData4 = jdata.data['date']
                console.log(jdata)
                $('.xiangying')[0].innerHTML = str
              },
              error: function () {

              }
            })
      },
      inquiry() {
        var arr = $('.el-cascader__label').text().split(''),
          str = "";
        for (let i = 0; i < arr.length; i++) {
          if (arr[i] != " " && arr[i] != "\n") {
            str += arr[i]
          }
        }
        // this.value7 = [new Date(new Date().getTime()-24*60*60*1000), new Date()];
        let _this = this
        console.log(this.activeIndexa)
        switch (this.activeIndexa) {
          case 0:
            $.ajax({
              url: 'app1.json',
              type: 'get',
              data: {
                belong: str,
                time1: $('.el-range-input')[0].value,
                time2: $('.el-range-input')[1].value
              },
              success: function (data) {
                console.log(data)
                jdata = data
                _this.init('allFollowCount')
                _this.userList = jdata.data['user']
                _this.tableData4 = jdata.data['date']
                console.log(jdata)
                $('.xiangying')[0].innerHTML = str
              },
              error: function () {

              }
            })
            break;
          case 1:
            $.ajax({
              url: 'app.json',
              type: 'get',
              data: {
                belong: str,
                time1: $('.el-range-input')[0].value,
                time2: $('.el-range-input')[1].value
              },
              success: function (data) {
                console.log(data)
                jdata = data
                _this.init('allFollowCount')
                _this.userList = jdata.data['user']
                _this.tableData4 = jdata.data['date']
                console.log(jdata)
                $('.xiangying')[0].innerHTML = str
              },
              error: function () {

              }
            })
            break;
          case 2:
            console.log($('.el-range-input'))
            $.ajax({
              url: 'app2.json',
              type: 'get',
              data: {
                belong: str,
                time1: $('.el-range-input')[0].value,
                time2: $('.el-range-input')[1].value
              },
              success: function (data) {
                console.log(data)
                jdata = data
                _this.init('allFollowCount')
                _this.userList = jdata.data['user']
                _this.tableData4 = jdata.data['date']
                console.log(jdata)
                $('.xiangying')[0].innerHTML = str
              },
              error: function () {

              }
            })
            break;
          case 3:
            console.log($('.el-range-input'))
            $.ajax({
              url: 'app2.json',
              type: 'get',
              data: {
                belong: str,
                time1: $('.el-range-input')[0].value,
                time2: $('.el-range-input')[1].value
              },
              success: function (data) {
                console.log(data)
                jdata = data
                _this.init('allFollowCount')
                _this.userList = jdata.data['user']
                _this.tableData4 = jdata.data['date']
                console.log(jdata)
                $('.xiangying')[0].innerHTML = str
              },
              error: function () {

              }
            })
            break;
          case 4:
            console.log($('.el-range-input')[2])
            $.ajax({
              url: 'app2.json',
              type: 'get',
              data: {
                belong: str,
                time1: $('.el-range-input')[0].value,
                time2: $('.el-range-input')[1].value,
                time3: $('.el-range-input')[2] == undefined ? '' : $('.el-range-input')[2].value,
                time4: $('.el-range-input')[3] == undefined ? '' : $('.el-range-input')[3].value
              },
              success: function (data) {
                console.log(data)
                jdata = data
                _this.init('allFollowCount')
                _this.userList = jdata.data['user']
                _this.tableData4 = jdata.data['date']
                console.log(jdata)
                $('.xiangying')[0].innerHTML = str
              },
              error: function () {

              }
            })
            break;
          default:
            break;
        }
      },
      handleClose(key, keyPath) {
        console.log(key, keyPath);
      },
      iconActive1(value) {
        $('.container1 .hidden2').css('display', 'none')
        $('.container1 .hidden1').css('display', 'block')
        this.titleCon(0)

      },
      iconActive2(value) {
        $('.container1 .hidden1').css('display', 'none')
        $('.container1 .hidden2').css('display', 'block')

        this.titleCon(1)
        //  console.log(this.tableData4)
        this.tableData4 = jdata.data['date']
      },
      iconActive3(value) {
        //  this.titleCon(2)
        att = $('.container1 .el-table')[0]
        res = this.tableData4;
        this.export(att, res)
      },
      overShow() {
        $('.ant-tooltip').css('display', 'block')
      },
      outHide() {
        $('.ant-tooltip').css('display', 'none')

      },
      init(dir) {
        var myChart = echarts.init(document.getElementById('myChart'));
        Xarr = [], Yarr = [];
        for (let i = 0; i < jdata.data['date'].length; i++) {
          var jh = jdata.data['date'][i][dir];
          Xarr.push(jdata.data['date'][i]['date'])
          Yarr.push(jh)
        }
        var max = Yarr[0];
        var min = Yarr[0];
        for (var i = 0; i < Yarr.length; i++) {

          if (Yarr[i] > max) {
            max = Yarr[i];
          } else
          if (Yarr[i] < min) {
            min = Yarr[i];
          }
        }
        option.xAxis.data = Xarr.sort()
        option.series[0].data = Yarr.reverse()
        //  option.yAxis.max = Yarr.sort()[0]
        option.yAxis.max = max
        myChart.setOption(option);
      },
      exportt() {
        att = $('.el-table__fixed table')
        // res = this.userList;
        str = "";
        console.log(att[0]);
        stra = ""
        $(att[0].querySelectorAll('tr')[0].querySelectorAll('th')).each(function (
          index, el) {
          if (index != 0 && index != 1 && index != 5 && index != 9) {
            stra += $(el)[0].querySelectorAll('div')[0].innerHTML
            stra += ','
          } else if (index == 1) {
            stra += $(el)[0].querySelectorAll('div')[0].innerHTML
            stra += ','
          }
        })
        str += stra + '\r\n';
        // str=" ,呼出,,,呼入,,,呼出+呼入,,,时长"+'\r\n'+"销售单元,总数,接通数,接通率,总数,接通数,接通率,总数,接通数,接通率,呼出,呼出平均,呼入,呼入平均,总时长,总平均"+'\r\n'
        for (let k = 0; k < att[1].querySelectorAll('tr').length; k++) {

          stra = ""
          console.log(att[1].querySelectorAll('tr')[k].querySelectorAll('td'))
          $(att[1].querySelectorAll('tr')[k].querySelectorAll('td')).each(function (
            index, el) {
            if (index != 0 && index != 4 && index != 5) {
              stra += $(el)[0].querySelectorAll('div')[0].innerHTML
              stra += ','
            } else if (index == 4) {
              // console.log($(el)[0].querySelectorAll('div')[0].innerHTML.split('↵↵'))
              stra += $(el)[0].querySelectorAll('div')[0].innerHTML.replace(',', '/')
              stra += ','
            }

          })
          str += stra + '\r\n';
          // const element = array[k];

        }
        console.log(str)
        var fileName = "MyReport_";
        fileName += "Download".replace(/ /g, "_");
         var uri = 'data:text/csv;charset=utf-8,\uFEFF' + encodeURI(str);
        var link = document.createElement("a");
        link.href = uri;
        link.style = "visibility:hidden";
        link.download = fileName + ".CSV";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
      },
      selectCon(num, name) {
        _this = this
        $('.container1 .condition-select span').each(function (index, el) {
          $(el).removeClass('condition-select-active')
          if (index == num) {
            $(el).addClass('condition-select-active')
            _this.init(name)
          }
        })
      },
      titleCon(num) {
        $('.container1 .title-icon span').each(function (index, el) {
          $(el).removeClass('title-icon-active')
          if (index == num) {
            $(el).addClass('title-icon-active')
          }
        })
      },
      getNowFormatDate(date) {
        var seperator1 = "-";
        var seperator2 = ":";
        var month = date.getMonth() + 1;
        var strDate = date.getDate();
        if (month >= 1 && month <= 9) {
          month = "0" + month;
        }
        if (strDate >= 0 && strDate <= 9) {
          strDate = "0" + strDate;
        }
        var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate;
        return currentdate;
      },
      coMtitleCon(num) {
        $('.common-title span').each(function (index, el) {
          $(el).removeClass('active')
          if (index == num) {
            $(el).addClass('active')
          }
        })
        this.activeIndexa = num
        this.value7 = [new Date(new Date().getTime() - 24 * 60 * 60 * 1000), new Date()];
        $('.el-range-input')[0].value = this.getNowFormatDate(new Date(new Date().getTime() - 24 * 60 * 60 * 1000))
        $('.el-range-input')[1].value = this.getNowFormatDate(new Date())
        this.inquiry()
      },
      tablexq(data) {
        console.log(data)
        this.model1 = 2
        this.xsID = data.sales_id
        this.mid = data.mid
//      this.xsName = data.username
				this.bianjicon = data.name
      },
      genggaibm() {
        this.model1 = 4
      },
      genggaisub() {
        console.log(this.value)
      },
      addbm(data){
        console.log(data);
        this.saveItem = data;
        this.model1 = 4;
      },
      removename(data){
        console.log(data);
        this.xiugaiId = data.sid
        $('input[dclass=removenm ]').val(data.label)
        this.model1 = 5;
      },
      removesector(data){
        console.log(data.sid);
        this.removeSectorID = data.sid
        // $('input[dclass=removenm ]').val(data.label)
        this.model1 = 7;
      },
      show(ev) {
        allWxVal = this.allWxVal
        _this = this
        $.ajax({
          url: '{{Url('wechat/get_wechat_bynickname')}}',
          type: 'get',
          data: {
            name:allWxVal
          },
          dataType:'json',
          success: function (data) {
            console.log(data)
            _this.allWx = data
          },
          error: function () {

          }
        })
      },
      tablexq1(data) {
        console.log(data)
        this.mid = data.mid
        _this = this
        $.ajax({
          url:'{{Url('wechat/get_bind_wx_id')}}',
          type:'get',
          data:{mid:_this.mid},
          dataType:'json',
          success:function(data){
            _this.wxInfos = data
            _this.model1 = 1;
          },
          error:function(){

          }
        })
        
        // for (let i = 0; i < this.wxInfos.length; i++) {
        //   this.wxInfos[i]['username'] = data.username
        // }
        // console.log(this.wxInfos)
        
      },
      tablexqtel(data) {
        console.log(data)
        this.telInfos = data.wxInfos
        for (let i = 0; i < this.telInfos.length; i++) {
          this.telInfos[i]['username'] = data.username
        }
        console.log(this.telInfos)
        this.model1 = 6;
      },
      tablexq2(data) {
        console.log(data)
        this.model1 = 3;
        this.deletego = data.id
      },
      export (att, res) {
        str = "";
        console.log(att.querySelectorAll('tr')[0]);
        for (let k = 0; k < res.length + 1; k++) {
          if (k == 0) {
            stra = ""
            $(att.querySelectorAll('tr')[k].querySelectorAll('th')).each(function (
              index, el) {
              if ($(el).attr('class') != "gutter") {
                console.log($(el)[0].querySelectorAll('div')[0].innerText)
                stra += $(el)[0].querySelectorAll('div')[0].innerText
                stra += ','
              }
            })
            str += stra + '\r\n';
          } else {
            stra = ""
            $(att.querySelectorAll('tr')[k].querySelectorAll('td')).each(function (
              index, el) {
              stra += $(el)[0].querySelectorAll('div')[0].innerText
              stra += ','
            })
            str += stra + '\r\n';
          }
          // const element = array[k];

        }
        console.log(str)
        var fileName = "MyReport_";
        fileName += "Download".replace(/ /g, "_");
        var uri = 'data:text/csv;charset=utf-8,\uFEFF' + encodeURI(str);
        var link = document.createElement("a");
        link.href = uri;
        link.style = "visibility:hidden";
        link.download = fileName + ".CSV";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
      },
      handleSizeChange: function (size) {
        this.pagesize1 = size;
        console.log(this.pagesize1) //每页下拉显示数据
      },
      toggleSelection(rows) {
        if (rows) {
          rows.forEach(row => {
            this.$refs.multipleTable.toggleRowSelection(row);
          });
        } else {
          this.$refs.multipleTable.clearSelection();
        }
      },
      handleSelectionChange(val) {

        this.multipleSelection1 = val;
        console.log(this.multipleSelection1.length)
        $('.sPan').text(this.multipleSelection1.length)
        if (this.multipleSelection1.length > 0) {
          $('.genggai').css('display', 'block')
        } else {
          $('.genggai').css('display', 'none')
        }
        let ids = []
        this.multipleSelection1.map((item) => {
          ids.push(item.key)
        })
        this.selectedIDs = ids
        console.log('多选', this.selectedIDs)
      },
      handleCurrentChange1: function (currentPage) {
        this.currentPage1 = currentPage;
        console.log(this.currentPage1) //点击第几页
      }
    }
  })
</script>

</html>