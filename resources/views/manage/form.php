<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/panel/css/bootstrap/bootstrap.css">
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
</head>
<body>
<table align="center" width="95%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
      <h2><?php echo $text_header ?></h2><br>
      <p>
        <?php echo $text_header_description ?> 
      </p>
    </td>
  </tr>
</table>
<br />
<table align="center" width="95%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><form>
        <?php 
        function field_to_text($v)
        {
          $v = ucfirst($v);
          $v = str_replace('_',' ',$v);
          return $v;
        }
        foreach ($col_list as $key => $value) 
        {
          $req_field = false;
          $div_class = 'form-group';
          $input_subject = field_to_text($value);
          $input_type = 'text';
          $input_id = 'id_'.$value;
          $input_placeholder = 'Enter '.field_to_text($value);
          $input_description = "We'll never share your email with anyone else.";
          $select_key = array('- เลือก -');
          $select_value = array('');

          if ($value == 'web_type') 
          {
            $input_subject = 'ประเภทเว็บไซต์';
            $input_type = 'select';
            $select_key = array('- เลือก -','กอง','ศูนย์บริการสาธารณสุข','สำนัก','สำนักงาน','สำนักงานเขต','อบรม','อื่นๆ','โรงเรียน');
            $select_value = array('','2','6','3','8','4','7','5','9');
            $req_field = true;
          } 
          elseif ($value == 'web_type1') 
          {

          }

          if($input_type == 'text')
          {
            ?>
            <div class="<?php echo $div_class ?>">
              <label for="<?php echo $input_id ?>"><?php echo $input_subject ?><?php if($req_field == true){ ?><b style="color: red;">*</b><?php } ?></label>
              <input type="<?php echo $input_type ?>" class="form-control" id="<?php echo $input_id ?>" name="<?php echo $value ?>" placeholder="<?php echo $input_placeholder ?>" value="<?php echo @$rows[0]->{$value} ?>">
              <small id="<?php echo $value ?>Help" class="form-text text-muted"><?php echo $input_description ?></small> 
            </div>
            <?php
          }
          elseif($input_type == 'select')
          {
            ?>
            <div class="<?php echo $div_class ?>">
              <label for="<?php echo $input_id ?>"><?php echo $input_subject ?><?php if($req_field == true){ ?><b style="color: red;">*</b><?php } ?></label>
              <select name="<?php echo $value ?>" class="form-control" id="<?php echo $input_id ?>">
                <?php
                foreach ($select_key as $key_sub => $value_sub) 
                {
                  ?><option value="<?php echo $select_value[$key_sub] ?>" <?php 
                    
                    if(isset($rows[0]->{$value}) && $rows[0]->{$value} == $select_value[$key_sub])
                    {
                        ?> selected <?php
                    }
                    
                    ?>><?php echo $value_sub ?></option><?php
                }
                ?> 
              </select>
              <small id="<?php echo $value ?>Help" class="form-text text-muted"><?php echo $input_description ?></small> 
            </div>
            <?php
          }
          ?>
          
          <?php
        } 
        ?>
         
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <div id="editor"></div>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Example select</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Example file input</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1"> Default checkbox </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
          <label class="form-check-label" for="defaultCheck2"> Disabled checkbox </label>
        </div>
        <br />
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
          <label class="form-check-label" for="exampleRadios1"> Default radio </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
          <label class="form-check-label" for="exampleRadios2"> Second default radio </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
          <label class="form-check-label" for="exampleRadios3"> Disabled radio </label>
        </div>
        <br /> 
        <button type="submit" class="btn btn-primary">Submit</button>
      </form></td>
  </tr>
</table>
<br />
<script>
ClassicEditor
.create( document.querySelector( '#editor' ) )
.catch( error => {
	console.error( error );
} );
</script>
</body>
</html>
