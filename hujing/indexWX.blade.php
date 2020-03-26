<html>

<head>
  <meta name="renderer" content="webkit|ie-comp|ie-stand">
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

  <script src="{{asset('wechat/js/index.js')}}"></script>
  <style type="text/css">
    .ant-calendar .ant-calendar-year-panel[data-v-73e88992],
    .ant-calendar .ant-calendar-month-panel[data-v-73e88992] {
      top: 34px;
    }
    .el-tcl{
      position: fixed;
    overflow: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1000;
    background: rgba(55,55,55,.6);
    }
    .el-transfer {
    font-size: 14px;
    width: 900px;
    margin: 5% auto;
    background: white;
    padding:100px;
    position: relative;
}
.el-transfer-panel{
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
    .el-scrollbar__wrap {
    overflow: hidden;
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
              <div class="el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                <div class="el-scrollbar__view">
                  <li data-v-2713df1d="" class="v-li"><span data-v-2713df1d="" style="margin-right: 5px;"><span
                        data-v-2713df1d="" style=""><img data-v-2713df1d="" src="{{asset('wechat/insight.png')}}" alt="跟进洞察"
                          class="v-icon" style=""> <img data-v-2713df1d="" src="{{asset('wechat/insight1.png')}}" alt="跟进洞察"
                          class="v-icon" style="display: none;"></span> <img data-v-2713df1d="" src="{{asset('wechat/insight.png')}}"
                        alt="跟进洞察" class="v-icon" style="display: none;"></span> <span data-v-2713df1d=""
                      class="nav-text nav-text1">
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
                          style="display: none;"> <img data-v-2713df1d="" src="{{asset('wechat/sale1.png')}}" alt="销售用户"
                          class="v-icon"></span> <img data-v-2713df1d="" src="{{asset('wechat/sale.png')}}" alt="销售用户" class="v-icon"
                        style="display: none;"></span> <span data-v-2713df1d="" class="nav-text">
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
          <!---->
        </div>
        <div data-v-2713df1d="" class="ant-layout-content" style="padding: 10px; overflow: auto; height: 100%;">
          <div data-v-417bc76c="" data-v-2713df1d="" class="v-container bg-color chart-page">
            <div data-v-417bc76c="" class="header v-home">
              <div data-v-417bc76c="" class="common-title"><span data-v-417bc76c="" class="content-option active"
                  @click="coMtitleCon(0)">概览</span>
                <span data-v-417bc76c="" class="content-option" @click="coMtitleCon(1)">新客户</span>
                <span data-v-417bc76c="" class="content-option" @click="coMtitleCon(2)">老客户</span>
                <span data-v-417bc76c="" class="content-option" @click="coMtitleCon(3)">总体</span>
                <span data-v-417bc76c="" class="content-option" @click="coMtitleCon(4)">留存</span>
                <!---->
              </div>
            </div>
 <div data-v-417bc76c="" v-if="activeIndexa == 0" class="v-container container1">
    <div data-v-6e367a74="" data-v-417bc76c="" class="v-container bg-color chart-page1">
      <div data-v-6e367a74="" class="header v-home">
        <div data-v-6e367a74="" class="time time-panel clearfix">
          <template>
            <div class="block" style="display:inline-block">
              <el-date-picker v-model="value7" type="daterange" align="right" unlink-panels
                start-placeholder="开始日期" end-placeholder="结束日期" :picker-options="pickerOptions2" @keyup.13="clickInquiry">
              </el-date-picker>
            </div>
          </template>
          <div class="block" style="float: right;">
              <el-cascader :options="options"  ref="judh" placeholder="组织架构" change-on-select v-model="selectedOptions" @change="optclick(selectedOptions)">
                </el-cascader>
                <el-cascader :options="options3" ref="judh" placeholder="人名" change-on-select v-model="selectedOptions2">
                  </el-cascader>
            <button style="    background: #4394f7;
                  color: #fff;border:none ;  height: 40px;padding:0 20px;cursor:pointer;border-radius :3px;"
              @click="clickInquiry">查询</button>
          </div>
        </div>
      </div>
      <div data-v-6e367a74="" class="el-scrollbar">
        <div class="el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
          <div class="el-scrollbar__view">
            <div data-v-6e367a74="" style="height: 100%;">
              <div data-v-6e367a74="" class="v-content"
                style="margin-bottom: 5px; position: relative; overflow: visible;">
                <div data-v-6e367a74="" style="margin-bottom: 10px;">
                  趋势<span data-v-6e367a74=""
                    style="color: white; position: absolute; left: 10px; z-index: -999;">false</span>
                  <div data-v-6e367a74="" class="title-icon"><span data-v-6e367a74=""
                      class="title-icon-active" @click="iconActive1"><i data-v-6e367a74=""
                        class="anticon anticon-line-chart"></i></span> <span data-v-6e367a74="" class=""
                      @click="iconActive2"><i data-v-6e367a74="" aria-hidden="true"
                        class="fa fa-table"></i></span> <span data-v-6e367a74="" @click="iconActive3"><i
                        data-v-6e367a74="" class="anticon anticon-upload"></i></span>
                    <span data-v-6e367a74="" @mouseover="overShow" @mouseout="outHide"><i data-v-6e367a74=""
                        class="anticon anticon-question-circle-o"></i></span></div>
                </div>
                <div data-v-6e367a74="" class="condition-select hidden1">
                  <span data-v-6e367a74="" class="condition-select-active"
                    @click="selectCon(0,'newCustomer','个数（个）')">新增客户</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(1,'applicate','个数（个）')">主动申请</span>
                  <span data-v-6e367a74="" class=""
                    @click="selectCon(2,'applicatePassed','%')">申请通过率</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(3,'applicatedPassed','个数（个）')">被加通过</span>
                  <span data-v-6e367a74="" class=""
                    @click="selectCon(4,'followRate','%')">跟进率</span>
                  <span data-v-6e367a74="" class=""
                    @click="selectCon(5,'CommunicateRate','%')">有效沟通率</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(6,'oldCustomer','个数（个）')">跟进客户-老</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(7,'communicateOld','个数（个）')">有效沟通-老</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(8,'communicate1','个数（个）')">总有效沟通</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(9,'talks','个数（个）')">总通话数</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(10,'duration','时长（s）')">总时长</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(11,'averDuration','时长（s）')">总平均时长</span>
                  <span data-v-6e367a74="" class=""
                    @click="selectCon(12,'responseTime','时长（s）')">回复时间</span></div>
                <div data-v-6e367a74="" class="hidden1" id="myChart" _echarts_instance_="ec_1556179465759"
                  style="border-top: 1px solid rgb(223, 223, 225); padding-top: 6px; width: 100%; height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;">
                  <div
                    style="position: relative; overflow: hidden; width: 1360px; height: 293px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                    <canvas data-zr-dom-id="zr_0" width="1360" height="293"
                      style="position: absolute; left: 0px; top: 0px; width: 1360px; height: 293px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                  </div>
                  <div
                    style="position: absolute; display: none; border-style: solid; white-space: nowrap; z-index: 9999999; transition: left 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s, top 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgba(50, 50, 50, 0.7); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); font: 14px; padding: 5px; left: 549px; top: 91px;">
                    2019-04-06<br><span
                      style="display:inline-block;margin-right:5px;border-radius:10px;width:10px;height:10px;background-color:#c23531;"></span>新增客户:
                    0</div>
                </div>
                <div class="hidden2" style="font: size 12px;display: none">
                  <template>
                    <el-table :data="tableData4"  border style="width: 100%" max-height="250">
                      <el-table-column fixed prop="date_time" label="日期" width="128">
                      </el-table-column>
                      <el-table-column prop="newCustomer" label="新增客户" width="80">
                      </el-table-column>
                      <el-table-column prop="applicate" label="主动申请" width="80">
                      </el-table-column>
                      <el-table-column prop="applicatePassed" label="申请通过率" width="90">
                      </el-table-column>
                      <el-table-column prop="applicatedPassed" label="被加通过" width="80">
                      </el-table-column>
                      <el-table-column prop="followRate" label="跟进率" width="80">
                      </el-table-column>
                      <el-table-column prop="CommunicateRate" label="有效沟通率" width="90">
                      </el-table-column>
                      <el-table-column prop="oldCustomer" label="跟进客户-老" width="90">
                      </el-table-column>
                      <el-table-column prop="communicateOld" label="有效沟通-老" width="90">
                      </el-table-column>
                      <el-table-column prop="communicate1" label="总有效沟通" width="90">
                      </el-table-column>
                      <el-table-column prop="talks" label="总通话数" width="80">
                      </el-table-column>
                      <el-table-column prop="duration" label="总时长" width="80">
                      </el-table-column>
                      <el-table-column prop="averDuration" label="总平均时长" width="120">
                      </el-table-column>
                      <el-table-column prop="responseTime" label="回复时间" width="180">
                      </el-table-column>
                    </el-table>
                  </template>

                </div>
              </div>
              <div data-v-6e367a74="" id="viewBox1" class="v-content" style="min-height: 310px;">
                <div data-v-6e367a74="">
                  分析
                  <div data-v-6e367a74="" class="title-icon"><span data-v-6e367a74="" @click="exportt"><i
                        data-v-6e367a74="" class="anticon anticon-upload"></i></span></div>
                </div>
                <div class="xiangying">
                </div>
                <div data-v-6e367a74="" class="ant-breadcrumb" style="margin-bottom: 10px; margin-top: 10px;">
                  <template>
                    <el-table :data="userList.slice((currentPage-1)*pagesize,currentPage*pagesize)" border
                      style="width: 100%" max-height="250">
                      <el-table-column fixed prop="username" label="销售单元" width="128">
                      </el-table-column>
                      <el-table-column prop="newCustomer" label="新增客户" width="80">
                      </el-table-column>
                      <el-table-column prop="applicate" label="主动申请" width="80">
                      </el-table-column>
                      <el-table-column prop="applicatePassed" label="申请通过率" width="90">
                      </el-table-column>
                      <el-table-column prop="applicatedPassed" label="被加通过" width="80">
                      </el-table-column>
                      <el-table-column prop="followRate" label="跟进率" width="80">
                      </el-table-column>
                      <el-table-column prop="CommunicateRate" label="有效沟通率" width="90">
                      </el-table-column>
                      <el-table-column prop="oldCustomer" label="跟进客户-老" width="90">
                      </el-table-column>
                      <el-table-column prop="communicateOld" label="有效沟通-老" width="90">
                      </el-table-column>
                      <el-table-column prop="communicate1" label="总有效沟通" width="90">
                      </el-table-column>
                      <el-table-column prop="talks" label="总通话数" width="80">
                      </el-table-column>
                      <el-table-column prop="duration" label="总时长" width="80">
                      </el-table-column>
                      <el-table-column prop="averDuration" label="总平均时长" width="120">
                      </el-table-column>
                      <el-table-column prop="responseTime" label="回复时间" width="180">
                      </el-table-column>
                    </el-table>
                    <el-pagination @size-change="handleSizeChange" @current-change="handleCurrentChange"
                      :current-page="currentPage" :page-sizes="[5, 10, 20, 40]" :page-size="pagesize"
                      layout="total, sizes, prev, pager, next, jumper" :total="userList.length">
                    </el-pagination>
                  </template>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="el-scrollbar__bar is-horizontal">
          <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
        </div>
        <div class="el-scrollbar__bar is-vertical">
          <div class="el-scrollbar__thumb" style="height: 87.7241%; transform: translateY(0%);"></div>
        </div>
      </div>
    </div>
  </div>
  <div data-v-417bc76c="" v-if="activeIndexa == 1" class="v-container container1">
    <div data-v-6e367a74="" data-v-417bc76c="" class="v-container bg-color chart-page1">
      <div data-v-6e367a74="" class="header v-home">
        <div data-v-6e367a74="" class="time time-panel clearfix">
          <template>
            <div class="block" style="display:inline-block">
              <el-date-picker v-model="value7" type="daterange" align="right" unlink-panels
                start-placeholder="开始日期" @keyup.13="clickInquiry" end-placeholder="结束日期" :picker-options="pickerOptions2">
              </el-date-picker>
            </div>
          </template>
          <div class="block" style="float: right;">
              <el-cascader :options="options" ref="judh" placeholder="组织架构" change-on-select v-model="selectedOptions" @change="optclick(selectedOptions)">
                </el-cascader>
                <el-cascader :options="options3" ref="judh" placeholder="人名" change-on-select v-model="selectedOptions2">
                  </el-cascader>
            <button
              style="    background: #4394f7;
                    color: #fff;border:none ;  height: 40px;padding:0 20px;cursor:pointer;border-radius :3px;"
              @click="clickInquiry">查询</button>
          </div>
        </div>
      </div>
      <div data-v-6e367a74="" class="el-scrollbar">
        <div class="el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
          <div class="el-scrollbar__view">
            <div data-v-6e367a74="" style="height: 100%;">
              <div data-v-6e367a74="" class="v-content"
                style="margin-bottom: 5px; position: relative; overflow: visible;">
                <div data-v-6e367a74="" style="margin-bottom: 10px;">
                  趋势<span data-v-6e367a74=""
                    style="color: white; position: absolute; left: 10px; z-index: -999;">false</span>
                  <div data-v-6e367a74="" class="title-icon"><span data-v-6e367a74=""
                      class="title-icon-active" @click="iconActive1"><i data-v-6e367a74=""
                        class="anticon anticon-line-chart"></i></span> <span data-v-6e367a74="" class=""
                      @click="iconActive2"><i data-v-6e367a74="" aria-hidden="true"
                        class="fa fa-table"></i></span> <span data-v-6e367a74="" @click="iconActive3"><i
                        data-v-6e367a74="" class="anticon anticon-upload"></i></span>
                    <span data-v-6e367a74="" @mouseover="overShow" @mouseout="outHide"><i data-v-6e367a74=""
                        class="anticon anticon-question-circle-o"></i></span></div>
                </div>
                <div data-v-6e367a74="" class="condition-select hidden1">
                    <span data-v-6e367a74="" class="condition-select-active"
                    @click="selectCon(0,'newCustomer','个数（个）')">新增客户</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(1,'applicate1','个数（个）')">主动申请</span>
                  <span data-v-6e367a74="" class=""
                    @click="selectCon(2,'applicatePassed1','个数（个）')">申请通过</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(3,'applicatePassedRate')">申请通过率</span>
                  <span data-v-6e367a74="" class=""
                    @click="selectCon(4,'applicatedPassed','个数（个）')">被加通过</span>
                  <span data-v-6e367a74="" class=""
                    @click="selectCon(5,'applicated','个数（个）')">被加申请</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(6,'applicatedPassedRate')">被加通过率</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(7,'reApplicated','个数（个）')">被加回加</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(8,'reApplicatedRate')">被加回加率</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(9,'followCustomer1','个数（个）')">跟进客户</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(10,'followRate')">跟进率</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(11,'communicate1','个数（个）')">有效沟通</span>
                  <span data-v-6e367a74="" class=""
                    @click="selectCon(12,'CommunicateRate')">有效沟通率</span></div>
                <div data-v-6e367a74="" class="hidden1" id="myChart" _echarts_instance_="ec_1556179465759"
                  style="border-top: 1px solid rgb(223, 223, 225); padding-top: 6px; width: 100%; height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;">
                  <div
                    style="position: relative; overflow: hidden; width: 1360px; height: 293px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                    <canvas data-zr-dom-id="zr_0" width="1360" height="293"
                      style="position: absolute; left: 0px; top: 0px; width: 1360px; height: 293px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                  </div>
                  <div
                    style="position: absolute; display: none; border-style: solid; white-space: nowrap; z-index: 9999999; transition: left 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s, top 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgba(50, 50, 50, 0.7); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); font: 14px/21px &quot;Microsoft YaHei&quot;; padding: 5px; left: 549px; top: 91px;">
                    2019-04-06<br><span
                      style="display:inline-block;margin-right:5px;border-radius:10px;width:10px;height:10px;background-color:#c23531;"></span>新增客户:
                    0</div>
                </div>
                <div class="hidden2" style="font: size 12px;display: none">
                  <template>
                    <el-table :data="tableData4" border style="width: 100%" max-height="250">
                      <el-table-column fixed prop="date_time" label="日期" width="128">
                      </el-table-column>
                      <el-table-column prop="newCustomer" label="新增客户" width="80">
                        </el-table-column>
                        <el-table-column prop="applicate1" label="主动申请" width="80">
                          </el-table-column>
                        <el-table-column prop="applicatePassed1" label="申请通过" width="80">
                        </el-table-column>
                        <el-table-column prop="applicatePassedRate" label="申请通过率" width="110">
                        </el-table-column>
                        <el-table-column prop="applicatedPassed" label="被加通过" width="80">
                        </el-table-column>
                        <el-table-column prop="applicated" label="被加申请" width="80">
                        </el-table-column>
                        <el-table-column prop="applicatedPassedRate" label="被加通过率" width="110">
                        </el-table-column>
                        <el-table-column prop="reApplicated" label="被加回加" width="80">
                        </el-table-column>
                        <el-table-column prop="reApplicatedRate" label="被加回加率" width="110">
                        </el-table-column>
                        <el-table-column prop="followCustomer1" label="跟进客户" width="110">
                        </el-table-column>
                        <el-table-column prop="followRate" label="跟进率" width="80">
                        </el-table-column>
                        <el-table-column prop="communicate1" label="有效沟通" width="80">
                        </el-table-column>
                        <el-table-column prop="CommunicateRate" label="有效沟通率" width="110">
                        </el-table-column>
                    </el-table>
                  </template>

                </div>
              </div>
              <div data-v-6e367a74="" id="viewBox1" class="v-content" style="min-height: 310px;">
                <div data-v-6e367a74="">
                  分析
                  <div data-v-6e367a74="" class="title-icon"><span data-v-6e367a74="" @click="exportt"><i
                        data-v-6e367a74="" class="anticon anticon-upload"></i></span></div>
                </div>
                <div class="xiangying">
                </div>
                <div data-v-6e367a74="" class="ant-breadcrumb" style="margin-bottom: 10px; margin-top: 10px;">
                  <template>
                    <el-table :data="userList.slice((currentPage-1)*pagesize,currentPage*pagesize)" border
                      style="width: 100%" max-height="250">
                      <el-table-column fixed prop="username" label="销售单元" width="128">
                        </el-table-column>
                        <el-table-column prop="newCustomer" label="新增客户" width="80">
                        </el-table-column>
                        <el-table-column prop="applicate" label="主动申请" width="80">
                          </el-table-column>
                        <el-table-column prop="applicatePassed1" label="申请通过" width="80">
                        </el-table-column>
                        <el-table-column prop="applicatePassedRate" label="申请通过率" width="110">
                        </el-table-column>
                        <el-table-column prop="applicatedPassed" label="被加通过" width="80">
                        </el-table-column>
                        <el-table-column prop="applicated" label="被加申请" width="80">
                        </el-table-column>
                        <el-table-column prop="applicatedPassedRate" label="被加通过率" width="110">
                        </el-table-column>
                        <el-table-column prop="reApplicated" label="被加回加" width="80">
                        </el-table-column>
                        <el-table-column prop="reApplicatedRate" label="被加回加率" width="110">
                        </el-table-column>
                        <el-table-column prop="followCustomer1" label="跟进客户" width="110">
                        </el-table-column>
                        <el-table-column prop="followRate" label="跟进率" width="80">
                        </el-table-column>
                        <el-table-column prop="communicate1" label="有效沟通" width="80">
                        </el-table-column>
                        <el-table-column prop="CommunicateRate" label="有效沟通率" width="110">
                        </el-table-column>
                    </el-table>
                    <el-pagination @size-change="handleSizeChange" @current-change="handleCurrentChange"
                      :current-page="currentPage" :page-sizes="[5, 10, 20, 40]" :page-size="pagesize"
                      layout="total, sizes, prev, pager, next, jumper" :total="userList.length">
                    </el-pagination>
                  </template>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="el-scrollbar__bar is-horizontal">
          <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
        </div>
        <div class="el-scrollbar__bar is-vertical">
          <div class="el-scrollbar__thumb" style="height: 87.7241%; transform: translateY(0%);"></div>
        </div>
      </div>
    </div>
  </div>
  <div data-v-417bc76c="" v-if="activeIndexa == 2" class="v-container container1">
      <div data-v-6e367a74="" data-v-417bc76c="" class="v-container bg-color chart-page1">
        <div data-v-6e367a74="" class="header v-home">
          <div data-v-6e367a74="" class="time time-panel clearfix">
            <template>
              <div class="block" style="display:inline-block">
                <el-date-picker v-model="value7" type="daterange" align="right" unlink-panels
                  start-placeholder="开始日期" @keyup.13="clickInquiry" end-placeholder="结束日期" :picker-options="pickerOptions2">
                </el-date-picker>
              </div>
            </template>
            <div class="block" style="float: right;">
                <el-cascader :options="options" ref="judh" placeholder="组织架构" change-on-select v-model="selectedOptions" @change="optclick(selectedOptions)">
                  </el-cascader>
                  <el-cascader :options="options3" ref="judh" placeholder="人名" change-on-select v-model="selectedOptions2">
                    </el-cascader>
              <button
                style="    background: #4394f7;
                      color: #fff;border:none ;  height: 40px;padding:0 20px;cursor:pointer;border-radius :3px;"
                @click="clickInquiry">查询</button>
            </div>
          </div>
        </div>
        <div data-v-6e367a74="" class="el-scrollbar">
          <div class="el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
            <div class="el-scrollbar__view">
              <div data-v-6e367a74="" style="height: 100%;">
                <div data-v-6e367a74="" class="v-content"
                  style="margin-bottom: 5px; position: relative; overflow: visible;">
                  <div data-v-6e367a74="" style="margin-bottom: 10px;">
                    趋势<span data-v-6e367a74=""
                      style="color: white; position: absolute; left: 10px; z-index: -999;">false</span>
                    <div data-v-6e367a74="" class="title-icon"><span data-v-6e367a74=""
                        class="title-icon-active" @click="iconActive1"><i data-v-6e367a74=""
                          class="anticon anticon-line-chart"></i></span> <span data-v-6e367a74="" class=""
                        @click="iconActive2"><i data-v-6e367a74="" aria-hidden="true"
                          class="fa fa-table"></i></span> <span data-v-6e367a74="" @click="iconActive3"><i
                          data-v-6e367a74="" class="anticon anticon-upload"></i></span>
                      <span data-v-6e367a74="" @mouseover="overShow" @mouseout="outHide"><i data-v-6e367a74=""
                          class="anticon anticon-question-circle-o"></i></span></div>
                  </div>
                  <div data-v-6e367a74="" class="condition-select hidden1">
                      <span data-v-6e367a74="" class="condition-select-active"
                      @click="selectCon(0,'communicate1','个数（个）')">有效沟通</span>
                    <span data-v-6e367a74="" class="" @click="selectCon(1,'followCustomer1','个数（个）')">跟进客户</span>
</div>
                  <div data-v-6e367a74="" class="hidden1" id="myChart" _echarts_instance_="ec_1556179465759"
                    style="border-top: 1px solid rgb(223, 223, 225); padding-top: 6px; width: 100%; height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;">
                    <div
                      style="position: relative; overflow: hidden; width: 1360px; height: 293px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                      <canvas data-zr-dom-id="zr_0" width="1360" height="293"
                        style="position: absolute; left: 0px; top: 0px; width: 1360px; height: 293px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                    </div>
                    <div
                      style="position: absolute; display: none; border-style: solid; white-space: nowrap; z-index: 9999999; transition: left 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s, top 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgba(50, 50, 50, 0.7); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); font: 14px/21px &quot;Microsoft YaHei&quot;; padding: 5px; left: 549px; top: 91px;">
                      2019-04-06<br><span
                        style="display:inline-block;margin-right:5px;border-radius:10px;width:10px;height:10px;background-color:#c23531;"></span>新增客户:
                      0</div>
                  </div>
                  <div class="hidden2" style="font: size 12px;display: none">
                    <template>
                      <el-table :data="tableData4" border style="width: 100%" max-height="250">
                        <el-table-column fixed prop="date_time" label="日期" width="128">
                        </el-table-column>
                        <el-table-column prop="communicate1" label="有效沟通" width="280">
                        </el-table-column>
                        <el-table-column prop="followCustomer1" label="跟进客户" width="280">
                        </el-table-column>
                        <el-table-column prop="followRate1" label="昨日客户跟进率" width="280">
                        </el-table-column>
                        <el-table-column prop="followRate3" label="3日客户跟进率" width="290">
                        </el-table-column>
                        <el-table-column prop="followRate7" label="7日客户跟进率" width="280">
                      </el-table>
                    </template>

                  </div>
                </div>
                <div data-v-6e367a74="" id="viewBox1" class="v-content" style="min-height: 310px;">
                  <div data-v-6e367a74="">
                    分析
                    <div data-v-6e367a74="" class="title-icon"><span data-v-6e367a74="" @click="exportt"><i
                          data-v-6e367a74="" class="anticon anticon-upload"></i></span></div>
                  </div>
                  <div class="xiangying">
                  </div>
                  <div data-v-6e367a74="" class="ant-breadcrumb" style="margin-bottom: 10px; margin-top: 10px;">
                    <template>
                      <el-table :data="userList.slice((currentPage-1)*pagesize,currentPage*pagesize)" border
                        style="width: 100%" max-height="250">
                        <el-table-column fixed prop="username" label="销售单元" width="128">
                        </el-table-column>
                        <el-table-column prop="communicate1" label="有效沟通" width="280">
                          </el-table-column>
                          <el-table-column prop="followCustomer1" label="跟进客户" width="280">
                          </el-table-column>
                          <el-table-column prop="followRate1" label="昨日客户跟进率" width="280">
                          </el-table-column>
                          <el-table-column prop="followRate3" label="3日客户跟进率" width="290">
                          </el-table-column>
                          <el-table-column prop="followRate7" label="7日客户跟进率" width="280">
                      </el-table>
                      <el-pagination @size-change="handleSizeChange" @current-change="handleCurrentChange"
                        :current-page="currentPage" :page-sizes="[5, 10, 20, 40]" :page-size="pagesize"
                        layout="total, sizes, prev, pager, next, jumper" :total="userList.length">
                      </el-pagination>
                    </template>
                      
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="el-scrollbar__bar is-horizontal">
            <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
          </div>
          <div class="el-scrollbar__bar is-vertical">
            <div class="el-scrollbar__thumb" style="height: 87.7241%; transform: translateY(0%);"></div>
          </div>
        </div>
      </div>
    </div>
    <div data-v-417bc76c="" v-if="activeIndexa == 3" class="v-container container1">
        <div data-v-6e367a74="" data-v-417bc76c="" class="v-container bg-color chart-page1">
          <div data-v-6e367a74="" class="header v-home">
            <div data-v-6e367a74="" class="time time-panel clearfix">
              <template>
                <div class="block" style="display:inline-block">
                  <el-date-picker v-model="value7" type="daterange" align="right" unlink-panels
                    start-placeholder="开始日期" @keyup.13="clickInquiry" end-placeholder="结束日期" :picker-options="pickerOptions2">
                  </el-date-picker>
                </div>
              </template>
              <div class="block" style="float: right;">
                <el-cascader :options="options" ref="judh" placeholder="组织架构" change-on-select v-model="selectedOptions" @change="optclick(selectedOptions)">
                </el-cascader>
                <el-cascader :options="options3" ref="judh" placeholder="人名" change-on-select v-model="selectedOptions2">
                  </el-cascader>
                <button
                  style="    background: #4394f7;
                        color: #fff;border:none ;  height: 40px;padding:0 20px;cursor:pointer;border-radius :3px;"
                  @click="clickInquiry">查询</button>
              </div>
            </div>
          </div>
          <div data-v-6e367a74="" class="el-scrollbar">
            <div class="el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
              <div class="el-scrollbar__view">
                <div data-v-6e367a74="" style="height: 100%;">
                  <div data-v-6e367a74="" class="v-content"
                    style="margin-bottom: 5px; position: relative; overflow: visible;">
                    <div data-v-6e367a74="" style="margin-bottom: 10px;">
                      趋势<span data-v-6e367a74=""
                        style="color: white; position: absolute; left: 10px; z-index: -999;">false</span>
                      <div data-v-6e367a74="" class="title-icon"><span data-v-6e367a74=""
                          class="title-icon-active" @click="iconActive1"><i data-v-6e367a74=""
                            class="anticon anticon-line-chart"></i></span> <span data-v-6e367a74="" class=""
                          @click="iconActive2"><i data-v-6e367a74="" aria-hidden="true"
                            class="fa fa-table"></i></span> <span data-v-6e367a74="" @click="iconActive3"><i
                            data-v-6e367a74="" class="anticon anticon-upload"></i></span>
                        <span data-v-6e367a74="" @mouseover="overShow" @mouseout="outHide"><i data-v-6e367a74=""
                            class="anticon anticon-question-circle-o"></i></span></div>
                    </div>
                    <div data-v-6e367a74="" class="condition-select hidden1">
                        <span data-v-6e367a74="" class="condition-select-active"
                        @click="selectCon(0,'communicate1','个数（个）')">有效沟通</span>
                      <span data-v-6e367a74="" class="" @click="selectCon(1,'followCustomer1','个数（个）')">跟进客户</span>
                      <span data-v-6e367a74="" class=""
                        @click="selectCon(2,'sendMessage','个数（个）')">发送消息</span>
                      <span data-v-6e367a74="" class="" @click="selectCon(3,'saveMessage','个数（个）')">收到消息</span>
                      <span data-v-6e367a74="" class=""
                        @click="selectCon(4,'averSendMessage','条数（条）')">客均发消息</span>
                      <span data-v-6e367a74="" class=""
                        @click="selectCon(5,'averSaveMessage','条数（条）')">客均收消息</span>
                      <span data-v-6e367a74="" class="" @click="selectCon(6,'averWords','字数（字）')">平均字数</span>
                      <span data-v-6e367a74="" class="" @click="selectCon(7,'talkNum','个数（个）')">通话数</span>
                      <span data-v-6e367a74="" class="" @click="selectCon(8,'talkDuration','时长（s）')">通话时长</span>
                      <span data-v-6e367a74="" class="" @click="selectCon(9,'averDuration','时长（s）')">平均时长</span>
                      <span data-v-6e367a74="" class="" @click="selectCon(10,'friendCircle','个数（个）')">朋友圈</span>
                      <span data-v-6e367a74="" class="" @click="selectCon(11,'deltFriend','个数（个）')">删除好友</span>
                      </div>
                    <div data-v-6e367a74="" class="hidden1" id="myChart" _echarts_instance_="ec_1556179465759"
                      style="border-top: 1px solid rgb(223, 223, 225); padding-top: 6px; width: 100%; height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;">
                      <div
                        style="position: relative; overflow: hidden; width: 1360px; height: 293px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                        <canvas data-zr-dom-id="zr_0" width="1360" height="293"
                          style="position: absolute; left: 0px; top: 0px; width: 1360px; height: 293px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                      </div>
                      <div
                        style="position: absolute; display: none; border-style: solid; white-space: nowrap; z-index: 9999999; transition: left 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s, top 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgba(50, 50, 50, 0.7); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); font: 14px/21px &quot;Microsoft YaHei&quot;; padding: 5px; left: 549px; top: 91px;">
                        2019-04-06<br><span
                          style="display:inline-block;margin-right:5px;border-radius:10px;width:10px;height:10px;background-color:#c23531;"></span>新增客户:
                        0</div>
                    </div>
                    <div class="hidden2" style="font: size 12px;display: none">
                      <template>
                        <el-table :data="tableData4" border style="width: 100%" max-height="250">
                          <el-table-column fixed prop="date_time" label="日期" width="128">
                          </el-table-column>
                          <el-table-column prop="communicate1" label="有效沟通" width="80">
                          </el-table-column>
                          <el-table-column prop="followCustomer1" label="跟进客户" width="80">
                          </el-table-column>
                          <el-table-column prop="sendMessage" label="发送消息" width="80">
                          </el-table-column>
                          <el-table-column prop="saveMessage" label="收到消息" width="90">
                          </el-table-column>
                          <el-table-column prop="averSendMessage" label="客均发消息" width="80">
                          </el-table-column>
                          <el-table-column prop="averSaveMessage" label="客均收消息" width="80">
                          </el-table-column>
                          <el-table-column prop="averWords" label="平均字数" width="80">
                          </el-table-column>
                          <el-table-column prop="talkNum" label="通话数" width="90">
                          </el-table-column>
                          <el-table-column prop="talkDuration" label="通话时长" width="90">
                          </el-table-column>
                          <el-table-column prop="averDuration" label="平均时长" width="190">
                          </el-table-column>
                          <el-table-column prop="friendCircle" label="朋友圈" width="190">
                          </el-table-column>
                          <el-table-column prop="deltFriend" label="删除好友" width="80">
                          </el-table-column>
                        </el-table>
                      </template>

                    </div>
                  </div>
                  <div data-v-6e367a74="" id="viewBox1" class="v-content" style="min-height: 310px;">
                    <div data-v-6e367a74="">
                      分析
                      <div data-v-6e367a74="" class="title-icon"><span data-v-6e367a74="" @click="exportt"><i
                            data-v-6e367a74="" class="anticon anticon-upload"></i></span></div>
                    </div>
                    <div class="xiangying">
                    </div>
                    <div data-v-6e367a74="" class="ant-breadcrumb" style="margin-bottom: 10px; margin-top: 10px;">
                      <template>
                        <el-table :data="userList.slice((currentPage-1)*pagesize,currentPage*pagesize)" border
                          style="width: 100%" max-height="250">
                          <el-table-column fixed prop="username" label="销售单元" width="128">
                          </el-table-column>
                          <el-table-column prop="communicate1" label="有效沟通" width="80">
                            </el-table-column>
                            <el-table-column prop="followCustomer1" label="跟进客户" width="80">
                            </el-table-column>
                            <el-table-column prop="sendMessage" label="发送消息" width="80">
                            </el-table-column>
                            <el-table-column prop="saveMessage" label="收到消息" width="90">
                            </el-table-column>
                            <el-table-column prop="averSendMessage" label="客均发消息" width="80">
                            </el-table-column>
                            <el-table-column prop="averSaveMessage" label="客均收消息" width="80">
                            </el-table-column>
                            <el-table-column prop="averWords" label="平均字数" width="80">
                            </el-table-column>
                            <el-table-column prop="talkNum" label="通话数" width="90">
                            </el-table-column>
                            <el-table-column prop="talkDuration" label="通话时长" width="90">
                            </el-table-column>
                            <el-table-column prop="averDuration" label="平均时长" width="190">
                            </el-table-column>
                            <el-table-column prop="friendCircle" label="朋友圈" width="190">
                            </el-table-column>
                            <el-table-column prop="deltFriend" label="删除好友" width="80">
                            </el-table-column>
                        </el-table>
                        <el-pagination @size-change="handleSizeChange" @current-change="handleCurrentChange"
                          :current-page="currentPage" :page-sizes="[5, 10, 20, 40]" :page-size="pagesize"
                          layout="total, sizes, prev, pager, next, jumper" :total="userList.length">
                        </el-pagination>
                      </template>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="el-scrollbar__bar is-horizontal">
              <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
            </div>
            <div class="el-scrollbar__bar is-vertical">
              <div class="el-scrollbar__thumb" style="height: 87.7241%; transform: translateY(0%);"></div>
            </div>
          </div>
        </div>
      </div>
      <div data-v-417bc76c="" v-if="activeIndexa == 4" class="v-container container1">
          <div data-v-6e367a74="" data-v-417bc76c="" class="v-container bg-color chart-page1">
            <div data-v-6e367a74="" class="header v-home">
              <div data-v-6e367a74="" class="time time-panel clearfix">
                <template>
                  <div class="block" style="display:inline-block">
                    <span>交友日期：</span>
                    <el-date-picker v-model="value7" type="daterange" align="right" unlink-panels
                      start-placeholder="开始日期" @keyup.13="clickInquiry" end-placeholder="结束日期" :default-time="['00:00:00','23:59:59']" :picker-options="pickerOptions2">
                    </el-date-picker>
                  </div>
                </template>
                <template>
                    <div class="block" style="display:inline-block">
                        <span>分析范围：</span>
                      <el-date-picker v-model="value6" type="daterange" align="right" unlink-panels
                        start-placeholder="开始日期" @keyup.13="clickInquiry" end-placeholder="结束日期" :default-time="['00:00:00','23:59:59']" :picker-options="pickerOptions">
                      </el-date-picker>
                    </div>
                  </template>
                <div class="block" style="float: right;">
                    <el-cascader :options="options" ref="judh" placeholder="组织架构" :show-all-levels="false" change-on-select v-model="selectedOptions" @change="optclick">
                    </el-cascader>
                      <el-cascader :options="options3" ref="judh" placeholder="人名" change-on-select v-model="selectedOptions2">
                        </el-cascader>
                  <button
                    style="    background: #4394f7;
                          color: #fff;border:none ;  height: 40px;padding:0 20px;cursor:pointer;border-radius :3px;"
                    @click="clickInquiry">查询</button>
                </div>
              </div>
            </div>
            <div data-v-6e367a74="" class="el-scrollbar">
              <div class="el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                <div class="el-scrollbar__view">
                  <div data-v-6e367a74="" style="height: 100%;">
                    <div data-v-6e367a74="" class="v-content"
                      style="margin-bottom: 5px; position: relative; overflow: visible;">
                      <div data-v-6e367a74="" style="margin-bottom: 10px;">
                        趋势<span data-v-6e367a74=""
                          style="color: white; position: absolute; left: 10px; z-index: -999;">false</span>
                        <div data-v-6e367a74="" class="title-icon"><span data-v-6e367a74=""
                            class="title-icon-active" @click="iconActive1" style="display:none"><i data-v-6e367a74=""
                              class="anticon anticon-line-chart"></i></span> <span data-v-6e367a74="" class=""
                            @click="iconActive2" style="display:none"><i data-v-6e367a74="" aria-hidden="true"
                              class="fa fa-table"></i></span> <span data-v-6e367a74="" @click="iconActive3"><i
                              data-v-6e367a74="" class="anticon anticon-upload"></i></span>
                          <span data-v-6e367a74="" @mouseover="overShow" @mouseout="outHide"><i data-v-6e367a74=""
                              class="anticon anticon-question-circle-o"></i></span></div>
                      </div>
                      <div data-v-6e367a74="" class="condition-select hidden1">
                          <span data-v-6e367a74="" class="condition-select-active"
                          @click="selectCon(0,'followCustomer','%')">跟进客户</span>
                        <span data-v-6e367a74="" class="" @click="selectCon(1,'totalFollowCustomer','%')">累计跟进客户</span>
                        <span data-v-6e367a74="" class=""
                          @click="selectCon(2,'communicate','%')">有效沟通</span>
                        <span data-v-6e367a74="" class="" @click="selectCon(3,'totalCommunicate','%')">累计有效沟通</span>
                        </div>
                      <div data-v-6e367a74="" class="hidden1" id="myChart" _echarts_instance_="ec_1556179465759"
                        style="border-top: 1px solid rgb(223, 223, 225); padding-top: 6px; width: 100%; height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;">
                        <div
                          style="position: relative; overflow: hidden; width: 1360px; height: 293px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                          <canvas data-zr-dom-id="zr_0" width="1360" height="293"
                            style="position: absolute; left: 0px; top: 0px; width: 1360px; height: 293px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                        </div>
                        <div
                          style="position: absolute; display: none; border-style: solid; white-space: nowrap; z-index: 9999999; transition: left 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s, top 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgba(50, 50, 50, 0.7); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); font: 14px/21px &quot;Microsoft YaHei&quot;; padding: 5px; left: 549px; top: 91px;">
                          2019-04-06<br><span
                            style="display:inline-block;margin-right:5px;border-radius:10px;width:10px;height:10px;background-color:#c23531;"></span>新增客户:
                          0</div>
                      </div>
                      <div class="hidden2" style="font: size 12px;display: none">
                      </div>
                    </div>
                    <div data-v-6e367a74="" id="viewBox1" class="v-content" style="min-height: 310px;">
                      <div data-v-6e367a74="">
                        分析
                        
                        <div data-v-603f9100="" class="title-icon"><span data-v-603f9100="" @click = "openTcl"><i data-v-603f9100="" aria-hidden="true" class="fa fa-cog"></i></span></div>
                      </div>
                      <div class="xiangying">
                      </div>
                      <div data-v-6e367a74="" class="ant-breadcrumb" style="margin-bottom: 10px; margin-top: 10px;">
                        <template>
                          <el-table :data="userList.slice((currentPage-1)*pagesize,currentPage*pagesize)" border
                            style="width: 100%" max-height="250">
                            <el-table-column fixed prop="username" label="日期" width="128">
                            </el-table-column>
                            <el-table-column prop="followCustomer" label="跟进客户" width="280">
                              </el-table-column>
                              <el-table-column prop="totalFollowCustomer" label="累计跟进客户" width="280">
                              </el-table-column>
                              <el-table-column prop="communicate" label="有效沟通" width="280">
                              </el-table-column>
                              <el-table-column prop="totalCommunicate" label="累计有效沟通" width="290">
                              </el-table-column>
                          </el-table>
                          <el-pagination @size-change="handleSizeChange" @current-change="handleCurrentChange"
                            :current-page="currentPage" :page-sizes="[5, 10, 20, 40]" :page-size="pagesize"
                            layout="total, sizes, prev, pager, next, jumper" :total="userList.length">
                          </el-pagination>
                        </template>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="el-scrollbar__bar is-horizontal">
                <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
              </div>
              <div class="el-scrollbar__bar is-vertical">
                <div class="el-scrollbar__thumb" style="height: 87.7241%; transform: translateY(0%);"></div>
              </div>
            </div>
          </div>
        </div>
  <!---->
</div>
</div>
</div>
</div>

<div class="el-tcl" style="display:none">
<!-- style="display:none" -->

<template>
  
  <el-transfer
    v-model="value2"
    :data="data2">
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
 function getCascaderObj(val,opt) {
            return val.map(function (value, index, array) {
                for (var itm of opt) {
                    if (itm.value == value) { opt = itm.children; return itm; }
                }
                return null;
            });
        }
  option = {
    title: {
      // text: '未来一周气温变化',
      // subtext: '纯属虚构'
    },
    tooltip: {
      trigger: 'axis'
    },
    // legend: {
    //     data:['最高气温','最低气温']
    // },
    
    xAxis: {
      type: 'category',
      boundaryGap: false,
      data: ['周一', '周二', '周三', '周四', '周五', '周六', '周日']
    },
    yAxis: {
      type: 'value',
      name: '时长(s)',
      boundaryGap: false,
      data: ['周一', '周二', '周三', '周四', '周五', '周六', '周日'],
      // axisLabel: {
      //     formatter: '{value} °C'
      // },
      max: '9'
    },
    series: [{
      name: '',
      type: 'line',
      data: [11, 11, 15, 13, 12, 13, 10],
    }]
  };

  function getTable(opt, colName, typeName) {
    var axisData = opt.xAxis[0].data; //获取图形的data数组
    var series = opt.series; //获取series
    var num = 0; //记录序号
    var sum = new Array(); //获取合计数组（根据对应的系数生成相应数量的sum）
    for (var i = 0; i < series.length; i++) {
      sum[i] = 0;
    }
    var table = '<table class="bordered"><thead><tr>' +
      '<th>' + colName + '</th>' +
      '<th>' + typeName + '</th>';
    for (var i = 0; i < series.length; i++) {
      table += '<th>' + series[i].name + '</th>'
    }
    table += '</tr></thead><tbody>';
    for (var i = 0, l = axisData.length; i < l; i++) {
      num += 1;
      for (var n = 0; n < series.length; n++) {
        if (series[n].data[i]) {
          sum[n] += Number(series[n].data[i]);
        } else {
          sum[n] += Number(0);
        }

      }
      table += '<tr>' +
        '<td>' + num + '</td>' +
        '<td>' + axisData[i] + '</td>';
      for (var j = 0; j < series.length; j++) {
        if (series[j].data[i]) {
          table += '<td>' + series[j].data[i] + '</td>';
        } else {
          table += '<td>' + 0 + '</td>';
        }

      }
      table += '</tr>';
    }
    //最后一行加上合计
    table += '<tr>' + '<td>' + (num + 1) + '</td>' + '<td>合计</td>';
    for (var n = 0; n < series.length; n++) {
      if (String(sum[n]).indexOf(".") > -1)
        table += '<td>' + (Number(sum[n])).toFixed(2) + '</td>';
      else
        table += '<td>' + Number(sum[n]) + '</td>';
    }
    table += '</tr></tbody></table>';
    return table;
  }

  var jdata = ""

  new Vue({
    el: '#app',
    data: function () {
      function generateData2 () {
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
        activeIndexb: 1,
        activeIndexa: 0,
        tableData4: [],
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
        value6: [new Date(), new Date()],
        value7:  [new Date(new Date().getTime()-7*24*60*60*1000), new Date()],
        options3:[],
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
        selectedOptions: [],
        selectedOptions2: [],
        currentPage: 1, //初始页
        pagesize: 10, //    每页的数据
        userList: [],
    //     optionProps:{
    //       value: 'id',
		// label: 'name',
		// children: 'childred'
    //     },
    //     optionProps1:{
    //       value: 'id',
		// label: 'name',
		// children: 'childred'
    //     },
        loading: true
      }
    },
    created() {
      // this.handleUserList()
      let _this = this
      var dateTime = {};
      dateTime['start_time'] = this.getNowFormatDate(new Date(new Date().getTime()-7*24*60*60*1000));
      dateTime['end_time'] =  this.getNowFormatDate(new Date());
      $.ajax({
        url: '{{Url('wechat/follow_up_analyze_index')}}',
        type: 'get',
        dataType:'json',
        data:{type:1,dateTime,organiza_id:'1',organiza_type:'0'},
        success: function (data) {

          jdata = data
          _this.selectCon(0,'newCustomer','个数（个）')
          _this.userList = jdata['user']
          _this.tableData4 = jdata['date']
        },
        error: function () {

        }
      })
      data = '{!!json_encode($tissues)!!}'
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
_this.options = option[0]
_this.selectedOptions.push(_this.options[0].value)
    },
    mounted() {
      $('.el-transfer').append(`<p style="position:absolute;top:5%;right: 5%;"><span style="font-size:25px;display:inline-block;width:40px;height:40px;line-height:40px;text-align:center;cursor:pointer" onclick=" $('.el-tcl').css('display','none')">x</span></p>`)
      // this.userList = jdata.data['user']
    },
    methods: {
      optclick(item){
console.log()

_this = this;
console.log(_this.selectedOptions[_this.selectedOptions.length - 1].sid)
var arr = this.labelAll;
console.log(arr)
for (let i = 0; i < arr.length; i++) {
          if(arr[i].name == this.selectedOptions[this.selectedOptions.length-1].name){
            if(arr[i].children == undefined){
              $.ajax({
      url:'{{Url("wechat/getNames")}}',
      data:{sid:_this.selectedOptions[_this.selectedOptions.length - 1].sid},
      dataType:'json',
      success:function(data){
        for (let i = 0; i < data.length; i++) {
          data[i].value = data[i]
          data[i].label = data[i].name
          // $('.el-cascader-menu')[3].innerHTML+=`<li tabindex="-1" role="menuitem" id="menu-4826-2-0" class="el-cascader-menu__item"><span>`+data[i].name+`</span></li>`
        }
        _this.options3=data
        _this.selectedOptions2 = [];
      }
    })
            }else{
              this.options3 = []
              this.selectedOptions2 = [];
            }
          }
        }
},
      openTcl(){
        $('.el-tcl').css('display','block')
      },
      getNowFormatDate(date) {
    var seperator1 = "-";
    var seperator2 = ":";
    var month = date.getMonth() + 1;
    var strDate = date.getDate();
    var hour = date.getHours();
    var minute = date.getMinutes();
    var second = date.getSeconds();
    if (month >= 1 && month <= 9) {
        month = "0" + month;
    }
    if (strDate >= 0 && strDate <= 9) {
        strDate = "0" + strDate;
    }
    var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate
    return currentdate;
    },
      handleChange(value, direction, movedKeys) {
      },
      open(){
        if((new Date($('.el-range-input')[2].value)<new Date($('.el-range-input')[1].value))||$('.el-range-input')[2].value==""){
          this.$message({
            message: '分析时间需要大于交友日期',
            type: 'warning'
          });
        }else{
          this.inquiry();
        }
        
      },
      clickInquiry(){
        var dateTime = {};
        var zzobj = {};
        // console.log(this.selectedOptions2,this.selectedOptions)
        if(this.activeIndexa == 4){
          dateTime['start_time'] = $('.el-range-input')[0].value;
          dateTime['end_time'] =  $('.el-range-input')[1].value;
          dateTime['start_time1'] = $('.el-range-input')[2].value;
          dateTime['end_time1'] = $('.el-range-input')[3].value;
          if((new Date($('.el-range-input')[2].value)<new Date($('.el-range-input')[1].value))||$('.el-range-input')[2].value==""){
            this.$message({
              message: '分析时间需要大于交友日期',
              type: 'warning'
            });
            return;
          }
        }else{
          dateTime['start_time'] = $('.el-range-input')[0].value;
          dateTime['end_time'] =  $('.el-range-input')[1].value;
        }
        console.log(this.selectedOptions2)
        if(this.selectedOptions2.length>0){
          organiza_id = this.selectedOptions2[this.selectedOptions2.length-1].sid
          organiza_type = 1
        }else{
          organiza_id = this.selectedOptions[this.selectedOptions.length-1].sid
          organiza_type = 0
        }
        this.inquiry(dateTime,organiza_id,organiza_type)
        console.log(this.selectedOptions[this.selectedOptions.length-1].label,this.selectedOptions2.length> 0);
        if(this.selectedOptions2.length > 0> 0){
          $('.xiangying').text(this.selectedOptions[this.selectedOptions.length-1].label+'-'+this.selectedOptions2[this.selectedOptions2.length-1].label)
        }else{
          $('.xiangying').text(this.selectedOptions[this.selectedOptions.length-1].label)
        }
      },
      inquiry(dateTime,organiza_id,organiza_type) {
        // var arr = $('.el-cascader__label').text().split(''),
        //   str = "";
        // for (let i = 0; i < arr.length; i++) {
        //  if (arr[i] != " " && arr[i] != "\n") {
        //     str += arr[i]
        //   }
        // }
        let _this = this
        switch (this.activeIndexa) {
          case 0:
            $.ajax({
              url: '{{Url('wechat/follow_up_analyze_index')}}',
              type: 'get',
              dataType:'json',
              data:{type:1,dateTime,organiza_id,organiza_type},
              success: function (data) {
                jdata = data
                _this.selectCon('0','newCustomer','个数（个）')
                _this.userList = jdata['user']
                _this.tableData4 = jdata['date']
              },
              error: function () {

              }
            })
            break;
            case 1:
            $.ajax({
              url: '{{Url('wechat/follow_up_analyze_index')}}',
              type: 'get',
              dataType:'json',
              data:{type:2,dateTime,organiza_id,organiza_type},
              success: function (data) {
                jdata = data
                _this.selectCon('0','newCustomer','个数（个）')
                _this.userList = jdata['user']
                _this.tableData4 = jdata['date']
              },
              error: function () {

              }
            })
            break;
            case 2:
            $.ajax({
              url: '{{Url('wechat/follow_up_analyze_index')}}',
              type: 'get',
              dataType:'json',
              data:{type:3,dateTime,organiza_id,organiza_type},
              success: function (data) {
                jdata = data
                _this.selectCon('0','communicate1','个数（个）')
                _this.userList = jdata['user']
                _this.tableData4 = jdata['date']
              },
              error: function () {

              }
            })
            break;
            case 3:
            $.ajax({
              url: '{{Url('wechat/follow_up_analyze_index')}}',
              type: 'get',
              dataType:'json',
              data:{type:4,dateTime,organiza_id,organiza_type},
              success: function (data) {
                jdata = data
                _this.selectCon('0','communicate1','个数（个）')
                _this.userList = jdata['user']
                _this.tableData4 = jdata['date']
              },
              error: function () {

              }
            })
            break;
            case 4:
            $.ajax({
              url: '{{Url('wechat/follow_up_analyze_index')}}',
              type: 'get',
              dataType:'json',
              data:{type:5,dateTime,organiza_id,organiza_type},
              success: function (data) {
                jdata = data
                _this.selectCon('0','followCustomer','%')
                _this.userList = jdata['user']
                _this.tableData4 = jdata['date']
              },
              error: function () {

              }
            })
            break;
          default:
            break;
        }
        $('.container1 .hidden2').css('display', 'none')
        $('.container1 .hidden1').css('display', 'block')
        this.titleCon(0)
      },
      handleClose(key, keyPath) {
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
        this.tableData4 = jdata['date']
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
      init(dir,Yname) {
        Yname == undefined?'':Yname
        var myChart = echarts.init(document.getElementById('myChart'));
        Xarr = [], Yarr = [];
        for (let i = 0; i < jdata['date'].length; i++) {
          var jh = jdata['date'][i][dir];
          Xarr.push(jdata['date'][i]['date_time'])
          if(dir == "applicatePassed"||dir == "applicatePassedRate"||dir == "applicatedPassedRate" ||dir == "followRate" ||dir == "CommunicateRate"||dir == "followCustomer" ||dir == "totalFollowCustomer" ||dir == "communicate" ||dir == "totalCommunicate" ){
            Yarr.push(jh.split('%')[0])
          }else{
            Yarr.push(jh)
          }
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
        option.yAxis.name = Yname
        option.series[0].data = Yarr
        //  option.yAxis.max = Yarr.sort()[0]
        option.yAxis.max = max
        myChart.setOption(option);
      },
      exportt() {
        att = $('.container1 .el-table')[1]
        res = this.userList;
        this.export(att, res)
      },
      selectCon(num, name,Yname) {
        _this = this
        $('.container1 .condition-select span').each(function (index, el) {
          $(el).removeClass('condition-select-active')
          if (index == num) {
            $(el).addClass('condition-select-active')
            _this.init(name,Yname)
          }
        })
      },
      titleCon(num) {
        $('.title-icon span').each(function (index, el) {
          $(el).removeClass('title-icon-active')
          if (index == num) {
            $(el).addClass('title-icon-active')
          }
        })
      },
      coMtitleCon(num) {
        $('.common-title span').each(function (index, el) {
          $(el).removeClass('active')
          if (index == num) {
            $(el).addClass('active')
          }
        })
        this.activeIndexa = num
        this.value7 = [new Date(new Date().getTime()-8*24*60*60*1000), new Date(new Date().getTime()-1*24*60*60*1000)];
        $('.el-range-input')[0].value = this.getNowFormatDate(new Date(new Date().getTime()-24*60*60*1000))
        $('.el-range-input')[1].value =  this.getNowFormatDate(new Date())
        var dateTime = {};
        if(this.activeIndexa == 4){
          dateTime['start_time'] = this.getNowFormatDate(new Date(new Date().getTime()-8*24*60*60*1000));
          dateTime['end_time'] =  this.getNowFormatDate(new Date(new Date().getTime()-1*24*60*60*1000));
          dateTime['start_time1'] = this.getNowFormatDate(new Date());
          dateTime['end_time1'] =  this.getNowFormatDate(new Date());
        }else{
           dateTime['start_time'] = this.getNowFormatDate(new Date(new Date().getTime()-8*24*60*60*1000));
          dateTime['end_time'] =  this.getNowFormatDate(new Date(new Date().getTime()-1*24*60*60*1000));
      }
      if(this.selectedOptions2.length>0){
          organiza_id = this.selectedOptions2[this.selectedOptions2.length-1].sid
          organiza_type = 1
        }else{
          organiza_id = this.selectedOptions[this.selectedOptions.length-1].sid
          organiza_type = 0
        }
      this.inquiry(dateTime,organiza_id,organiza_type)
      },
      export (att, res) {
        str = "";
        for (let k = 0; k < res.length + 1; k++) {
          if (k == 0) {
            stra = ""
            $(att.querySelectorAll('tr')[k].querySelectorAll('th')).each(function (
              index, el) {
              if ($(el).attr('class') != "gutter") {
                stra += $(el)[0].querySelectorAll('div')[0].innerHTML
                stra += ','
              }
            })
            str += stra + '\r\n';
          } else {
            stra = ""
            $(att.querySelectorAll('tr')[k].querySelectorAll('td')).each(function (
              index, el) {
              stra += $(el)[0].querySelectorAll('div')[0].innerHTML
              stra += ','
            })
            str += stra + '\r\n';
          }
        }
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
        this.pagesize = size;
      },
      handleCurrentChange: function (currentPage) {
        this.currentPage = currentPage;
      }
    }
  })
  var myChart = echarts.init(document.getElementById('myChart'));

  //使用制定的配置项和数据显示图表
  myChart.setOption(option);
</script>

</html>