<?php
	if(isset($_POST["submit"]))
	{
		echo "<br/><br/>";
		$age = 0;
		
		
		$enrolment = $_POST["enrollment"];
		echo "Enrollment no.: $enrolment <br/>";

		$name = $_POST["stdname"];
		echo "Student name : $name <br/>";

		$sem = $_POST["semester"];
		echo "Semester : $sem <br/>";

		$branch = $_POST["branch"];
		echo "Branch : $branch <br/>";

		$gender = $_POST["gender"];
		echo "Gender : $gender <br/>";

		$bdate = $_POST["bdate"];
		echo "Birthdate : $bdate <br/>";

		$today = date("Y-m-d");
		echo "Today is : $today <br/>";

		$age =abs((int)$today-(int)$bdate);
		echo "Age(in years) : $age <br/>";

		$phone = $_POST["phone"];
		echo "Mobile no. : $phone <br/>";

		$email = $_POST["email"];
		echo "Email address : $email <br/>";

		$address = $_POST["address"];
		echo "Address : $address <br/>";

		class AgeException extends Exception
		{
		    public function error()
		    {
		        $error = $this->getMessage();
		        return 'Error :'.$error;
		    }
		}
		
		try
        	{

		    if($age<17)

		    {
		        throw new AgeException("The applicant is underage. The minimum age should be 17 years. ");
		    }

		    else

		    {
		        $query = "insert into Student_info values('$enrolment', '$name', '$sem', '$branch', '$gender', '$bdate', '$age', '$phone', '$email', '$address')";
		        echo "$query";
		    }
        	}

        	catch(AgeException $e)
        	{
		    echo $e->error()."<br/>";
        	}
		

	}

?>

