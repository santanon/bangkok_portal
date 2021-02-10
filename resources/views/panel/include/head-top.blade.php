<div class="head-top-wrapper">
    <div class="left">
        <ul>
            <li class="sign-out">
                <a href="/panel-admin/logout"><i class="fas fa-times"></i> ออกจากระบบ</a>
            </li>
            <li>
                Welcome : <span><?php echo @$_SESSION['panel_web_name'] ?></span>
            </li>
        </ul>
    </div>
    <div class="right">
        <ul>
            <li class="account"> 
                <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','manage-admin/edit?m=setting_website');">
                    <i class="fas fa-user"></i> ข้อมูลผู้ใช้งาน
                </a>
            </li> 
            <li class="setting">
                <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','manage-admin/edit?m=setting_html_css');">
                    <i class="fas fa-cog"></i> ตั้งค่าเว็บไซต์
                </a>
            </li> 
        </ul>
    </div>
</div>