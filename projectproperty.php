<?php require_once('syscon.php'); ?>
<?php
include 'dfconfig.php'; 

if ((isset($_POST["process"])) && ($_POST["process"] == "yes")) {

$protype=check($_POST['protype']);
$ddate = time();

if($protype=="Project Management Software"){$time="Project Management Software 12-18 months";}
else if($protype=="Enterprise Resource Planning (ERP) System"){$time="Enterprise Resource Planning (ERP) System 18-24 months";}
else if($protype=="Financial Software Solution"){$time="Financial Software Solution 6-12 months";}
else if($protype=="Government Systems"){$time="Government Systems 24-36 months";}
else if($protype=="Mobile Application Development"){$time="Mobile Application Development 6-12 months";}
else if($protype=="Web Development Projects"){$time="Web Development Projects 3-9 months";}
else if($protype=="E-commerce Platform"){$time="E-commerce Platform 9-15 months";}
else if($protype=="CRM Systems"){$time="CRM Systems 12-18 months";}


$pfm = mysqli_query($con, "INSERT INTO project_process (protype, date, user, etime)VALUE('$protype', '$ddate', '$email', '$time')");
$nwid = mysqli_insert_id($con);
$ref = $randstr."0".$nwid;
$queryps = mysqli_query($con, "UPDATE project_process SET ref='$ref' WHERE id='$nwid'");
$_SESSION['ref'] = $ref;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Properties - Project Management System</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
</head>
<body>
  <nav>
      <h1>Master Project</h1>
  </nav>
  
  <section class="stepper_container">
    <div class="stepper">
        <div id="step" class="active">1</div>

        <div class="line"></div>

        <div id="step" class="active">2</div>

        <div class="line"></div>

        <div id="step" class="">3</div>

        <div class="line"></div>

        <div id="step" class="">4</div>

        <div class="line"></div>

        <div id="step" class="">5</div>
    </div>
</section>

  <section class="checkbox_form_container">
    <form id="page1Form" onsubmit="return validateSelection(event)" style="gap: 14px;">
        <div id="properties">
            <h1 class="form_header">Project Properties</h1>
            <br><hr><br>
            
            <div class="option1_result">
                <label><input type="checkbox" name="property" value="property1"> Continuous Feedback</label><br>
                <label><input type="checkbox" name="property" value="property2"> Waste Elimination</label><br>
                <label><input type="checkbox" name="property" value="property3"> Iterative and incremental approach</label><br>
                <label><input type="checkbox" name="property" value="property4"> Emphasis on collaboration and customer feedback</label><br>
                <label><input type="checkbox" name="property" value="property5"> Adaptive to changing requirements</label><br>
                <label><input type="checkbox" name="property" value="property6"> Cross-functional teams</label><br>
                <label><input type="checkbox" name="property" value="property7"> Continuous delivery and improvement</label><br>
                <label><input type="checkbox" name="property" value="property8"> Sequential approach with distinct phases (Requirements, Design, Implementation, Testing, Deployment)</label><br>
                <label><input type="checkbox" name="property" value="property9"> Emphasis on documentation</label><br>
                <label><input type="checkbox" name="property" value="property10"> Little flexibility for changes after the initial planning stage</label><br>
                <label><input type="checkbox" name="property" value="property11"> Well-defined deliverables at each phase</label><br>
                <label><input type="checkbox" name="property" value="property12"> Iterative approach with short, time-boxed iterations (sprints)</label><br>
                <label><input type="checkbox" name="property" value="property13"> Employs roles such as Product Owner, Scrum Master, and Development Team</label><br>
                <label><input type="checkbox" name="property" value="property14"> Daily stand-up meetings (daily scrum)</label><br>
                <label><input type="checkbox" name="property" value="property15"> Sprint planning, review, and retrospective meetings</label><br>
                <label><input type="checkbox" name="property" value="property16"> Backlog grooming and prioritization</label><br>
                <label><input type="checkbox" name="property" value="property17"> Focus on eliminating waste and maximizing value</label><br>
                <label><input type="checkbox" name="property" value="property18"> Continuous improvement (Kaizen)</label><br>
                <label><input type="checkbox" name="property" value="property19"> Visual management (e.g., Kanban boards)</label><br>
                <label><input type="checkbox" name="property" value="property20"> Just-in-time delivery</label><br>
                <label><input type="checkbox" name="property" value="property21"> Empowerment of teams</label><br>
                <label><input type="checkbox" name="property" value="property22"> Emphasis on software engineering practices</label><br>
                <label><input type="checkbox" name="property" value="property23"> Frequent releases</label><br>
                <label><input type="checkbox" name="property" value="property24"> Simple design</label><br>
                <label><input type="checkbox" name="property" value="property25"> Continuous integration</label><br>
                <label><input type="checkbox" name="property" value="property26"> Customer involvement throughout the development process</label><br>
                <label><input type="checkbox" name="property" value="property27"> Visual management using Kanban boards</label><br>
                <label><input type="checkbox" name="property" value="property28"> Limiting work in progress (WIP)</label><br>
                <label><input type="checkbox" name="property" value="property29"> Continuous flow of work</label><br>
                <label><input type="checkbox" name="property" value="property30"> Focus on cycle time optimization</label><br>
                <label><input type="checkbox" name="property" value="property31"> Transparency and communication through board visibility</label><br>
                <!-- Add more project properties if needed -->
                <br>
            </div>
            
        </div> 
        <br>
        <div class="formgroup2 double_btn_container">
            <button class="register_form_btn" type="submit">Next</button>
        </div>
    </form>
</section>

<script>
    function validateSelection(event) {
        const selectedProperties = [];
        const checkboxes = document.querySelectorAll('input[name="property"]:checked');

        for (const checkbox of checkboxes) {
            selectedProperties.push(checkbox.value);
        }

        if (selectedProperties.length === 0) {
            alert("Please select at least one property to proceed.");
            event.preventDefault();
        } else {
            storeSelectedProperties(selectedProperties);
            event.preventDefault(); // Prevent default form submission
            window.location.href = "methodology.php";
        }
    }

    function storeSelectedProperties(properties) {
        localStorage.setItem('selectedProperties', JSON.stringify(properties));
    }
</script>




<footer>
    <p>Project By: Okafor Ifeanyi</p>
</footer>

  <style>
    .field{
        margin-top: 54px;
    } 
    .checkbox_form_container{
        width: 100%;
        display: flex;
        justify-content: center;
        margin-top: 54px;
    }
    form{
        width: 918px;
        background: #ffffff;
        padding: 40px 56px 40px 36px;
        border-radius: 15px;
        border: 1px solid #E5E5E5;
    }
    input{
        width: 18PX;
        height: 18PX;
        display: inline;
    }
    label{
        width: 100%;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 16PX;
    }
    hr{
        opacity: 0.2;
    }
    .double_btn_container{
        width: 100%;
        display: flex;
        flex-direction: row;
    }
    .double_btn_container button{
        width: 100%;
    }
    .option1_result{
        height: 500px;
        overflow-y: scroll;
        position: relative;
    }
    .option_container{
        width: 100%;
        display: flex;
        gap: 8px;
        background: #f8f8f8;
        padding: 6px;
        border-radius: 6px;
        box-sizing: border-box;
    }
    .option1{
        width: 100%;
        height: 44px;
        outline: none;
        border: none;
        cursor: pointer;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        border-radius: 4px;
        background: none;
        font-weight: 500;
    }
    
    .active{
        background: #BDBDBD;
        color: #000000;
    }
    .radio_cont{
        display: flex;
        gap: 16px;
    }
    .radio_cont label{
        display: flex;
        flex-direction: row-reverse;
        justify-content: left;
        width: 100%;
        gap: 4px;
        align-items: center;
        height: 46px;
        background: #f8f8f8;
        padding: 0 10px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    }
    .radio_cont label:hover{
        background: #E5E5E5;
    }
    .category{
        padding: 10px;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
        
  </style>

</body>

</html>