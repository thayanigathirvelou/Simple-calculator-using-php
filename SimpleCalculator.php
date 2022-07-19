<style>
    .blinking{
        animation:blinkingText 1.2s infinite;
        background: #9e9e9e99;
    }
    @keyframes blinkingText{
       0%{ color: #ffeb3b;}
       49%{color:#FF5722;}
       60%{color:#429600;}
       99%{color:#e91e1e;}
       100%{color:#FFF;}
    }
   

    
</style>
<body style="background:#9e9e9e99">
<h1 align="center" class="blinking">PHP Calculator</h1>
<form method="post" align="center">
    <input type="text" name="num1" placeholder="enter your number"><br><br>
    <input type="text" name="num2" placeholder="enter your number"><br><br>

    <select name="operation" style="width:170px;">
        <option></option>
        <option value="add">Add</option>
        <option value="sub">Substract</option>
        <option value="multi">Multiply</option>
        <option value="divide">Divide</option>

    </select><br><br>
    <input type="submit" name="sub" style="background:#2196F3; border:0px; padding:3px 9px; color:white;">
</form>


<div align="center" style="background:black; color:white">
    <?php
    if(isset($_POST['sub'])){
        $val1=$_POST['num1'];
        $val2=$_POST['num2'];
        $action=$_POST['operation'];
        switch($action){
            case "add":
            $val=$val1+$val2;
            echo "Add the two number result : ".$val;
			break;
			
			case "sub":
            $val=$val1-$val2;
            echo "Substract the two number result : ".$val;
			break;
			
			case "multi":
            $val=$val1*$val2;
            echo "Multiply the two number result : ".$val;
			break;
			case "divide":
            $val=$val1/$val2;
            echo "Divide the two number result : ".$val;
			break;

        }
    }
	
	
    ?>
    
</div>
</body>
