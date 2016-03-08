<?php



namespace backend\modules\user\controllers;



use Yii;

use backend\modules\user\models\User;

use backend\modules\user\models\UserSeach;

use yii\web\Controller;

use yii\web\NotFoundHttpException;

use yii\filters\VerbFilter;

use yii\data\Pagination;

use app\models\Comment;

use yii\data\ArrayDataProvider;

use backend\web\PHPExcel\Excel\Spreadsheet_Excel_Reader;



header("content-type:text/html;charset=utf-8");

/**

 * 试题控制器

 */

class ExamController extends BaseController {



    public $enableCsrfValidation = false;



    public function behaviors() {

        return [

            'verbs' => [

                'class' => VerbFilter::className(),

                'actions' => [

                    'delete' => ['post'],

                ],

            ],

        ];

    }



    #   试题列表 



    public function actionIndex_list() {



        $where = '';

        $search_params = '';

        if (isset($_REQUEST['search'])) {

            $search = $_REQUEST['search'];

            if (isset($_GET['search'])) {

                $search = base64_decode($search);

            }

            $where .= "and question.question like '%$search%'";

            $search = base64_encode($search);

            $search_params = '&search=' . $search;

        }

        

        #总记录数

        $sql = "select count(*) num from question,knowpoint where question.kid=knowpoint.kid $where";

        $count = Yii::$app->db->createCommand($sql)->queryScalar();

        $listRows = 5;

        $pages = ceil($count / $listRows);

        if (isset($_GET['p'])) {

            $page = $_GET['p'];

        } else {

            $page = 1;

        }

        //偏移量

        $firstRow = ($page - 1) * $listRows;



        $sql = "select * from question,knowpoint where question.kid=knowpoint.kid $where order by add_time desc limit $firstRow,$listRows";

        $two = Yii::$app->db->createCommand($sql)->queryAll();





        #页码

        $uppage = $page - 1;

        if ($uppage <= 1) {

            $uppage = 1;

        }

        $downpage = $page + 1;

        if ($downpage >= $pages) {

            $downpage = $pages;

        }

        $str = "<div style='width:100%;text-align:right;'><ul class='pagination' style='margin-top:0;'>";

        $str .= "<li><a href='index.php?r=user/exam/index_list&p=1" . $search_params . "'>&laquo;</a></li>";

        $str .= "<li><a href='index.php?r=user/exam/index_list&p=$uppage" . $search_params . "'>&lsaquo;</a></li>";



        $page_start = $page >= 10 ? $page - 8 : 1;



        if ($pages > 10) {

            $page_end = 10;

            $page_end = $page >= 10 ? $page + 1 : $page_end;

            if ($page_end >= $pages) {

                $page_end = $pages;

                $page_start = $pages - 9;

            }

        } else {

            $page_end = $pages;

        }

        for ($i = $page_start; $i <= $page_end; $i++) {

            if ($page == $i) {

                $str .= "<li class='active disabled'><a href='javascript:void(0)'>$i</a></li>";

            } else {

                $str .= "<li><a href='index.php?r=user/exam/index_list&p=$i" . $search_params . "'>$i</a></li>";

            }

        }



        $str .= "<li><a href='index.php?r=user/exam/index_list&p=$downpage" . $search_params . "'>&rsaquo;</a></li>";

        $str .= "<li><a href='index.php?r=user/exam/index_list&p=$pages" . $search_params . "'>&raquo;</a></li>";

        $str .= "</ul></div>";





        foreach ($two as $k => $v) {

            $two[$k]['selects'] = unserialize($v['selects']);

            $two[$k]['answer'] = unserialize($v['answer']);

        }

        

        #查询有试题的课程



        $sql = "select * from knowpoint";

        $knowpoint_list = Yii::$app->db->createCommand($sql)->queryAll();

	if($count==0){

		$str="";

	}

		//echo "<pre>";

        //print_r($two);die;

        return $this->render('index_list', ["two" => $two, 'k_list' => $knowpoint_list, 'pagenum' => $str]);

    }



    #   导入试题列表



