<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Calculator App</title>
</head>
<body class="bg">
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Addition</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="sub.php">Subtraction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mul.php">Multiplication</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="div.php">Division</a>
          </li>
        </ul>
      </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3"></div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <table class="table dv table-borderless">
                    <tr>
                        <td>Number 1</td>
                        <td><input type="text" class="form-control" placeholder="Enter a number" id="num1"></td>
                    
                    </tr>
                    <tr>
                        <td>Number 2</td>
                        <td><input type="text" class="form-control" placeholder="Enter a number" id="num2"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button onclick="add()" class="btn btn-success btn-lg btn-block" >DIVIDE</button></td>
                    </tr>
                    <tr>
                        <td>Result</td>
                        <td><input type="text" class="form-control " placeholder="Quotient" id="div"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                        <button onClick=clr() type="button" class="btn btn-danger btn-lg btn-block">CLEAR</button></td>
                    </tr>
                    
                </table>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3"></div>
        </div>
    </div>

    <script>
        

      
    function add(){
        // console.log("Surya");
        var getnum1 = parseInt(document.getElementById("num1").value);
            var getnum2 = parseInt(document.getElementById("num2").value);

         
            
            if(Number.isInteger(getnum1 && getnum2)){
              res=getnum1/getnum2
              document.getElementById("div").value=res;
            }
            else{
              alert("Enter a number")
            }
       
    }
    
    function clr() {
            document.getElementById("num1").value=''
            document.getElementById("num2").value=''
            document.getElementById("div").value=''
        }

    </script>
</body>
</html>