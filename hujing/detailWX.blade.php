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

    .el-table--border td,
    .el-table--border th,
    .el-table__body-wrapper .el-table--border.is-scrolling-left~.el-table__fixed {
      border-right: 1px solid #ebeef5;
      text-align: center;
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

    .el-input__inner {
      height: 34px;
    }

    .el-date-editor .el-range-separator {
      line-height: 26px;
    }

    .el-date-editor--daterange.el-input__inner {
      width: 300px
    }

    .ant-calendar-top[data-v-73e88992] {
      color: #616161;
      padding: 8px;
      border-bottom: 1px solid #f3f3f3;
    }

    .el-icon-date:before {
      content: "\E608";
      position: absolute;
      top: 0;
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
    .users-dialog[data-v-b2b42f88] {
    position: relative;
    max-width: 350px;
    min-height: 20px;
    background: #fff;
    border-radius: 5px;
    line-height: 20px;
    margin-left: 20px;
    word-break: break-word;
    color: #000;
    /* padding: 10px; */
    /* border: 1px solid #e1e1e1; */
    float: left;
}
  </style>
</head>

<body>
  <div id="app">
    <div data-v-2713df1d="" style="min-width: 1200px;">
      <div data-v-2713df1d="" class="ant-layout ant-layout-has-sider">
        <div data-v-2713df1d="" class="ant-layout-sider long-silder"
          style="flex: 0 0 200px; width: 200px; height: 100%;">
          <div data-v-2713df1d="" class="logo" onclick="window.location.href = '{{Url("wechat/indexWX")}}'">火种教育</div>
          <div data-v-2713df1d="" class="line"></div>
          <ul data-v-2713df1d="" class="v-ul active" style="overflow: auto; height: 595px;">
            <div data-v-2713df1d="" class="el-scrollbar">
              <div class="el-scrollbar__wrap" style="overflow:hidden;margin-bottom: -17px; margin-right: -17px;">
                <div class="el-scrollbar__view">
                <li data-v-2713df1d="" class="v-li v-li2" @click="navText(0)">
                    <span data-v-2713df1d="" class="nav-text nav-text1">
                      沟通内容
                    </span></li>
                  <li data-v-2713df1d="" style="display:none" class="v-li v-li2" @click="navText(1)">
                    <span data-v-2713df1d="" class="nav-text">
                      敏感词
                      <span data-v-2713df1d="">([[userCount.sensitive_word_count]])</span></span></li>
                  <li data-v-2713df1d="" class="v-li v-li2" @click="navText(2)">
                    <span data-v-2713df1d="" class="nav-text">
                      手机号
                      <span data-v-2713df1d="">([[userCount.mobile == undefined?'0':userCount.mobile.num]])</span></span></li>
                  <li data-v-2713df1d="" class="v-li v-li2" @click="navText(3)">
                    <span data-v-2713df1d="" class="nav-text">
                      图片
                      <span data-v-2713df1d="">([[userCount.image== undefined?'0':userCount.image.num]])</span></span></li>
                  <li data-v-2713df1d="" class="v-li v-li2" @click="navText(4)">
                    <span data-v-2713df1d="" class="nav-text">
                      链接
                      <span data-v-2713df1d="">([[userCount.link== undefined?'0':userCount.link.num]])</span></span></li>
                  <li data-v-2713df1d="" class="v-li v-li2" @click="navText(5)">
                    <span data-v-2713df1d="" class="nav-text">
                      添加好友
                      <span data-v-2713df1d="">([[userCount.adddata == undefined?'0':userCount.adddata.num]])</span></span></li>
                  <li data-v-2713df1d="" class="v-li v-li2" @click="navText(6)">
                    <span data-v-2713df1d="" class="nav-text">
                      删除好友
                      <span data-v-2713df1d="">([[userCount.deletedata == undefined?'0':userCount.deletedata.num]])</span></span></li>
                  <li data-v-2713df1d="" class="v-li v-li2" @click="navText(7)">
                    <span data-v-2713df1d="" class="nav-text">
                      拉黑好友
                      <span data-v-2713df1d="">([[userCount.blockdata == undefined?'0':userCount.blockdata.num]])</span></span></li>
                  <li data-v-2713df1d="" class="v-li v-li2" @click="navText(8)">
                    <span data-v-2713df1d="" class="nav-text">
                      屏蔽好友
                      <span data-v-2713df1d="">([[userCount.shielddata == undefined?'0':userCount.shielddata.num]])</span></span></li>
                  <li data-v-2713df1d="" class="v-li v-li2" @click="navText(9)">
                    <span data-v-2713df1d="" class="nav-text">
                      红包转账
                      <span data-v-2713df1d="">([[userCount.money == undefined?'0':userCount.money.num]])</span></span></li>
                  <li data-v-2713df1d="" style="display:none" class="v-li v-li2" @click="navText(10)">
                    <span data-v-2713df1d="" class="nav-text">
                      发朋友圈
                      <span data-v-2713df1d="">([[userCount.circle_friend_count]])</span></span></li>
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
    src="./static/img/logo.23f2859.png" width="42px" height="42px"></div> -->

        </div>
        <div data-v-2713df1d="" class="ant-layout-content" style="padding: 10px; overflow: auto; height: 100%;">
          <div data-v-16750612="" data-v-2713df1d="" class="v-container v-no-modal-footer" style="overflow:auto">
            <div data-v-16750612="" class="header">
              <div data-v-16750612="" class="common-title" v-html="sale"></div>
              <div data-v-16750612="" class="time time-panel clearfix">
                <div data-v-16750612="" class="clearfix fl" style="">
                  <span data-v-16750612="" class="time-option" @click="flclick(0)">今日</span>
                  <span data-v-16750612="" @click="flclick(1)" class="time-option">昨日</span>
                  <span data-v-16750612="" @click="flclick(2)" class="time-option time-active">自定义时间段</span>
                  <template v-if="flindex == 2">
                    <div class="block" style="display:inline-block">
                      <el-date-picker v-model="value7" type="daterange" align="right" unlink-panels
                        start-placeholder="开始日期"  @change="optchange"  end-placeholder="结束日期" :picker-options="pickerOptions2">
                      </el-date-picker>
                    </div>
                  </template>
                </div>
                <div data-v-16750612="" v-if="navIndex == 0" class="clearfix" style="float: right; width: 215px;"><input data-v-16750612=""
                    type="text" placeholder="搜索聊天记录" autocomplete="off" maxlength="20" class="ant-input search-btn"
                    style="height: 33px; margin-right: 10px; padding-right: 22px; width: 120px;"
                    v-model="sousuonavInput" @keyup.13="sousuonav(sousuonavInput)">
                  <button @click="dcHtml" data-v-16750612="" type="button" class="ant-btn ant-btn-primary">

                    <span>导出</span></button></div>
              </div>
            </div>
            <div data-v-16750612="" v-if="navIndex == 0" class="v-content clearfix" style="padding-bottom: 10px;">
              <div data-v-16750612="" class="chat-list" style="width: 30%; float: left;">
                <div data-v-16750612="" v-show="userTitle == 0" class="user-title" style="padding-left: 50px;">
                  客户
                  <span data-v-16750612="" class="user-title-btn"><i data-v-16750612=""
                      class="anticon anticon-search"></i> <span data-v-16750612="" class="user-title-font"
                      @click="userTitle = 1">搜索</span></span></div>
                <div data-v-16750612="" v-show="userTitle == 1" class="user-title"
                  style="padding: 5px; position: relative; display: none;">
                  <input data-v-16750612="" type="text" placeholder="搜索" autocomplete="off" autofocus="autofocus"
                    maxlength="20" class="ant-input" style="height: 41px;" v-model="searchInput"
                    @keyup.13="sousuo(searchInput)"> <span data-v-16750612=""
                    style="position: absolute; right: 15px; top: 17px; color: rgb(217, 217, 217); cursor: pointer;"
                    @click="userTitle = 0"><i data-v-16750612="" class="anticon anticon-close"></i></span></div>
                <div data-v-16750612="" class="ant-spin" style="position: relative; top: 50px; width: 100%;"><span
                    class="ant-spin-dot"><i></i> <i></i> <i></i> <i></i></span>
                  <div class="ant-spin-text" style="display: none;"></div>
                </div>

                <ul data-v-16750612="" class="user-content chat-content" style="height: 509px;">
                  <div data-v-16750612="" class="el-scrollbar">
                    <div class="el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                      <div class="el-scrollbar__view Atindex">
                        <li v-for="(item,index) in chat" :Aindex="index" @click="activeItem(item,index)"
                          data-v-16750612=""
                          :class="[item.is_group == 1?'user-item':'user-item user-items' ]+' '+[index == Atindex?'active':'' ]">
                          <span data-v-16750612="" style="display: inline-block; text-align: center; margin-right: 9px;"
                            v-if="item.is_group  == 1"><img data-v-16750612="" title="群聊" src="{{asset('wechat/group.png')}}"></span>
                          <span data-v-16750612=""
                            style="display: inline-flex; width: 65%; height: 47px; overflow: hidden;">[[ item.notename]]</span>
                          
                        </li>
                      </div>
                    </div>
                    <div class="el-scrollbar__bar is-horizontal">
                      <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                    </div>
                    <div class="el-scrollbar__bar is-vertical">
                      <div class="el-scrollbar__thumb" style="height: 55.5921%; transform: translateY(0%);"></div>
                    </div>
                  </div>
                </ul>
                <!-- <div data-v-16750612="" class="clearfix pagination-style content-pagination1"
                  style="text-align: center;">
                  <div data-v-16750612="" class="clearfix" style="display: inline-block;">
                    <div data-v-16750612="" class="pagination-none"
                      style="float: right; height: 24px; line-height: 24px;">&nbsp;&nbsp;共19条</div>
                    <div data-v-16750612="" class="pagination-none"
                      style="float: right; height: 24px; line-height: 24px; cursor: pointer;">尾页</div>
                    <div data-v-16750612="" style="float: right;">
                      <div data-v-16750612="">
                        <ul class="ant-pagination ant-pagination-simple">
                          <li title="上一页" class="ant-pagination-prev"><a class="ant-pagination-item-link"></a></li>
                          <li title="1" class="ant-pagination-simple-pager" style="margin-right: 8px;"><input
                              type="text"> <span class="ant-pagination-slash">／</span>
                            1
                          </li>
                          <li title="下一页" class="ant-pagination-next"><a class="ant-pagination-item-link"></a></li>
                        </ul>
                      </div>
                    </div>
                    <div data-v-16750612="" class="pagination-none"
                      style="float: right; height: 24px; line-height: 24px; cursor: pointer;">首页</div>
                  </div>
                </div> -->
              </div>
              <div data-v-16750612="" class="chat-list" style="position: relative;">
                <div data-v-16750612="" class="chat-title1">聊天记录</div>


                <ul data-v-16750612="" class="chat-content" style="height: 509px;">

                  <div data-v-16750612="" class="el-scrollbar" id="viewBox">
                    <div class="el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                      <div class="el-scrollbar__view">
                        <li data-v-16750612="" style="list-style: none;
                        overflow: hidden;" v-for="item in showChat" v-if="item.type != 570425393" class="chat-item">

                         
                          <div data-v-16750612="" class="clearfix"><img data-v-16750612="" alt="头像"
                              :src="item.headimage" :style="getSyle(item.issent)">
                            <div data-v-16750612="" :style="getSyle2(item.issent)">
                              <span data-v-16750612="">[[item.name]]&nbsp;&nbsp;&nbsp;&nbsp;</span>[[item.send_time]]
                            </div>
                            <div v-if="item.type != 436207665 && item.type != 419430449 " data-v-16750612=""
                              class="users-dialog dialog-word"
                              :style="getSyle3(item.issent)"><span data-v-16750612="" v-html="item.content"></span>
                            </div>
                            <div v-if="item.type == 436207665" data-v-b2b42f88="" class="users-dialog dialog-money"
                              style="margin-left: 0px;">
                              <div data-v-b2b42f88="" style="width: 350px; height: 134px; position: relative;"><img
                                  data-v-b2b42f88=""
                                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAQCAYAAAArij59AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACZSURBVChThZDLCsIwEEXzZX6Bb7cuBX/KnVoXCuLvWPHtrrXWZQbutamkWJLYA7M6ByYZxQBI9pTthN4AaUw9b1PPWm6A55F60S2lEyA7US97lawFeF0K2a/JKkB+o0RDR5YB8gdlNfJKM0rWY6+wo2TTEODdsOL7yHsw+vnmlToahAMDsnP4UJa/p7YgPRRRJxwYkMSU3ZQf38OqAmrdB3wAAAAASUVORK5CYII="
                                  style="position: absolute; top: 18px; left: -7px;">
                                <div data-v-b2b42f88="" class="clearfix"
                                  style="background-color: rgb(250, 156, 62); width: 100%; border-radius: 4px 4px 0px 0px; border-top: 1px solid rgb(225, 225, 225); border-right: 1px solid rgb(225, 225, 225); border-bottom: none; border-left: 1px solid rgb(225, 225, 225); border-image: initial;">
                                  <div data-v-b2b42f88=""
                                    style="float: left; width: 30%; height: 100px; text-align: center; padding-top: 20px;">
                                    <img data-v-b2b42f88="" src="https://wx.gtimg.com/hongbao/1800/hb.png"
                                      style="width: 56px;"></div>
                                  <div data-v-b2b42f88=""
                                    style="float: left; width: 70%; height: 100px; color: white; font-size: 18px; line-height: 32px;">
                                    <p data-v-b2b42f88="" title="我给你发了一个红包，赶紧去拆!"
                                      style="padding-top: 18px; height: 52px; overflow: hidden;">我给你发了一个红包，赶紧去拆!</p>
                                    <p data-v-b2b42f88="" style="font-size: 13px;">领取红包</p>
                                  </div>
                                </div>
                                <div data-v-b2b42f88=""
                                  style="background-color: rgb(255, 255, 255); height: 32px; line-height: 32px; padding-left: 15px; border-radius: 0px 0px 4px 4px; border-top: none; border-right: 1px solid rgb(225, 225, 225); border-bottom: 1px solid rgb(225, 225, 225); border-left: 1px solid rgb(225, 225, 225); border-image: initial; font-size: 16px;">
                                  微信红包
                                </div>
                              </div>
                            </div>
                            <div v-if="item.type == 419430449" data-v-b2b42f88="" class="users-dialog dialog-money"
                            style="margin-left: 0px;">
                            <div data-v-b2b42f88="" style="width: 350px; height: 134px; position: relative;"><img
                                data-v-b2b42f88=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAQCAYAAAArij59AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACZSURBVChThZDLCsIwEEXzZX6Bb7cuBX/KnVoXCuLvWPHtrrXWZQbutamkWJLYA7M6ByYZxQBI9pTthN4AaUw9b1PPWm6A55F60S2lEyA7US97lawFeF0K2a/JKkB+o0RDR5YB8gdlNfJKM0rWY6+wo2TTEODdsOL7yHsw+vnmlToahAMDsnP4UJa/p7YgPRRRJxwYkMSU3ZQf38OqAmrdB3wAAAAASUVORK5CYII="
                                style="position: absolute; top: 18px; left: -7px;">
                              <div data-v-b2b42f88="" class="clearfix"
                                style="background-color: rgb(250, 156, 62); width: 100%; border-radius: 4px 4px 0px 0px; border-top: 1px solid rgb(225, 225, 225); border-right: 1px solid rgb(225, 225, 225); border-bottom: none; border-left: 1px solid rgb(225, 225, 225); border-image: initial;">
                                <div data-v-b2b42f88=""
                                  style="float: left; width: 30%; height: 100px; text-align: center; padding-top: 20px;">
                                  <img data-v-b2b42f88="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAYAAADFeBvrAAAEeUlEQVRogd2az28VVRTHPzM0ivEV4g90Z1q0RROx0kJoYSEsC0t3ogv/AU3UlSZIXLgqILpEExMgxkQXsHApmlhaFgK6ENRAo0UbSlsjSJpAyZfFPdMZXue9Nz/u9LWe5OTOzL33nPOde+/MveecQBIeqRd4CXjRrp8GHgc6rf4mMANcBn4DLgDf27UXCjwA2gy8DrwMPFVQxp/A18DnwM9ljCkKKACGgfeAHYnn08B3wDhwCbgCXAduWf3DwAagG3gOGAR2AU8kZJwBPgS+AfIbJykvD0gaU0xzkj6RNCQpKCAvkLRN0iGTFdGY6colL0/jtZIOS7prCqckvS2pVgBEI66ZzCnTcVfSEdPtFVCPpPOm5I69TZ9A0oAdMl0y3T2+AA1JmjXBFyX1VwiknvtNp8yGobKAhiXdMoGnJK1bRjARd5pumS3DRQFtT4D5VNKaNoCJeI3ZEIHanhfQM5JmTMBnKvb18s2B2SK56Ze6ptI6PijpnHU82eaRSRupk2bbObO1JaAj1uGypPUrAEQ9rzfbZLY2BTQgaUHuc5n7p7aMPGA2LtTbmWwUSDpryA96VL5O0rEKQB00W8eUWOPJBnutwZTcp9KH0h2Srphc34Bqkv422XvTAP1gle94UNYhab/iP30VgJD0pskerQf0glXMqvyWpivxcpJUBaCHFP9e+iQR2qb7NSuPAf/l3rLH9ArwE7CzhIw8NA8ct2uHwZBeNZTbCr6paOE3oypGCLNZkiZlU+55ezCtYjuC5MJvB6BA0jXT0Rsmpse35DshdgDv43wC3X5mUCEScNqud4VAv92M5xDShTtqH8ABazdFtveFwLN2k9XzstwLPwv9auWmDmJPTVZAJwoqLeteCprU/W7lxhB4zG6mSypsJ12zckMgKXpzzd7AaiABiz/W1U4PWHm7A+ee7TS+maGzV99xDmo2gxZdzSEwazdPVmtPpfSIlf+GOL8yOOd6FgpKcl66QbzXbEQ9Vl4NcT5oyA5oOekMLpJxvEW7TVZeCoHzdjNYlVUFaAH4ABeamcjQPrL9Rx+b07zciiYk7Sy6OY0e/mUPih4ffAE6ofze2a3Wd1KKD3hfWLnP89TJStHC32fXeehVK78EFg94fYZyRtVGFdJGaFRSd0FZS47gycpRq/DhJMkC6I6kA3IOlaKy3ki8FOoBJd1YVY6SlH/hp3FLN1ZVjsZ6LrLw03jEbD2rBo5GdL8reEuFoMryFmVwBUccOesvyp8H1Sd3SvrFbGzprEcuQLtawilLgsmNOvYoDrEf1coJeB01m/6R1JvWrpmA/1VIMuI9kuZN0Cm1Z00lg8bzZlPD9lkE7lY8/doZ1p8zW5r2ySq4PvFiRNUnXoyoosSLiNdK+kj3p8a85RlYzWQmU2M+VgWpMUkekDSumHwkL23V0uSlcRWI85ZJL9sDvMvS9LLTxOllE/YsijnVcOllG3Eu6EFgNx7Ty1ZKAuAk8BVtTABsRL24hL4oRbMLeBQ3MuBGag74A+dgv4CLYnhL0bwHVavIAgvIDsgAAAAASUVORK5CYII="
                                    style="width: 56px;"></div>
                                <div data-v-b2b42f88=""
                                  style="float: left; width: 70%; height: 100px; color: white; font-size: 18px; line-height: 32px;">
                                  <p data-v-b2b42f88="" title="我给你发了一个红包，赶紧去拆!"
                                    style="padding-top: 18px; height: 52px; overflow: hidden;">收到转账[[item.money]]元。如需收钱</p>
                                  <p data-v-b2b42f88="" style="font-size: 13px;">￥[[item.money]]</p>
                                </div>
                              </div>
                              <div data-v-b2b42f88=""
                                style="background-color: rgb(255, 255, 255); height: 32px; line-height: 32px; padding-left: 15px; border-radius: 0px 0px 4px 4px; border-top: none; border-right: 1px solid rgb(225, 225, 225); border-bottom: 1px solid rgb(225, 225, 225); border-left: 1px solid rgb(225, 225, 225); border-image: initial; font-size: 16px;">
                                微信转账
                              </div>
                            </div>
                          </div>
                          </div>
                          
                        </li>

                      </div>
                    </div>
                    <div class="el-scrollbar__bar is-horizontal">
                      <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                    </div>
                    <div class="el-scrollbar__bar is-vertical">
                      <div class="el-scrollbar__thumb" style="height: 9.63168%; transform: translateY(0%);"></div>
                    </div>
                  </div>
                </ul>
              </div>
            </div>
            <div data-v-16750612="" v-if="navIndex == 1" class="v-content clearfix" style="padding-bottom: 10px;">
              <template>
                <el-table :data="tableData4" border style="width: 100%">
                  <el-table-column fixed prop="date" label="客户" width="280">
                  </el-table-column>
                  <el-table-column prop="addFriendCount" label="敏感词" width="330">
                  </el-table-column>
                  <el-table-column prop="activeApplyCount" label="时间" width="330">
                  </el-table-column>
                  <el-table-column prop="sendMessageCount" label="上下文" width="380">
                  </el-table-column>
                </el-table>
              </template>
            </div>
            <div data-v-16750612="" v-if="navIndex == 2" class="v-content clearfix" style="padding-bottom: 10px;">
              <template>
                <el-table :data="tableData4" border style="width: 100%">
                  <el-table-column fixed prop="customer" label="客户" width="280">
                  </el-table-column>
                  <el-table-column prop="mobile" label="手机号" width="330">
                  </el-table-column>
                  <el-table-column prop="dateTime" label="时间" width="330">
                  </el-table-column>
                  <el-table-column prop="sendMessageCount" label="上下文" width="380">
                      <template slot-scope="scope">
                          <div style="">
                            <el-button type="text" size="small" @click="viewCon(scope.row)">[[scope.row.mobile]]
                            </el-button>
                          </div>
                        </template>
                  </el-table-column>
                </el-table>
              </template>
            </div>
            <div data-v-00140ed8="" id="back-top-target" v-if="navIndex == 3" style="height: auto;">
              <div data-v-00140ed8="" v-for="(item,index) in showImage" class="yhq-card">
                <div data-v-00140ed8="" class="ant-card ant-card-bordered">
                  <div class="ant-card-body">
                    <div data-v-00140ed8="" class="clearfix yhq-card-title"><span data-v-00140ed8=""
                        style="float: left;">[[item.customer]]</span> <span data-v-00140ed8=""
                        style="float: right;">[[item.dateTime]]</span></div>
                    <div data-v-00140ed8="" class="card-img-container"><img data-v-00140ed8="" :src="item.content">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div data-v-b9bcebc2="" v-if="navIndex == 4" class="v-content">
              <div data-v-b9bcebc2="" class="el-scrollbar">
                <div class="el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                  <div class="el-scrollbar__view">
                    <div data-v-b9bcebc2="" id="back-top-target" style="height: auto;">
                      <div data-v-b9bcebc2="" v-for="(item,index) in showlianjie" class="yhq-card">
                        <div data-v-b9bcebc2="" class="ant-card ant-card-bordered">
                          <div class="ant-card-body" style="padding: 0">
                            <div data-v-b9bcebc2="" class="clearfix yhq-card-title"><span data-v-b9bcebc2=""
                                style="float: left;">[[item.customer]]</span> <span data-v-b9bcebc2=""
                                style="float: right;">[[item.dateTime]]</span></div>
                            <div data-v-b9bcebc2="" class="card-img-container"><span data-v-b9bcebc2=""
                                style="word-break: break-all;">[[item.content]]</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div data-v-b9bcebc2="" class="v-back-top" style="display: none;">Top</div>
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
            <div data-v-16750612="" v-if="navIndex == 5" class="v-content clearfix" style="padding-bottom: 10px;">
              <template>
                <el-table :data="tableData4" border  style="width: 100%;text-align: center">
                    <el-table-column prop="nickName" label="上下文" width="380">
                        <!-- <template slot-scope="scope">
                            <div style="">
                              <el-button type="text" size="small" @click="viewCon(scope.row)">[[scope.row.nickName}}
                              </el-button>
                            </div>
                          </template> -->
                    </el-table-column>
                  <el-table-column prop="noteName" label="好友备注" width="430">
                  </el-table-column>
                  <el-table-column prop="dateTime" label="添加时间" width="430">
                  </el-table-column>
                </el-table>
              </template>
            </div>
            <div data-v-16750612="" v-if="navIndex == 6" class="v-content clearfix" style="padding-bottom: 10px;">
              <template>
                <el-table :data="tableData4" border style="width: 100%;text-align: center">
                  <el-table-column fixed prop="nickName" label="删除好友" width="645">
                  </el-table-column>
                  <el-table-column prop="dateTime" label="删除时间" width="645">
                  </el-table-column>
                </el-table>
              </template>
            </div>
            <div data-v-16750612="" v-if="navIndex == 7" class="v-content clearfix" style="padding-bottom: 10px;">
              <template>
                <el-table :data="tableData4" border style="width: 100%;text-align: center">
                  <el-table-column fixed prop="nickName" label="拉黑好友" width="645">
                  </el-table-column>
                  <el-table-column prop="dateTime" label="拉黑时间" width="645">
                  </el-table-column>
                </el-table>
              </template>
            </div>
            <div data-v-16750612="" v-if="navIndex == 8" class="v-content clearfix" style="padding-bottom: 10px;">
              <template>
                <el-table :data="tableData4" border style="width: 100%;text-align: center">
                  <el-table-column fixed prop="nickName" label="屏蔽好友" width="645">
                  </el-table-column>
                  <el-table-column prop="dateTime" label="屏蔽时间" width="645">
                  </el-table-column>
                </el-table>
              </template>
            </div>
            <div data-v-e1d94ad6="" v-if="navIndex == 9" class="v-content">
              <div data-v-e1d94ad6="" class="el-scrollbar">
                <div class="el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                  <div class="el-scrollbar__view">
                    <div data-v-e1d94ad6="" id="back-top-target" style="height: auto;">
                      <div v-for="(item,index) in showHongbao" data-v-e1d94ad6="" class="yhq-card">
                        <div data-v-e1d94ad6="" class="ant-card ant-card-bordered">
                          <div class="ant-card-body" style="padding: 0">
                            <div data-v-e1d94ad6="" class="clearfix yhq-card-title"><span data-v-e1d94ad6=""
                                style="float: left;">[[item.customer]]</span> <span data-v-e1d94ad6=""
                                style="float: right;">[[item.dateTime]]</span></div>
                            <div data-v-e1d94ad6="" class="card-img-container">
                              <div data-v-e1d94ad6=""
                                style="width: 350px; height: 134px; position: relative; cursor: pointer;"><img
                                  data-v-e1d94ad6=""
                                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAQCAYAAAArij59AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACZSURBVChThZDLCsIwEEXzZX6Bb7cuBX/KnVoXCuLvWPHtrrXWZQbutamkWJLYA7M6ByYZxQBI9pTthN4AaUw9b1PPWm6A55F60S2lEyA7US97lawFeF0K2a/JKkB+o0RDR5YB8gdlNfJKM0rWY6+wo2TTEODdsOL7yHsw+vnmlToahAMDsnP4UJa/p7YgPRRRJxwYkMSU3ZQf38OqAmrdB3wAAAAASUVORK5CYII="
                                  style="position: absolute; top: 18px; left: -7px;">
                                <div data-v-e1d94ad6=""
                                  class="clearfix"
                                  style="background-color: rgb(250, 156, 62); width: 100%; border-radius: 4px 4px 0px 0px; border-top: 1px solid rgb(225, 225, 225); border-right: 1px solid rgb(225, 225, 225); border-bottom: none; border-left: 1px solid rgb(225, 225, 225); border-image: initial;">
                                  <div data-v-e1d94ad6=""
                                    style="float: left; width: 30%; height: 100px; text-align: center; padding-top: 20px;">
                                    <img data-v-e1d94ad6="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAYAAADFeBvrAAAEeUlEQVRogd2az28VVRTHPzM0ivEV4g90Z1q0RROx0kJoYSEsC0t3ogv/AU3UlSZIXLgqILpEExMgxkQXsHApmlhaFgK6ENRAo0UbSlsjSJpAyZfFPdMZXue9Nz/u9LWe5OTOzL33nPOde+/MveecQBIeqRd4CXjRrp8GHgc6rf4mMANcBn4DLgDf27UXCjwA2gy8DrwMPFVQxp/A18DnwM9ljCkKKACGgfeAHYnn08B3wDhwCbgCXAduWf3DwAagG3gOGAR2AU8kZJwBPgS+AfIbJykvD0gaU0xzkj6RNCQpKCAvkLRN0iGTFdGY6colL0/jtZIOS7prCqckvS2pVgBEI66ZzCnTcVfSEdPtFVCPpPOm5I69TZ9A0oAdMl0y3T2+AA1JmjXBFyX1VwiknvtNp8yGobKAhiXdMoGnJK1bRjARd5pumS3DRQFtT4D5VNKaNoCJeI3ZEIHanhfQM5JmTMBnKvb18s2B2SK56Ze6ptI6PijpnHU82eaRSRupk2bbObO1JaAj1uGypPUrAEQ9rzfbZLY2BTQgaUHuc5n7p7aMPGA2LtTbmWwUSDpryA96VL5O0rEKQB00W8eUWOPJBnutwZTcp9KH0h2Srphc34Bqkv422XvTAP1gle94UNYhab/iP30VgJD0pskerQf0glXMqvyWpivxcpJUBaCHFP9e+iQR2qb7NSuPAf/l3rLH9ArwE7CzhIw8NA8ct2uHwZBeNZTbCr6paOE3oypGCLNZkiZlU+55ezCtYjuC5MJvB6BA0jXT0Rsmpse35DshdgDv43wC3X5mUCEScNqud4VAv92M5xDShTtqH8ABazdFtveFwLN2k9XzstwLPwv9auWmDmJPTVZAJwoqLeteCprU/W7lxhB4zG6mSypsJ12zckMgKXpzzd7AaiABiz/W1U4PWHm7A+ee7TS+maGzV99xDmo2gxZdzSEwazdPVmtPpfSIlf+GOL8yOOd6FgpKcl66QbzXbEQ9Vl4NcT5oyA5oOekMLpJxvEW7TVZeCoHzdjNYlVUFaAH4ABeamcjQPrL9Rx+b07zciiYk7Sy6OY0e/mUPih4ffAE6ofze2a3Wd1KKD3hfWLnP89TJStHC32fXeehVK78EFg94fYZyRtVGFdJGaFRSd0FZS47gycpRq/DhJMkC6I6kA3IOlaKy3ki8FOoBJd1YVY6SlH/hp3FLN1ZVjsZ6LrLw03jEbD2rBo5GdL8reEuFoMryFmVwBUccOesvyp8H1Sd3SvrFbGzprEcuQLtawilLgsmNOvYoDrEf1coJeB01m/6R1JvWrpmA/1VIMuI9kuZN0Cm1Z00lg8bzZlPD9lkE7lY8/doZ1p8zW5r2ySq4PvFiRNUnXoyoosSLiNdK+kj3p8a85RlYzWQmU2M+VgWpMUkekDSumHwkL23V0uSlcRWI85ZJL9sDvMvS9LLTxOllE/YsijnVcOllG3Eu6EFgNx7Ty1ZKAuAk8BVtTABsRL24hL4oRbMLeBQ3MuBGag74A+dgv4CLYnhL0bwHVavIAgvIDsgAAAAASUVORK5CYII="
                                      style="width: 56px;"></div>
                                  <div data-v-e1d94ad6=""
                                    style="float: left; width: 70%; height: 100px; color: white; font-size: 18px; line-height: 32px;">
                                    <p data-v-e1d94ad6=""
                                      style="padding-top: 18px; height: 52px; overflow: hidden;">
                                     红包/转账</p>
                                    <p data-v-e1d94ad6="" style="font-size: 13px;"></p>
                                  </div>
                                </div>
                                <div data-v-e1d94ad6=""
                                  style="background-color: rgb(255, 255, 255); height: 32px; line-height: 32px; padding-left: 15px; border-radius: 0px 0px 4px 4px; border-top: none; border-right: 1px solid rgb(225, 225, 225); border-bottom: 1px solid rgb(225, 225, 225); border-left: 1px solid rgb(225, 225, 225); border-image: initial; font-size: 16px;">
                                  红包/转账
                                </div>
                               
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                    </div>
                    <div data-v-e1d94ad6="" class="v-back-top" style="display: none;">Top</div>
                  </div>
                </div>
                <div class="el-scrollbar__bar is-horizontal">
                  <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                </div>
                <div class="el-scrollbar__bar is-vertical">
                  <div class="el-scrollbar__thumb" style="transform: translateY(0%); height: 47.016%;"></div>
                </div>
              </div>
            </div>
            <div data-v-ac3251c0="" v-if="navIndex == 10" class="v-content">
              <div data-v-ac3251c0="" class="el-scrollbar">
                <div class="el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                  <div class="el-scrollbar__view">
                    <div data-v-ac3251c0="" id="back-top-target" style="height: auto;">
                      <div data-v-ac3251c0="" v-for="(item,index) in showFriend" class="yhq-card">
                        <div data-v-ac3251c0="" class="ant-card ant-card-bordered">
                          <div class="ant-card-body" style="padding:0">
                            <div data-v-ac3251c0="" class="clearfix yhq-card-title"><span data-v-ac3251c0=""
                                style="float: right;">[[item.createTime]]</span></div>
                            <div data-v-ac3251c0="" class="card-img-container">
                              [[JSON.parse(item.content).title]]
                              <div data-v-ac3251c0="" style="line-height: 32px;"></div>
                              <ul v-if="JSON.parse(item.content).media.title == ''" data-v-ac3251c0="" class="clearfix"
                                style="max-width: 450px;">
                                <li v-for="(Item,Index) in JSON.parse(item.content).media.items" data-v-ac3251c0=""
                                  style="width: 150px; height: 150px; padding: 0px 5px 5px 0px; float: left; overflow: hidden;">
                                  <img data-v-ac3251c0=""
                                    :src="'http://login.aihujing.com/image/getImage?ossKey='+Item.media_url"
                                    style="width: 100%;"></li>
                              </ul>
                              <div v-if="JSON.parse(item.content).media.title == '微信小视频'" data-v-ac3251c0="">
                                <video data-v-ac3251c0="" :src="JSON.parse(item.content).media.items[0].media_url"
                                  controls="controls" style="max-width: 100%;"></video></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div data-v-ac3251c0="" class="v-back-top" style="display: none;">Top</div>
                  </div>
                </div>
                <div class="el-scrollbar__bar is-horizontal">
                  <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                </div>
                <div class="el-scrollbar__bar is-vertical">
                  <div class="el-scrollbar__thumb" style="transform: translateY(0%); height: 8.38455%;"></div>
                </div>
              </div>
            </div>
            <div data-v-16750612="" v-if="navIndex == 11" class="v-content" style="">
              <div data-v-16750612="" class="chat-title">搜索结果</div>
              <ul data-v-16750612="" class="chat-content-search">
                <li data-v-16750612="" v-for="(item,index) in filterChat" class="chat-item-search clearfix"
                  style="border: 1px solid rgb(222, 223, 225);">
                  <div data-v-16750612="">
                    <div data-v-16750612="" class="search-content-box clearfix">
                      <div data-v-16750612="" style="padding: 10px 0px; font-weight: 600;">[[item.username]]</div>
                      <div data-v-16750612="" style="max-width: 1150px; word-break: break-all;" v-html="item.content">
                      </div>
                    </div>
                    <div data-v-16750612="" class="search-data-box clearfix">
                      <div data-v-16750612="" style="padding: 20px 0px;">[[item.dateTime]]</div>
                      <div data-v-16750612="" class="check-content-button" @click="viewCon(item)">查看上下文</div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div data-v-16750612="" v-if="model1 == 1" style="display: none">
              <div class="ant-modal-mask"></div>
              <div role="dialog" aria-labelledby="vDialogTitle0" tabindex="-1" class="ant-modal-wrap"
                style="transform-origin: 1495px 255px;">
                <div role="document" class="ant-modal" style="width: 800px;">
                  <div class="ant-modal-content"><button aria-label="Close" @click="model1 = 0"
                      class="ant-modal-close"><span class="ant-modal-close-x"></span></button>
                    <div class="ant-modal-header">
                      <div id="vDialogTitle0" class="ant-modal-title">聊天内容</div>
                    </div>
                    <div class="ant-modal-body">
                      <div data-v-16750612="">
                        <ul data-v-16750612="" class="chat-content-modal onlyone-div">
                          <li data-v-16750612="" v-for="item in showChatcon" v-if="item.type != 570425393"
                            class="chat-item">

                            
                            <div data-v-16750612="" class="clearfix"><img data-v-16750612="" alt="头像"
                              :src="item.headimage" :style="getSyle(item.issent)">
                            <div data-v-16750612="" :style="getSyle2(item.issent)">
                              <span data-v-16750612="">[[item.name]]&nbsp;&nbsp;&nbsp;&nbsp;</span>[[item.send_time]]
                            </div>
                            <div v-if="item.type != 436207665 && item.type != 419430449 " data-v-16750612=""
                              :class="[item.issent == '0'?'users-dialog dialog-word':'sales-dialog dialog-word']"
                              style="margin-left: 0px;"><span data-v-16750612="" v-html="item.content"></span>
                            </div>
                            <div v-if="item.type == 436207665" data-v-b2b42f88="" class="users-dialog dialog-money"
                              style="margin-left: 0px;">
                              <div data-v-b2b42f88="" style="width: 350px; height: 134px; position: relative;"><img
                                  data-v-b2b42f88=""
                                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAQCAYAAAArij59AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACZSURBVChThZDLCsIwEEXzZX6Bb7cuBX/KnVoXCuLvWPHtrrXWZQbutamkWJLYA7M6ByYZxQBI9pTthN4AaUw9b1PPWm6A55F60S2lEyA7US97lawFeF0K2a/JKkB+o0RDR5YB8gdlNfJKM0rWY6+wo2TTEODdsOL7yHsw+vnmlToahAMDsnP4UJa/p7YgPRRRJxwYkMSU3ZQf38OqAmrdB3wAAAAASUVORK5CYII="
                                  style="position: absolute; top: 18px; left: -7px;">
                                <div data-v-b2b42f88="" class="clearfix"
                                  style="background-color: rgb(250, 156, 62); width: 100%; border-radius: 4px 4px 0px 0px; border-top: 1px solid rgb(225, 225, 225); border-right: 1px solid rgb(225, 225, 225); border-bottom: none; border-left: 1px solid rgb(225, 225, 225); border-image: initial;">
                                  <div data-v-b2b42f88=""
                                    style="float: left; width: 30%; height: 100px; text-align: center; padding-top: 20px;">
                                    <img data-v-b2b42f88="" src="https://wx.gtimg.com/hongbao/1800/hb.png"
                                      style="width: 56px;"></div>
                                  <div data-v-b2b42f88=""
                                    style="float: left; width: 70%; height: 100px; color: white; font-size: 18px; line-height: 32px;">
                                    <p data-v-b2b42f88="" title="我给你发了一个红包，赶紧去拆!"
                                      style="padding-top: 18px; height: 52px; overflow: hidden;">我给你发了一个红包，赶紧去拆!</p>
                                    <p data-v-b2b42f88="" style="font-size: 13px;">领取红包</p>
                                  </div>
                                </div>
                                <div data-v-b2b42f88=""
                                  style="background-color: rgb(255, 255, 255); height: 32px; line-height: 32px; padding-left: 15px; border-radius: 0px 0px 4px 4px; border-top: none; border-right: 1px solid rgb(225, 225, 225); border-bottom: 1px solid rgb(225, 225, 225); border-left: 1px solid rgb(225, 225, 225); border-image: initial; font-size: 16px;">
                                  微信红包
                                </div>
                              </div>
                            </div>
                            <div v-if="item.type == 419430449" data-v-b2b42f88="" class="users-dialog dialog-money"
                            style="margin-left: 0px;">
                            <div data-v-b2b42f88="" style="width: 350px; height: 134px; position: relative;"><img
                                data-v-b2b42f88=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAQCAYAAAArij59AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACZSURBVChThZDLCsIwEEXzZX6Bb7cuBX/KnVoXCuLvWPHtrrXWZQbutamkWJLYA7M6ByYZxQBI9pTthN4AaUw9b1PPWm6A55F60S2lEyA7US97lawFeF0K2a/JKkB+o0RDR5YB8gdlNfJKM0rWY6+wo2TTEODdsOL7yHsw+vnmlToahAMDsnP4UJa/p7YgPRRRJxwYkMSU3ZQf38OqAmrdB3wAAAAASUVORK5CYII="
                                style="position: absolute; top: 18px; left: -7px;">
                              <div data-v-b2b42f88="" class="clearfix"
                                style="background-color: rgb(250, 156, 62); width: 100%; border-radius: 4px 4px 0px 0px; border-top: 1px solid rgb(225, 225, 225); border-right: 1px solid rgb(225, 225, 225); border-bottom: none; border-left: 1px solid rgb(225, 225, 225); border-image: initial;">
                                <div data-v-b2b42f88=""
                                  style="float: left; width: 30%; height: 100px; text-align: center; padding-top: 20px;">
                                  <img data-v-b2b42f88="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAYAAADFeBvrAAAEeUlEQVRogd2az28VVRTHPzM0ivEV4g90Z1q0RROx0kJoYSEsC0t3ogv/AU3UlSZIXLgqILpEExMgxkQXsHApmlhaFgK6ENRAo0UbSlsjSJpAyZfFPdMZXue9Nz/u9LWe5OTOzL33nPOde+/MveecQBIeqRd4CXjRrp8GHgc6rf4mMANcBn4DLgDf27UXCjwA2gy8DrwMPFVQxp/A18DnwM9ljCkKKACGgfeAHYnn08B3wDhwCbgCXAduWf3DwAagG3gOGAR2AU8kZJwBPgS+AfIbJykvD0gaU0xzkj6RNCQpKCAvkLRN0iGTFdGY6colL0/jtZIOS7prCqckvS2pVgBEI66ZzCnTcVfSEdPtFVCPpPOm5I69TZ9A0oAdMl0y3T2+AA1JmjXBFyX1VwiknvtNp8yGobKAhiXdMoGnJK1bRjARd5pumS3DRQFtT4D5VNKaNoCJeI3ZEIHanhfQM5JmTMBnKvb18s2B2SK56Ze6ptI6PijpnHU82eaRSRupk2bbObO1JaAj1uGypPUrAEQ9rzfbZLY2BTQgaUHuc5n7p7aMPGA2LtTbmWwUSDpryA96VL5O0rEKQB00W8eUWOPJBnutwZTcp9KH0h2Srphc34Bqkv422XvTAP1gle94UNYhab/iP30VgJD0pskerQf0glXMqvyWpivxcpJUBaCHFP9e+iQR2qb7NSuPAf/l3rLH9ArwE7CzhIw8NA8ct2uHwZBeNZTbCr6paOE3oypGCLNZkiZlU+55ezCtYjuC5MJvB6BA0jXT0Rsmpse35DshdgDv43wC3X5mUCEScNqud4VAv92M5xDShTtqH8ABazdFtveFwLN2k9XzstwLPwv9auWmDmJPTVZAJwoqLeteCprU/W7lxhB4zG6mSypsJ12zckMgKXpzzd7AaiABiz/W1U4PWHm7A+ee7TS+maGzV99xDmo2gxZdzSEwazdPVmtPpfSIlf+GOL8yOOd6FgpKcl66QbzXbEQ9Vl4NcT5oyA5oOekMLpJxvEW7TVZeCoHzdjNYlVUFaAH4ABeamcjQPrL9Rx+b07zciiYk7Sy6OY0e/mUPih4ffAE6ofze2a3Wd1KKD3hfWLnP89TJStHC32fXeehVK78EFg94fYZyRtVGFdJGaFRSd0FZS47gycpRq/DhJMkC6I6kA3IOlaKy3ki8FOoBJd1YVY6SlH/hp3FLN1ZVjsZ6LrLw03jEbD2rBo5GdL8reEuFoMryFmVwBUccOesvyp8H1Sd3SvrFbGzprEcuQLtawilLgsmNOvYoDrEf1coJeB01m/6R1JvWrpmA/1VIMuI9kuZN0Cm1Z00lg8bzZlPD9lkE7lY8/doZ1p8zW5r2ySq4PvFiRNUnXoyoosSLiNdK+kj3p8a85RlYzWQmU2M+VgWpMUkekDSumHwkL23V0uSlcRWI85ZJL9sDvMvS9LLTxOllE/YsijnVcOllG3Eu6EFgNx7Ty1ZKAuAk8BVtTABsRL24hL4oRbMLeBQ3MuBGag74A+dgv4CLYnhL0bwHVavIAgvIDsgAAAAASUVORK5CYII="
                                    style="width: 56px;"></div>
                                <div data-v-b2b42f88=""
                                  style="float: left; width: 70%; height: 100px; color: white; font-size: 18px; line-height: 32px;">
                                  <p data-v-b2b42f88="" title="我给你发了一个红包，赶紧去拆!"
                                    style="padding-top: 18px; height: 52px; overflow: hidden;">收到转账[[item.money]]元。如需收钱</p>
                                  <p data-v-b2b42f88="" style="font-size: 13px;">￥[[item.money]]</p>
                                </div>
                              </div>
                              <div data-v-b2b42f88=""
                                style="background-color: rgb(255, 255, 255); height: 32px; line-height: 32px; padding-left: 15px; border-radius: 0px 0px 4px 4px; border-top: none; border-right: 1px solid rgb(225, 225, 225); border-bottom: 1px solid rgb(225, 225, 225); border-left: 1px solid rgb(225, 225, 225); border-image: initial; font-size: 16px;">
                                微信转账
                              </div>
                            </div>
                          </div>
                          </div>
                          
                          </li>
                        </ul>
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
            <div data-v-16750612="" v-if="model1 == 2"  style="display: none">
              <div class="ant-modal-mask"></div>
              <div role="dialog" aria-labelledby="vDialogTitle1" tabindex="-1"
                class="ant-modal-wrap chat-item-container" style="transform-origin: 884px 372px;">
                <div role="document" class="ant-modal" style="width: 1000px;">
                  <div class="ant-modal-content"><button @click="model1 = 0" aria-label="Close"
                      class="ant-modal-close"><span class="ant-modal-close-x"></span></button>
                    <div class="ant-modal-body">
                      <div data-v-16750612=""><img data-v-16750612="" :src="bigImg"
                          style="max-width: 100%; display: block; margin: 0px auto; padding: 40px 5px 10px; transform: rotate(0deg);">
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
            <div data-v-16750612="" class="addmodal">
              <div data-v-16750612="">


              </div>
            </div>
            <div data-v-16750612="">


            </div>
            <div data-v-16750612="">


            </div>
            <div data-v-16750612="" style="position: absolute; left: -100px; top: -100px;"><audio data-v-16750612=""
                controls="controls" id="myAudio"></audio></div>
          </div>
        </div>
      </div>
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
        model1: 0,
        activeIndexb: 1,
        flindex: 2,
        navIndex: 0,
        loading: true,
        tableData4: [],
        chat: [],
        chatall: [],
        userCount: {},
        showChat: [],
        showlianjie: [],
        showHongbao: [],
        sale:localStorage.sale,
        userTitle: 0,
        showAddFriend: [],
        searchInput: '',
        showChatcon: [],
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
        Atindex: 0,
        showChatcon: [],
        sousuonavInput: '',
        filterChat: [],
        value6: '',
        value7: [new Date(new Date().getTime() - 24 * 60 * 60 * 1000), new Date()],
        selectedOptions: [],
        selectedOptions2: [],
        currentPage: 1, //初始页
        pagesize: 10, //    每页的数据
        userList: [],
        showImage: [],
        showFriend: [],
        bigImg: ''
      }
    },
    created() {
      // this.handleUserList()
      let _this = this
      $.ajax({
        url: 'app1.json',
        type: 'get',
        success: function (data) {
          console.log(data)

          jdata = data
          //   _this.init('addFriendCount')
          _this.userList = jdata.data['user']
          _this.tableData4 = jdata.data['date']
        },
        error: function () {

        }
      })
      start_time = this.getNowFormatDate(this.value7[0])+' 00:00:00'
        end_time = this.getNowFormatDate(this.value7[1])+' 23:59:59'
        $.ajax({
        url: '{{Url('wechat/friend_list')}}',
        type: 'get',
        dataType: 'json',
        data: {
          end_time,
          start_time,
          mid:localStorage.mid
        },
        success: function (data) {
          console.log(data)
          _this.chat = data
          _this.chatall = data
          $.ajax({
            url: '{{Url('wechat/chat_detail')}}',
            type: 'get',
            data: {
              end_time,
              start_time,
              wx_id: _this.chat[0].wx_id,
              wx_name: _this.chat[0].wx_name,
              is_group: _this.chat[0].is_group
            },
            dataType: 'json',
            success: function (data) {
              console.log(data)
              _this.showChat = data
            },
            error: function () {

            }
          })
        },
        error: function () {

        }
      })
      $.ajax({
        url: '{{Url('wechat/detail_statistical')}}',
        type: 'get',
        data: {
              end_time,
              start_time,
              mid: localStorage.mid
            },
        dataType: 'json',
        success: function (data) {
          console.log(data)
          _this.userCount = data
        },
        error: function () {

        }
      })

    },
    mounted() {
      console.log($('.el-transfer'))
      $('.el-transfer').append(
        `<p style="position:absolute;top:5%;right: 5%;"><span style="font-size:25px;display:inline-block;width:40px;height:40px;line-height:40px;text-align:center;cursor:pointer" onclick=" $('.el-tcl').css('display','none')">x</span></p>`
      )
      // this.userList = jdata.data['user']
    },
    methods: {
      imgBig(src) {
        this.bigImg = src;
        this.model1 = 2;
      },
      optchange(){
        var _this =this;
        console.log()
        start_time = this.getNowFormatDate(this.value7[0])+' 00:00:00'
        end_time = this.getNowFormatDate(this.value7[1])+' 23:59:59'
        $.ajax({
        url: '{{Url('wechat/friend_list')}}',
        type: 'get',
        dataType: 'json',
        data: {
          end_time,
          start_time,
          mid:localStorage.mid
        },
        
        success: function (data) {
          console.log(data)
          _this.chat = data
          _this.chatall = data
          $.ajax({
            url: '{{Url('wechat/chat_detail')}}',
            type: 'get',
            data: {
              end_time,
              start_time,
              wx_id: _this.chat[0].wx_id,
              wx_name: _this.chat[0].wx_name,
              is_group:  _this.chat[0].is_group
            },
            dataType: 'json',
            success: function (data) {
              console.log(data)
              _this.showChat = data
            },
            error: function () {

            }
          })
        },
        error: function () {

        }
      })
      $.ajax({
        url: '{{Url('wechat/detail_statistical')}}',
        type: 'get',
        data: {
              end_time,
              start_time,
              mid: localStorage.mid
            },
        dataType: 'json',
        success: function (data) {
          console.log(data)
          _this.userCount = data
          console.log(data)
        },
        error: function () {

        }
      })
      },
            funDownload(content, filename) {
    var eleLink = document.createElement('a');
    eleLink.download = filename;
    eleLink.style.display = 'none';
    // 字符内容转变成blob地址
    var blob = new Blob([content]);
    eleLink.href = URL.createObjectURL(blob);
    // 触发点击
    document.body.appendChild(eleLink);
    eleLink.click();
    // 然后移除
    document.body.removeChild(eleLink);
      },
      dcHtml(){
        console.log($('ul[class = chat-content]')[0].innerHTML)
        str = $('ul[class = chat-content]')[0].innerHTML
        this.funDownload(str,'text.html')
      },
      getSyle3(style) {
        if (style == 0) {
          style = "left"
        } else {
          style = "right"
        }
        return `position: relative;max-width: 350px;min-height: 20px;background: #fff;border-radius: 5px;line-height: 20px;
 margin-left: 20px;
 word-break: break-word;
 color: #000;
 padding: 10px;
 border: 1px solid #e1e1e1;
 float: `+style+`;`
      }, 
      sousuo(data) {
        console.log(this.chatall)
        var arr = [],
          chat = this.chatall;
        for (let i = 0; i < chat.length; i++) {
          if (chat[i].nickName.indexOf(data) > -1) {
            arr.push(chat[i])
          }
        }
        this.chat = arr;
      },
      navText(index) {
        console.log(index)
        this.navIndex = index
        $('.v-ul .nav-text').each(function (index, el) {
          $(el).removeClass('nav-text1')
        })
        $($('.v-ul .nav-text')[this.navIndex]).addClass('nav-text1')
        this.inquiry()
      },
      flclick(flindex) {
        this.flindex = flindex
        $('.fl span').each(function (index, el) {
          $(el).removeClass('time-active')
        })
        $($('.fl span')[this.flindex]).addClass('time-active')
        if (this.flindex == 0) {

        } else if (this.flindex == 1) {

        } else {

        }
      },
      activeItem(item, index) {
        this.Atindex = index;
        start_time = this.getNowFormatDate(this.value7[0])+' 00:00:00'
        end_time = this.getNowFormatDate(this.value7[1])+' 23:59:59'
        _this = this;
        $.ajax({
          url: '{{Url('wechat/chat_detail')}}',
          type: 'get',
          data: {
            end_time,
            start_time,
            wx_id: item.wx_id,
            wx_name: item.wx_name,
            is_group: item.is_group
          },
          dataType: 'json',
          success: function (data) {
            console.log(data)
            _this.showChat = data
          },
          error: function () {

          }
        })
        // $('.Atindex li').each(function(index,el){
        //   $(el).removeClass('active')
        // })
        // $($('.Atindex li')[this.Atindex]).addClass('active')
      },
      audioc(data) {
        var str = `span[data-id ='` + data + `']`
        var audio = document.getElementById(data);
        console.log(audio.currentTime)
        if (audio !== null) {
          //检测播放是否已暂停.audio.paused 在播放器播放时返回false.
          if (audio.paused) {
            audio.play(); //audio.play();// 这个就是播放  
            $(str)[0].className = 'voice-right-gift'
          } else {
            audio.pause(); // 这个就是暂停
            $(str)[0].className = 'voice-right'
          }
        }
        audio.addEventListener('ended', function () {
          $(str)[0].className = 'voice-right'
        }, false);
      },
      viewCon(adata) {
        item= adata;
        console.log(item)
        _this = this;
        $.ajax({
          url: '{{Url('wechat/chat_detail')}}',
          type: 'get',
          data: {
            wx_id:item.wx_id,
            wx_name:item.son_wx_id,
            is_group:item.is_group,
            start_time:$('.el-range-input')[0].value,
            end_time:$('.el-range-input')[1].value,
          },
          dataType:'json',
          success: function (data) {
              _this.model1 = 1;
            _this.showChatcon = data
          },
          error: function () {

          }
        })
      },
      sousuonav(data) {
        this.navIndex = 11
        _this = this;
        $.ajax({
          url: '{{Url('wechat/get_chat_record_bycon')}}',
          type: 'get',
          data: {
            start_time:$('.el-range-input')[0].value,
            end_time:$('.el-range-input')[1].value,
            word_key :_this.sousuonavInput,
            mid:localStorage.mid
            },
          dataType:'json',
          success: function (data) {
            _this.filterChat = data
          },
          error: function () {

          }
        })
      },
      getSyle(style) {
        var nostyle;
        if (style == 0) {
          style = "left"
        } else {
          style = "right"
        }
        if (style == 0) {
          nostyle = 'right'
        } else {
          nostyle = 'left'
        }
        return 'float:' + style + ';width: 48px; height: 48px; margin-top: 8px; margin-' + nostyle +
          ': 10px; cursor: pointer;'
      },
      getSyle2(style) {
        if (style == 0) {
          style = "left"
        } else {
          style = "right"
        }
        return 'text-align:' + style + ';line-height: 30px; padding-' + style + ': 24px;'
      },
      tablexq(data) {
        console.log(data)
      },
      openTcl() {
        $('.el-tcl').css('display', 'block')
      },
      handleChange(value, direction, movedKeys) {
        console.log(value, direction, movedKeys);
      },
      inquiry() {
        // this.value7 = [new Date(new Date().getTime()-24*60*60*1000), new Date()];
        let _this = this
        switch (this.navIndex) {
          case 1:
            $.ajax({
              url: 'app2.json',
              type: 'get',
              data: {},
              success: function (data) {
                console.log(data)
                jdata = data
                _this.userList = jdata.data['user']
                _this.tableData4 = jdata.data['date']
                console.log(jdata)
              },
              error: function () {

              }
            })
            break;
          case 2:
            this.tableData4 = this.userCount.mobile.data;
            break;
          case 3:
          this.showImage = this.userCount.image.data;
            break;
          case 4:
          this.showlianjie = this.userCount.link.data;
            break;
          case 5:
            this.tableData4 = this.userCount.adddata.data;
            break;
          case 6:
            this.tableData4 = this.userCount.deletedata.data;
            break;
          case 7:
            this.tableData4 = this.userCount.blockdata.data;
            break;
          case 8:
            this.tableData4 = this.userCount.shielddata.data;
            break;
          case 9:
            this.showHongbao = this.userCount.money.data;
            break;
          case 10:
            // $.ajax({
            //   url: 'showFriend.json',
            //   type: 'get',
            //   data: {},
            //   success: function (data) {
            //     console.log(data)
            //     _this.showFriend = data.data.result
            //   },
            //   error: function () {

            //   }
            // })
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
        att = $('.container1 .el-table')[1]
        res = this.userList;
        this.export(att, res)
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
      export (att, res) {
        str = "";
        console.log(att.querySelectorAll('tr')[0]);
        for (let k = 0; k < res.length + 1; k++) {
          if (k == 0) {
            stra = ""
            $(att.querySelectorAll('tr')[k].querySelectorAll('th')).each(function (
              index, el) {
              if ($(el).attr('class') != "gutter") {
                console.log($(el)[0].querySelectorAll('div')[0].innerHTML)
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
      }
    }
  })
</script>

</html>