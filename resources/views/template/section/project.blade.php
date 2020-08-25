<!-- Projects section start -->
<div class="projects-section pb50">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="section-title">
					<h1>Projects</h1>
				</div>
			</div>
			<div class="col-lg-9">
				{{-- <ul class="projects-filter-nav">
					<li class="btn-filter" data-filter="*">All</li>
					@foreach ($projects as $project)
					<li class="btn-filter" data-filter=".{{$project->project_name}}">{{$project->project_name}}</li>
					@endforeach
				</ul> --}}
			</div>
		</div>
	</div>                      
	<div id="projects-carousel" class="projects-slider">
		@foreach ($projects as $project)
		
		<div class="single-project set-bg {{$project->project_name}}" @foreach ($project->images as $images) @if ($images == reset($project )) First Item: @endif data-setbg="/images/{{$images->file}}" @endforeach>
		
			<div class="project-content">
				<h2>{{$project->project_name}}</h2>
				<p>{{$project->client_name}}</p>
				<a href="{{url('portfolio'.$project->id)}}" class="seemore">See Project </a>
			</div>
		</div>
		@endforeach
		{{-- <div class="single-project set-bg build" data-setbg="{{url('img/projects/2.jpg')}}">
			<div class="project-content">
				<h2>Office <br> Building</h2>
				<p>Jan 19, 2018</p>
				<a href="#" class="seemore">See Project </a>
			</div>
		</div>
		<div class="single-project set-bg apart" data-setbg="{{url('img/projects/3.jpg')}}">
			<div class="project-content">
				<h2>Nice <br> Apartments</h2>
				<p>Jan 19, 2018</p>
				<a href="#" class="seemore">See Project </a>
			</div>
		</div>
		<div class="single-project set-bg rest" data-setbg="{{url('img/projects/4.jpg')}}">
			<div class="project-content">
				<h2>Biggest <br> Restaurations</h2>
				<p>Jan 19, 2018</p>
				<a href="#" class="seemore">See Project </a>
			</div>
		</div>
		<div class="single-project set-bg apart" data-setbg="{{url('img/projects/2.jpg')}}">
			<div class="project-content">
				<h2>Office <br> Building</h2>
				<p>Jan 19, 2018</p>
				<a href="#" class="seemore">See Project </a>
			</div>
		</div> --}}
	</div>
</div>
<!-- Projects section end -->