    public function actionUp_exam() {

        #查询有试题的课程
        $sql='select c_id,c_name from college'; 
        $one= Yii::$app->db->createCommand($sql)->queryAll();
        $sql1='select * from stage'; 
        $stage= Yii::$app->db->createCommand($sql1)->queryAll();
        $sql = "select * from knowpoint";
        $knowpoint_list = Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('up_exam', ['k_list' => $knowpoint_list,"one"=>$one,"stage"=>$stage]);
    }



    #   下载试题模版



    public function actionDown_moban() {

        //下载文件路径

        $filename = 'doc/assets_question_upl.xls'; //改成你自己的路径

        header('Content-Type:application/vnd.ms-excel');

        header('Content-disposition:attachment;filename=' . $filename);

        header('Content-Length:' . filesize($filename));

        readfile($filename);

    }



    # 导入试题



    public function actionSave_up() {



        header("content-type:text/html;charset=utf-8");

        $kid = $_POST['kid'];



        if ($_FILES['pic']['name'] == '') {

            echo "<meta http-equiv='Content-Type' content='text/html; charset=utf8'/><script>alert('没有要上传的文件！');location.href='index.php?r=user/exam/up_exam'</script>";

            die;

        }

        $name = $kid;

        $exp = explode('.', $_FILES['pic']['name']); //把上传文件的名称切割成数组

        $extend = end($exp); //end将数组的内部指针指向最后一个单元（后缀名） 

        if ($extend == "xlsx") {

            $extend = "xls";

        }

        $new_name = $name . "." . $extend;

        if (in_array($_FILES['pic']['type'], array('text/plain', 'application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'))) {//?????

            $path = "doc/";

            if (!is_dir($path)) {

                mkdir($path);

            }

            move_uploaded_file($_FILES['pic']['tmp_name'], $path . $new_name);

        } else {

            echo "<meta http-equiv='Content-Type' content='text/html; charset=utf8'/><script>alert('请上传文本文件或excel格式的文件！（.txt/.xls/.xlsx）');location.href='index.php?r=user/exam/up_exam'</script>";

            die;

        }

        if ($_FILES['pic']['type'] == "application/vnd.ms-excel" || $_FILES['pic']['type'] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") {

            error_reporting('E_ALL');

            /*

             * 上传文件成功后

             */

            //所读取的文件

            $filename = $path . $new_name;

            $data = new Spreadsheet_Excel_Reader();

            //设置文本输出编码

            $data->setOutputEncoding('UTF-8');

            //读取Excel文件

            $data->read($filename);

            $add_time = date('Y-m-d H:i:s');

            //print_r($data->sheets);exit();

            $i = 0;

            $tiku = array();

            for ($l = 2; $l <= $data->sheets[0]['numRows']; $l++) {

                

                if ($data->sheets[0]['cells'][$l][1] == "选择题") {

                    //代表的是标题 （单选多选  判断  填空 ）

                    $i++;

                    $flag = "select";

                    $tiku[$i]['que'] = $data->sheets[0]['cells'][$l][2];

                    $tiku[$i]['types'] = 0;

                    //print_r($tiku);die;

                } elseif ($data->sheets[0]['cells'][$l][1] == "判断题") {

                    $i++;

                    $flag = "judge";

                    $tiku[$i]['que'] = $data->sheets[0]['cells'][$l][2];

                    $ans[0] = trim($data->sheets[0]['cells'][$l][3]) == "对" ? 1 : 0;

                    $tiku[$i]['sel'] = array(1, 0);

                    $tiku[$i]['ans'] = $ans;

                    $tiku[$i]['types'] = 3;

                } elseif ($data->sheets[0]['cells'][$l][1] == "填空题") {

                    $i++;

                    $flag = "fill";

                    $tiku[$i]['que'] = $data->sheets[0]['cells'][$l][2];

                    //$tiku[$i]['ans'] = $data->sheets[0]['cells'][$l][3];

                    $tiku[$i]['types'] = 4;

                } elseif ($data->sheets[0]['cells'][$l][1] == "简答题") {

                    $i++;

                    $flag = "jianda";

                    $tiku[$i]['que'] = $data->sheets[0]['cells'][$l][2];

                    $tiku[$i]['types'] = 6;

                } elseif ($data->sheets[0]['cells'][$l][1] == "机试") {

                    $i++;

                    $flag = 'cross';

                    $tiku[$i]['que'] = $data->sheets[0]['cells'][$l][2];

                    $tiku[$i]['xuqiu'] = $data->sheets[0]['cells'][$l][3];

                    $tiku[$i]['types'] = 5;

                } elseif (empty($data->sheets[0]['cells'][$l][1])) {

                    if ($flag == "select") {

                        $tiku[$i]['sel'][] = $data->sheets[0]['cells'][$l][3];



                        if (!empty($data->sheets[0]['cells'][$l][4]) && !empty($data->sheets[0]['cells'][$l][3])) {

                            $tiku[$i]['ans'][] = $data->sheets[0]['cells'][$l][3];

                            //print_r($tiku[$i]['sel']);die;    

                        }

                    } elseif ($flag == "fill") {

                        //判断填空题里面是否有true和false;

                        $tiku[$i]['ans'][] = $data->sheets[0]['cells'][$l][3];

                        //print_r( $tiku[$i]['ans']);die;     

                    }

                }

            }

            //print_r($tiku);die;

            foreach ($tiku as $key => $item) {

                $sel = !empty($item['sel']) ? serialize($item['sel']) : '';

                $ans = serialize($item['ans']);

                if ($item['types'] == 0)

                    $type = count($item['ans']) == 1 ? 1 : 2;

                else {

                    $type = $item['types'];

                }

                if ($item['que'] != "" && $ans != "") {

                    $tmpSql .= "($kid, '" . addslashes(htmlspecialchars($item['que'])) . "', '" . addslashes($sel) . "', '" . addslashes($ans) . "', $type, '" . $add_time . "','" . addslashes(htmlspecialchars($item['xuqiu'])) . "'),";

                    // echo $tmpSql."<br>\n\n";

                }

            }

            



            $sql = "insert into question (kid, question, selects, answer, type, add_time, xuqiu) values " . $tmpSql;

            $sql = rtrim($sql, ",");

            $rst = Yii::$app->db->createCommand($sql)->execute();

            if($rst){

                echo "<meta http-equiv='Content-Type' content='text/html; charset=utf8'/><script>alert('文件导入成功');location.href='index.php?r=user/exam/index_list'</script>";

            }else{

                echo "<meta http-equiv='Content-Type' content='text/html; charset=utf8'/><script>alert('文件导入失败！');location.href='index.php?r=user/exam/up_exam'</script>";

            }

        } 

    }



