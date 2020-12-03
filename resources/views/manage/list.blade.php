<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link rel="stylesheet" href="/panel/css/bootstrap/bootstrap.css">
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">
<script src="https://use.fontawesome.com/8b2844b117.js"></script>
<style type="text/css">
  

  .container-fluid{
    padding-top: 10px;
    padding-bottom: 10px;
  }

  .table-list{
    width: 100%;
  }

  .table-list tr{
    border-bottom: solid 1px #dcdcdc;
  }

  .table-list tr th, .table-list tr td{
    padding: 10px 10px 5px 10px;
  }

  .edit-icon{
    color: #666;
  }
  .edit-icon:hover{
    color: #006600;
    text-decoration: none;
  }

  .status-icon{
    color: #666;
  }
  .status-icon.active{
    color: #006600;
  }
  .status-icon.offline{
    color: #ff0000;
  }

  .delete-icon{
    color: #666;
  }
  .delete-icon:hover{
    color: #ff0000;
    text-decoration: none;
  }
</style>
</head> 
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-10">
        <h2>จัดการข้อมูล / แสดงรายการ</h2> 
        <p>( พบข้อมูลทั้งหมด 5 รายการ )</p>
      </div>
      <div class="col-1">
        <a href="/manage-admin/add?m=portal_website_news"><button type="button" class="btn btn-block btn-primary"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Add</button></a>
      </div>
      <div class="col-1">
        <button type="button" class="btn btn-block btn-info"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i> Sort</button>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row align-items-end">
      <div class="col">
        <label for="Search">Search</label>
          <input type="text" class="form-control" id="Search" placeholder="" value="">
      </div>
      <div class="col">
        <label for="Type">Type</label>
        <select class="custom-select d-block w-100" id="Type" required="">
          <option value="">Choose...</option> 
        </select>
      </div>
      <div class="col">
        <label for="Type">Type</label>
        <select class="custom-select d-block w-100" id="Type" required="">
          <option value="">Choose...</option> 
        </select>
      </div>
      <div class="col">
        <button type="button" class="btn btn-primary">Search</button>
      </div>
    </div> 
  </div>  

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <table class="table-list" cellpadding="5" cellspacing="1">
          <tr style=" font-weight:bold;!important">
            <td><input type="checkbox" /></td>
            <td>เลขที่</td>
            <td>หัวข้อ</td>
            <td>ประเภท</td> 
            <td>วันที่สร้าง</td>
            <td>เรียง</td>
            <td>แก้ไข</td>
            <td>สถานะ</td>
            <td>ลบ</td>
          </tr>
          <tr style="">
            <td><input type="checkbox" /></td>
            <td>#00001</td>
            <td>ข่าวเด่นประเด็นร้อน</td>
            <td>ข่าว</td> 
            <td>5 วันที่แล้ว</td>
            <td><input onclick="this.select();" type="text" name="sort[]"value="1" style="width:50px; text-align:center" maxlength="4"></td>
            <td><a href="javascript: void(0)" class="edit-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
            <td><div class="status-icon active"><i class="fa fa-circle" aria-hidden="true"></i> Active</div></td>
            <td><a href="javascript: void(0)" class="delete-icon"><i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>
          </tr>
          <tr style="">
            <td><input type="checkbox" /></td>
            <td>#00001</td>
            <td>ข่าวเด่นประเด็นร้อน</td>
            <td>ข่าว</td> 
            <td>5 วันที่แล้ว</td>
            <td><input onclick="this.select();" type="text" name="sort[]"value="1" style="width:50px; text-align:center" maxlength="4"></td>
            <td><a href="javascript: void(0)" class="edit-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
            <td><div class="status-icon offline"><i class="fa fa-circle" aria-hidden="true"></i> Offline</div></td>
            <td><a href="javascript: void(0)" class="delete-icon"><i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>
          </tr>
          <tr style="">
            <td><input type="checkbox" /></td>
            <td>#00001</td>
            <td>ข่าวเด่นประเด็นร้อน</td>
            <td>ข่าว</td> 
            <td>5 วันที่แล้ว</td>
            <td><input onclick="this.select();" type="text" name="sort[]"value="1" style="width:50px; text-align:center" maxlength="4"></td>
            <td><a href="javascript: void(0)" class="edit-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
            <td><div class="status-icon active"><i class="fa fa-circle" aria-hidden="true"></i> Active</div></td>
            <td><a href="javascript: void(0)" class="delete-icon"><i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>
          </tr>
          <tr style="">
            <td><input type="checkbox" /></td>
            <td>#00001</td>
            <td>ข่าวเด่นประเด็นร้อน</td>
            <td>ข่าว</td> 
            <td>5 วันที่แล้ว</td>
            <td><input onclick="this.select();" type="text" name="sort[]"value="1" style="width:50px; text-align:center" maxlength="4"></td>
            <td><a href="javascript: void(0)" class="edit-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
            <td><div class="status-icon active"><i class="fa fa-circle" aria-hidden="true"></i> Active</div></td>
            <td><a href="javascript: void(0)" class="delete-icon"><i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>
          </tr>
          <tr style="">
            <td><input type="checkbox" /></td>
            <td>#00001</td>
            <td>ข่าวเด่นประเด็นร้อน</td>
            <td>ข่าว</td> 
            <td>5 วันที่แล้ว</td>
            <td><input onclick="this.select();" type="text" name="sort[]"value="1" style="width:50px; text-align:center" maxlength="4"></td>
            <td><a href="javascript: void(0)" class="edit-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
            <td><div class="status-icon offline"><i class="fa fa-circle" aria-hidden="true"></i> Offline</div></td>
            <td><a href="javascript: void(0)" class="delete-icon"><i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>
          </tr>
          <tr style="">
            <td><input type="checkbox" /></td>
            <td>#00001</td>
            <td>ข่าวเด่นประเด็นร้อน</td>
            <td>ข่าว</td> 
            <td>5 วันที่แล้ว</td>
            <td><input onclick="this.select();" type="text" name="sort[]"value="1" style="width:50px; text-align:center" maxlength="4"></td>
            <td><a href="javascript: void(0)" class="edit-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
            <td><div class="status-icon active"><i class="fa fa-circle" aria-hidden="true"></i> Active</div></td>
            <td><a href="javascript: void(0)" class="delete-icon"><i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>
          </tr>
          <tr style="">
            <td><input type="checkbox" /></td>
            <td>#00001</td>
            <td>ข่าวเด่นประเด็นร้อน</td>
            <td>ข่าว</td> 
            <td>5 วันที่แล้ว</td>
            <td><input onclick="this.select();" type="text" name="sort[]"value="1" style="width:50px; text-align:center" maxlength="4"></td>
            <td><a href="javascript: void(0)" class="edit-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
            <td><div class="status-icon active"><i class="fa fa-circle" aria-hidden="true"></i> Active</div></td>
            <td><a href="javascript: void(0)" class="delete-icon"><i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>
          </tr>
          <tr style="">
            <td><input type="checkbox" /></td>
            <td>#00001</td>
            <td>ข่าวเด่นประเด็นร้อน</td>
            <td>ข่าว</td> 
            <td>5 วันที่แล้ว</td>
            <td><input onclick="this.select();" type="text" name="sort[]"value="1" style="width:50px; text-align:center" maxlength="4"></td>
            <td><a href="javascript: void(0)" class="edit-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
            <td><div class="status-icon offline"><i class="fa fa-circle" aria-hidden="true"></i> Offline</div></td>
            <td><a href="javascript: void(0)" class="delete-icon"><i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>
          </tr>
          <tr style="">
            <td><input type="checkbox" /></td>
            <td>#00001</td>
            <td>ข่าวเด่นประเด็นร้อน</td>
            <td>ข่าว</td> 
            <td>5 วันที่แล้ว</td>
            <td><input onclick="this.select();" type="text" name="sort[]"value="1" style="width:50px; text-align:center" maxlength="4"></td>
            <td><a href="javascript: void(0)" class="edit-icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
            <td><div class="status-icon active"><i class="fa fa-circle" aria-hidden="true"></i> Active</div></td>
            <td><a href="javascript: void(0)" class="delete-icon"><i class="fa fa-trash-o" aria-hidden="true"></i></a> </td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <table class="table-list" cellspacing="0" cellpadding="0">
          <tr style="border-bottom: solid 1px #FFFFFF;">
            <td align="left">หน้า : 
              <select>
                <option>1</option>
              </select>
              จาก 2
            </td>
            <td align="right">แสดง : 
              <select>
                <option>100</option>
              </select> จาก 1000
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</body>
</html>


