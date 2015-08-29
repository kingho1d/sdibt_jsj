<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //导航栏
        $sql = M('news_main');
        $allResult = $sql->select();
        $where['type_id'] = 0; 
        $result = $sql->where($where)->select();
        $this->assign('result',$result); 
        
        foreach ($allResult as $key=>$val){
            $result1[$allResult[$key]['type_id']][$allResult[$key]['news_id']] = $val;
        }
        $this->assign('result1',$result1);
        
        
        //首页信息
        //学院新闻
        $sql = M('home_page');
        $where['type_id'] = 1;
        $result2 = $sql->where($where)->order('addtime desc')->select();
        $cnt=0;
        foreach ($result2 as $val){
            $subres[$cnt]=$val;
            $cnt++;
            if($cnt==4)
                break;
        }
        $this->assign('result2',$subres);

        //四个小的模块显示
        $where['type_id'] = array(gt,1);
        $allResult1 = $sql->where($where)->order('addtime desc')->select();
        foreach ($allResult1 as $key=>$val){
            if(count($result3[$allResult1[$key]['type_id']])<5)
                $result3[$allResult1[$key]['type_id']][$allResult1[$key]['news_id']] = $val;
        }
        $this->assign('result3',$result3);
        $where['type_id'] = 0;
        $where['news_id'] = array(neq,1);
        $result4 = $sql->where($where)->select();
        $this->assign('result4',$result4);
        //dump($result4);
        $this->display();
    }
}