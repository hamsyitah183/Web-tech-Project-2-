<div style="padding-top: 25vmin;" ></div>
    <main>
        <div class="container " >
            <li class="nav-item">
                            <head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.topnav {
  overflow: hidden;
  background-color: #E6F4F1;
  border-radius: 10px;
  padding-left: 20px;
  padding-top:10px;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: center;
  
}

.topnav input[type=text] {
  padding: 10px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width: 650px;
  background-color:#5799B6;
  border-radius: 6px;
  margin-bottom: 10px;
    
  color: #E6F4F1;
}

.topnav input[type=text]::placeholder {
  color: #E6F4F1;
}
.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color:#5799B6;
  font-size: 17px;
  border: none;
  cursor: pointer;
  border-radius: 6px;
}

.topnav .search-container button:hover {
  background: #ccc;
}

tr:hover{
  background-color: #5799B6;
  color:#ddd;
  font-weight: 500;
}
@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>

<body>

<div class="topnav">
  <div class="search-container">
    <form method="post" action = "<?=base_url();?>search">
      <input type="text" placeholder="Search course, subject and lecturer's name" name="search" value = <?php echo set_value('search');?>>
      <button type="submit"><i class="fa fa-search"></i></button>

      <h4>Result</h4>
    <table class = "table"> 

            <?php if($data == 0 || $data2 == 0)
            echo "";
            else { ?>
          
            
            <?php foreach ($data as $d) : ?>

            <tr>
              
              <td><?=$d['courseCode']?></td>
              <td><?=$d['courseName']?></td>
              <td><?=$d['subjectCode']?></td>
              <td><?=$d['subjectName']?></td>
             

            </tr>
            

            <?php endforeach;?>
            <!-- <//?php }?> -->

            <?php foreach ($data2 as $d) : ?>

            <tr>

              <td><?=$d['lecturerName']?></td>
              <td><?=$d['title']?></td>
              <td><?=$d['subjectName']?></td>
              <td><?=$d['subjectCode']?></td>


            </tr>


            <?php endforeach;?>
            <?php }?>
    </table>
    </form>