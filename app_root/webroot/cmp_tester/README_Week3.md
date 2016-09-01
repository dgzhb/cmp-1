# 第三周 的任务

测试与完善几种特殊用例


## CmpGrid

1 熟悉官方的属性以及事件函数
2 熟悉前端与后端的交互
3 熟悉封装后的参数以及方法
ps: 参考tester.JQ_EASYUI.htm

要求:	配合CmpDialog完成一个列表基本的增删查改功能

* grid部分参数详解
	targetDivId   目标操作区,即列表出现的父容器
	fMultiAction  是否需要checkbox来执行多行操作.值 boolean
	iActionWidth  action列的宽度
	actionFormatter		设置action按钮，参数 function(cellValue,row,index)  cellValue没什么用
	pageSize			列表每页的数据量,不设置则显示所有数据
	data_opt			列表的数据源,api返回的数据模型是{"table_columns":{},"table_data":{},"maxRowCount":{}}
	filterPanelId		列表的filter对应的操作区
	fShowFilterPanel	是否一开始就显示filter操作区。 值 boolean
	ToolBar			列表顶部功能按钮
	options			支持原生的easyui datagrid的参数设置
	
* grid部分方法详解
	getData		返回gird的table_data数据
	getSelected  返回grid选中的第一个
	getSelections  返回grid选中的数组
	getIDS		返回选中的数据的id数组
	getGrid    返回gird对象
	getCol		根据传入的field参数获取指定的列对象
	resetPageNumber		重置翻页,一般用于查找之前
	reload		重新加载数据

## CmpDialog
	

1 熟悉前端与后端的交互
2 熟悉封装后的参数
ps: 参考tester.JQ_EASYUI.htm

要求:	配合CmpGrid完成一个列表基本的增删查改功能

* Dialog部分参数详解
	targetDivId   目标操作区,即弹出框出现的父容器
	tpl_id  弹出框使用的模板id,我们的模板支持js代码,但是必须用“<% ”跟“ %>”包着。模板的js代码可以直接使用values参数的值跟action变量来得到对应的值
	wintitle  弹出框title，默认使用action参数的值
	values		初始值
	a		事件源元素。影响出现的位置
	_c		确定后调用后台的class
	_m		确定后调用后台的method
	action	对应的动作
	onBeforeConfirm		submit前调用的方法,一般用于检测数据的有效性
	onCallback			submit后的回调函数
	
## CmpCombo

1 熟悉官方的属性以及事件函数
2 下拉数据从api通过cmp的4层结构从orm获取数据.如果一开始orm没有数据,api也要返回一个默认的下拉值.
3 上述第二步的默认下拉值根据需求分成2种情况,一种就是返回固定的值,一种就是根据orm的某个字段使用频率最高的10个数值来返回
4 支持输入+下拉的形式选择,并根据每次输入的数据保存到后台，为第三步高频使用的数值做准备

## CmpDateBox

1 熟悉官方的属性以及事件函数
2 我们之前有hack了datebox支持month选择（见tester.JQ_EASYUI.htm）。但是还是有部分bug.我需要你们帮忙完善
	1) 输入日期的时候出现了显示bug（NaN,undefined等）
	2) today功能按钮换成This Month
	3) 年份那里尝试能否换成上述的cmpcombo的形式。即输入+下拉选择

