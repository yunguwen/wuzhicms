<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","head",TPLID); ?>




<!--路径导航-->
<div style="background: #f5f5f5; border-bottom: 1px solid #ddd">
    <div class="container">
        <ol class="breadcrumb" style="margin-bottom: 0px; font-size: 12px;">
            您现在的位置：
            <li><a href="/index.php">首页</a></li>
            <li class="active"><a href="/index.php?m=guestbook">留言板</a></li>
        </ol>
    </div>
</div>





<div class="container">
    <div class="liuyan-form-title">
        <div class="lft-left">
            <a href="/index.php?m=guestbook"><span class="glyphicon glyphicon-list-alt" aria-hidden="true" style="top: 3px;"></span> 留言列表</a>  <a href="/index.php?m=member"><span class="glyphicon glyphicon-user" aria-hidden="true"  style="top: 3px;"></span> 用户中心</a>
        </div>
        <div class="lft-right">
            <a href="">
                <div  class="coupon"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> 快速留言 </div>
            </a>
        </div>
    </div>
    <br>

    <form action="/index.php?m=guestbook&f=index&v=contact" method="post">
    <div  class="form-inline" style="margin-bottom: 15px;">
        <div class="form-group">
            <label for="exampleInputName2">姓名<span class="color_danger">*</span></label>
            <input type="text" name="form[linkman]" class="form-control" id="exampleInputName2" placeholder="姓名" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">联系邮箱 <span class="color_danger">*</span></label>
            <input type="email" name="form[email]" class="form-control" id="exampleInputEmail2" placeholder="xxx@xxx.com" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">联系电话</label>
            <input type="text" name="form[tel]" class="form-control" id="exampleInputEmail" placeholder="联系电话" pattern="((\d{11})|^((\d{7,8})|(\d{4}|\d{3})-(\d{7,8})|(\d{4}|\d{3})-(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1})|(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1}))$)">
        </div>
    </div>


    <div class="form-box">
        <div class="row">
            <div class="col-md-8" style="margin-bottom: 10px;">
                <input type="text" name="form[title]" class="form-control" id="exampleInputEmail1" placeholder="请输入标题，不超过30个字，请勿使用特殊字符！" required>
            </div>
            <div class="col-md-2">
                <select class="form-control" name="form[area]" required>
                    <option value="">主题领域</option>
                    <?php $n=1; if(is_array($area_array)) foreach($area_array AS $key => $r) { ?>
                    <option value="<?php echo $key;?>" <?php if($area==$key) { ?>selected<?php } ?>><?php echo $r;?></option>
                    <?php $n++;}?>
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-control" name="form[category]" required>
                    <option value="">主题类别</option>
                    <?php $n=1; if(is_array($category_array)) foreach($category_array AS $key => $r) { ?>
                    <option value="<?php echo $key;?>" <?php if($category==$key) { ?>selected<?php } ?>><?php echo $r;?></option>
                    <?php $n++;}?>
                </select>
            </div>
            <div class="col-md-12">
                <textarea name="form[content]" class="form-control" rows="5" placeholder="请输入留言内容" required></textarea>
            </div>
            <div class="col-md-12">
                <div class="add-pic">
                    添加图片
                <span>
                      <div style="width:65px; height:64px; background:url(<?php echo R;?>t3/image/add_attchment.png); cursor:pointer;"><input id="fileupload" type="file" name="attach" style="filter:alpha(opacity:0);opacity: 0;position:absolute;top:0px; width:64px; height:63px; cursor:pointer;" onchange="ajaxFileUpload();"></div>
                </span>
                    <span class="limit">文件尺寸：500k<br>可用扩展名：jpg,bmp,gif,png,jpeg<br><br><p id="loading" style="display:none; color:#F00">操作中......</p> </span>
                </div>
            </div>
            </div>
        </div>

            <div  style="padding-top: 30px; color: #999; font-size: 12px;">
                <p>
                    *请勿在征文中留下您的电话、地址和真实姓名等个人资料。<br>
                    *您可以注册为留言板正式用户，将个人联系方式进行登记，以便留言办理单位及时和您联系<br>
                    *注册正式用户,以便给您更多便利<br>
                    ·登陆后可以随时查看留言情况<br>
                    ·安全的告诉地方领导您的联系方式<br>
                    ·留言单位与您站内短信联系<br>
                    为确保您的留言及时通过审核并尽快得到回复，如下事项请注意：<br>
                    1. 遵守中华人民共和国有关法律、法规，尊重网上道德，承担一切因您的行为而直接或间接引起的法律责任。<br>
                    2. 在注册信息内留下真实姓名，并如实填写联系电话和电子邮件，以便问题处理部门核实相关情况。（本栏目将对您的个人信息严格保密，您的信息只有人民网及各地留言办理单位可见<br>
                    3. 如反映问题，请您尽量写清具体时间、地点、当事人，以便您的问题及时得到核实处理。<br>
                    4. 留言标题请控制在22字以内；正文内容请尽量叙述清晰、简明扼要，1000字内为宜。<br>
                    5. 上传的附件要求为图片文件格式，大小控制在1M(1024K)以内<br>
                    6. 人民网对您留言的内容按照《互联网信息服务管理办法》及《地方领导留言板管理条例》进行统一审核，无法通过审核进行刊发的留言，或留言在不确定是否属实、需要调查落实的情况下，为保护您及当事人的合法权益，人民网将以其他形式将您反映的问题向各地进行交送。<br>
                    7. 为确保各地方领导及时清晰阅读网上民声，请勿重复留言<br>
                    8. 留言板管理员工作时间为周一至周日8:00——17：00。其它时段留言将延至工作时段进行审核。<br>
                </p>
            </div>
            <div class="checkbox">
                <label style="padding-right: 30px">
                    <input type="checkbox" name="checkbox" value="1" required> (我已阅读并同意以上条款)
                </label>
            </div>
            <div class=" form-inline text-center" >
                <button type="submit" name="submit" class="btn btn-warning  btn-lg" >&nbsp;&nbsp;&nbsp;提交留言&nbsp;&nbsp;&nbsp;</button>
            </div>

        </form>

</div>


<script type="text/javascript" language="javascript">
    function getV(o){
        var _v='';
        for(i=0;i<o.length;i++)
        {
            if(o[i].checked){_v=o[i].value;break;}
        }
        return _v;
    }
    function submit(){
        var _o1=document.getElementsByName("checkbox");
        var _checkbox=getV(_o1);
        if(_checkbox.length==0){alert("请选择同意协议");return false;}
    }
</script>

<?php if(!isset($siteconfigs)) $siteconfigs=get_cache('siteconfigs'); include T("content","foot",TPLID); ?>
