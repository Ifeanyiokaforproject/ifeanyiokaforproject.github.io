<?php require_once('syscon.php'); ?>
<?php
include 'dfconfig.php'; 


$ref = $_SESSION['ref'];

 $result = mysqli_query($con, "SELECT * FROM project_process WHERE ref='$ref'");					  
 $viewam = mysqli_fetch_array($result);
 
 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Time - Project Management System</title>
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

        <div id="step" class="active">3</div>

        <div class="line"></div>

        <div id="step" class="active">4</div>

        <div class="line"></div>

        <div id="step" class="active">5</div>
    </div>
</section>

  <section class="checkbox_form_container">
    <form id="page1Form" action="softwareproject.php" style="gap: 14px;">
        <h1 class="form_header">Estimated Time Range</h1>

        <hr><br><br>
<center>
        <div id="completionTimee">Completion time for <?php echo $viewam["etime"];?></div>
        </center>
        <br><br>

        <div class="formgroup2 double_btn_container">
            <button class="register_form_btn" type="submit">Restart</button>
        </div>
    </form>
</section>

   
    <script>
	
		
		
        window.onload = function() {
            var myButtons = document.querySelectorAll(".myButton");
            var selectedButton = null;
            var completionTimes = {
                "Project Management Software": "Project Management Software 12-18 months",
                "Enterprise Resource Planning (ERP) System": "Enterprise Resource Planning (ERP) System 18-24 months",
                "Financial Software Solution": "Financial Software Solution 6-12 months",
                "Government Systems": "Government Systems 24-36 months",
                "Mobile Application Development": "Mobile Application Development 6-12 months",
                "Web Development Projects": "Web Development Projects 3-9 months",
                "E-commerce Platform": "E-commerce Platform 9-15 months",
                "CRM Systems": "CRM Systems 12-18 months"
            };

            console.log("myButtons length:", myButtons.length); // Check number of buttons found

            myButtons.forEach(function(button, index) {
                button.addEventListener("click", function() {
                    console.log("Button clicked:", button.textContent); // Check if button click event is being triggered
                    if (selectedButton !== null) {
                        myButtons[selectedButton].style.backgroundColor = "#f8f8f8"; // Reset previous button color
                    }
                    selectedButton = index;
                    this.style.backgroundColor = "#bdbdbd";
                    // Store selected button's text and index in local storage
                    var buttonText = this.textContent.trim();
                    localStorage.setItem('selectedButton', JSON.stringify({ buttonText: buttonText, index: index }));
                    // Store selected button's completion time in local storage
                    localStorage.setItem('completionTime', JSON.stringify(completionTimes[buttonText]));
                });
            });

            var form = document.getElementById("softwareProjectForm");
            form.addEventListener("submit", function(event) {
                if (selectedButton === null) {
                    event.preventDefault(); // Prevent the form from submitting
                    alert("No software project was selected. Please select one before proceeding.");
                }
            });
			
			


        }
   
           

				  // Retrieve completion time from local storage
        var completionTime = JSON.parse(localStorage.getItem('completionTime'));
        if (completionTime) {
		document.getElementById('completionTimee').textContent = "Completion time for " + completionTime;
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
    .hidden{
        height: 600px;
        overflow-y: scroll;
        position: relative;
    }
  </style>

</body>
 </html>