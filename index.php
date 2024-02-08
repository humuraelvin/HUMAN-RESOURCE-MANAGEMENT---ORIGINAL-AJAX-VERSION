

<?php

session_start();

if (!isset($_SESSION['username'])) {
   header("location:login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - DASH_BOARD</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,400&display=swap" rel="stylesheet">

    

    <style>

:root {
            --clr-primary: #7380ec;
            --clr-danger: #ff7782;
            --clr-success: #41f1b6;
            --clr-white: #fff;
            --clr-info-dark: #7d8da1;
            --clr-info-light: #dce1eb;
            --clr-dark: #363949;
            --clr-warning: #ff4edc; /* Corrected variable name */
            --clr-light: rgba(132, 139, 200, 0.18);
            --clr-primary-variant: #111e88;
            --clr-dark-variant: #677483;
            --clr-color-background: #f6f6f9;

            --card-border-radius: 2rem;
            --border-radius-1: 0.4rem;
            --border-radius-2: 0.8rem;
            --border-radius-3: 1.2rem;

            --card-padding: 1.8rem;
            --padding-1: 1.2rem;
            --box-shadow: 0 2rem 3rem var(--clr-light);
        }

        body {
            font-family: 'Poppins', sans-serif;
            width: 100%;
            height: 100%;
            font-size: 0.88rem;
            user-select: none;
            overflow-x: hidden;
            background-color: var(--clr-color-background);
            display: grid;
            width: 100vw;
            gap: 3rem;
            grid-template-columns: 300px auto 400px;
            font-weight: bold;
        }

        a {
            text-decoration: none;
            color: var(--clr-dark);
        }

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
            border: 0;
            text-decoration: none;
            list-style: none;
            appearance: none;
            font-weight: bolder;
}


        h1{
            font-weight: 800rem;
            font-size: 1.8rem;
            font-weight: bold;
        }

        h2{
            font-size: 1.4rem;
            font-weight: bold;
        }
        h3{
            font-size: 0.87rem;
            font-weight: bold;
        }
          h4{
            font-size: 0.8;
            font-weight: bold;
          }

          h5{
            font-size: 0.77rem;
            font-weight: bold;
          }
        
        small{
            font-size: 0.75rem;
            font-weight: bold;
        }  

        .profile-photo img{
            width: 9.3rem;
            height: 8rem;
            border-radius: 50%;
            overflow: hidden;
        }

        .profile-photo2{
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            overflow: hidden;
        }

        .text-muted{
            color: var(--clr-info-dark);
        }

        p{
            color: var(--clr-dark-variant);
        }
        b{
            color: var(--clr-dark);
        }
        .primary{
            color: var(--clr-primary);
        }

        .success{
            color: var(--clr-success);
        }
        .danger{
            color: var(--clr-danger);
        }

        .warning{
            color: var(--clr-warning);
        }

        aside .top{
            background-color: var(--clr-white);
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 1.4rem;
        }
        aside .logo{
            display: flex;
            gap: 1rem;
        }

        aside .top div .close{
            display: none;
            
        }

        aside .sidebar{
            background-color: var(--clr-white);
            display: flex;
            flex-direction: column;
            height: 85vh;
            position: relative;
            top: 1rem;
        }

        aside h3{
            font-weight: 400;
        }

        aside .sidebar a{
            
            display: flex;
            color: var(--clr-info-dark);
            margin-left: 2rem;
            gap: 1rem;
            align-items: center;
            height: 3.2rem;
            transition: all .1s ease-in;
        }

        aside .sidebar a span{
            font-size: 1.6rem;
            transition: all .1s ease-in;
        }

        aside .sidebar a:last-child{
            position: absolute;
            bottom: 1rem;
            width: 100%;
        }

        aside .sidebar a.active{
            background: var(--clr-light);
            color: var(--clr-primary);
            margin-left: 0;
            border-left: 5px solid var(--clr-primary);
        }
          
        aside .sidebar a.active::before{
            content: '';
            width: 6px;
            height: 100%;
            background-color: var(--clr-primary);
        }

        aside .sidebar a:hover{
            color: var(--clr-primary);
        }

        aside .sidebar a:hover span{
            margin-left: 1rem;
            transition: .4s ease;
        }

        aside .sidebar a span.msg_count{
            background: var(--clr-danger);
            color: var(--clr-white);  
            padding: 2px 5px;  
            font-size: 11px;
            border-radius: var(--border-radius-1);
        }

        
        main{
            margin-top: 1.4rem;
            width: auto;
        }

        main input{
            background-color: transparent;
            border: 0;
            outline: 0;
            color: var(--clr-dark);
        }

        main .date{
            display: inline-block;
            background-color: var(--clr-white);
            border-radius: var(--border-radius-1);
            margin-top: 1rem;
            padding: 0.5em 1.6em;
        }
        main .insights{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.6rem;
        }

        main .insights>div{
            background-color: var(--clr-white);
            padding: var(--card-padding);
            border-radius: var(--card-border-radius);
            margin-top: 1rem;
            box-shadow: var(--box-shadow);
            transition: all .3s ease;
        }

        main .insights > div:hover{

            box-shadow: none;

        }

        main .insights > div span{

            background: coral;
            padding: 0.5rem;
            border-radius:50%;
            color: var(--clr-white);
            font-size: 2rem;

        }
         
        main .insights > div.expenses span{
            background: var(--clr-danger);
        }

        main .insights > div.income span{
            background: var(--clr-success);
        }

        main .insights > div .middle{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        main .insights > div .middle h1{

            font-size: 1.6rem;
        }

        main .insights h1{
                color: var(--clr-dark);
        }

        main .insights h3{
                color: var(--clr-dark);
        }

        main .insights p{
                color: var(--clr-dark);
        }

        main .insights .progres{
                position: relative;
                height: 68px;
                width: 68px;
                border-radius: 50px;
        }

        main .insights svg{
            height: 150px;
            position: absolute;
            top: 0;
        }

        main .insights svg circle{
            fill: none;
            stroke: var(--clr-primary);
            transform: rotate(270, 80,80);
            stroke-width: 5;
        }

        main .insights .sales svg circle{
            stroke-dashoffset: 10;
            stroke-dasharray: 150;
        }

        main .insights .expenses svg circle{
            stroke-dashoffset: 0;
            stroke-dasharray: 150;
        }

        main .insights .income svg circle{
            stroke: var(--clr-success);
        }

        main .insights .progres .number{
            position: absolute;
            top: 5%;
            left: 5%;
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center; 
              
        }

        main .recent_order table{
            background-color: var(--clr-white);
            width: 100%;
            border-radius: var(--card-border-radius);
            padding: var(--card-border-radius);
            text-align: center;
            box-shadow: var(--box-shadow);
            transition: all .3s ease;
            color: var(--clr-dark);    
        }

        main .recent_order table:hover{
                height: 3.8rem;
                border-bottom: 1px solid var(--clr-white);
                color: var(--clr-dark-variant);
        }

        main table tbody td{

            height: 3.8rem;
            border-bottom: 1px solid var(--clr-dark);

        }

        main table tbody tr:last-child td{
            border: none;
        }

        main .recent_order a{
            text-align: center;
            display: block;
            margin: 1rem;
        }

        .right{
            margin-top: 1.4rem;
        }

        .right h2{
            color: var(--clr-dark);
        }

        .right .top{
            display: flex;
            justify-content: start;
            gap: 2rem;
        }

        .right .top button{

            display: none;

        }

        .right .theme-toggler {
            background-color: var(--clr-white);
         
            display: flex;
            justify-content: space-between;
            height: 1.6rem;
            width: 4.2rem;
            cursor: pointer;
            border-radius: var(--border-radius-1);
        }

        .right .theme-toggler span{
            font-size: 1.2rem;
            width: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .right .theme-toggler span.active{
    
            background-color: var(--clr-primary);
            color: #fff;

        }
 
        .right .top .profile{

            display: flex;
            gap: 2rem;
            text-align: center;

        }  
        
        .right .info h3{
            color: var(--clr-dark);
        }

        .right .item h3{
            color: var(--clr-dark);
        }

        .right .recent_updated{
            margin-top: 1rem;
            margin-left: -20px;
        }   

        .right .recent_updated .updates{
            background-color: var(--clr-white);
            padding: var(--card-padding);
            border-radius: var(--card-border-radius);
            box-shadow: var(--box-shadow);
            transition: all .3s ease;
        }

        .right .recent_updated .updates:hover{
            box-shadow: none;
        }

        .right .recent_updated .updates{
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .right .sales_analytics{
            margin-top: 2rem;
        }

        .right .sales_analytics .item{
            background-color: var(--clr-white);
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1;
            margin: 10px 0;
            width: 100%;
            margin-bottom: 0.8rem;
            padding: 1.4rem var(--card-padding);
            border-radius: var(--border-radius-3);
            box-shadow: var(--box-shadow);
        }

        .right .sales_analytics .item:hover{
            box-shadow: none;
        }

        .right .sales_analytics .item .icon{
            background: coral;
            padding: 0.6rem;
            color: var(--clr-white);
            border-radius: 50%;
            height: 50px;
            width: 50px;
            line-height: 50px;
            align-items: center;
        }

        .right .sales_analytics .item:nth-child(3) .icon{
            background-color: var(--clr-success);
        }

        .right .sales_analytics .item:nth-child(4) .icon{
            background-color: var(--clr-danger);
        }

        .add_products div{
            display: flex;
            height: 60px;
            width: 100%;
            text-align: center;
            justify-content: center;
            align-items: center;
            border: 2px dashed;
            color: var(--clr-dark-variant);
            margin-bottom: 40px;
        }
       


    </style>
    
</head>
<body>
   
        <aside class="sidebar"> 
            <div class="top">
                <div class="logo">
                    <h1 >H.E <span style="color: red;">BARBAR</span></h1>
                </div>

                <div class="close">
                    <span class="material-symbols-sharp">close</span>
                </div>
            </div>
                 
            <div class="sidebar">
                <a href="#" style="text-decoration: none;">
                    <span class="material-symbols-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                   
                
                <a href="#"  class="active" style="text-decoration: none;">
                    <span class="material-symbols-sharp" >person_outline</span>
                    <h3>Customers</h3  style="text-decoration: none;" >
                </a>
                
                <a href="#"  style="text-decoration: none;">
                    <span class="material-symbols-sharp">insights</span>
                    <h3>Analytics</h3>
                </a>
                
                <a href="myapplicants.php"  style="text-decoration: none;">
                    <span class="material-symbols-sharp">mail_outline</span>
                    <h3>JOB APPLICANTS</h3>
                </a>
                
                <a href="#"  style="text-decoration: none;">
                    <span class="material-symbols-sharp">receipt_long</span>
                    <h3>Products</h3>
                </a>
                
                <a href="#"  style="text-decoration: none;">
                    <span class="material-symbols-sharp">report_gmailerrorred</span>
                    <h3>Reports</h3>
                </a>
                
                <a href="#"  style="text-decoration: none;">
                    <span class="material-symbols-sharp">settings</span>
                    <h3>Settings</h3>
                </a>
                  
                <a href="employees.php"  style="text-decoration: none;">
                    <span class="material-symbols-sharp">add</span>
                    <h3>RECRUITMENT DATA</h3>
                </a>
                  
                <a href="./logout.php"  style="text-decoration: none;">
                    <span class="material-symbols-sharp">logout</span>
                    <h3>logout</h3>
                </a>
            </div>

        </aside>


        <main>
            
                <h1>HUMURA! WELCOME TO YOUR ADMIN DASHBOARD</h1>  
            <br><br>
                <div class="date">
                    <input type="date">
                </div>

                <br><br><br><br>

                <div class="insights">


                    <div class="sales">
                        <span class="material-symbols-sharp">trending_up</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Sales</h3>
                                <h3>$35,876</h3>
                            </div>
                            <div class="progress">
                            
                            </div>
                            <div class="progres">
                                <svg>
                                    <circle r="30" cy="40" cx="40"></circle>
                                </svg>
                                <div class="number">
                                    80%
                                </div>
                            </div>
                        </div>

                        <small>Last 24 Hours</small>
                    </div>

                    <div class="expenses">
                        <span class="material-symbols-sharp">local_mall</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Expenses</h3>
                                <h3>$35,876</h3>
                            </div>
                            <div class="progress">
                            
                            </div>
                            <div class="progres">
                                <svg>
                                    <circle r="30" cy="40" cx="40"></circle>
                                </svg>
                                <div class="number">
                                    80%
                                </div>
                            </div>
                        </div>

                        <small>Last 24 Hours</small>
                    </div>


                    <div class="income">
                        <span class="material-symbols-sharp">stacked_line_chart</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Income</h3>
                                <h3>$35,876</h3>
                            </div>
                            <div class="progress">
                            
                            </div>
                            <div class="progres">
                                <svg>
                                    <circle r="30" cy="40" cx="40"></circle>
                                </svg>
                                <div class="number">
                                    80%
                                </div>
                            </div>
                        </div>

                        <small>Last 24 Hours</small>
                    </div>


                </div>
                   <br><br><br><br><br><br><br><br>

                <div class="recent_order">
                    <h1 style="font-size: 50px;">Recent Orders</h1>
                    <table>
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Product Number</th>
                                <th>Payements</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Mini USB</td>
                                <td>456</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>

                            <tr>
                                <td>Mini USB</td>
                                <td>456</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>

                            <tr>
                                <td>Mini USB</td>
                                <td>456</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>

                            <tr>
                                <td>Mini USB</td>
                                <td>456</td>
                                <td>Due</td>
                                <td class="warning">Pending</td>
                                <td class="primary">Details</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <br><br>

                <a href="OfficialWebsite.php" class="btn btn-primary">Go To The Home Website</a>

        </main>

        <div class="right">
           
            <div class="top">
                <button id="menu_bar">
                      <span class="material-symbols-sharp">menu</span>
                </button>

                <div class="theme-toggler">
                    <span class="material-symbols-sharp active">light_mode</span>
                    <span class="material-symbols-sharp">dark_mode</span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>HUMURA_ENT</p>
                        <p>Admin</p>
                        <small class="textmuted"></small>
                    </div>
                    <div class="profile-photo">
                        <img src="images/images/he.jpg" alt="">
                    </div>
                </div>

            </div>

            <div class="recent_updated">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="profile-photo2">
                        <img src="images/images/profile-2.jpg" alt="">
                    </div>
                    <div class="message">
                        <p> Received His Order</p>
                    </div>
                </div>

                <div class="updates">
                    <div class="profile-photo2">
                        <img src="images/images/profile-4.jpg" alt="">
                    </div>
                    <div class="message">
                        <p>Received His Order</p>
                    </div>
                </div>

                <div class="updates">
                    <div class="profile-photo2">
                        <img src="images/images/profile-3.jpg" alt="">
                    </div>
                    <div class="message">
                        <p>Received His Order</p>
                    </div>
                </div>

            </div>


            <div class="sales_analytics">
                <h2>Sales Analytics</h2>



                <div class="item_onlion">
                    <div class="icon">
                        <span class="material-symbols-sharp">shopping_cart</span>
                    </div>
                    <div class="right_text">
                        <div class="info">
                            <h3>Onlion orders</h3>
                            <small class="text-muted">
                                Last Seen 2 Hours ago
                            </small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3>3849</h3>
                    </div>
                </div>


                <div class="item_onlion">
                    <div class="icon">
                        <span class="material-symbols-sharp">shopping_cart</span>
                    </div>
                    <div class="right_text">
                        <div class="info">
                            <h3>Onlion orders</h3>
                            <small class="text-muted">
                                Last Seen 2 Hours ago
                            </small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3>3849</h3>
                    </div>
                </div>


                <div class="item_onlion">
                    <div class="icon">
                        <span class="material-symbols-sharp">shopping_cart</span>
                    </div>
                    <div class="right_text">
                        <div class="info">
                            <h3>Onlion orders</h3>
                            <small class="text-muted">
                                Last Seen 2 Hours ago
                            </small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3>3849</h3>
                    </div>
                </div>




            </div>

            <div class="item add_products">

                <div>
                    <span class="material-symbols-sharp">add</span>
                </div>

            </div>

        </div>



    <script src="./script.js"></script>
</body>
</html>