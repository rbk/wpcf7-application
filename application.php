<fieldset>
	<legend>Basic</legend>	
	<div class="row">
		<div class="re re6">
			<label for="">Position Applying For</label>
			[text position]
		</div>
		<div class="re re6">
			<label for="">Phone Number</label>
			[text* phone]
		</div>
	</div>
	<div class="row">	
		<div class="re re4">
			<label>First Name</label>
			[text* fname]
		</div>
		<div class="re re4">
			<label>Middle Initial</label>
			[text mname]
		</div>
		<div class="re re4">
			<label>Last Name</label>
			[text* lname]
		</div>
	</div>
	<div class="row">
		<div class="re re4">
			<label>Birthday</label>
			[text birthday]
		</div>
		<div class="re re4">
			<label>Desired Pay</label>
			[text required_pay]
		</div>
		<div class="re re4">
			<label>Available Start Date</label>
			[text start]
		</div>
	</div>
	<div class="row">
		<div class="re re12">
			<label>Address 1</label>
			[text address1]
		</div>
		<div class="re re12">
			<label>Address 2</label>
			[text address2]
		</div>
	</div>
	<div class="row">
		<div class="re re4">
			<label>City</label>
			[text city]
		</div>
		<div class="re re4">
			<label>State</label>
			[text state]
		</div>
		<div class="re re4">
			<label for="">Zip Code</label>
			[text zipcode]
		</div>
	</div>
	<div class="row">
		<div class="re6">
			<label for="">Are you a U.S. Citizen?</label>
		</div>
		<div class="re6">
				[radio citizen "Yes" "No"]
		</div>
	</div>
	<div class="row">
		<div class="re6">
			<label for="">Have you ever been convicted of a felony?</label>
		</div>
		<div class="re6">
				[radio felony "Yes" "No"]
		</div>
		<div class="re12">
			<label>If yes, please explain:</label>
			[textarea felony_explanation]
		</div>
	</div>
</fieldset>
<fieldset>
	<legend>Work History</legend>
	<div class="row">
		<div class="re re6">
			<label for="">Company</label>
			[text company1]
		</div>
		<div class="re re6">
			<label for="">Company Phone</label>
			[text company_phone1]
		</div>
	</div>
	<div class="row">
		<div class="re re12">
			<label for="">Position</label>
			[text position1]
		</div>
		<div class="re re12">	
			<label for="">Job Description</label>
			[textarea description1]
		</div>
	</div>
	<div class="row">
		<div class="re re6">
			<label for="">Start Date</label>
			[text start1]
		</div>
		<div class="re re6">
			<label for="">End Date</label>
			[text end1]
		</div>
		<re class="re12">
			<label for="">Reason for leaving</label>
			[textarea reason1]
		</re>
	</div>
	<hr>
		<div class="row">
		<div class="re re6">
			<label for="">Company</label>
			[text company2]
		</div>
		<div class="re re6">
			<label for="">Company Phone</label>
			[text company_phone2]
		</div>
	</div>
	<div class="row">
		<div class="re re12">
			<label for="">Position</label>
			[text position2]
		</div>
		<div class="re re12">	
			<label for="">Job Description</label>
			[textarea description2]
		</div>
	</div>
	<div class="row">
		<div class="re re6">
			<label for="">Start Date</label>
			[text start2]
		</div>
		<div class="re re6">
			<label for="">End Date</label>
			[text end2]
		</div>
		<re class="re12">
			<label for="">Reason for leaving</label>
			[textarea reason2]
		</re>
	</div>
	<div class="row">
		<div class="re6">
			<label for="">May we contact your previous employers?</label>
		</div>
		<div class="re6">
				[radio contact_previous_employers "Yes" "No"]
		</div>
	</div>
	<div class="row">
		<label for="">Summarize any additional information or special skills necessary to describe your full qualifications for the position for which you are applying.</label>
		[textarea summary]
	</div>
</fieldset>
<fieldset>
	<legend>Education</legend>
	<div class="row">
		<div class="re6">
			<label for="">High School</label>
		</div>
		<div class="re6">
			[text high_school]
		</div>
	</div>
	<div class="row">
		<div class="re6">
			<label for="">College</label>
		</div>
		<div class="re6">
			[text college]
		</div>
	</div>
	<div class="row">
		<div class="re6">
			<label for="">Other</label>
		</div>
		<div class="re6">
			[text other_school]
		</div>
	</div>
</fieldset>
<fieldset>
	<legend>References</legend>
	<div class="row">
		<div class="re4">
			<label>Name</label>
		</div>
		<div class="re4">
			<label>Phone Number</label>
		</div>
		<div class="re4">
			<label>Relationship</label>
		</div>
	</div>
	<div class="row">
		<div class="re4">
			[text r1_name]
		</div>
		<div class="re4">
			[text r1_relationship]
		</div>
		<div class="re4">
			[text r1_phone]
		</div>
	</div>
	<div class="row">
		<div class="re4">
			[text r2_name]
		</div>
		<div class="re4">
			[text r2_relationship]
		</div>
		<div class="re4">
			[text r2_phone]
		</div>
	</div>
	<div class="row">
		<div class="re4">
			[text r3_name]
		</div>
		<div class="re4">
			[text r3_relationship]
		</div>
		<div class="re4">
			[text r3_phone]
		</div>
	</div>
	<div class="row">
		<div class="re12">
			<p>I certify that the information provided above is true and complete, to the best of my knowledge. I realize that any misrepresentations in the information so provided (whether intentional or un-intentional) may result in the rejection of my application or, if hired, in my immediate dismissal.</p>
			<p>I authorize Terrazzo USA & Associates, Inc to check all references from current and previous employers and any person listed as a reference on this application that may be relevant to my employment or my ability to perform the jon for which I applied. I authorize the company to verify any information furnished in this application including, but not limited to , criminal history and driving records. I authorize all persons, schools, companies, and law enforcement authorities to release any information concerning my background and employment history that may be relevant to the evaluation of this application and I hereby release any such persons, schools, companies and law enforcement authorities from any liability for damages whatsoever for issuing this information to this company and/or its agents, and hereby release the company for its receipt and use of such information.</p>
			[acceptance acceptance] Yes, I agree.
		</div>
	</div>
	<div class="row">
		<div class="re re12">
			[submit "Submit Application"]
		</div>
	</div>
</fieldset>
