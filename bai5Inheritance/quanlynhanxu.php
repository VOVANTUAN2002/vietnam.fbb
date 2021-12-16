<?php
class EmployeeManager {
    public $Employees = [];
    public function addNew()//hiển thị thêm mới
    {
        // echo 123 ;
        $objEmployee            = new Employee();
        $objEmployee->FirstName = "vo";
        $objEmployee->Lastname  = "tuan";
        $objEmployee->Birthday  = '18';
        $objEmployee->Address   = "dia chi";
        $objEmployee->Position  = "giam d2";
        $this->Employees[]      = $objEmployee;
    }
    public function dell($id)// xóa một nhân sự
    {
        
    }
}
class Employee {
    public $FirstName = "";
    public $Lastname  = "";
    public $Birthday  = "";
    public $Address   = "";
    public $Position  = "";

    public function index()//hiển thị danh sách
    {

    }
   
    public function show()//hiển thị danh sách chi tiết 
    {
        
    }
    
    public function fix()//chỉnh sửa thông tin nhân sự
    {
       
    }
}
// khởi tạo 1 đối tương Employee
$objEmployee            = new Employee();
$objEmployee->FirstName = "vo";
$objEmployee->Lastname  = "tuan";
$objEmployee->Birthday  = '18';
$objEmployee->Address   = "dia chi";
$objEmployee->Position  = "giam doc";
// $objEmployee->addNew($Employee);
$Employees              = [];// là một biến = cái mảng
echo "<pre>";
print_r($Employees);
echo "</pre>";//hiển thị mảng $Employees ở dòng 39
$Employees[]            = $objEmployee;// push :thêm mới một giá trị vào một cái mảng ;dòng 40 là một hành động push $objEmployee vào $Employees
echo "<pre>";
print_r($Employees);
echo "</pre>";//hiển thị mảng $Employees ở dòng 43
// $objEmployee->addNew($Employees);
echo "<pre>";
print_r($Employees);
echo "</pre>";//hiển thị mảng $Employees ở dòng 53;
$objEmployeeManager = new EmployeeManager();
$objEmployeeManager->addNew();// phương thức này có nghĩa là push vào cái mảng 
$objEmployeeManager->addNew();// phương thức này có nghĩa là push vào cái mảng 
$objEmployeeManager->addNew();// phương thức này có nghĩa là push vào cái mảng 
$objEmployeeManager->addNew();// phương thức này có nghĩa là push vào cái mảng 

$objEmployeeManager->dell(1);// xóa phần có vị trí là số 1
echo "<pre>";
print_r($objEmployeeManager->Employees);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>nhận sự</h1>
     <button  >thêm nhân sự</button>
    <table border="1px">

        <tr>
            <td>STT</td>
            <td>FirstName</td>
            <td>Lastname</td>
            <td>Birthday</td>
            <td>Address</td>
            <td>Position</td>
            
        </tr>
        <?php //hiển thị danh sách bằng vòng lặp foreach ?>
        <?php foreach($objEmployeeManager->Employees as $key => $Employee): //chạy cái mảng $Employees có cái key là [0] có các obj là  $Employee ?>
        <tr>
            <td><?= $key+1 ?></td>
            <td><?= $Employee->FirstName ?></td>
            <td><?= $Employee->Lastname ?></td>
            <td><?= $Employee->Birthday ?></td>
            <td><?= $Employee->Address ?></td>
            <td><?= $Employee->Position ?></td>
       
        </tr>
        <?php endforeach;  ?>
    </table>
</body>
</html>