    #  下载知识点



    public function actionDown_know() {

        header("content-type:text/html;charset=utf-8");

        $kid = Yii::$app->request->post('kid');

        //下载文件路径

        $filename = 'doc/' . $kid . '.xls'; //改成你自己的路径

        if (!file_exists($filename)) {

            echo "<script>alert('没有找到文件！');history.back()</script>";

            die;

        }

        header('Content-Type:application/vnd.ms-excel');

        header('Content-disposition:attachment;filename=xuetang_' . $kid . '.xls');

        header('Content-Length:' . filesize($filename));

        readfile($filename);

    }



    #下载一个试题



    public function actionDown_question() {

        header("content-type:text/html;charset=utf-8");



        #查询出对应知识点信息

        $qid = Yii::$app->request->get('qid');

        ;

        $sql = "select * from question  where qid=$qid";

        $exam_list = Yii::$app->db->createCommand($sql)->queryAll();

        $array = array('A', 'B', 'C', 'D');

        ob_start();

        foreach ($exam_list as $key => $val) {

            echo ($key + 1) . '、' . $val['question'] . "\n\n";

            #如果有题目

            $selects = '';

            if ($val['selects'] != '') {

                $selects = unserialize($val['selects']);

                foreach ($selects as $sk => $sv) {

                    echo "\t" . $array[$sk] . '、' . $sv . "\n\n";

                }

            }

            #如果有答案

            if ($val['answer'] != '') {

                $answer = unserialize($val['answer']);

                $answer_str = "\t正确答案是：";

                foreach ($answer as $ak => $av) {

                    $at_key = array_search($av, $selects);

                    $answer_str .= $array[$at_key];

                    //$answer_str .= ','.$av;

                }

                echo $answer_str;

            }

        }

        $str = ob_get_contents();

        ob_end_clean();

        header("Content-type:application/octet-stream");

        header("Accept-Ranges:bytes");

        header("Accept-Length:" . strlen($str));

        header('Content-Disposition:attachment;filename=' . addslashes(mb_substr($exam_list[0]['question'], 0, 20, 'utf-8')) . '.doc');

        header("Pragma:no-cache");

        header("Expires:0");

        echo $str;

    }



