<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link rel="stylesheet" href="/panel/css/bootstrap/bootstrap.css">
</head> 
<body> 
	<table align="center" width="90%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td align="left">
    <h2>Local Datasource</h2> 
    <p>Javascript array as data source</p>
    </td> 
    <td align="right"><button type="button" class="btn btn-primary">Add</button> <button type="button" class="btn btn-primary">Sort</button></td>
    </tr>
    </table>  
    <table align="center" width="90%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td align="left"> 
    
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
    </td>  
    </tr>
    </table>  
    <br /> 
    <table align="center" width="90%" cellpadding="5" cellspacing="1" style="background-color:#CCC;">
        <tr style="background-color:#FFF; font-weight:bold;!important">
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
        <tr style="background-color:#FFF;">
          <td><input type="checkbox" /></td>
          <td>#00001</td>
          <td>ข่าวเด่นประเด็นร้อน</td>
          <td>ข่าว</td> 
          <td>5 วันที่แล้ว</td>
          <td><input onclick="this.select();" type="text" name="sort[]"value="1" style="width:50px; text-align:center" maxlength="4"></td>
          <td>แก้ไข</td>
          <td>สถานะ</td>
          <td>ลบ</td>
        </tr>
        <tr style="background-color:#FFF;">
          <td><input type="checkbox" /></td>
          <td>#00001</td>
          <td>ข่าวเด่นประเด็นร้อน</td>
          <td>ข่าว</td> 
          <td>5 วันที่แล้ว</td>
          <td><input onclick="this.select();" type="text" name="sort[]"value="1" style="width:50px; text-align:center" maxlength="4"></td>
          <td>แก้ไข</td>
          <td>สถานะ</td>
          <td>ลบ</td>
        </tr>
        <tr style="background-color:#FFF;">
          <td><input type="checkbox" /></td>
          <td>#00001</td>
          <td>ข่าวเด่นประเด็นร้อน</td>
          <td>ข่าว</td> 
          <td>5 วันที่แล้ว</td>
          <td><input onclick="this.select();" type="text" name="sort[]"value="1" style="width:50px; text-align:center" maxlength="4"></td>
          <td>แก้ไข</td>
          <td>สถานะ</td>
          <td>ลบ</td>
        </tr>
      </table>
      <table align="center" width="90%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td align="left">หน้า : 
	<select>
    <option>1</option>
    </select>
  	จาก 2</td>
    <td align="right">แสดง : 
    <select>
    <option>100</option>
    </select> จากทั้งหมด 1000</td>
    </tr>
    </table>
</body>
</html>


