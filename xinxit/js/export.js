//导出
function JSONToCSVConvertor(JSONData, ReportTitle, ShowLabel, Arr) {
    var arrData = typeof JSONData != 'object' ? JSON.parse(JSONData) :
        JSONData;
    for (var k = 0; k < arrData.length; k++) {
        delete arrData[k].did;
        delete arrData[k].did2;
    }
    var CSV = '';
    if (ShowLabel) {
        var row = "";
        for (var item in Arr) {
            console.log(Arr[item])
            row += Arr[item] + ',';
        }
        row = row.slice(0, -1);
        CSV += row + '\r\n';
    }
    console.log(CSV)
    //1st loop is to extract each row
    for (var i = 0; i < arrData.length; i++) {
        var row = "";
        for (var index in arrData[i]) {
            row += '"' + arrData[i][index] + '",';
        }

        row.slice(0, row.length - 1);
        CSV += row + '\r\n';

    }

    if (CSV == '') {
        alert("Invalid data");
        return;
    }
    console.log(CSV)
    // var fileName = "MyReport_";
    // fileName += ReportTitle.replace(/ /g, "_");
    // var uri = 'data:text/xlsx;charset=utf-8,\uFEFF' + encodeURI(CSV);
    // var link = document.createElement("a");
    // link.href = uri;
    // link.style = "visibility:hidden";
    // link.download = fileName + ".xlsx";
    // document.body.appendChild(link);
    // link.click();
    // document.body.removeChild(link);
}