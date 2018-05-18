<?php

namespace Admin\Controller;

use Think\Controller;

class SystemController extends CommonController
{
    public function sy_list()
    {
        $this->display();
    }

    public function sy_add()
    {
        if (IS_POST) {
            $file = "./Application/Common/Conf/config.php";
            //合并两个数组，如果有相同的话就进行替换 ,array_change_key_case将键转换为大写
            $config = array_merge(include $file, array_change_key_case($_POST, CASE_UPPER));
            $str = "<?php\r\n return " . var_export($config, true) . "; ?>";
            if (file_put_contents($file, $str)) {
                $this->success('修改配置成功！', U('sy_list'));
            } else {
                $this->srror('修改配置失败!');
            }
            return;
        }
        $this->display();
    }
}