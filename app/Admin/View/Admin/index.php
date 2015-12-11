{{include file="VIEW_PATH/header.php"}}

<body>
    

<div class="hd-menu-list">
    <ul>
        <li class="active">
            <a href="#">角色列表</a>
        </li>
        <li><a href="{{U('add')}}">添加管理员</a></li>
    </ul>
</div>

<table class="hd-table hd-table-list">
    <thead>
    <tr>
        <td class='hd-w100'>ID</td>
        <td>会员名</td>
        <td>角色</td>
        <td>操作</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($data as $field):?>
    <tr>
        <td>{{$field['id']}}</td>
        <td>
            {{$field['username']}}
        </td>
        <td>
            {{$field['name']}}
        </td>
        <td class="hd-w150">
            <a href="{{U('edit',array('id'=>$field['id']))}}">修改</a> |
            <a href="javascript:del({{$field['id']}})">删除</a>
        </td>
    </tr>
<?php endforeach;?>
    </tbody>
</table>
<script>
    //删除栏目使用
    function del(id)
    {
        if(confirm('确定删除吗？'))
        {
            location.href="{{U('del')}}&id="+id;
        }
    }
</script>
</body>
</html>