    //问题删除

    public function actionList_del() {

        //echo "1";die;

        $id = Yii::$app->request->post('qid');

        $sql = "delete from question where qid='$id'";

        $data = Yii::$app->db->createCommand($sql)->query();

        if ($data) {

            echo 1;

        } else {

            echo 0;

        }

    }



    //问题的批量删除

    public function actionRecycles() {

        //echo 11;

        $id = Yii::$app->request->post('qid');

        //print_r($id);die;

        $qid = implode(",", $id);

        //echo $qid;die;

        $sql = "delete from question where qid in ($qid)";

        $data = Yii::$app->db->createCommand($sql)->query();



        if ($data) {

            echo 1;

        } else {

            echo 0;

        }

    }



    //问题名称搜索

    public function actionQuestion_search() {

        $question = Yii::$app->request->post('question');

        //echo $question;die;

        $sql = "select * from question,knowpoint where question.kid=knowpoint.kid and question like '%$question%'";

        $two = Yii::$app->db->createCommand($sql)->queryAll();



        foreach ($two as $k => $v) {

            $two[$k]['selects'] = unserialize($v['selects']);

            $two[$k]['answer'] = unserialize($v['answer']);

        }



        //print_r($two);

        $str['date'] = $two;

        echo json_encode($str);

    }



    //问题页面

    public function actionUpfile() {

        $sql='select c_id,c_name from college'; 
        $one= Yii::$app->db->createCommand($sql)->queryAll();
        $sql1='select * from stage'; 
        $stage= Yii::$app->db->createCommand($sql1)->queryAll();
        $sql = "select * from knowpoint";
        $mo = Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('upfile', ['mo' => $mo,"one"=>$one,"stage"=>$stage]);
    }
/**/
public function actionCkthree()
{
    $sql1='select * from stage'; 
    $stage= Yii::$app->db->createCommand($sql1)->queryAll();
    echo json_encode($stage);
}
/* 联动 */
public function actionCktwo()
{
        $c_id=$_POST['c_id'];

        //print_r($one);die;

        $sql="select * from major where c_id='$c_id'"; 

        $two= Yii::$app->db->createCommand($sql)->queryAll();

        //print_r($two);die;

        echo json_encode($two);
}
/* 单元联动 */
public function actionCkone()
{
    // 学院ID
        $c_id = isset($_POST['c_id']) ? $_POST['c_id'] : 1;
        $cid= isset($_POST['c_id']) ? $_POST['cid'] : 1;
        $sid= isset($_POST['c_id']) ? $_POST['sid'] : 1;
        $sql11 = "select cid from course where c_id='$c_id' and mid='$cid' and sid='$sid'";
        $data = Yii::$app->db->createCommand($sql11)->queryAll();
        if(empty($data))
        {
            echo json_encode(array('kid'=>'无数据'));
            die;
        }
        foreach($data as $key=>$val)
        {
            $sql22 = "select * from knowpoint inner join chapter on chapter.ch_id = knowpoint.ch_id where cid='$val[cid]'";
            $mo = Yii::$app->db->createCommand($sql22)->queryAll();
        }
        if(empty($mo))
        {
            echo json_encode(array('kid'=>'无数据'));
            die;
        }
        // foreach($mo as $key=>$v)
        // {
        //     $arr[$v['kid']] = $v['know'];
        // }
        echo json_encode($mo);
}

    //执行添加题和修改

