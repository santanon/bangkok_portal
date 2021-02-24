<div class="head-top-wrapper">
    <div class="left">
        <ul>
            
            <li>
                Welcome : <span><?php echo @$_SESSION['panel_web_name'] ?></span>
            </li>
        </ul>
    </div>
    <div class="right">
        <ul> 
            <li class="setting">
                <a href="/manage-admin/setting">
                    <i class="fas fa-cog"></i> ตั้งค่าเว็บไซต์
                </a>
            </li> 
            <li class="sign-out">
                <a href="/panel-admin/logout"><i class="fas fa-times"></i> ออกจากระบบ</a>
            </li>
        </ul>
    </div>
</div>

<?php 
/* data-toggle="modal" data-target="#modal_full" onclick="sfi('กำลังโหลด...','/manage-admin/edit_website?m=setting_website');" */
?>