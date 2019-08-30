<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		 <meta charset="utf-8">
 		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 		 <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="{{ asset('/css/app.css') }}" rel="stylesheet"> 
		<title>Submission Form</title>
	</head>

	<body>

	<section>
	 <div class="container">
		{{ Form::open(array('action' => 'SubmissionController@store', 'method' => 'POST','id' => 'frm1')) }}
		<div class="d-flex justify-content-center">	


		<div class="accordion w-75 p-3" id="accordionExample">
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		@if(session('message'))
			<div class="alert alert-success">
		  		{{session('message')}}
		 	</div>
		@endif

		  <div class="card card-one">
		    <div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          Step 1: Your details
		        </button>
		      </h5>
		    </div>

		    <div id="collapseOne" class="collapse show collapse-body" aria-labelledby="headingOne" data-parent="#accordionExample">
		      <div class="card-body">
		      		<div class="row"> 
		     		 <div class="col-md-4">	
		     		 	<div class="form-group">
		     			{{ Form::label('fname', 'First Name')}}
		     			{{ Form::text('fname','',['class' => 'form-control', 'required' => 'true' ]) }}
		     			 <span class="help-firstname js-error">
			            
		     			</div>
		     		 </div>
		     		 <div class="col-md-4">	
		     			{{ Form::label('lname', 'Surname')}}
		     			{{ Form::text('lname','',['class' => 'form-control']) }}
		     			<span class="help-lastname js-error">
		     		 </div>
		     		</div>
		     		<div class="row"> 
		     		 <div class="col-md-4">	
		     			{{ Form::label('email', 'Email Address')}}
		     			{{ Form::email('email','',['class' => 'form-control']) }}
		     			<span class="help-email js-error">
		     		 </div>
		     		 </div>
		     		<div class="row">
		     			<div class="col-md-12">
		     			<div class="float-right"><button type="button" class="btn btn-primary btn-next" id="btnstep1">Next </button></div>
		     			</div>
		     		</div>
		      </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="headingTwo">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" id="btnheadstep2">
		          Step 2: More comments
		        </button>
		      </h5>
		    </div>
		    <div id="collapseTwo" class="collapse collapse-body" aria-labelledby="headingTwo" data-parent="#accordionExample">
		      <div class="card-body">
		        	<div class="row"> 
		     		 <div class="col-md-4">	
		     		 	<div class="form-group">
		     			{{ Form::label('telnumber', 'Telephone Number')}}
		     			{{ Form::text('telnumber','',['class' => 'form-control']) }}
		     			<span class="help-telnumber js-error">
		     			</div>
		     		 </div>
		     		 <div class="col-md-4">	
		     			{{ Form::label('gender', 'Gender')}}
		     			{{ Form::select('gender', array('0' => 'Select Gender', 'M' => 'Male', 'F' => 'Female', 'N/A' => 'Prefer not to say'), null,  ['class' => 'form-control']) }}
		     			<span class="help-gender js-error">
		     		 </div>
		     		</div>
		     		<div class="row"> 
		     		 <div class="col-md-6">	
		     			{{ Form::label('dob', 'Date of Birth')}}
		     			<div class="row">
		     			<div class="col-md-3">	
		     			{{ Form::text('date','',['class' => 'form-control','id' => 'date']) }}
		     			</div>
		     			<div class="col-md-3">	
		     			{{ Form::text('month','',['class' => 'form-control','id' => 'month']) }}
		     			</div>
		     			<div class="col-md-3">	
		     			{{ Form::text('year','',['class' => 'form-control','id' => 'year']) }}
		     			{{ Form::hidden('dob')}}
		     			</div>
		     		</div>
		     		<span class="help-dob js-error">
		     		 </div>
		     	</div>
		     	<div class="row">
		     			<div class="col-md-12">
		     			<div class="float-right"><button type="button" class="btn btn-primary btn-next" id="btnstep2">Next </button></div>
		     			</div>
		     		</div>
		      </div>
		    </div>
		  </div>
		  <div class="card card-three">
		    <div class="card-header" id="headingThree">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" type="button" id="btnheadstep3">
		          Step 3: Final comments
		        </button>
		      </h5>
		    </div>
		    <div id="collapseThree" class="collapse collapse-body" aria-labelledby="headingThree" data-parent="#accordionExample">
		      <div class="card-body">
		      	<div class="row"> 
		     		 <div class="col-md-6">	
				        {{ Form::label('finalcomment', 'Comments')}}
		    			{{ Form::textarea('finalcomment','',['class' => 'form-control']) }}
    				</div>
    				  
    			</div>
    				<div class="row">
		     			<div class="col-md-12">
		     			<div class="float-right">
		     				{!! Form::submit('Next',['class' => 'btn btn-primary btn-next']) !!}
		     			</div>
		     			</div>
		     		</div>
		      </div>
		    </div>
		  </div>
		</div>
		</div>
		{{ Form::close() }}
		</div>
		</section>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		 <script src="{{ asset('/js/app.js') }}"></script>
		 <script>

		 $(document).ready(function () {	
		$( "#btnstep1, #btnheadstep2" ).click(function() {

   				  var fname = $( "#fname" ).val();
				  var lname = $( "#lname" ).val();
				  var email = $( "#email" ).val();
				  validatefirst(fname, lname, email); 

			});

		 	 
		 	$( "#btnstep2, #btnheadstep3" ).click(function() {

   				  var telnumber = $( "#telnumber" ).val();
				  var gender = $( "#gender" ).val();
				  var date = $( "#date" ).val();
				  var month = $( "#month" ).val();
				  var year = $( "#year" ).val();

				  var dob = date + "/" + month + "/" + year;


				  validatesecond(telnumber, gender, dob); 

			});

		  

		 //Function to validate firstname lastname and email
  		  function validatefirst(fname, lname, email){
  		  		 $('.help-firstname').text("");
		 		 $('.help-lastname').text("");
		 		 $('.help-email').text("");

  		  	 var error = 0;
				  if(fname == "")
				  {
				  	error = 1; 
				  	$('.help-firstname').text("Your first name is required");
				  }
				 
				  if(lname == "")
				  {
				  	error += 1;
				  	$('.help-lastname').text("Your last name is required");
				  }
				 
				  if( !validateEmail(email)) {  
				    error += 1;
				  	$('.help-email').text("Please enter a valid email address");
				  }
				 
				  if( error == 0 )
                  {
                  	$('#collapseTwo').collapse('show');
                  }
  		  }

  		  //Validate the second set
  		    function validatesecond(telnumber, gender, dob){
  		  		 $('.help-telnumber').text("");
		 		 $('.help-gender').text("");
		 		 $('.help-dob').text("");

  		  		 var errors = 0;
			 
				  if( !validatePhone(telnumber)) {  
				    errors += 1;
				  	$('.help-telnumber').text("Please enter a valid UK phone number");
				  }	

				  if(gender == '0')
				  {
				  	errors += 1;
				  	$('.help-gender').text("Please select the gender");
				  }

				 if( !validateDob(dob)) {  
				    errors += 1;
				  	$('.help-dob').text("Your DOB should be in dd/mm/yyyy eg: 21/12/1991");
				  }	
				  else{
				  		$('#dob').val(dob);
				  }	
				  

				  if( errors == 0 )
                  {
                  	$('#collapseThree').collapse('show');
                  }
  		  }

  		  //Function to Validate the email
  		   function validateEmail(email) {
			  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			  return ( email.length > 0 && emailReg.test(email))
			}

    	//Validate Phone
    	 function validatePhone(phone){
    	 	   var phoneReg = /^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$/;
			  return ( phone.length > 0 && phoneReg.test(phone))
    	 }

    	 //Validate DOB
    	 function validateDob(dob){

    	 	 var dobReg = /^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/;
    	 	 return ( dob.length > 0 && dobReg.test(dob))
    	 }

	});
</script>
	</body>
</html>