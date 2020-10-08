<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  
	<head>
		<link rel="stylesheet" type="text/css" href="media/style/{{$manager_theme}}/style.css" /> 
	</head>
  
	<body style="background-color:#EEEEEE">
    
      <h1>Импорт и эксорт</h1>
		<div id="actions">
      <ul class="actionButtons">
        <li id="Button1"><a onclick="document.location.href='index.php?a=106';" href="#"><img src="media/style/MODxCarbon/images/icons/stop.png">Закрыть модуль</a></li>
      </ul>
    </div>
		<div class="sectionBody">
    
      

			<div id="modulePane" class="dynamic-tab-pane-control tab-pane">
				<div class="tab-row">
					<h2 id="page1" class="tab @if($_GET['tab'] != export) selected @endif "><span onClick="document.location.href='{{$module_url}}&tab=import'">Import</span></h2>
					<h2 id="page2" class="tab @if($_GET['tab'] == export) selected @endif"><span onClick="document.location.href='{{$module_url}}&tab=export'">Export</span></h2>
				</div>
        
				<div id="tab-page1" class="tab-page" @if($_GET['tab'] != export) style="display:block;" @else style="display:none;" @endif>


					<form method="POST" action="{{$module_url}}action=import" enctype="multipart/form-data">
			            <input type="file" name="csv">
			            <br/><br/>
			            <input type="submit" class="btn btn-primary" value='импортировать'>
			        </form> 
        			<small>перед импортом рекомендую делать бекап данных что б не было неожиданностей. сделать его можно <a style="color:red"href="index.php?a=93&tab=2" target="main">тут</a></small>
				
				</div> 

				<div id="tab-page2" class="tab-page" @if($_GET['tab'] == export) style="display:block;" @else style="display:none;" @endif >


					<form method="POST" action="{{$module_url}}action=export" enctype="multipart/form-data">
			        
			            <br/><br/>
			            <input type="submit" class="btn btn-primary" value="Экспорт">
			        </form> 
        			
				
				</div> 

				
			</div>
		</div>	
    </body>
  </html>
