@foreach($sheet->rol->especializations AS $especialization)
	<div class="row row-{{$especialization->id}} mt-3 trait disabled" style="background-image: url({{ asset($especialization->image) }})">
		<div class="pasives-description">
			@foreach($especialization->pasives AS $pasive)
				<div class="pasive-description pasive-description-{{$pasive->id}} pasive-{{$especialization->id}}-{{$pasive->id}}">
					<div><b>{{$pasive->name}}</b></div>
					<div>{{$pasive->description}}</div>
				</div>
			@endforeach
		</div>
		<div class="title">
			<input type="checkbox" id="especialization{{$especialization->id}}" name="{{$especialization->id}}-1" value="{{$especialization->id}}">
			<label for="especialization{{$especialization->id}}">{{$especialization->name}}</label><br>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2 column column-3">
			<div class="mt-2">
			</div>
			<div class="mt-2 pasive" id="pasive-{{$especialization->id}}-{{$especialization->pasives[0]->id}}">
				<div class="radio">
					<input type="radio" id="{{$especialization->pasives[0]->id}}" name="{{$especialization->pasives[0]->name}}" value="{{$especialization->pasives[0]->id}}">
				</div>
				<div class="label">
					<label for="{{$especialization->pasives[0]->id}}">{{$especialization->pasives[0]->name}}</label>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2 column column-2">
			<div class="mt-2 pasive" id="pasive-{{$especialization->id}}-{{$especialization->pasives[1]->id}}">
				<div class="radio">
					<input type="radio" id="{{$especialization->pasives[1]->id}}" name="{{$especialization->id}}-2" value="{{$especialization->pasives[1]->id}}">
				</div>
				<div class="label">
					<label for="{{$especialization->pasives[1]->id}}">{{$especialization->pasives[1]->name}}</label>
				</div>
			</div>
			<div class="mt-2 pasive" id="pasive-{{$especialization->id}}-{{$especialization->pasives[2]->id}}">
				<div class="radio">
					<input type="radio" id="{{$especialization->pasives[2]->id}}" name="{{$especialization->id}}-2" value="{{$especialization->pasives[2]->id}}">
				</div>
				<div class="label">
					<label for="{{$especialization->pasives[2]->id}}">{{$especialization->pasives[2]->name}}</label>
				</div>
			</div>
			<div class="mt-2 pasive" id="pasive-{{$especialization->id}}-{{$especialization->pasives[3]->id}}">
				<div class="radio">
					<input type="radio" id="{{$especialization->pasives[3]->id}}" name="{{$especialization->id}}-2" value="{{$especialization->pasives[3]->id}}">
				</div>
				<div class="label">
					<label for="{{$especialization->pasives[3]->id}}">{{$especialization->pasives[3]->name}}</label>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2 column column-3">
			<div class="mt-2">
			</div>
			<div class="mt-2 pasive" id="pasive-{{$especialization->id}}-{{$especialization->pasives[4]->id}}">
				<div class="radio">
					<input type="radio" id="{{$especialization->pasives[4]->id}}" name="{{$especialization->id}}-3" value="{{$especialization->pasives[4]->id}}">
				</div>
				<div class="label">
					<label for="{{$especialization->pasives[4]->id}}">{{$especialization->pasives[4]->name}}</label>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2 column column-4">
			<div class="mt-2 pasive" id="pasive-{{$especialization->id}}-{{$especialization->pasives[5]->id}}">
				<div class="radio">
					<input type="radio" id="{{$especialization->pasives[5]->id}}" name="{{$especialization->id}}-4" value="{{$especialization->pasives[5]->id}}">
				</div>
				<div class="label">
					<label for="{{$especialization->pasives[5]->id}}">{{$especialization->pasives[5]->name}}</label>
				</div>
			</div>
			<div class="mt-2 pasive" id="pasive-{{$especialization->id}}-{{$especialization->pasives[6]->id}}">
				<div class="radio">
					<input type="radio" id="{{$especialization->pasives[6]->id}}" name="{{$especialization->id}}-4" value="{{$especialization->pasives[6]->id}}">
				</div>
				<div class="label">
					<label for="{{$especialization->pasives[6]->id}}">{{$especialization->pasives[6]->name}}</label>
				</div>
			</div>
			<div class="mt-2 pasive" id="pasive-{{$especialization->id}}-{{$especialization->pasives[7]->id}}">
				<div class="radio">
					<input type="radio" id="{{$especialization->pasives[7]->id}}" name="{{$especialization->id}}-4" value="{{$especialization->pasives[7]->id}}">
				</div>
				<div class="label">
					<label for="{{$especialization->pasives[7]->id}}">{{$especialization->pasives[7]->name}}</label>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2 column column-5">
			<div class="mt-2">
			</div>
			<div class="mt-2 pasive" id="pasive-{{$especialization->id}}-{{$especialization->pasives[8]->id}}">
				<div class="radio">
					<input type="radio" id="{{$especialization->pasives[8]->id}}" name="{{$especialization->id}}-5" value="{{$especialization->pasives[8]->id}}">
				</div>
				<div class="label">
					<label for="{{$especialization->pasives[8]->id}}">{{$especialization->pasives[8]->name}}</label>
				</div>
			</div>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2 column column-6">
			<div class="mt-2 pasive" id="pasive-{{$especialization->id}}-{{$especialization->pasives[9]->id}}">
				<div class="radio">
					<input type="radio" id="{{$especialization->pasives[9]->id}}" name="{{$especialization->id}}-6" value="{{$especialization->pasives[9]->id}}">
				</div>
				<div class="label">
					<label for="{{$especialization->pasives[9]->id}}">{{$especialization->pasives[9]->name}}</label>
				</div>
			</div>
			<div class="mt-2 pasive" id="pasive-{{$especialization->id}}-{{$especialization->pasives[10]->id}}">
				<div class="radio">
					<input type="radio" id="{{$especialization->pasives[10]->id}}" name="{{$especialization->id}}-6" value="{{$especialization->pasives[10]->id}}">
				</div>
				<div class="label">
					<label for="{{$especialization->pasives[10]->id}}">{{$especialization->pasives[10]->name}}</label>
				</div>
			</div>
			<div class="mt-2 pasive" id="pasive-{{$especialization->id}}-{{$especialization->pasives[11]->id}}">
				<div class="radio">
					<input type="radio" id="{{$especialization->pasives[11]->id}}" name="{{$especialization->id}}-6" value="{{$especialization->pasives[11]->id}}">
				</div>
				<div class="label">
					<label for="{{$especialization->pasives[11]->id}}">{{$especialization->pasives[11]->name}}</label><br>
				</div>
			</div>
		</div>
	</div>
@endforeach