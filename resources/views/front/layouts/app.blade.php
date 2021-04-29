<!DOCTYPE html>
<html lang="en">
<head>
<title>Big Store</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('front/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('front/styles/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('front/styles/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('front/styles/main_styles.css')}}">

</head>
<body>

<div class="super_container">

	<!-- Header -->

@include('front.partials.header')
<!-- Slider -->
@include('front.partials.slider')
@include('front.partials.heighlight',$about)
@include('front.partials.whyCrowed',$about)
@include('front.partials.benfits')
@include('front.partials.doInvest',$categories)
@include('front.partials.canInvest')
@include('front.partials.featured',[$startups])
@include('front.partials.meetDivers')
@include('front.partials.Testimonials',$about)
@include('front.partials.footer')
</body>
</html>