<div class="head-top-wrapper">
    <div class="left">
        <ul>
            <li class="sign-out">
                <a href="/panel-admin/logout"><i class="fas fa-times"></i> Sign Out</a>
            </li>
            <li>
                Welcome : <span><?php echo @$_SESSION['panel_web_name'] ?></span>
            </li>
        </ul>
    </div>
    <div class="right">
        <ul>
            <li class="account"> 
                <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('MY ACCOUNT','manage-admin/edit?m=portal_website');">
                    <i class="fas fa-user"></i> my account
                </a>
            </li>
            <!-- <li class="question">
                <a href="">
                    <i class="fas fa-question"></i> ask a question
                </a>
            </li> -->
            <li class="setting">
                <a href="#" data-toggle="modal" data-target="#modal_full" onclick="sfi('SETTING','manage-admin/edit?m=portal_website_style');">
                    <i class="fas fa-cog"></i> setting
                </a>
            </li>
        </ul>
    </div>
</div>