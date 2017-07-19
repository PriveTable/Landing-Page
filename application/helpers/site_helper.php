<?php
/* **************************************
 * COMMON FUNCTIONS 
 * *************************************
 * AUTHOR : HARI PILLAI
 * CREATE DATE : 21-NOV-2016
 * ************************************* 
 * */ 
 define('ROW_PER_PAGE',20);
 define("MAX_BABY_WEIGHT", 5);
 define("MATURITY_AGE", 12);
	/**
	 * FORMAT DATE AS DMY
	 **/
	function DateFormatYMD($DateString)
	{
		$date="";
		if(!is_null($DateString))
			$date = date("Y-m-d", strtotime($DateString));
		return $date;
	}
	
	/**
	 * FORMAT DATE AS DMY
	 **/
	function DateFormatDMY($DateString)
	{
		$date="";
		if(!is_null($DateString))
			$date = date("d-m-Y", strtotime($DateString));
		return $date;
	}
	/**FORMAT OF FULL MONTH***/
	function DateFormatDMMY($DateString)
	{
		$date="";
		if(!is_null($DateString))
			$date = date("d-F-Y", strtotime($DateString));
		return $date;
	}
	/**
	 * DISPLAY NAVIGATION MENU BASED ON ROLE ID 
	 **/
	function NavMenu($roleId)
	{
		if($roleId==1) // ADMINISTRATOR
		{
			print(' <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed cust-ui-bt" 
      data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
       <span class="sr-only">Toggle navigation</span> 
       <span class="icon-bar"></span> 
       <span class="icon-bar"></span> 
       <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">		
						<li><a href="'.site_url('search').'">Search</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Medical Records
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('birth_medical_record').'">Add New Birth</a></li>
							   <li><a href="'.site_url('view_birth_records').'">List of Birth Records</a></li>
							   <li><a href="'.site_url('death_medical_ctrl').'">Add New Death</a></li>
							  <li><a href="'.site_url('death_hos_view_ctrl').'">List of Death Records</a></li>
							  <li><a href="'.site_url('search_hospital').'">Search</a></li>
							   <li><a href="'.site_url('cbirthmedical/indexMedical').'">Hospital Birth</a></li>
						<li class="dropdown"> 
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Birth Register
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('view_medical').'">List of Medical Records</a></li>
							  <li><a href="'.site_url('birth_fresh').'">Add Birth</a></li>
							  <li><a href="'.site_url('apruval').'">Approval</a></li>
							  <li><a href="'.site_url('adoption_ctrl').'">Add Adoption</a></li>
                              <li><a href="'.site_url('view_adoption').'">List of Adoption Records</a></li> 
                              <li><a href="'.site_url('sddeclaration_ctrl').'">Statutory / Deed Poll</a></li> 
                              <li><a href="'.site_url('lddeclaration_ctrl').'">Legitimate Declaration</a></li> 
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Death Register
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('death_medical_verify').'">List of Medical Records</a></li>
							  <li><a href="'.site_url('apruval_death').'">Approval</a></li>
							 <li><a href="'.site_url('insert_ctrl_homedeath').'">Add Death</a></li>           
          
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Marriage Register
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('insert_ctrl_mariage').'">Add</a></li>
							  <li><a href="'.site_url('apruval_marriage').'">Approval</a></li>          
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Administration
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('registrar').'">Add Registrar</a></li> 
                                                           <li ><a href="'.site_url('create_user').'">Create User</a>     
							  <li ><a href="'.site_url('users_search').'">View Users</a>            
							</ul>
						</li>
						</li>
							<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Access Log
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('birth_access_login').'">Birth Register</a></li>
							  <li><a href="'.site_url('death_access_login').'">Death Register</a></li>         
							  <li><a href="'.site_url('marriage_access_login').'"> Marriage Register</a></li>         
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('payment_rprt_ctrl').'">Payment</a></li>
							  <li><a href="'.site_url('all_report_bydate').'">Report by Date</a></li>         
							  <li><a href="'.site_url('folio_details_ctrl').'">Folio </a></li>  
                              <li><a href="'.site_url('age_report_ctrl').'">Age</a></li>  
                              <li><a href="'.site_url('death_cause_details_ctrl').'">Cause of Death</a></li>  
							</ul>
						</li>
							<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							<li><a href="'.base_url().'/bdm_guide/Administrator.pdf" target="_blank"><span class="glyphicon"></span> Help</a></li>
							  <li><a href="'.site_url('myaccount_ctrl').'"><span class="glyphicon"></span> Change Password</a></li>
                              				<li><a href="'.site_url('login').'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>        
							</ul>
						</li>
					</ul>
					</div>');
		} else if(($roleId==2) || ($roleId==3)) //SUPERVISOR OR MANAGER
		{
			print(' <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed cust-ui-bt" 
      data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
       <span class="sr-only">Toggle navigation</span> 
       <span class="icon-bar"></span> 
       <span class="icon-bar"></span> 
       <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">	
						<li><a href="'.site_url('search').'">Search</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Birth Register
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('view_medical').'">List of Medical Records</a></li>
							  <li><a href="'.site_url('apruval').'">Approval</a></li>
							  <li><a href="'.site_url('adoption_ctrl').'">Add Adoption</a></li>
							   <li><a href="'.site_url('birth_fresh').'">Add new Birth</a></li>
							   <li><a href="'.site_url('view_adoption').'">List of Adoption Records</a></li>    
							   <li><a href="'.site_url('sddeclaration_ctrl').'">Statutory / Deed Poll</a></li>     
							   <li><a href="'.site_url('lddeclaration_ctrl').'">Legitimate Declaration</a></li>   
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Death Register
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('death_medical_verify').'">List of Medical Records</a></li>
							  <li><a href="'.site_url('apruval_death').'">Approval</a></li>
							 <li><a href="'.site_url('insert_ctrl_homedeath').'">Add Death</a></li>           
          
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Marriage Register
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('insert_ctrl_mariage').'">Add</a></li>
							  <li><a href="'.site_url('apruval_marriage').'">Approval</a></li>         
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('payment_rprt_ctrl').'">Payment</a></li>
							  <li><a href="'.site_url('all_report_bydate').'">Report by Date</a></li>          
							  <li><a href="'.site_url('folio_details_ctrl').'">Folio </a></li>  
                              <li><a href="'.site_url('age_report_ctrl').'">Age</a></li>  
                              <li><a href="'.site_url('death_cause_details_ctrl').'">Cause of Death</a></li>                  
							</ul>
						</li>
							<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							<li><a href="'.base_url().'/bdm_guide/Manager.pdf" target="_blank"><span class="glyphicon"></span> Help</a></li>
							  <li><a href="'.site_url('myaccount_ctrl').'"><span class="glyphicon"></span> Change Password</a></li>
                              				<li><a href="'.site_url('login').'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>        
							</ul>
						</li>


					</ul>
					</div>');						
		} else if($roleId==4) //CLERK
		{
			print(' <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed cust-ui-bt" 
      data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
       <span class="sr-only">Toggle navigation</span> 
       <span class="icon-bar"></span> 
       <span class="icon-bar"></span> 
       <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">	
						<li><a href="'.site_url('search').'">Search</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Birth Register
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('view_medical').'">List of Medical Records</a></li>
							  <li><a href="'.site_url('adoption_ctrl').'">Add Adoption</a></li>
							   <li><a href="'.site_url('birth_fresh').'">Add New Birth</a></li> 
							   <li><a href="'.site_url('view_adoption').'">List of Adoption Records</a></li>    
							   <li><a href="'.site_url('sddeclaration_ctrl').'">Statutory / Deed Poll</a></li>   
							   <li><a href="'.site_url('lddeclaration_ctrl').'">Legitimate Declaration</a></li>    
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Death Register
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('death_medical_verify').'">List of Medical Records</a></li>  
							 <li><a href="'.site_url('insert_ctrl_homedeath').'">Add Death</a></li>           
        
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Marriage Register
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('insert_ctrl_mariage').'">Add</a></li>          
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('payment_rprt_ctrl').'">Payment</a></li>
							  <li><a href="'.site_url('all_report_bydate').'">Report by Date</a></li>          
							  <li><a href="'.site_url('folio_details_ctrl').'">Folio </a></li>  
                              <li><a href="'.site_url('age_report_ctrl').'">Age</a></li>  
                              <li><a href="'.site_url('death_cause_details_ctrl').'">Cause of Death</a></li>             
							</ul>
						</li>
							<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							<li><a href="'.base_url().'/bdm_guide/Office_Clerk.pdf" target="_blank"><span class="glyphicon"></span> Help</a></li>
							  <li><a href="'.site_url('myaccount_ctrl').'"><span class="glyphicon"></span> Change Password</a></li>
                              				<li><a href="'.site_url('login').'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>        
							</ul>
						</li>

					</ul>
					</div>');
		} 
		else if($roleId==5) //HOSPITAL CLERK
	{   print(' <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed cust-ui-bt" 
      data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
       <span class="sr-only">Toggle navigation</span> 
       <span class="icon-bar"></span> 
       <span class="icon-bar"></span> 
       <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
							<li><a href="'.site_url('search_hospital').'">Search</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Birth Register
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('birth_medical_record').'">Add Birth Record</a></li>
							  <li><a href="'.site_url('view_birth_records').'">List of Birth Records</a></li>          
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Death Register
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							 <li><a href="'.site_url('death_medical_ctrl').'">Add Death Record</a></li>
							  <li><a href="'.site_url('death_hos_view_ctrl').'">List of Death Records</a></li>          
							</ul>
						</li>
							<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							 <li><a href="'.base_url().'/bdm_guide/Hospital_Clerk.pdf" target="_blank"><span class="glyphicon"></span> Help</a></li>
							  <li><a href="'.site_url('myaccount_ctrl').'"><span class="glyphicon"></span> Change Password</a></li>
                              				<li><a href="'.site_url('login').'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>     
							</ul>
						</li>

					</ul>
					</div>');
	}
else if($roleId==6) // REGISTRAR
		{
			print(' <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed cust-ui-bt" 
      data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
       <span class="sr-only">Toggle navigation</span> 
       <span class="icon-bar"></span> 
       <span class="icon-bar"></span> 
       <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">		
						<li><a href="'.site_url('search').'">Search</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Medical Records
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('birth_medical_record').'">Add New Birth</a></li>
							   <li><a href="'.site_url('view_birth_records').'">List of Birth Records</a></li>
							   <li><a href="'.site_url('death_medical_ctrl').'">Add New Death</a></li>
							  <li><a href="'.site_url('death_hos_view_ctrl').'">List of Death Records</a></li>
							  <li><a href="'.site_url('search_hospital').'">Search</a></li>
						<li class="dropdown"> 
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Birth Register
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('view_medical').'">List of Medical Records</a></li>
							  <li><a href="'.site_url('birth_fresh').'">Add Birth</a></li>
							  <li><a href="'.site_url('apruval').'">Approval</a></li>
							  <li><a href="'.site_url('adoption_ctrl').'">Add Adoption</a></li>
                              <li><a href="'.site_url('view_adoption').'">List of Adoption Records</a></li> 
                              <li><a href="'.site_url('sddeclaration_ctrl').'">Statutory / Deed Poll</a></li> 
                              <li><a href="'.site_url('lddeclaration_ctrl').'">Legitimate Declaration</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Death Register
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('death_medical_verify').'">List of Medical Records</a></li>
							  <li><a href="'.site_url('apruval_death').'">Approval</a></li>
							 <li><a href="'.site_url('insert_ctrl_homedeath').'">Add Death</a></li>           
          
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Marriage Register
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('insert_ctrl_mariage').'">Add</a></li>
							  <li><a href="'.site_url('apruval_marriage').'">Approval</a></li>          
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Administration
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('registrar').'">Add Registrar</a></li> 
                                                           <li ><a href="'.site_url('create_user').'">Create User</a>     
							  <li ><a href="'.site_url('users_search').'">View Users</a>            
							</ul>
						</li>
						</li>
							<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Access Log
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('birth_access_login').'">Birth Register</a></li>
							  <li><a href="'.site_url('death_access_login').'">Death Register</a></li>         
							  <li><a href="'.site_url('marriage_access_login').'"> Marriage Register</a></li>         
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Reports
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('payment_rprt_ctrl').'">Payment</a></li>
							  <li><a href="'.site_url('all_report_bydate').'">Report by Date</a></li>         
							  <li><a href="'.site_url('folio_details_ctrl').'">Folio </a></li>  
                              <li><a href="'.site_url('age_report_ctrl').'">Age</a></li>  
                              <li><a href="'.site_url('death_cause_details_ctrl').'">Cause of Death</a></li>  
							</ul>
						</li>
							<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('myaccount_ctrl').'"><span class="glyphicon"></span> Change Password</a></li>
                              				<li><a href="'.site_url('login').'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>        
							</ul>
						</li>
					</ul>
					</div>');
		}

else if($roleId==7) // Certificate
		{
			print(' <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed cust-ui-bt" 
      data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
       <span class="sr-only">Toggle navigation</span> 
       <span class="icon-bar"></span> 
       <span class="icon-bar"></span> 
       <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">	
						<li><a href="'.site_url('search').'">Search</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('myaccount_ctrl').'"><span class="glyphicon"></span> Change Password</a></li>
                              				<li><a href="'.site_url('login').'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>        
							</ul>
						</li>

					</ul>
					</div>');
		}
		else if($roleId==8) //View
		{
			print(' <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed cust-ui-bt" 
      data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
       <span class="sr-only">Toggle navigation</span> 
       <span class="icon-bar"></span> 
       <span class="icon-bar"></span> 
       <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">	
						<li><a href="'.site_url('search').'">Search</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="'.site_url('myaccount_ctrl').'"><span class="glyphicon"></span> Change Password</a></li>
                              				<li><a href="'.site_url('login').'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>        
							</ul>
						</li>

					</ul>
					</div>');
		}
		/*print('<ul class="nav navbar-nav navbar-right">
					<li><a href="'.site_url('login').'"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
				</ul>');*/
				$ci =& get_instance();
				$user_name=$ci->session->userdata('login_user_id');
				if($user_name !='')
				{
		print('<span id="loginusr">'.getbyusername($user_name).'</span>');
	}
	}

	function getbyusername($dt_id)
{
	
        $ci =& get_instance();
        $ci->load->database();
		$sql = "select * from 	user_credentials where 	USER_ID=$dt_id";
        $q = $ci->db->query($sql);
        $result = $q->result();
        if(count($result)==0)
        {
        	return '';
        }
        else
        {
 			return ucwords(strtolower($result[0]->USER_NAME));
        }
	}
	//fetching data from database wrt folio id...........................
	function getbyfolioid($folio_id)
{
	
       if(isset($folio_id))
		{
			$ci =& get_instance();
			$ci->load->database();
			$sql = "select * from folio_birth_view where folio_id=$folio_id";
			$q = $ci->db->query($sql);
			$result = $q->result();
			if(count($result)==0)
			{
				//echo "NULL";
				 $value[0]= (object)  array(
										'folio_id' => Null, 
										'folio_no' => Null,
										'first_name' => Null, 
										'middle_name' => Null, 
										'last_name' => Null, 
										'birth_date_child' => Null, 
										'gender' => Null,
										'family_name' => Null,
										'address' => Null);
				return $value; 
			}
			else
			{
				return $result;
			}
		}
		else
			{
				 $value[0]= (object)  array(
										'folio_id' => Null, 
										'folio_no' => Null,
										'first_name' => Null, 
										'middle_name' => Null, 
										'last_name' => Null, 
										'birth_date_child' => Null, 
										'gender' => Null,
										'family_name' => Null,
										'address' => Null);
				return $value; 
			}
        
       /* if (in_array(null, $result))
        {
      $value=Array( [0] => stdClass Object(
    		'folio_id' => Null, 
    		'folio_no' => Null,
    		'first_name' => Null, 
    		'middle_name' => Null, 
    		'last_name' => Null, 
    		'birth_date_child' => Null, 
    		'gender' => Null,
    		'family_name' => Null));
    	     return $value; 
    }
    else
    {
     return $result;
    }*/
    
	}
	////update medical record..........................
function medicalupdate($id)
	{ 
      $ci =& get_instance();
      $ci->load->database();
	  $sql = "update birth_medical_record set verification =1 WHERE mr_id =$id";
      $q = $ci->db->query($sql);
     }
     //update death medical record
     function deathmedicalupdate($id)
	{ 
      $ci =& get_instance();
      $ci->load->database();
	  $sql = "update death_medical set verification =1 WHERE MRD_ID ='$id'";
      $q = $ci->db->query($sql);
     }
     ///Find districts...........
function getbydistrictid($dt_id)
{
	
        $ci =& get_instance();
        $ci->load->database();
		$sql = "select * from districts where dist_id=$dt_id";
        $q = $ci->db->query($sql);
        $result = $q->result();
        if(count($result)==0)
        {
        	//echo "NULL";
        	 $value[0]= (object)  array(
						    		'dist_id' => Null, 
						    		'dist_name' => Null);
	     	return $value; 
        }
        else
        {
 			return $result;
        }
}
function getbyhospitalid($ht_id)
{
	
        $ci =& get_instance();
        $ci->load->database();
		$sql = "select * from hospitals where hospital_id=$ht_id";
        $q = $ci->db->query($sql);
        $result = $q->result();
        if(count($result)==0)
        {
        	//echo "NULL";
        	 $value[0]= (object)  array(
						    		'hospital_id' => Null, 
						    		'hospital_name' => Null);
	     	return $value; 
        }
        else
        {
 			return $result;
        }
	}
        /**
	 * GET ROLES
	 **/
	function GetRoles($RoleId)
	{
		if($RoleId !="")
		{
		$ci =& get_instance();
        $ci->load->database();
		$sql = "select * from role_master where ROLE_ID=$RoleId";
        $q = $ci->db->query($sql);
        $result = $q->result();
        if(count($result)==0)
        {
	     	return ''; 
        }
        else
        {
 			return ucwords(strtolower($result[0]->ROLE_NAME));
        }
    }
    else
    {
    return ''; 	
    }
	}
	function getbyuser($dt_id)
{
	
        $ci =& get_instance();
        $ci->load->database();
		$sql = "select * from 	user_credentials where 	USER_ID=$dt_id";
        $q = $ci->db->query($sql);
        $result = $q->result();
        if(count($result)==0)
        {
        	//echo "NULL";
        	 $value[0]= (object)  array(
						    		'USER_ID' => Null, 
						    		'email' => Null,
						    		'USER_NAME' => Null,
						    		'PASSWORD' => Null,
						    		'ROLE_ID' => Null,
						    		'fullname' => Null,
						    		'department' => Null,
						    		'private_email' => Null,
						    		'phone' => Null,
						    		'active' => Null);
	     	return $value; 
        }
        else
        {
 			return $result;
        }
	}
	//***************spouse_finding**********************//
	function getbyfolioidspouse($folio_id)
{
	
        $ci =& get_instance();
        $ci->load->database();
		$sql = "select * from folio_marriage_view where bridegroom_folio_id=$folio_id or groom_folio_id=$folio_id";
        $q = $ci->db->query($sql);
        $result = $q->result();
        if(count($result)==0)
        {
        	//echo "NULL";
        	 $value[0]= (object)  array(
						    		'folio_id' => Null, 
						    		'folio_no' => Null,
						    		'first_name' => Null, 
						    		'middle_name' => Null, 
						    		'last_name' => Null, 
						    		'Reg_no' => Null, 
						    		'marriage_id' => Null,
						    		'bridegroom_folio_id' => Null,
						    		'bg_father_folio_id' => Null,	
						    		'bg_mother_folio_id' => Null,
						    		'groom_folio_id' => Null,
						    		'g_father_folio_id' => Null,
						    		'g_mother_folio_id' => Null,
						    		'tribe' => Null,
						    		'reg_dist' => Null,
						    		'place_of_birth' => Null,
						    		'deceased' => Null,
						    		'gazette_no' => Null);
	     	return $value; 
        }
        else
        {
 			return $result;
        }   
	}
	function randomDigits()
	{   
		$length=5;
		$numbers = range(0,9);
		shuffle($numbers);
		for($i = 0;$i < $length;$i++)
		$digits .= $numbers[$i];
		return $digits;
	}
	function getbyfolioiddied($folio_id)
   {
	
        $ci =& get_instance();
        $ci->load->database();
		$sql = "select * from folio_death_view where folio_id=$folio_id";
        $q = $ci->db->query($sql);
        //$result = $q->result();
       if ($q->num_rows() > 0) 
       {
			return $q->result();
	   } else 
		{
			return false;
		}
	}
	function getbyfolioidmarried($folio_id)
   {
	
        $ci =& get_instance();
        $ci->load->database();
		$sql = "select * from folio_marriage_view where bridegroom_folio_id=$folio_id or groom_folio_id=$folio_id";
        $q = $ci->db->query($sql);
        //$result = $q->result();
       if ($q->num_rows() > 0) 
       {
			return $q->result();
	   } else 
		{
			return false;
		}
	}
	function getbyfolioidmarried_age($folio_id)
   {
	
        $ci =& get_instance();
        $ci->load->database();
		$sql = "select * from folio_marriage_view where bridegroom_folio_id=$folio_id or groom_folio_id=$folio_id order by marriage_id desc limit 1";
        $q = $ci->db->query($sql);
        //$result = $q->result();
       if ($q->num_rows() > 0) 
       {
			return $q->result();
	   } else 
		{
			return false;
		}
	}
	
	function getbyfolioidmarriedparents($bridegroom_folio_id,$groom_folio_id)
   {
	if($bridegroom_folio_id != '' && $groom_folio_id != '')
	{
        $ci =& get_instance();
        $ci->load->database();
		$sql = "select * from folio_marriage_view where bridegroom_folio_id=$bridegroom_folio_id AND groom_folio_id=$groom_folio_id";
        $q = $ci->db->query($sql);
        //$result = $q->result();
       if ($q->num_rows() > 0) 
       {
			return $q->result();
	   } else 
		{
			return false;
		}
	}
	}
	function time_less_12_birth($folio_id)
	{
		$ci =& get_instance();
        $ci->load->database();
		$sql = "select * from paid_details where birth_id=$folio_id order by last_update desc limit 1";
        $q = $ci->db->query($sql);
        $result = $q->result();
        if(count($result)==0)
        {
	     	return ''; 
        }
        else
        {
        	$seconds = strtotime(date("Y/m/d H:i:s")) - strtotime($result[0]->last_update);
            $days    = floor($seconds / 86400);
            $hours   = floor(($seconds - ($days * 86400)) / 3600);
            $minutes = floor(($seconds - ($days * 86400) - ($hours * 3600))/60);
            $seconds = floor(($seconds - ($days * 86400) - ($hours * 3600) - ($minutes*60)));
 			return $hours;
        }
	}
	function time_less_12_death($folio_id)
	{
		$ci =& get_instance();
        $ci->load->database();
		$sql = "select * from paid_details_death where death_id=$folio_id order by last_update desc limit 1";
        $q = $ci->db->query($sql);
        $result = $q->result();
        if(count($result)==0)
        {
	     	return ''; 
        }
        else
        {
        	$seconds = strtotime(date("Y/m/d H:i:s")) - strtotime($result[0]->last_update);
            $days    = floor($seconds / 86400);
            $hours   = floor(($seconds - ($days * 86400)) / 3600);
            $minutes = floor(($seconds - ($days * 86400) - ($hours * 3600))/60);
            $seconds = floor(($seconds - ($days * 86400) - ($hours * 3600) - ($minutes*60)));
 			return $hours;
        }
	}
	function time_less_12_marriage($folio_id)
	{
		$ci =& get_instance();
        $ci->load->database();
		$sql = "select * from paid_details_marriage where marriage_id=$folio_id order by last_update desc limit 1";
        $q = $ci->db->query($sql);
        $result = $q->result();
        if(count($result)==0)
        {
	     	return ''; 
        }
        else
        {
        	$seconds = strtotime(date("Y/m/d H:i:s")) - strtotime($result[0]->last_update);
            $days    = floor($seconds / 86400);
            $hours   = floor(($seconds - ($days * 86400)) / 3600);
            $minutes = floor(($seconds - ($days * 86400) - ($hours * 3600))/60);
            $seconds = floor(($seconds - ($days * 86400) - ($hours * 3600) - ($minutes*60)));
 			return $hours;
        }
	}
	function getbymarriedfolio($id)
   {
	
        $ci =& get_instance();
        $ci->load->database();
		$sql = "select * from folio_marriage_view where marriage_id=$id";
        $q = $ci->db->query($sql);
        $result = $q->result();
        if(count($result)==0)
        {
	     	return ''; 
        }
        else
        {
 			return $result[0]->Reg_no;
        }
	}
function getbydeathfolio($death_id)
   {
        $ci =& get_instance();
        $ci->load->database();
		$sql = "select * from folio_death_view where folio_no='$death_id'";
        $q = $ci->db->query($sql);
        $result = $q->result();
        if(count($result)==0)
        {
	     	return ''; 
        }
        else
        {
 			return $result[0]->deth_reg_no;
        }
	}
function update_occupation($birth_id,$occupation)
{
	$ci =& get_instance();
    $ci->load->database();
    $data=array(
    	'occupation' => $occupation);	
 		 $ci->db->where('folio_id',$birth_id);
         $ci->db->update('folio_details',$data);
}
function update_married_status($Reg_no,$current_status)
{
	$ci =& get_instance();
    $ci->load->database();
    $data=array(
    	'current_status' => $current_status);	
 		 $ci->db->where('Reg_no',$Reg_no);
         $ci->db->update('marriage_data',$data);
}
function update_birthDetails($folid,$arrData)
{
	$ci =& get_instance();
    $ci->load->database();
	$ci->db->where('folio_id',$folid);
	$ci->db->update('birth_data',$arrData);
}

function getAge1($DOB)
{
	if($DOB !='')
	{
    $dateOfBirth = DateFormatYMD($DOB);
	$today = date("Y-m-d");
	$diff = date_diff(date_create($dateOfBirth), date_create($today));
	return $diff->format('%y')." years ".$diff->format('%m')." months ";
    }else
    {
		return '';
	}
}
function getAge_death($DOB,$DOD)
{
	if($DOB !='' && $DOD !='')
	{
    $dateOfBirth = DateFormatYMD($DOB);
	$today = DateFormatYMD($DOD);
	$diff = date_diff(date_create($dateOfBirth), date_create($today));
	return $diff->format('%y')." years ".$diff->format('%m')." months ";
    }else
    {
		return '';
	}
}

//GET FOLIO NO FROM FOLIO ID
function getFolioNo($folio_id)
   {
        $ci =& get_instance();
        $ci->load->database();
		$sql = "select * from folio_details where folio_id='$folio_id'";
        $query = $ci->db->query($sql);
        $result = $query->result();
       	if($query->num_rows() > 0) 
        {
	     	return $result[0]->folio_no; 
        }
        else
        {
 			return false;
        }
	}
	//GRT FOLINO DETAILS
function getFolioNoDetails($folio_id)
   {
        $ci =& get_instance();
        $ci->load->database();
		$sql = "select * from folio_birth_view where folio_id='$folio_id'";
        $query = $ci->db->query($sql);
        $result = $query->result();
       	if($query->num_rows() > 0) 
        {
	     	return $result; 
        }
        else
        {
 			return false;
        }
	}
// GET STATUTORY AND DEED POLL 
function getStatutoryDeclartions($folio_id)
   {	
        $ci =& get_instance();
        $ci->load->database();
		$sql = "select * from statutary_declaration where folio_id=$folio_id order by effect_date desc ";
        $query = $ci->db->query($sql);
        //$result = $q->result();
		if ($query->num_rows() > 0) 
		{	
			$result = $query->result();
			//print_r($result);
			$table = '<table border="1" class="table table-striped table-hover table-responsive table-whit-bg" style="width:100%;border:1px solid #DDDDDD;">
						<tr>
							<th>Last Name</th>
							<th>First Name</th>
							<th>Other Name</th>
							<th align="center">DOB</th>
							<th align="center" style="width:5%;">Statutory Declartion</th>
							<th align="center">Deed Poll</th>
							<th align="center">Date of Reg.</th>
						</tr>';
			foreach($result as $key => $values)
			{
				//echo 'val--'.$values->sd_id;
				$table 	.= 	'<tr>
								<td>'.$values->last_name.'</td>
								<td>'.$values->first_name.'</td>
								<td>'.$values->other_name.'</td>
								<td align="center">'.DateFormatDMY($values->DOB).'</td>
								<td align="center">'.(trim($values->sd_docname)!=''? '<a id="receipt" class=" viewbtn cboxElement" target="_blank" href="'.base_url().'upload_files/deed_pole/'.$values->sd_docname.'"></a>' : "").'</td>
								<td align="center">'.(trim($values->dp_docname)!=''? '<a id="receipt" class=" viewbtn cboxElement" target="_blank" href="'.base_url().'upload_files/deed_pole/'.$values->dp_docname.'"></a>' : "").'</td>
								<td align="center">'.DateFormatDMY($values->effect_date).'</td>
							</tr>';
			}
		   $table 	.= "</table>";
		   
			return $table;
		} 
	   else 
		{
			return false;
		}
	}
// GET STATUTORY AND DEED POLL 
function getLegitimateDeclartions($folio_id)
   {	
        $ci =& get_instance();
        $ci->load->database();
		$sql = "select * from legitimate_declaration where 	ld_child_folioid=$folio_id order by effect_date desc ";
        $query = $ci->db->query($sql);
        //$result = $q->result();
		if ($query->num_rows() > 0) 
		{	
			$result = $query->result();
			//print_r($result);
			$table = '<table border="1" class="table table-striped table-hover table-responsive table-whit-bg" style="width:100%;border:1px solid #DDDDDD;">
						<tr>
							<th>Birth Folio</th>
							<th>Last Name</th>
							<th>First Name</th>
							<th>Other Name</th>
							<th align="center" style="width:5%;">Legitimate Declartion</th>
							<th align="center">Date of Reg.</th>
						</tr>';
			foreach($result as $key => $values)
			{
				$Father_details = getFolioNoDetails($values->ld_father_folioid);
				$table 	.= 	'<tr>
								<td>'.$Father_details[0]->folio_no.'</td>
								<td>'.$Father_details[0]->last_name.'</td>
								<td>'.$Father_details[0]->first_name.'</td>
								<td>'.$Father_details[0]->other_name.'</td>
								<td align="center">'.(trim($values->ld_docname)!=''? '<a id="receipt" class=" viewbtn cboxElement" target="_blank" href="'.base_url().'upload_files/deed_pole/'.$values->ld_docname.'"></a>' : "").'</td>
								<td align="center">'.DateFormatDMY($values->effect_date).'</td>
							</tr>';
			}
		   $table 	.= "</table>";
		   
			return $table;
		} 
	   else 
		{
			return false;
		}
	}	
	//BEGIN CODE ADDED BY HARI ON 20/MAR/2017 
	
	// CHECK MR NO. IS EXIST
	function isExistMRNO($MRNO)
	{
		$ci =& get_instance();
        $ci->load->database();
		$ci->db->select('mr_no');
		$ci->db->from('birth_medical_record');
		$ci->db->where('mr_no', $MRNO);
		$query = $ci->db->get();
		if($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	// CHECK FOLIO NO IS EXIST
	function isExistFolioNo($FolioNo)
	{
		$ci =& get_instance();
        $ci->load->database();
		$ci->db->select('folio_no');
		$ci->db->from('folio_details');
		$ci->db->where('folio_no',$FolioNo);
		$query = $ci->db->get();
		if($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	//CHECK BABY WEIGHT
	function maxBabyWeight($BabyWeight)
	{
		if($BabyWeight> MAX_BABY_WEIGHT)
			return true;
		else 
			return false;
			
	}
	//CHECK AGE DIFFERENCE
	function getAge($fromDate = null,$toDate = null)
	{
		if($fromDate!="" and $toDate!="")
			$Age = date_diff(date_create($toDate), date_create($fromDate))->y;
		return $Age;
	}
	//GET ALL DISTRICTS
	function getAllDistricts()
    {
		$ci =& get_instance();
        $ci->load->database();
		$ci->db->select('*');
		$ci->db->from('districts');
		$query = $ci->db->get();
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}        
    }
    function getAllHospitals()
    {
		$ci =& get_instance();
        $ci->load->database();
		$ci->db->select('*');
		$ci->db->from('hospitals');
		$query = $ci->db->get();
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
    }
	//END CODE ADDED BY HARI ON 20/MAR/2017 
	
?>
