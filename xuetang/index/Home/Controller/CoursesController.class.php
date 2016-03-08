<?php



namespace Home\Controller;



use Think\Controller;



class CoursesController extends Controller {



    //显示课程首页

    public function index() {



        //显示课程列表

        //分页

        $count = M('course')->count();

        $page_size = 5;

        $page_all = ceil($count / $page_size);

        $page_what = $_GET['page_what'] ? $_GET['page_what'] : 1;

        $course = D('Courses')->page_courses($page_what, $page_size);

        $page_last = $page_what - 1 > 0 ? $page_what - 1 : 1;

        $page_next = $page_what + 1 > $page_all ? $page_all : $page_what + 1;

        $page = "共" . $count . "条 " . $page_all . "页&nbsp;&nbsp;&nbsp;&nbsp;当前第" . $page_what . "页&nbsp;&nbsp; <a href='index?page_what=1'>首页</a> <a href='index?page_what=$page_last'>上一页</a> <a href='index?page_what=$page_next'>下一页</a> <a href='index?page_what=$page_all'>尾页</a>";

        //print_r($course);die;

        $this->assign('course', $course);

        $this->assign('page', $page);

        //搜索功能

        //查询学科分类

        $xk_model = D("Courses")->xk_model();

        //print_r($xk_model);die;

        $this->assign(xk, $xk_model);



        //查询学院

        // $xy_model =  M("college");

        $xy_model = D("Courses")->xy_model();

        $this->assign(xy, $xy_model);

        $this->assign('view', 'index');

        $this->display();

    }



    //科学领域搜索后 列表显示

    public function kexueSearch() {



        $m_id = $_GET['m_id'];   //专业id

        // echo $m_id;die;

        $course = D("Courses")->kexue_list($m_id);



        //echo 1;

        $this->assign('course', $course);



        //跳转页面后的页面展示

        //查询学科分类

        $xk_model = D("Courses")->xk_model();

        //$xk = $xk_model->query("select * from major");

        $this->assign(xk, $xk_model);



        //查询学院

        //$xy_model =  M("college");

        //$xy = $xk_model->query("select * from college limit 4");

        $xy_model = D("Courses")->xy_model();

        $this->assign(xy, $xy_model);

        $this->display("index");

    }



    //垂直领域搜索

    public function chuizhi_search() {



        $c_id = $_GET['c_id'];  //学院id

        $college = M('college')->where('c_id = \'' . $c_id . '\'')->find();

        $course_level = D('college')->get_stages($c_id);

        $stage_courses = D('college')->get_all_courses($c_id);
        //$sid=$stage_courses['sid'];
        $arr=array();
        foreach($stage_courses as $key=>$v)
        {
          $arr[]=$v['sid'];
        }
         //var_dump($arr);die();
         if(in_array('2',$arr))
         {
            $this->assign('two',2);
         }
         else if(in_array('3',$arr))
         {
           $this->assign('two',3);
         }
         else if(in_array('two',$arr))
         {
            $this->assing('two',4);
         }
         if(in_array('4',$arr))
         {
            $this->assign('three',5);
         }
         else if(in_array('3',$arr))
         {
          $this->assign('three',4);
         }
         else if(in_array('2',$arr))
         {
          $this->assign('three',3);
         }
        $sid=M('course')->where("c_id='$c_id'")->select();
        //var_dump($sid);die();

        //print_r($stage_courses);die;

        $this->assign('stage_courses', $stage_courses);

        $this->assign('course_level', $course_level);


        $this->assign('college', $college);

        $this->display('chuizhi_list');

    }



    //院校首页

    public function partners() {



        $arr = M("college")->query("select count(*) as num,c_name,college.c_id,img from college inner join course on college.c_id=course.c_id group by c_name");

        //print_r($arr);die;

        $this->assign('arr', $arr);

        $this->display("partners");

    }



    /*

      显示课程

      type:1 查询学院

      type:2 显示给定ID的课程及相关信息

      type:3 显示给定学院给定阶段的课程

     */



    public function sel_list() {

        $xk_model = D("Courses")->xk_model();

        $this->assign(xk, $xk_model);

        $xy_model = D("Courses")->xy_model();

        //print_r($xy_model);die;

        $this->assign(xy, $xy_model);

        if ($_REQUEST['type'] == 2) {

            $course = D('Courses')->get_course($_GET['c_id'], $_REQUEST['type']);

            //print_r($course);die;

            $this->assign('course', $course);

            $this->assign('type', '2');

        } elseif ($_REQUEST['type'] == 3) {

            $where['c_id'] = $_GET['c_id'];

            $where['s_id'] = $_GET['s_id'];

            $course = D('Courses')->get_course($where, $_REQUEST['type']);

            $this->assign('course', $course);

            //print_r($course);die;

            $this->assign('type', '3');

        } elseif ($_REQUEST['type'] == 1) {

            $count = M('course')->where('c_id = \'' . $_GET['c_id'] . '\'')->count();

            $page_size = 5;

            $page_all = ceil($count / $page_size);

            $page_what = $_GET['page_what'] ? $_GET['page_what'] : 1;

            $course = D('Courses')->page_courses($page_what, $page_size, $_GET['c_id']);

            $page_last = $page_what - 1 > 0 ? $page_what - 1 : 1;

            $page_next = $page_what + 1 > $page_all ? $page_all : $page_what + 1;

            $page = "共" . $count . "条 " . $page_all . "页,当前第" . $page_what . "页 <a href='index?page_what=1'>首页</a> <a href='index?page_what=$page_last'>上一页</a> <a href='index?page_what=$page_next'>下一页</a> <a href='index?page_what=$page_all'>尾页</a>";

            $this->assign('course', $course);

            $this->assign('page', $page);

            $this->assign('type', '1');

        }

        $this->assign('view', 'sel');

        $this->display("index");

    }



}

