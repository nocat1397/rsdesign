<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.layouts.layout')
    <style type="text/css">
        .h2_size {
            font-size: 50px;
        }
        #more1 {display: none;}
        #more2 {display: none;}
        #more3 {display: none;}
        #more4 {display: none;}
        #more5 {display: none;}
        #more6 {display: none;}
        @media only screen and (max-width: 600px) {
        .h2_size {
            font-size: 35px !important;
        }
        }
    </style>
</head>
<body>
	
	
	@include('template.content.header')  


	@include('template.section.hero')

    @include('template.section.intro')
	
    @include('template.section.service')
	
    @include('template.section.cta')

    @include('template.section.milestones')

    @include('template.section.project')
	
    @include('template.section.client')

	


	
    @include('template.content.footer')

    @include('template.layouts.script')

	
</body>
</html>