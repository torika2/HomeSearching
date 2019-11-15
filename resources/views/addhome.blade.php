<!DOCTYPE html>
<html>
<head>
	<title>Add Home Post</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		body{
			background: black;	
			color:white;
		}
	</style>
<form method="POST" action="{{ route('addHome') }}">
	@csrf
		<div class="form-group">
			 <label for="formGroupExampleInput">House Address</label>
			 <input name="address" type="text" class="form-control" id="formGroupExampleInput" placeholder="For example freeman st.">
		</div>
		<div class="form-group">
			 <label for="formGroupExampleInput2">m<sup>2</sup></label>
			 <input name="meter" type="number" class="form-control" min="15" id="formGroupExampleInput2" placeholder="Input meter">
		</div>
		<div class="form-group">
			 <label for="formGroupExampleInput2">Cost of house</label>
			 <input name="money" type="number" class="form-control" id="formGroupExampleInput2" placeholder="100000$">
		</div>
		<div class="form-group">
			<label for="exampleFormControlSelect2">Number of rooms</label>
			<div class="form-check form-check-inline">
			  <input name="rooms" class="form-check-input" type="radio" id="inlineRadio1" value="1">
			  <label class="form-check-label" for="inlineRadio1">1</label>
			</div>
			<div class="form-check form-check-inline">
			  <input name="rooms"	 class="form-check-input" type="radio" id="inlineRadio2" value="2">
			  <label class="form-check-label" for="inlineRadio2">2</label>
			</div>
			<div class="form-check form-check-inline">
			  <input name="rooms"	 class="form-check-input" type="radio"  id="inlineRadio2" value="3">
			  <label class="form-check-label" for="inlineRadio2">3</label>
			</div>
			<div class="form-check form-check-inline">
			  <input name="rooms"	 class="form-check-input" type="radio"  id="inlineRadio2" value="4">
			  <label class="form-check-label" for="inlineRadio2">4</label>
				</div>
							<div class="form-check form-check-inline">
			  <input name="rooms"	 class="form-check-input" type="radio"  id="inlineRadio2" value="5">
			  <label class="form-check-label" for="inlineRadio2">5</label>
				</div>
		 </div>
		  	<div class="form-group">
			    <label for="formGroupExampleInput">Description</label>
			    <input name="desc" type="textarea" class="form-control" id="formGroupExampleInput" placeholder="For example freeman st.">
			  </div>
{{-- 			  <div class="custom-file">
			  	<label class="file-label" for="validatedCustomFile">Choose file...</label>
		    	<input type="file" class="file-input" id="validatedCustomFile" disabled>
		    
		    	<div class="invalid-feedback">Example invalid custom file feedback</div>
		  </div> --}}
		  <div class="form-group">
		  	<label>Hood</label>
		  	<select style="color:black;" class="form-control" name="select">
                <option value="ვაკე">ვაკე</option>
                <option value="საბურთალო">საბურთალო</option>
                <option value="დიდუბე">დიდუბე</option>
                <option value="ბაგები">ბაგები</option>
            </select>
		  </div>
		  <br>
		  <div class="form-group">
		  	<label>Central heating :</label>
		  	<input type="checkbox" name="centrGatboba" value="1">
		  </div>
			  <div class="form-group">
			  	<button type="submit" class="btn btn-primary" style="width:100%;">Insert Information</button>
			  </div>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>