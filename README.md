# DiliCMS-Admin-Theme
DiliCMS后台界面主题 http://www.dilicms.com/
> 在学习CI的过程中发现了dilicms，发现dilicms挺不错的。为了能更深入的学习CI于是为dilicms做了一套后台页面，加深对CI的学习和理解

# 安装

1.下载文件，命名如：jakehu

2.将文件夹放在 dilicms/admin/templates 下

3.将shared/libraries/Acl.php中的show_left_menus()方法换成如下代码：

```php
    public function show_left_menus()
	{
		foreach ($this->left_menus as $key => $v)
		{
			if ($v['sub_menus'])
			{
				echo '<li class="treeview"><a href="#"><i class="fa fa-circle-o"></i>' . $v['menu_name'] . '</a>
					     <ul class="treeview-menu">';
						 foreach ($v['sub_menus'] as $j)
						 {
						   $extra = '';
						   $this->_current_menu ==  1 AND $extra =  'model=' . $j['extra'] ;
						   if ($this->_current_menu ==  2) {
						        echo '<li class=""><a href="' . 
						   	        plugin_url($key, $j['class_name'], $j['method_name']) . '">' . $j['menu_name'] . '</a></li>';
						   	    continue;
						   } 
						   echo '<li class=""><a href="' . 
						   	 backend_url($j['class_name'] . '/' . $j['method_name'], $extra) . '">' . $j['menu_name'] . '</a></li>';
						 }
				echo	 '</ul>
				      </li>';	
			}
		}
	}
```
