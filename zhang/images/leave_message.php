<?php
require_once('pdo.php');
date_default_timezone_set("PRC");
$data['mobile'] = $_POST['mobile'] ? $_POST['mobile'] : '';
$data['source'] = $_POST['source'] ? $_POST['source'] : '';
$data['project'] = $_POST['project'] ? $_POST['project'] : '';
$type = $_POST['type'] ? $_POST['type'] : 1;
if (!is_numeric($data['mobile'])) {
	echo json_encode(['code' => '400', 'message' => '请确认信息']);
	exit;
}

$data['url'] = array_key_exists('url', $_POST) ? $_POST['url'] : '';
//查看手机号是否有数据
$sql = "select url,education,years,mobile from leave_message_info where mobile = ?";
$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':source', $data['source']);
			$stmt->bindParam(':project', $data['project']);
$exec = $stmt->execute([$data['mobile']]);
$is_register = $stmt->fetchAll(PDO::FETCH_ASSOC);
switch ($type) {
	case '1':
	
		$data['education'] = array_key_exists('education', $_POST) ? $_POST['education'] : '';
		$data['years'] = array_key_exists('years', $_POST) ? $_POST['years'] : '';

		
		//有则修改无则添加
		if ($is_register) {

			$is_diff = array_diff_assoc($data, $is_register[0]);
		//var_dump($is_diff);
			if (empty($is_diff)) {
				echo json_encode(['code' => '200', 'message' => '注册成功']);
				exit;
			}
			$sql = 'update leave_message_info set source=:source,project=:project,url = :url,education = :education,years = :years where mobile = :mobile';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':source', $data['source']);
			$stmt->bindParam(':project', $data['project']);
			
			$stmt->bindParam(':mobile', $data['mobile']);
			$stmt->bindParam(':url', $data['url']);
			$stmt->bindParam(':education', $data['education']);
			$stmt->bindParam(':years', $data['years']);
			$result = $stmt->execute();
			if ($result) {
				echo json_encode(['code' => '200', 'message' => '注册成功']);
				exit;
			} else {
				echo json_encode(['code' => '400', 'message' => '注册失败']);
				exit;
			}
		} else {
			$data['create_time'] = date('Y-m-d H:i:s');
			$sql = 'insert into leave_message_info (source,project,mobile, url, education, years, create_time) values(:source,:project,:mobile, :url, :education, :years, :create_time)';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':source', $data['source']);
			$stmt->bindParam(':project', $data['project']);
			$stmt->bindParam(':mobile', $data['mobile']);
			$stmt->bindParam(':url', $data['url']);
			$stmt->bindParam(':education', $data['education']);
			$stmt->bindParam(':years', $data['years']);
			$stmt->bindParam(':create_time', $data['create_time']);
			$result = $stmt->execute();
			if ($result) {
				echo json_encode(['code' => '200', 'message' => '注册成功']);
				exit;
			} else {
				echo json_encode(['code' => '400', 'message' => '注册失败']);
				exit;
			}
		}
	break;
	case '2':
		$data['education'] = array_key_exists('education', $_POST) ? $_POST['education'] : '';
		$data['years'] = array_key_exists('years', $_POST) ? $_POST['years'] : '';
		if ($is_register) {
			$is_diff = array_diff_assoc($data, $is_register[0]);
			//var_dump($is_diff);
			if (empty($is_diff)) {
				echo json_encode(['code' => '200', 'message' => '注册成功']);
				exit;
			}
			$sql = 'update leave_message_info set source=:source,project=:project,url = :url,education = :education,years = :years where mobile = :mobile';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':source', $data['source']);
			$stmt->bindParam(':project', $data['project']);
			$stmt->bindParam(':mobile', $data['mobile']);
			$stmt->bindParam(':url', $data['url']);
			$stmt->bindParam(':education', $data['education']);
			$stmt->bindParam(':years', $data['years']);
			$result = $stmt->execute();
			if ($result) {
				echo json_encode(['code' => '200', 'message' => '注册成功']);
				exit;
			} else {
				echo json_encode(['code' => '400', 'message' => '注册失败']);
				exit;
			}
		} else {
			$data['create_time'] = date('Y-m-d H:i:s');
			$sql = 'insert into leave_message_info (source,project,mobile, url, education, years, create_time) values(:source,:project,:mobile, :url, :education, :years, :create_time)';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':source', $data['source']);
			$stmt->bindParam(':project', $data['project']);
			$stmt->bindParam(':mobile', $data['mobile']);
			$stmt->bindParam(':url', $data['url']);
			$stmt->bindParam(':education', $data['education']);
			$stmt->bindParam(':years', $data['years']);
			$stmt->bindParam(':create_time', $data['create_time']);
			$result = $stmt->execute();
			if ($result) {
				echo json_encode(['code' => '200', 'message' => '注册成功']);
				exit;
			} else {
				echo json_encode(['code' => '400', 'message' => '注册失败']);
				exit;
			}	
		}
		break;
	case '3':
		$data['education'] = array_key_exists('education', $_POST) ? $_POST['education'] : '';
		$data['years'] = array_key_exists('years', $_POST) ? $_POST['years'] : '';
		$data['work_years'] = array_key_exists('work_years', $_POST) ? $_POST['work_years'] : '';
		$data['profession'] = array_key_exists('profession', $_POST) ? $_POST['profession'] : '';
		if ($is_register) {
			$is_diff = array_diff_assoc($data, $is_register[0]);
			//var_dump($is_diff);
			if (empty($is_diff)) {
				echo json_encode(['code' => '200', 'message' => '注册成功']);
				exit;
			}
			$sql = 'update leave_message_info set source=:source,project=:project,url = :url,education = :education,years = :years,profession = :profession,work_years = :work_years where mobile = :mobile';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':source', $data['source']);
			$stmt->bindParam(':project', $data['project']);
			$stmt->bindParam(':mobile', $data['mobile']);
			$stmt->bindParam(':url', $data['url']);
			$stmt->bindParam(':education', $data['education']);
			$stmt->bindParam(':years', $data['years']);
			$stmt->bindParam(':profession', $data['profession']);
			$stmt->bindParam(':work_years', $data['work_years']);
			$result = $stmt->execute();
			if ($result) {
				echo json_encode(['code' => '200', 'message' => '注册成功']);
				exit;
			} else {
				echo json_encode(['code' => '400', 'message' => '注册失败']);
				exit;
			}
		} else {
			$data['create_time'] = date('Y-m-d H:i:s');
			$sql = 'insert into leave_message_info (source,project,mobile, url, education, years, create_time,profession,work_years) values(:source,:project,:mobile, :url, :education, :years, :create_time, :profession, :work_years)';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':source', $data['source']);
			$stmt->bindParam(':project', $data['project']);
			$stmt->bindParam(':mobile', $data['mobile']);
			$stmt->bindParam(':url', $data['url']);
			$stmt->bindParam(':education', $data['education']);
			$stmt->bindParam(':years', $data['years']);
			$stmt->bindParam(':create_time', $data['create_time']);
			$stmt->bindParam(':profession', $data['profession']);
			$stmt->bindParam(':work_years', $data['work_years']);
			$result = $stmt->execute();
			if ($result) {
				echo json_encode(['code' => '200', 'message' => '注册成功']);
				exit;
			} else {
				echo json_encode(['code' => '400', 'message' => '注册失败']);
				exit;
			}	
		}
		break;
	case '4':
		$data['education'] = array_key_exists('education', $_POST) ? $_POST['education'] : '';
		$data['years'] = array_key_exists('years', $_POST) ? $_POST['years'] : '';
		$data['profession'] = array_key_exists('profession', $_POST) ? $_POST['profession'] : '';
		if ($is_register) {
			$is_diff = array_diff_assoc($data, $is_register[0]);
			//var_dump($is_diff);
			if (empty($is_diff)) {
				echo json_encode(['code' => '200', 'message' => '注册成功']);
				exit;
			}
			$sql = 'update leave_message_info set source=:source,project=:project,url = :url,education = :education,years = :years,profession = :profession where mobile = :mobile';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':source', $data['source']);
			$stmt->bindParam(':project', $data['project']);
			$stmt->bindParam(':mobile', $data['mobile']);
			$stmt->bindParam(':url', $data['url']);
			$stmt->bindParam(':education', $data['education']);
			$stmt->bindParam(':years', $data['years']);
			$stmt->bindParam(':profession', $data['profession']);
			$result = $stmt->execute();
			if ($result) {
				echo json_encode(['code' => '200', 'message' => '注册成功']);
				exit;
			} else {
				echo json_encode(['code' => '400', 'message' => '注册失败']);
				exit;
			}
		} else {
			$data['create_time'] = date('Y-m-d H:i:s');
			$sql = 'insert into leave_message_info (source,project,mobile, url, education, years, create_time, profession) values(:source,:project,:mobile, :url, :education, :years, :create_time, :profession)';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':source', $data['source']);
			$stmt->bindParam(':project', $data['project']);
			$stmt->bindParam(':mobile', $data['mobile']);
			$stmt->bindParam(':url', $data['url']);
			$stmt->bindParam(':education', $data['education']);
			$stmt->bindParam(':years', $data['years']);
			$stmt->bindParam(':create_time', $data['create_time']);
			$stmt->bindParam(':profession', $data['profession']);
			$result = $stmt->execute();
			if ($result) {
				echo json_encode(['code' => '200', 'message' => '注册成功']);
				exit;
			} else {
				echo json_encode(['code' => '400', 'message' => '注册失败']);
				exit;
			}	
		}
		break;
	case '5':
		$data['education'] = array_key_exists('education', $_POST) ? $_POST['education'] : '';
		$data['work_years'] = array_key_exists('work_years', $_POST) ? $_POST['work_years'] : '';
		$data['province'] = array_key_exists('province', $_POST) ? $_POST['province'] : '';
		if ($is_register) {

			$is_diff = array_diff_assoc($data, $is_register[0]);
			//var_dump($is_diff);
			if (empty($is_diff)) {
				echo json_encode(['code' => '200', 'message' => '提交成功']);
				exit;
			}

			$sql = 'update leave_message_info set source=:source,project=:project,url = :url,education = :education,work_years = :work_years,province = :province where mobile = :mobile';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':source', $data['source']);
			$stmt->bindParam(':project', $data['project']);
			$stmt->bindParam(':mobile', $data['mobile']);
			$stmt->bindParam(':url', $data['url']);
			$stmt->bindParam(':education', $data['education']);
			$stmt->bindParam(':work_years', $data['work_years']);
			$stmt->bindParam(':province', $data['province']);
			$result = $stmt->execute();
			if ($result) {
				echo json_encode(['code' => '200', 'message' => '提交成功']);
				exit;
			} else {
				echo json_encode(['code' => '400', 'message' => '提交失败']);
				exit;
			}
		} else {

			$data['create_time'] = date('Y-m-d H:i:s');
			$sql = 'insert into leave_message_info (source,project,mobile, url, education, work_years, province, create_time) values(:source,:project,:mobile, :url, :education, :work_years, :province, :create_time)';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':source', $data['source']);
			$stmt->bindParam(':project', $data['project']);
			$stmt->bindParam(':mobile', $data['mobile']);
			$stmt->bindParam(':url', $data['url']);
			$stmt->bindParam(':education', $data['education']);
			$stmt->bindParam(':work_years', $data['work_years']);
			$stmt->bindParam(':province', $data['province']);
			$stmt->bindParam(':create_time', $data['create_time']);
			$result = $stmt->execute();
			if ($result) {
				echo json_encode(['code' => '200', 'message' => '提交成功']);
				exit;
			} else {
				echo json_encode(['code' => '400', 'message' => '提交失败']);
				exit;
			}	
		}
		break;
	case '6':
		$data['education'] = array_key_exists('education', $_POST) ? $_POST['education'] : '';
		$data['years'] = array_key_exists('years', $_POST) ? $_POST['years'] : '';
		$data['skill_level'] = array_key_exists('skill_level', $_POST) ? $_POST['skill_level'] : '';
		if ($is_register) {
			$is_diff = array_diff_assoc($data, $is_register[0]);
			//var_dump($is_diff);
			if (empty($is_diff)) {
				echo json_encode(['code' => '200', 'message' => '注册成功']);
				exit;
			}
			$sql = 'update leave_message_info set source=:source,project=:project,url = :url,education = :education,years = :years,skill_level = :skill_level where mobile = :mobile';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':source', $data['source']);
			$stmt->bindParam(':project', $data['project']);
			$stmt->bindParam(':mobile', $data['mobile']);
			$stmt->bindParam(':url', $data['url']);
			$stmt->bindParam(':education', $data['education']);
			$stmt->bindParam(':years', $data['years']);
			$stmt->bindParam(':skill_level', $data['skill_level']);
			$result = $stmt->execute();
			if ($result) {
				echo json_encode(['code' => '200', 'message' => '注册成功']);
				exit;
			} else {
				echo json_encode(['code' => '400', 'message' => '注册失败']);
				exit;
			}
		} else {
			$data['create_time'] = date('Y-m-d H:i:s');
			$sql = 'insert into leave_message_info (source,project,mobile, url, education, years, create_time, skill_level) values(:source,:project,:mobile, :url, :education, :years, :create_time, :skill_level)';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':source', $data['source']);
			$stmt->bindParam(':project', $data['project']);
			$stmt->bindParam(':mobile', $data['mobile']);
			$stmt->bindParam(':url', $data['url']);
			$stmt->bindParam(':education', $data['education']);
			$stmt->bindParam(':years', $data['years']);
			$stmt->bindParam(':create_time', $data['create_time']);
			$stmt->bindParam(':skill_level', $data['skill_level']);
			$result = $stmt->execute();
			if ($result) {
				echo json_encode(['code' => '200', 'message' => '注册成功']);
				exit;
			} else {
				echo json_encode(['code' => '400', 'message' => '注册失败']);
				exit;
			}	
		}
		break;
	case '7':
		$data['years'] = array_key_exists('years', $_POST) ? $_POST['years'] : '';
		if ($is_register) {
			$is_diff = array_diff_assoc($data, $is_register[0]);
			//var_dump($is_diff);
			if (empty($is_diff)) {
				echo json_encode(['code' => '200', 'message' => '注册成功']);
				exit;
			}
			$sql = 'update leave_message_info set source=:source,project=:project,url = :url,years = :years where mobile = :mobile';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':source', $data['source']);
			$stmt->bindParam(':project', $data['project']);
			$stmt->bindParam(':mobile', $data['mobile']);
			$stmt->bindParam(':url', $data['url']);
			$stmt->bindParam(':years', $data['years']);
			$result = $stmt->execute();
			if ($result) {
				echo json_encode(['code' => '200', 'message' => '注册成功']);
				exit;
			} else {
				echo json_encode(['code' => '400', 'message' => '注册失败']);
				exit;
			}
		} else {
			$data['create_time'] = date('Y-m-d H:i:s');
			$sql = 'insert into leave_message_info (source,project,mobile, url, years, create_time) values(:source,:project,:mobile, :url,  :years, :create_time)';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':source', $data['source']);
			$stmt->bindParam(':project', $data['project']);
			$stmt->bindParam(':mobile', $data['mobile']);
			$stmt->bindParam(':url', $data['url']);
			$stmt->bindParam(':years', $data['years']);
			$stmt->bindParam(':create_time', $data['create_time']);
			$result = $stmt->execute();
			if ($result) {
				echo json_encode(['code' => '200', 'message' => '注册成功']);
				exit;
			} else {
				echo json_encode(['code' => '400', 'message' => '注册失败']);
				exit;
			}	
		}
		break;
}



