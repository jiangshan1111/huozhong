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
.el-picker-panel__sidebar {
    right: 0;
    }
    .el-picker-panel__sidebar+.el-picker-panel__body {
        margin-right: 110px;
        margin-left: 0;
    }
    .el-input__inner {
      height: 34px;
    }

    .el-table--border td,
    .el-table--border th,
    .el-table__body-wrapper .el-table--border.is-scrolling-left~.el-table__fixed {
      border-right: 1px solid #ebeef5;
      text-align: center;
    }

    .condition-select span[data-v-6e367a74] {
      display: inline-block;
      width: 10%;
      height: 24px;
      line-height: 24px;
      text-align: center;
      cursor: pointer;
    }

    .el-date-editor--daterange.el-input__inner {
      width: 300px
    }

    .el-icon-date:before {
      content: "\E608";
      position: absolute;
      top: 0;
    }

    .el-date-editor .el-range-separator {
      line-height: 26px;
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

    .el-cascader {
      line-height: 34px;
    }

    .el-input__icon {
      height: 100%;
      width: 25px;
      text-align: center;
      transition: all .3s;
      line-height: 34px;
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
              <div class="el-scrollbar__wrap" style="  overflow: hidden;margin-bottom: -17px; margin-right: -17px;">
                <div class="el-scrollbar__view">
                  <li data-v-2713df1d="" class="v-li" onclick="window.location.href = '{{Url("wechat/indexWX")}}'"><span data-v-2713df1d="" style="margin-right: 5px;"><span
                        data-v-2713df1d="" style=""><img data-v-2713df1d="" src="{{asset('wechat/insight.png')}}" alt="跟进洞察"
                          class="v-icon" style="display: none;"> <img data-v-2713df1d="" src="{{asset('wechat/insight1.png')}}"
                          alt="跟进洞察" class="v-icon" style=""></span> <img data-v-2713df1d="" src="{{asset('wechat/insight.png')}}"
                        alt="跟进洞察" class="v-icon" style="display: none;"></span> <span data-v-2713df1d=""
                      class="nav-text">
                      跟进洞察
                      </span></li>
                  <li data-v-2713df1d="" class="v-li" onclick="window.location.href = '{{Url("wechat/qualityWX")}}'"><span
                      data-v-2713df1d="" style="margin-right: 5px;"><span data-v-2713df1d="" style=""><img
                          data-v-2713df1d="" src="{{asset('wechat/home.png')}}" alt="质检" class="v-icon" style="display: none;"> <img
                          data-v-2713df1d="" src="{{asset('wechat/home1.png')}}" alt="质检" class="v-icon" style=""></span> <img
                        data-v-2713df1d="" src="{{asset('wechat/home.png')}}" alt="质检" class="v-icon" style="display: none;"></span>
                    <span data-v-2713df1d="" class="nav-text">
                      质检
                      </span></li>
                  <li data-v-2713df1d="" class="v-li"  onclick="window.location.href = '{{Url("wechat/callsWX")}}'"><span data-v-2713df1d="" style="margin-right: 5px;"><span
                        data-v-2713df1d=""><img data-v-2713df1d="" src="{{asset('wechat/phoneCall.png')}}" alt="手机通话" class="v-icon">
                        <img data-v-2713df1d="" src="{{asset('wechat/phoneCall1.png')}}" alt="手机通话" class="v-icon"
                          style="display: none;"></span> <img data-v-2713df1d="" src="{{asset('wechat/phoneCall.png')}}" alt="手机通话"
                        class="v-icon" style="display: none;"></span> <span data-v-2713df1d=""
                      class="nav-text nav-text1">
                      手机通话
                      </span></li>
                  <li data-v-2713df1d="" class="v-li"  onclick="window.location.href = '{{Url("wechat/salesWX")}}'"><span data-v-2713df1d="" style="margin-right: 5px;"><span
                        data-v-2713df1d=""><img data-v-2713df1d="" src="{{asset('wechat/sale.png')}}" alt="销售用户" class="v-icon"
                          style="display: none;"> <img data-v-2713df1d="" src="{{asset('wechat/sale1.png')}}" alt="销售用户"
                          class="v-icon"></span> <img data-v-2713df1d="" src="{{asset('wechat/sale.png')}}" alt="销售用户" class="v-icon"
                        style="display: none;"></span> <span data-v-2713df1d="" class="nav-text">
                      销售用户
                      </span></li>
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
            <div data-v-2713df1d="" class="el-scrollbar">
              <div class="el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                <div class="el-scrollbar__view">
                  <li data-v-2713df1d="" title="跟进洞察" class="v-li" style="padding-left: 0px; text-align: center;"><span
                      data-v-2713df1d="" style="margin-right: 5px;"><span data-v-2713df1d="" style=""><img
                          data-v-2713df1d="" src="{{asset('wechat/insight.png')}}" alt="跟进洞察" class="v-icon" style=""> <img
                          data-v-2713df1d="" src="{{asset('wechat/insight1.png')}}" alt="跟进洞察" class="v-icon"
                          style="display: none;"></span> <img data-v-2713df1d="" src="{{asset('wechat/insight.png')}}" alt="跟进洞察"
                        class="v-icon" style="display: none;"></span></li>
                  <li data-v-2713df1d="" title="质检" class="v-li" style="padding-left: 0px; text-align: center;"><span
                      data-v-2713df1d="" style="margin-right: 5px;"><span data-v-2713df1d="" style=""><img
                          data-v-2713df1d="" src="{{asset('wechat/home.png')}}" alt="质检" class="v-icon" style="display: none;"> <img
                          data-v-2713df1d="" src="{{asset('wechat/home1.png')}}" alt="质检" class="v-icon" style=""></span> <img
                        data-v-2713df1d="" src="{{asset('wechat/home.png')}}" alt="质检" class="v-icon" style="display: none;"></span>
                  </li>
                  <li data-v-2713df1d="" title="手机通话" class="v-li" style="padding-left: 0px; text-align: center;"><span
                      data-v-2713df1d="" style="margin-right: 5px;"><span data-v-2713df1d=""><img data-v-2713df1d=""
                          src="{{asset('wechat/phoneCall.png')}}" alt="手机通话" class="v-icon" style="display: none;"> <img
                          data-v-2713df1d="" src="{{asset('wechat/phoneCall1.png')}}" alt="手机通话" class="v-icon"></span> <img
                        data-v-2713df1d="" src="{{asset('wechat/phoneCall.png')}}" alt="手机通话" class="v-icon"
                        style="display: none;"></span></li>
                  <li data-v-2713df1d="" title="敏感词设置" class="v-li" style="padding-left: 0px; text-align: center;"><span
                      data-v-2713df1d="" style="margin-right: 5px;"><span data-v-2713df1d=""><img data-v-2713df1d=""
                          src="{{asset('wechat/sensitive.png')}}" alt="敏感词设置" class="v-icon" style="display: none;"> <img
                          data-v-2713df1d="" src="{{asset('wechat/sensitive1.png')}}" alt="敏感词设置" class="v-icon"></span> <img
                        data-v-2713df1d="" src="{{asset('wechat/sensitive.png')}}" alt="敏感词设置" class="v-icon"
                        style="display: none;"></span></li>
                  <li data-v-2713df1d="" title="销售用户" class="v-li" style="padding-left: 0px; text-align: center;"><span
                      data-v-2713df1d="" style="margin-right: 5px;"><span data-v-2713df1d=""><img data-v-2713df1d=""
                          src="{{asset('wechat/sale.png')}}" alt="销售用户" class="v-icon" style="display: none;"> <img
                          data-v-2713df1d="" src="{{asset('wechat/sale1.png')}}" alt="销售用户" class="v-icon"></span> <img
                        data-v-2713df1d="" src="{{asset('wechat/sale.png')}}" alt="销售用户" class="v-icon"
                        style="display: none;"></span></li>
                  <li data-v-2713df1d="" title="质检用户" class="v-li" style="padding-left: 0px; text-align: center;"><span
                      data-v-2713df1d="" style="margin-right: 5px;"><span data-v-2713df1d=""><img data-v-2713df1d=""
                          src="{{asset('wechat/quality.png')}}" alt="质检用户" class="v-icon" style="display: none;"> <img
                          data-v-2713df1d="" src="{{asset('wechat/quality1.png')}}" alt="质检用户" class="v-icon"></span> <img
                        data-v-2713df1d="" src="{{asset('wechat/quality.png')}}" alt="质检用户" class="v-icon"
                        style="display: none;"></span></li>
                  <li data-v-2713df1d="" title="应用设置" class="v-li" style="padding-left: 0px; text-align: center;"><span
                      data-v-2713df1d="" style="margin-right: 5px;"><span data-v-2713df1d="" style=""><img
                          data-v-2713df1d="" src="{{asset('wechat/application.png')}}" alt="应用设置" class="v-icon"
                          style="display: none;"> <img data-v-2713df1d="" src="{{asset('wechat/application1.png')}}" alt="应用设置"
                          class="v-icon"></span> <img data-v-2713df1d="" src="{{asset('wechat/application.png')}}" alt="应用设置"
                        class="v-icon" style="display: none;"></span></li>
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
          <div data-v-417bc76c="" data-v-2713df1d="" class="v-container bg-color chart-page">
            <div data-v-417bc76c="" class="header v-home">
              <div data-v-417bc76c="" class="common-title"><span data-v-417bc76c="" class="content-option active"
                  @click="coMtitleCon(0)">走势</span>
                <span data-v-417bc76c="" class="content-option" @click="coMtitleCon(1)">分析</span>
                <span data-v-417bc76c="" class="content-option" @click="coMtitleCon(2)">详单</span>
                
              </div>
            </div>
<div data-v-417bc76c="" v-if="activeIndexa == 0" class="v-container container1">
    <div data-v-6e367a74="" data-v-417bc76c="" class="v-container bg-color chart-page1">
      <div data-v-6e367a74="" class="header v-home">
        <div data-v-6e367a74="" class="time time-panel clearfix">
          <template>
            <div class="block" style="display:inline-block">
              <el-date-picker v-model="value7" type="daterange" align="right" unlink-panels
                start-placeholder="开始日期" end-placeholder="结束日期" :picker-options="pickerOptions2">
              </el-date-picker>
            </div>
          </template>
          <div class="block" style="float: right;">
            <el-cascader :options="options" ref="judh" placeholder="组织架构" change-on-select v-model="selectedOptions" @change="optclick(selectedOptions)">
            </el-cascader>
            <el-cascader :options="options3" ref="judh" placeholder="人名" change-on-select v-model="selectedOptions2">
              </el-cascader>
            <button style="    background: #4394f7;
                  color: #fff;border:none ;  height: 34px;padding:0 20px;cursor:pointer;border-radius :3px;"
              @click="open">查询</button>
          </div>
        </div>
      </div>
      <div data-v-6e367a74="" class="el-scrollbar">
        <div class="el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
          <div class="el-scrollbar__view">
            <div data-v-6e367a74="" style="height: 100%;">
              <div data-v-6e367a74="" class="v-content"
                style="margin-bottom: 5px; position: relative; overflow: visible;">
                <div data-v-6e367a74="" class="condition-select hidden1">
                  <span data-v-6e367a74="" class="condition-select-active"
                    @click="selectCon(0,'callout_num','个数（个）')">呼出总数</span>
                  <span data-v-6e367a74="" class=""
                    @click="selectCon(1,'callout_connect_num','个数（个）')">呼出接通数</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(2,'callout_rate','%')">呼出接通率</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(3,'callin_num','个数（个）')">呼入总数</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(4,'callin_connect_num')">呼入接通数</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(5,'callin_rate','%')">呼入接通率</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(6,'call_num','个数（个）')">呼出+呼入总数</span>
                  <span data-v-6e367a74="" class=""
                    @click="selectCon(7,'call_connect_num','个数（个）')">呼出+呼入接通数</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(8,'call_rate','%')">呼出+呼入接通率</span>
                  <span data-v-6e367a74="" class=""
                    @click="selectCon(9,'callout_duration','时长（s）')">呼出时长</span>
                  <span data-v-6e367a74="" class=""
                    @click="selectCon(10,'callout_durationA','时长（s）')">呼出平均时长</span>
                  <span data-v-6e367a74="" class=""
                    @click="selectCon(11,'callin_duration','时长（s）')">呼入时长</span>
                  <span data-v-6e367a74="" class=""
                    @click="selectCon(12,'callin_durationA','时长（s）')">呼入平均时长</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(13,'duration','时长（s）')">总时长</span>
                  <span data-v-6e367a74="" class="" @click="selectCon(14,'call_durationA','时长（s）')">总平均时长</span>
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
                    <el-table height="550"
                      :data="userList.slice((currentPage-1)*pagesize,currentPage*pagesize)" border
                      style="width: 100%">
                      <el-table-column fixed prop="date" label="日期" width="100">
                      </el-table-column>
                      <el-table-column label="呼出">
                        <el-table-column prop="callout_num" label="总数" width="80">
                        </el-table-column>
                        <el-table-column prop="callout_connect_num" label="接通数" width="80">
                        </el-table-column>
                        <el-table-column prop="callout_rate" label="接通率" width="80">
                        </el-table-column>
                      </el-table-column>
                      <el-table-column label="呼入">
                        <el-table-column prop="callin_num" label="总数" width="80">
                        </el-table-column>
                        <el-table-column prop="callin_connect_num" label="接通数" width="80">
                        </el-table-column>
                        <el-table-column prop="callin_rate" label="接通率" width="80">
                        </el-table-column>
                      </el-table-column>
                      <el-table-column label="呼出+呼入">
                        <el-table-column prop="call_num" label="总数" width="80">
                        </el-table-column>
                        <el-table-column prop="call_connect_num" label="接通数" width="80">
                        </el-table-column>
                        <el-table-column prop="call_rate" label="接通率" width="80">
                        </el-table-column>
                      </el-table-column>
                      <el-table-column label="时长">
                        <el-table-column prop="callout_duration" label="呼出" width="80">
                        </el-table-column>
                        <el-table-column prop="callout_durationA" label="呼出平均" width="80">
                        </el-table-column>
                        <el-table-column prop="callin_duration" label="呼入" width="80">
                        </el-table-column>
                        <el-table-column prop="callin_durationA" label="呼入平均" width="80">
                        </el-table-column>
                        <el-table-column prop="duration" label="总时长" width="80">
                        </el-table-column>
                        <el-table-column prop="call_durationA" label="总平均" width="80">
                        </el-table-column>
                      </el-table-column>
                    </el-table>
                    <el-pagination @size-change="handleSizeChange" @current-change="handleCurrentChange"
                      :current-page="currentPage" :page-sizes="[1, 10, 20, 40]" :page-size="pagesize"
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
    <div data-v-16750612="" class="header">
      <div data-v-16750612="" class="time time-panel clearfix">
        <div data-v-16750612="" class="clearfix fl" style="">
          <!--<span data-v-16750612="" class="time-option" @click="flclick(0)">今日</span>
          <span data-v-16750612="" @click="flclick(1)" class="time-option">昨日</span>-->
          <!--<span data-v-16750612="" @click="flclick(2)" class="time-option time-active">自定义时间段</span>-->
          <template>
            <div class="block" style="display:inline-block">
              <el-date-picker v-model="value7" type="daterange" align="right" unlink-panels
                start-placeholder="开始日期" end-placeholder="结束日期" :picker-options="pickerOptions2">
              </el-date-picker>
            </div>
          </template>
        </div>
        <div data-v-16750612="" class="clearfix" style="float: right; ">
         <el-cascader :options="options" ref="judh" placeholder="组织架构" change-on-select v-model="selectedOptions" @change="optclick(selectedOptions)">
                </el-cascader>
                <el-cascader :options="options3" ref="judh" placeholder="人名" change-on-select v-model="selectedOptions2">
                  </el-cascader>
                  <button
                  class="ant-btn ant-btn-primary" 
                  @click="open">查询</button>
          <button data-v-16750612="" type="button" class="ant-btn ant-btn-primary" @click="exporttt()">

            <span>导出</span></button>
        </div>
      </div>
    </div>
    <div data-v-16750612="" class="v-content clearfix" style="padding-bottom: 10px;">
      <template>
        <el-table :data="userList.slice((currentPage-1)*pagesize,currentPage*pagesize)" border
          style="width: 100%">
          <el-table-column fixed prop="user" label="销售单元" width="100">
          </el-table-column>
          <el-table-column label="呼出">
            <el-table-column prop="callout_num" label="总数" width="80">
            </el-table-column>
            <el-table-column prop="callout_connect_num" label="接通数" width="80">
            </el-table-column>
            <el-table-column prop="callout_rate" label="接通率" width="80">
            </el-table-column>
          </el-table-column>
          <el-table-column label="呼入">
            <el-table-column prop="call_num" label="总数" width="80">
            </el-table-column>
            <el-table-column prop="call_connect_num" label="接通数" width="80">
            </el-table-column>
            <el-table-column prop="call_rate" label="接通率" width="80">
            </el-table-column>
          </el-table-column>
          <el-table-column label="呼出+呼入">
            <el-table-column prop="call_num" label="总数" width="80">
            </el-table-column>
            <el-table-column prop="call_connect_num" label="接通数" width="80">
            </el-table-column>
            <el-table-column prop="call_rate" label="接通率" width="80">
            </el-table-column>
          </el-table-column>
          <el-table-column label="时长">
            <el-table-column prop="callout_duration" label="呼出" width="80">
            </el-table-column>
            <el-table-column prop="callout_durationA" label="呼出平均" width="80">
            </el-table-column>
            <el-table-column prop="callin_duration" label="呼入" width="80">
            </el-table-column>
            <el-table-column prop="callin_durationA" label="呼入平均" width="80">
            </el-table-column>
            <el-table-column prop="duration" label="总时长" width="80">
            </el-table-column>
            <el-table-column prop="call_durationA" label="总平均" width="80">
            </el-table-column>
          </el-table-column>
        </el-table>
        <el-pagination @size-change="handleSizeChange" @current-change="handleCurrentChange"
          :current-page="currentPage" :page-sizes="[5, 10, 20, 40]" :page-size="pagesize"
          layout="total, sizes, prev, pager, next, jumper" :total="userList.length">
        </el-pagination>
      </template>
    </div>
  </div>
  <div data-v-417bc76c="" v-if="activeIndexa == 2" class="v-container container1"
    style="    background-color: white;">
    <div data-v-16750612="" class="header">
      <div data-v-16750612="" class="time time-panel clearfix">
        <div data-v-16750612="" class="clearfix fl" style="">
          <!--<span data-v-16750612="" class="time-option" @click="flclick(0)">今日</span>
          <span data-v-16750612="" @click="flclick(1)" class="time-option">昨日</span>-->
          <!--<span data-v-16750612="" @click="flclick(2)" class="time-option time-active">自定义时间段</span>-->
          <template>
            <div class="block" style="display:inline-block">
              <el-date-picker v-model="value7" type="daterange" align="right" unlink-panels
                start-placeholder="开始日期" end-placeholder="结束日期" :picker-options="pickerOptions2">
              </el-date-picker>
            </div>
          </template>
        </div>
        <div data-v-16750612="" class="clearfix" style="float: right; ">
          <el-cascader :options="options" ref="judh" placeholder="组织架构" change-on-select v-model="selectedOptions" @change="optclick(selectedOptions)">
                </el-cascader>
                <el-cascader :options="options3" ref="judh" placeholder="人名" change-on-select v-model="selectedOptions2">
                  </el-cascader>
                  <button
                   class="ant-btn ant-btn-primary" @click="open">查询</button>
          <button data-v-16750612="" type="button" class="ant-btn ant-btn-primary" @click="exportttt()">

            <span>导出</span></button>
        </div>
      </div>
    </div>
    <!-- <div style="background: white;"> -->
    <div data-v-332e64b9="" class="ant-table ant-table-large ant-table-bordered" style="height: auto;">
      <div data-v-332e64b9="">
        <div data-v-332e64b9="" style="float: right; margin-bottom: 10px; position: relative;"><input
            data-v-332e64b9="" type="text" placeholder="销售姓名/客户电话/销售ID" autocomplete="off"
            class="input-box ant-input telsousuo" style="width: 200px; padding-right: 28px;" @keyup.13="telsousuo"> <i data-v-332e64b9=""
            class="anticon anticon-search"
            style="position: absolute; right: 10px; top: 12px; font-size: 14px; color: rgb(217, 217, 217);"></i>
        </div>
      </div>
      <div data-v-332e64b9="" style="line-height: 32px;">
        已选择<span class="cSpan"></span>条
        &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <button data-v-332e64b9="" type="button" class="ant-btn"> <span @click="luyin">下载</span></button>
      </div>
    </div>
    <template>
      <el-table :data="userList1.slice((currentPage1-1)*pagesize1,currentPage1*pagesize1)" border
        style="width: 100%" max-height="450" @selection-change="handleSelectionChange">
        <el-table-column type="selection" width="55">
        </el-table-column>
        <el-table-column fixed prop="user" label="销售姓名" width="160">
        </el-table-column>
        <el-table-column prop="group" label="部门" width="160">
        </el-table-column>
        <el-table-column prop="caller" label="客户名称" width="160">
        </el-table-column>
        <el-table-column prop="called" label="客户电话" width="160">
        </el-table-column>
        <el-table-column prop="createTime" label="开始时间" :sortable="true" :sort-method="sortByDate" width="160">
          </el-table-column>
        <el-table-column prop="callType" label="通话类型" width="160">
        </el-table-column>
        <el-table-column prop="duration" label="通话时长" width="160">
        </el-table-column>
        <el-table-column label="操作" width="160">
          <template slot-scope="scope">
            <div style="height: 23px;" v-show="scope.row.id != showid">
              <el-button type="text" size="small" @click="showId(scope.row)">播放</el-button>
              <el-button type="text" size="small" @click="showdownload(scope.row)">下载</el-button>
            </div>
            <div  v-show="scope.row.id == showid" data-v-332e64b9=""
              style="text-align: center; color: rgb(102, 102, 102); position: relative;">
              <div data-v-332e64b9="" class="clearfix">
                <div data-v-332e64b9="" style="width: 88%; float: left;padding-top: 3px">
                  <div data-v-18b8333c="" data-v-332e64b9="" class="">
                    <div data-v-18b8333c="" class="flex-fit">
                      <div data-v-18b8333c="" class="song-title">
                        <div data-v-18b8333c="" class="flex-fit"><span data-v-18b8333c=""><a
                          data-v-18b8333c="" href="#" class="undefined"><span data-v-18b8333c=""><i
                                  data-v-18b8333c="" :data-id="scope.row.id"   class="fa fa-fw fa-play fa-lg" @click="range(scope.row)"></i> </span></a></span>
                          <input data-v-18b8333c="" :data-id="scope.row.id" type="range" min="0" :max="scope.row.duration_str" step="any"
                            style="display: inline-block; " value="0" @change="rangea(scope.row)"></div>
                      </div>
                    </div> <audio :data-id="scope.row.id" data-v-18b8333c=""
                      src="http://hujing-salesman-dev.oss-cn-beijing.aliyuncs.com/record_voice/hujing0302/wxid_7mcaqwas9vmb22/1557295511149.mp3?Expires=1557729521&OSSAccessKeyId=LTAI8gFP0ULUW2WC&Signature=glDTVR1QHZRU4DahrKBBnAIEdSQ%3D"
                      preload="metadata">
                      您的浏览器不支持语言播放，请更换谷歌浏览器。
                    </audio>
                  </div>
                </div>
                <div data-v-332e64b9="" style="width: 12%; float: left;"><button @click="hideId(scope.row)" data-v-332e64b9=""
                    type="button" class="close-btn ant-btn ant-btn-ghost ant-btn-circle-outline">
                     <i class="anticon anticon-close"></i>
                    </button></div>
              </div>
            </div>
          </template>
        </el-table-column>

      </el-table>
      <el-pagination @size-change="handleSizeChange1" @current-change="handleCurrentChange1"
        :current-page="currentPage1" :page-sizes="[5, 10, 20, 40]" :page-size="pagesize1"
        layout="total, sizes, prev, pager, next, jumper" :total="userList1.length">
      </el-pagination>
    </template>
  </div>

  <!-- </div> -->
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
activeIndexb: 1,
activeIndexa: 0,
flindex: '',
tableData4: [],
pickerOptions2: {
shortcuts: [{
            text: '今日',
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              // start.setTime(start.getTime() - 3600 * 1000 * 24 * 7);
              picker.$emit('pick', [start, end]);
            }
          }, 
          {
            text: '昨日',
            onClick(picker) {
              const end = new Date(new Date().getTime()-24*60*60*1000);
              const start = new Date(new Date().getTime()-24*60*60*1000);
              // start.setTime(start.getTime() - 3600 * 1000 * 24 * 7);
              picker.$emit('pick', [start, end]);
            }
          },{
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
value7: [new Date(new Date().getTime() - 24 * 60 * 60 * 1000), new Date()],
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
labelAll : [],
selectedOptions: [],
selectedOptions2: [],
currentPage: 1, //初始页
pagesize: 10, //
currentPage1: 1, //初始页
pagesize1: 10, //    每页的数据
userList: [],
userList1: [],
model2:0,
showid : "",
indexList:[],
multipleSelection: [],
timer:''
}
},
created() {
// this.handleUserList()
let _this = this;
sid = "1";
$.ajax({
              url: '{{Url("wechat/getCallsZS")}}',
              type: 'get',
              dataType:'json',
              data:{sid},
              success: function (data) {
                     console.log(data)
					      jdata = data
					      _this.init('callout_num', '个数（个）')
					      _this.userList = jdata.data
					      _this.tableData4 = jdata.data
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
//_this.selectedOptions .push(option[0][0].label)
},
mounted() {
console.log($('.el-transfer'))
$('.el-transfer').append(
`<p style="position:absolute;top:5%;right: 5%;"><span style="font-size:25px;display:inline-block;width:40px;height:40px;line-height:40px;text-align:center;cursor:pointer" onclick=" $('.el-tcl').css('display','none')">x</span></p>`
)

aa = $('input [type = range]')[0];
console.log($(aa).val(),$(aa).attr('max'))
// $('input[type = range]').change(function(){
// })
// this.userList = jdata.data['user']
},
methods: {
	sortByDate(obj1, obj2) {
      let val1 = obj1.createTime
      let val2 = obj2.createTime
      return (new Date(val1).getTime() - new Date(val2).getTime())
    },
audioInit(){
$('audio').each(function(index,el){
$(el)[0].pause();
$(el)[0].currentTime = 0;
})
clearInterval(this.timer);
$('input[type = range]').each(function(index,el){
$(el).val(0)
})
$('i').each(function(index,el){
if($(el).attr('class').indexOf('fa-pause')>0){
  $(el).removeClass('fa-pause')
      $(el).addClass('fa-play')
}
})
console.log($('i'))
},
showId(row){
this.showid = row.id
this.audioInit()
},
hideId(row){
this.showid = '';
arang = 'input[data-id='+row.id+']'
aa = $(arang)[0];
audi = 'audio[data-id='+row.id+']'
audio = $(audi)[0]
i = 'i[data-id='+row.id+']'
console.log($(i).attr('class'))
$(i).removeClass('fa-pause')
$(i).addClass('fa-play')
clearInterval(this.timer);
audio.currentTime = aa.value
audio.pause()
},
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
  telsousuo(){
    console.log($('.telsousuo').val(),this.indexList)
    var arr = [],obj = this.indexList,con = $('.telsousuo').val();
    for (let i = 0; i < obj.length; i++) {
      if(obj[i].user.indexOf(con)>-1 || obj[i].caller.indexOf(con)>-1 || obj[i].called.indexOf(con)>-1){
        arr.push(obj[i])
      }
    }
    this.userList1=arr
  },
rangea(a){
i = 'i[data-id='+a.id+']'
console.log($(i).attr('class'))
$(i).removeClass('fa-play')
$(i).addClass('fa-pause')
_this = this
this.timer= setInterval(function(){
aa.value=parseFloat(aa.value)+1;

  if(parseFloat(aa.value)==a.duration_str){
    audio.pause()
      aa.value=0
      audio.currentTime = 0;
      $(i).removeClass('fa-pause')
      $(i).addClass('fa-play')
      clearInterval(_this.timer);
      return
  }
},1000)
aa = $('input[type=range]')[0];
console.log(aa.value)
audi = 'audio[data-id='+a.id+']'
audio = $(audi)[0]
audio.currentTime = aa.value
audio.play()
},
range(a){
console.log()
arang = 'input[data-id='+a.id+']'
aa = $(arang)[0];
audi = 'audio[data-id='+a.id+']'
audio = $(audi)[0]
console.log(a,audio)
var target = event.target
if($(target).attr('class').indexOf('fa-play')>0){
$(target).removeClass('fa-play')
$(target).addClass('fa-pause')
audio.play()
audio.currentTime = aa.value
_this = this
this.timer= setInterval(function(){
aa.value=parseFloat(aa.value)+1;

  if(parseFloat(aa.value)==a.duration_str){
    audio.pause()
      aa.value=0
      audio.currentTime = 0;
      $(target).removeClass('fa-pause')
      $(target).addClass('fa-play')
      clearInterval(_this.timer);
      return
  }
},1000)
}else{
audio.pause()
audio.currentTime = aa.value
$(target).removeClass('fa-pause')
$(target).addClass('fa-play')
clearInterval(this.timer);
}

},
openTcl() {
$('.el-tcl').css('display', 'block')
},
tablexq(data) {
console.log(data)
window.location.href = "index.3.html"
},
flclick(flindex) {
this.flindex = flindex
$('.fl span').each(function (index, el) {
$(el).removeClass('time-active')
})
$($('.fl span')[this.flindex]).addClass('time-active')
if (this.flindex == 0) {
          $('.el-range-input')[0].value = this.getNowFormatDate(new Date(new Date().getTime()))
          $('.el-range-input')[1].value =  this.getNowFormatDate(new Date(new Date().getTime()))
        } else if (this.flindex == 1) {
          $('.el-range-input')[0].value = this.getNowFormatDate(new Date(new Date().getTime()-24*60*60*1000))
          $('.el-range-input')[1].value =  this.getNowFormatDate(new Date(new Date().getTime()-24*60*60*1000))
        } else {
          $('.el-range-input')[0].value = this.getNowFormatDate(new Date(new Date().getTime()-24*60*60*1000))
          $('.el-range-input')[1].value =  this.getNowFormatDate(new Date(new Date().getTime()))
        }
},
handleChange(value, direction, movedKeys) {
console.log(value, direction, movedKeys);
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
              url: '{{Url("wechat/getCallsZS")}}',
              type: 'get',
              dataType:'json',
              data:{sid:organiza_id,sip:organiza_type,startTime:dateTime['start_time'],endTime:dateTime['end_time']},
              success: function (data) {
                     console.log(data)
					      jdata = data
					      _this.init('callout_num', '个数（个）')
					      _this.userList = jdata.data
					      _this.tableData4 = jdata.data
              },
              error: function () {

              }
            })
            break;
            case 1:
            $.ajax({
              url: '{{Url("wechat/getCallsFX")}}',
              type: 'get',
              dataType:'json',
              data:{sid:organiza_id,sip:organiza_type,startTime:dateTime['start_time'],endTime:dateTime['end_time']},
              success: function (data) {
               console.log(data)
					      jdata = data
					      _this.userList = []
                for(var k in jdata.data){
                  _this.userList.push(jdata.data[k])
                }
              },
              error: function () {

              }
            })
            break;
            case 2:
            $.ajax({
              url: '{{Url("wechat/getCallsXD")}}',
              type: 'get',
              dataType:'json',
              data:{sid:organiza_id,sip:organiza_type,startTime:dateTime['start_time'],endTime:dateTime['end_time']},
              success: function (data) {
                console.log(data)
      // jdata = data
      _this.userList1 = data.data
      _this.indexList = data.data
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
init(dir, Yname) {
var myChart = echarts.init(document.getElementById('myChart'));
Xarr = [], Yarr = [];
for (let i = 0; i < jdata.data.length; i++) {
var jh = jdata.data[i][dir];
Xarr.push(jdata.data[i]['date'])
if(dir == "callout_rate" ||dir == "callin_rate" ||dir == "call_rate" ){
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
option.xAxis.data = Xarr
option.series[0].data = Yarr
//  option.yAxis.max = Yarr.sort()[0]
option.yAxis.max = max
option.yAxis.name = Yname
myChart.setOption(option);
},
exportt() {
att = $('.ant-breadcrumb table')
res = this.userList;
this.export(att, res)
},
exporttt(){
console.log(1)
att = $('.clearfix table')
res = this.userList;
str = "";
console.log(att[0].querySelectorAll('tr'),res,att);
str=" ,呼出,,,呼入,,,呼出+呼入,,,时长"+'\r\n'+"销售单元,总数,接通数,接通率,总数,接通数,接通率,总数,接通数,接通率,呼出,呼出平均,呼入,呼入平均,总时长,总平均"+'\r\n'
for (let k = 0; k < att[1].querySelectorAll('tr').length ; k++) {

  stra = ""
  console.log(att[1].querySelectorAll('tr')[k].querySelectorAll('td'))
  $(att[1].querySelectorAll('tr')[k].querySelectorAll('td')).each(function (
    index, el) {
    stra += $(el)[0].querySelectorAll('div')[0].innerHTML
    stra += ','
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
exportttt(){
console.log($('.container1 table'))
att = $('.container1 table')
// res = this.userList;
str = "";
console.log(att[0].querySelectorAll('tr')[0]);
stra = ""
$(att[0].querySelectorAll('tr')[0].querySelectorAll('th')).each(function (
    index, el) {
    if(index!=0 &&index!=1 && index!=8 && index!=9){
                  stra += $(el)[0].querySelectorAll('div')[0].innerText
                   stra += ','
                }else if(index == 1){
                  stra += $(el)[0].querySelectorAll('div')[0].innerHTML
                   stra += ','
                }
  })
  str += stra + '\r\n';
// str=" ,呼出,,,呼入,,,呼出+呼入,,,时长"+'\r\n'+"销售单元,总数,接通数,接通率,总数,接通数,接通率,总数,接通数,接通率,呼出,呼出平均,呼入,呼入平均,总时长,总平均"+'\r\n'
for (let k = 0; k < att[1].querySelectorAll('tr').length ; k++) {

  stra = ""
  console.log(att[1].querySelectorAll('tr')[k].querySelectorAll('td'))
  $(att[1].querySelectorAll('tr')[k].querySelectorAll('td')).each(function (
    index, el) {
      if(index!=0 &&index!=1 && index!=8 && index!=9){
                  stra += $(el)[0].querySelectorAll('div')[0].innerText
                   stra += ','
                }else if(index == 1){
                  stra += $(el)[0].querySelectorAll('div')[0].innerHTML
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
open(){
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
          dateTime['start_time'] = $('.el-range-input')[0].value+" 00:00:00";
          dateTime['end_time'] =  $('.el-range-input')[1].value+" 23:59:59";
        }
        if(this.selectedOptions2.length>0){
          organiza_id = this.selectedOptions[this.selectedOptions.length-1].sid 
          organiza_type =this.selectedOptions2[this.selectedOptions2.length-1].mobile
        }else{
          organiza_id = this.selectedOptions[this.selectedOptions.length-1].sid
          organiza_type = ''
        }
        console.log(organiza_id,organiza_type)
        this.inquiry(dateTime,organiza_id,organiza_type)
        console.log(this.selectedOptions[this.selectedOptions.length-1].label,this.selectedOptions2.length> 0);
        if(this.selectedOptions2.length > 0){
          $('.xiangying').text(this.selectedOptions[this.selectedOptions.length-1].label+'-'+this.selectedOptions2[this.selectedOptions2.length-1].label)
        }else{
          $('.xiangying').text(this.selectedOptions[this.selectedOptions.length-1].label)
        }
      },
selectCon(num, name, Yname) {
_this = this
$('.container1 .condition-select span').each(function (index, el) {
$(el).removeClass('condition-select-active')
if (index == num) {
  $(el).addClass('condition-select-active')
  _this.init(name, Yname)
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
console.log(this.flindex)
$('.fl span').each(function (index, el) {
$(el).removeClass('time-active')
})
$($('.fl span')[this.flindex]).addClass('time-active')
console.log(this.flindex)
this.activeIndexa = num
var dateTime = {};
// $('.el-range-input')[0].value = this.getNowFormatDate(new Date(new Date().getTime()-24*60*60*1000))
// $('.el-range-input')[1].value =  this.getNowFormatDate(new Date())
if(this.activeIndexa != 1){
	dateTime['start_time'] = this.getNowFormatDate(new Date(new Date().getTime()))+' 00:00:00';
          dateTime['end_time'] =  this.getNowFormatDate(new Date(new Date().getTime()))+' 23:59:59';
}else{
	dateTime['start_time'] = this.getNowFormatDate(new Date(new Date().getTime()))+' 00:00:00';
          dateTime['end_time'] =  this.getNowFormatDate(new Date(new Date().getTime()))+' 23:59:59';
}

        organiza_id = '1';
        organiza_type = '';
        this.selectedOptions =[];
        this.selectedOptions.push(this.options[0].value)
        this.selectedOptions2 =[];
        this.inquiry(dateTime,organiza_id,organiza_type)
},
export (att, res) {
str = "";
console.log(att[0].querySelectorAll('tr'),res);
str=" ,呼出,,,呼入,,,呼出+呼入,,,时长"+'\r\n'+"日期,总数,接通数,接通率,总数,接通数,接通率,总数,接通数,接通率,呼出,呼出平均,呼入,呼入平均,总时长,总平均"+'\r\n'
for (let k = 0; k < att[1].querySelectorAll('tr').length ; k++) {

  stra = ""
  console.log(att[1].querySelectorAll('tr')[k].querySelectorAll('td'))
  $(att[1].querySelectorAll('tr')[k].querySelectorAll('td')).each(function (
    index, el) {
    stra += $(el)[0].querySelectorAll('div')[0].innerHTML
    stra += ','
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
handleSizeChange: function (size) {
this.pagesize = size;
console.log(this.pagesize) //每页下拉显示数据
},
handleCurrentChange: function (currentPage) {
this.currentPage = currentPage;
console.log(this.currentPage) //点击第几页
},
handleSizeChange1: function (size) {
this.pagesize1 = size;
console.log(this.pagesize1) //每页下拉显示数据
},
handleCurrentChange1: function (currentPage) {
this.currentPage1 = currentPage;
console.log(this.currentPage1) //点击第几页
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
this.multipleSelection = val;
console.log(this.multipleSelection.length)
$('.cSpan').text(this.multipleSelection.length)
},
luyin() {
console.log(this.multipleSelection)
}
}
})
var myChart = echarts.init(document.getElementById('myChart'));

//使用制定的配置项和数据显示图表
myChart.setOption(option);
</script>

</html>