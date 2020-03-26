/**
 * Created by Administrator on 2017/4/28.
 */
'user strict';

window.onload = function () {
    $.ajax({
        url: 'http://192.168.10.166:8080/stu/Discovery/stuCourseAccessVideo',
        type: 'post',
        contentType: 'application/json',
        data: JSON.stringify({
            "resouces_id": parseInt(localStorage.resouces_id)
        }),
        // dataType: 'json',
        success: function (data) {
            // window.open(data.PlayInfoList[0].PlayURL)
            // if (data.code == 200) {
            //     window.open(data.data.playbackUrl)
            // } else {
            //     _this.$message.error({
            //         type: 'info',
            //         message: data.message
            //     })
            // }
            console.log(data)
            view_video(data.data)
        },
        error: function () {

        }
    })
}
function view_video(data) {
    let obj = {
            type:[],
            src:[]
        }
    data.forEach(element => {
            switch (element.Definition) {
                case 'FD':
                    obj.type.push('流畅')
                    break;
                    case 'LD':
                    obj.type.push('标清')
                    break;
                    case 'SD':
                    obj.type.push('高清')
                    break;
                    case 'HD':
                    obj.type.push('超清')
                    break;
                default:
                    break;
            }
            obj.src.push(element.PlayURL)
        });
        //初始化
        var video = $('#video1').videoCt({
            title: data[0].title,              //标题
            volume: 0.2,                //音量
            barrage: false,              //弹幕开关
            comment: false,              //弹幕
            reversal: false,             //镜像翻转
            playSpeed: true,            //播放速度
            update: true,               //下载
            autoplay: false,            //自动播放
            clarity: obj,
            // commentFile: 'comment.json'           //导入弹幕json数据
        });
    
        //扩展
        video.title;                    //标题
        video.status;                   //状态
        video.currentTime;              //当前时长
        video.duration;                 //总时长
        video.volume;                   //音量
        video.clarityType;              //清晰度
        video.claritySrc;               //链接地址
        video.fullScreen;               //全屏
        video.reversal;                 //镜像翻转
        video.playSpeed;                //播放速度
        video.cutover;                  //切换下个视频是否自动播放
        video.commentTitle;             //弹幕标题
        video.commentId;                //弹幕id
        video.commentClass;             //弹幕类型
        video.commentSwitch;            //弹幕是否打开
        $('#video1').bind('ended', function() {
            console.log('弹幕json数据：\n'+ video.comment());              //获取弹幕json数据
        });
}