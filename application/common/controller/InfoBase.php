<?php
// +----------------------------------------------------------------------
// | WeiPHP [ 公众号和小程序运营管理系统 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017 http://www.weiphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 凡星 <weiphp@weiphp.cn> <QQ:203163051>
// +----------------------------------------------------------------------
namespace app\common\controller;
/**
 * 插件类
 *
 * @author yangweijie <yangweijiester@gmail.com>
 */
abstract class InfoBase
{

    /**
     * 视图实例对象
     *
     * @var view
     * @access protected
     */
    protected $view = null;

    /**
     * $info = array(
     * 'name'=>'Editor',
     * 'title'=>'编辑器',
     * 'description'=>'用于增强整站长文本的输入和显示',
     * 'status'=>1,
     * 'author'=>'weiphp',
     * 'version'=>'0.1'
     * )
     */
    public $info = [];

    public $addon_path = '';

    public $config_file = '';

    public $custom_config = '';

    public $admin_list = [];

    public $custom_adminlist = '';

    public $access_url = [];
    
    // 自定义权限规则
    public $auth_rule = [];
    
    // 自定义积分规则
    public $credit_config = [];
    
    // 自定义入口地址,默认是lists或者config
    public $init_url = [];

    public function __construct()
    {
        $this->view = new \think\facade\View();
        $this->addon_path = env('app_path') . $this->getName() . '/';
        $TMPL_PARSE_STRING = config('TMPL_PARSE_STRING');
        $TMPL_PARSE_STRING['__ADDONROOT__'] = __ROOT__ . '/' . $this->getName();
        config('TMPL_PARSE_STRING', $TMPL_PARSE_STRING);
        if (is_file($this->addon_path . 'config.php')) {
            $this->config_file = $this->addon_path . 'config.php';
        }
    }

    /**
     * 模板主题设置
     *
     * @access protected
     * @param string $theme
     *            模版主题
     * @return Action
     */
    final protected function theme($theme)
    {
        $this->view->theme($theme);
        return $this;
    }
    
    // 显示方法
    final protected function display($template = '')
    {
        if ($template == '')
            $template = CONTROLLER_NAME;
        echo ($this->fetch($template));
    }

    /**
     * 模板变量赋值
     *
     * @access protected
     * @param mixed $name
     *            要显示的模板变量
     * @param mixed $value
     *            变量的值
     * @return Action
     */
    final protected function assign($name, $value = '')
    {
        $this->view->assign($name, $value);
        return $this;
    }
    
    // 用于显示模板的方法
    final protected function fetch($templateFile = CONTROLLER_NAME)
    {
        if (! is_file($templateFile)) {
            $templateFile = $this->addon_path . $templateFile . config('TMPL_TEMPLATE_SUFFIX');
            if (! is_file($templateFile)) {
                throw new \Exception("模板不存在:$templateFile");
            }
        }
        return $this->view->fetch($templateFile);
    }

    final public function getName()
    {
        $class = get_class($this);
        $rpos =strrpos($class, '\\');
        $ipos =stripos($class, '\\');
        return substr($class, $ipos + 1, $rpos-$ipos-1);
    }

    final public function checkInfo()
    {
        $info_check_keys = array(
            'name',
            'title',
            'description',
            'status',
            'author',
            'version'
        );
        foreach ($info_check_keys as $value) {
            if (! array_key_exists($value, $this->info))
                return FALSE;
        }
        return TRUE;
    }

    /**
     * 获取插件的配置数组
     */
    final public function getConfig($name = '')
    {
        if (empty($name)) {
            $name = $this->getName();
        }
        return getAddonConfig($name);
    }
    
    // 必须实现安装
    abstract public function install();
    
    // 必须卸载插件方法
    abstract public function uninstall();
}