    public function actionAdd_file() {



       if(!empty($_POST['edit'])){

           // print_r($_POST);die;

            $qid = $_POST['qid'];

            $kid = $_POST['kid'];

            $question = htmlspecialchars($_POST['question']);

            $str = trim($_POST['selects']);

            $type = $_POST['type'];

       }else{

            $kid = $_POST['kid'];

            $question = htmlspecialchars($_POST['question']);

            $str = trim($_POST['selects']);

            $type = $_POST['type'];

            $add_time = date("Y-m-d H:i:s");

       }



       if($type!=4){

            $len = strlen($str) - 3;

            $str1 = substr($str, 0, $len);

            if($type == 3){

                if($str1 == "对#@#错"){

                    $new_str1 = str_replace("对#@#错","1#@#0",$str1);

                }elseif ($str1 == "错#@#对") {

                    $new_str1 = str_replace("错#@#对","0#@#1",$str1);

                }   

            }else{

                $new_str1 = $str1;

            }

            $arr = explode("#@#", $new_str1);

            $selects = serialize($arr); //把这个数组序列化

       }else{

            $selects = "";

       }

        



        $answer = $_POST['answer'];

        if ($type == 3) {

            $answer=str_replace("对","1",$answer);

            $answer=str_replace("错","0",$answer);

            $answer_arr[] = trim($answer);

        } else if ($type == 2) {

            $len = strlen($answer) - 3;

            $str1 = substr($answer, 0, $len);

            $answer_arr = explode("#@#", $str1);

        } else if ($type == 1) {

            $answer_arr[] = trim($answer);

        } else if($type == 4){

            if(strpos($answer,"#@#")){

                $len = strlen($answer) - 3;

                $str1 = substr($answer, 0, $len);

                $answer_arr = explode("#@#", $str1);

            }else{

                $answer_arr[] = trim($answer);

            }   

        }

       // print_r($answer_arr);die;

        $answer2 = serialize($answer_arr);

        if(!empty($_POST['edit'])){

           $sql = "update question set kid=$kid,question='$question',selects='$selects',answer='$answer2',type='$type' where qid=$qid";

        }else{

            $sql = "insert into question (kid,question,selects,answer,type,is_hui,add_time)values('$kid','$question','$selects','$answer2','$type','0','$add_time')";  

        }

        $data = Yii::$app->db->createCommand($sql)->query();

        if ($data) {

            echo "<script>alert('ok');location.href='index.php?r=user/exam/index_list'</script>";

        } else {

            echo "<script>alert('false');location.href='index.php?r=user/exam/add_file'</script>";

        }

    }



    //试卷修改

    public function actionEdit() {

        $qid = $_GET["qid"];

       //echo $qid;die;

        $sql = "select knowpoint.kid,question.* from question,knowpoint where question.kid=knowpoint.kid and question.qid=$qid";

        $re  = Yii::$app->db->createCommand($sql)->queryAll();

      

         foreach ($re as $k => $v) {

            $re[$k]['selects'] = unserialize($v['selects']);

            $re[$k]['answer']  = unserialize($v['answer']);

        }

      

        foreach($re as $v){

           foreach($v as $kk=>$vv){

                $arr[$kk]=$vv;

           }

        }

       

        if($arr['type']!=4){

            $selects = implode("#@#", $arr['selects']);

            if($arr['type']==3){

                if($selects == "1#@#0"){

                    $selects = str_replace("1#@#0","对#@#错",$selects);

                }elseif ($selects == "0#@#1") {

                    $selects = str_replace("0#@#1","错#@#对",$selects);

                } 

            }

            $selects = $selects."#@#";

        }else{

            $selects = "";

        }

        $selects = str_replace("<","&lt", $selects);

      

        if($arr['type']==2){

            if(count($arr['answer']>1)){

                 $answer = implode("#@#", $arr['answer']);

                 $answer = $answer."#@#";

            }else{

                 $answer = implode("", $arr['answer']);

            }

        }else if($arr['type']==4){

            if (count($arr['answer'])>1) {

                $answer = implode("#@#", $arr['answer']);  

                $answer = $answer."#@#";                                 

            }else{

                $answer = implode("", $arr['answer']);

            }    

        }else if($arr['type']==3){

            $answer = implode("", $arr['answer']);

            if($answer == '1'){

                $answer = str_replace("1","对",$answer);

            }else if($answer == '0'){

                $answer = str_replace("0","错",$answer);

            }

        }else{

            $answer = implode("", $arr['answer']);

        }

        

        $answer = str_replace("<","&lt", $answer);

        

        $sql = "select * from knowpoint";

        $mo = Yii::$app->db->createCommand($sql)->queryAll();

        return $this->render('edit', ['mo' => $mo,"arr"=>$arr,"selects"=>$selects,"answer"=>$answer]);

    }



}

