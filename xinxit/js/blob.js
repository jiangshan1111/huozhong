var eleFile = document.querySelector('#file');
// de

// if (window.FormData) {
	// 压缩图片需要的一些元素和对象
	
	// eleFile.addEventListener('change', function (event) {
	// 	// dd();
	// 	file = event.target.files[0];
	// 	console.log(file)
	// 	if (file.type.indexOf("image") == 0) {
	// 		// log('已选择图片'+ file.name +'，大小为'+ Math.round(1000 * file.size / (1024*1024)) / 1000 +'M。');

	// 		reader.readAsDataURL(file);	
	// 	} else {
	// 		// log('选择的文件非图片，到此为止。');
	// 	}
	// 	img.onload = function () {
	// 	// 图片原始尺寸
	// 	var originWidth = this.width;
	// 	var originHeight = this.height;
		
	// 	log('图片原尺寸是：' + [originWidth, originHeight].join('x'));
		
	// 	// 计算出目标压缩尺寸
	// 	var maxWidth = 400, maxHeight = 400;
		
	// 	// 目标尺寸
	// 	var targetWidth = originWidth, targetHeight = originHeight;
		
	// 	if (originWidth > maxWidth || originHeight > maxHeight) {
	// 		// 图片尺寸超过400x400的限制
	// 		if (originWidth / originHeight > maxWidth / maxHeight) {
	// 			// 更宽，按照宽度限定尺寸
	// 			targetWidth = maxWidth;
	// 			targetHeight = Math.round(maxWidth * (originHeight / originWidth));
	// 		} else {
	// 			targetHeight = maxHeight;
	// 			targetWidth = Math.round(maxHeight * (originWidth / originHeight));
	// 		}
			
	// 		log('超过400x400的限制，图片大小限制为' + [targetWidth, targetHeight].join('x'));
	// 	} else {
	// 		log('图片尺寸较小，不压缩');
	// 	}
		
	// 	canvas.width = targetWidth;
	// 	canvas.height = targetHeight;
		
	// 	// 清除画布
	// 	context.clearRect(0, 0, targetWidth, targetHeight);
		
	// 	// 图片压缩
	// 	context.drawImage(img, 0, 0, targetWidth, targetHeight);
		
	// 	// 转为blob并上传
	// 	canvas.toBlob(function (blob) {
	// 		console.log(file.filename,blob);
	// 		form.delete('img[]')
	// 		form.append('img[]',blob)
			

	// 		// 图片ajax上传
	// 		// var xhr = new XMLHttpRequest();
	// 		// // 显示进度的元素
	// 		// var elePercent = document.getElementById('percent');
	// 		// // 上传文件名
	// 		// var filename = encodeURIComponent(file.name).replace(/%/g, '');
			
	// 		// // 上传中
	// 		// xhr.upload.addEventListener("progress", function(e) {
	// 		// 	elePercent.innerHTML = Math.round(100 * e.loaded / e.total) / 100 + '%';
	// 		// }, false);

	// 		// // 文件上传成功或是失败
	// 		// xhr.onreadystatechange = function(e) {
	// 		// 	if (xhr.readyState == 4) {
	// 		// 		if (xhr.status == 200) {
	// 		// 			// 100%进度
	// 		// 			elePercent.innerHTML = '100%';
						
	// 		// 			// 显示上传成功后的图片地址
	// 		// 			var response = xhr.responseText;
						
	// 		// 			if (/^\/\//.test(response)) {
	// 		// 				response = response.split(filename)[0] + filename;
	// 		// 				log('图片上传成功，地址是：<a href="'+ response +'" target="_blank">'+ response +'</a>');
	// 		// 			} else {
	// 		// 				log(response);
	// 		// 			}
	// 		// 		}
	// 		// 	}
	// 		// };

	// 		// // 开始上传
	// 		// xhr.open("POST", 'saveImg.php', true);
	// 		// xhr.setRequestHeader("FILENAME", encodeURIComponent(filename));
	// 		// xhr.send(blob);	
	// 	}, file.type || 'image/png');
	// };
		
	// });