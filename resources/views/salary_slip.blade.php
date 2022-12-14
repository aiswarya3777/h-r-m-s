@extends('layout')
@section("content")

    <head>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
                border: 1px solid black;
                margin-top: 60px;
                
            }

            table td {
                line-height: 25px;
                padding-left: 15px;
            }

            table th {
                background-color: #fbc403;
                color: #363636;
            }
            .table2{
                margin-bottom: 60px;
                margin-top: 10px;
            }
            .logo{
                border-radius: 50%;  
            }
            #sp1{
                padding-left: 380px;
                color: white;
            }
        </style>

    </head>

    <body>
        <div class="container">
            <table border="1">
                <tr height="100px"
                    style="background-color:#363636;color:white;font-size:24px; font-weight:600;">
                    
                    <td colspan='4' style="color:white ;"><img src="{{('images/hr.png')}}" width="50px" height="50px"><span id="sp1">Employee Salary Slip</span></td>
                </tr>
                <tr>
                    <th>Personel NO:</th>
                    <td>0123456</td>
                    <th>Name</th>
                    <td>Chandra</td>
                </tr>
                <!-----2 row--->
                <tr>
                    <th>Bank</th>
                    <td>x0x0x0</td>
                    <th>Bank A/c No.</th>
                    <td>0x2x6x25x6</td>
                </tr>
                <!------3 row---->
                <tr>
                    <th>DOB</th>
                    <td>23/02/xxxx</td>
                    <th>Lop Days</th>
                    <td>0</td>
                </tr>
                <!------4 row---->
                <tr>
                    <th>PF No.</th>
                    <td>26123456</td>
                    <th>STD days</th>
                    <td>30</td>
                </tr>
                <!------5 row---->
                <tr>
                    <th>Location</th>
                    <td>India</td>
                    <th>Working Days</th>
                    <td>30</td>
                </tr>
                <!------6 row---->
                <tr>
                    <th>Department</th>
                    <td>IT</td>
                    <th>Designation</th>
                    <td>Designer</td>
                </tr>
            </table>
            <tr></tr>
            <br />
            <table border="1" class="table2">
                <tr>
                    <th>Earnings</th>
                    <th>Amount</th>
                    <th>Deductions</th>
                    <th>Amount</th>
                </tr>
                <tr>
                    <td>Basic</td>
                    <td>29000</td>
                    <td>provident fund</td>
                    <td>1900</td>
                </tr>
                <tr>
                    <td>House Rent Allowance</td>
                    <td>2000</td>
                    <td>professional tax</td>
                    <td>600</td>
                </tr>
                <tr>
                    <td>special Allowance</td>
                    <td>400</td>
                    <td>Income tax</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>conveyance</td>
                    <td>3000</td>
                </tr>
                <tr>
                    <td>ADD Special allowance</td>
                    <td>2000</td>
                </tr>
                <tr>
                    <td>shift Allowance</td>
                    <td>1000</td>
                </tr>
                <tr>
                    <td>bonus</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>medical Allowance</td>
                    <td>600</td>
                </tr>
                <tr>
                    <th>Gross Earnings</th>
                    <td>Rs.38500</td>
                    <th>Gross Deductions</th>
                    <td>Rs.3000</td>
                </tr>
                <tr>
                    <td></td>
                    <td><strong>NET PAY</strong></td>
                    <td>Rs.35500</td>
                    <td></td>
                </tr>
            </table>
        </div>
        
        @endsection